<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $apiKey = env('GEMINI_API_KEY');
        
        try {
            $response = Http::timeout(30)->post(
                "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}", 
                [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $request->message]
                            ]
                        ]
                    ]
                ]
            );

            // Log response untuk debugging
            Log::info('Gemini Response:', $response->json());

            if (!$response->successful()) {
                return response()->json([
                    'error' => 'API Error: ' . $response->body()
                ], $response->status());
            }

            $data = $response->json();
            
            // Cek berbagai kemungkinan struktur response
            $text = null;
            
            if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                $text = $data['candidates'][0]['content']['parts'][0]['text'];
            } elseif (isset($data['text'])) {
                $text = $data['text'];
            } elseif (isset($data['response'])) {
                $text = $data['response'];
            }
            
            if (!$text) {
                // Jika masih null, return seluruh response untuk debugging
                return response()->json([
                    'error' => 'Unexpected response structure',
                    'debug' => $data
                ], 500);
            }
            
            return response()->json([
                'text' => $text
            ]);
            
        } catch (\Exception $e) {
            Log::error('Gemini Error:', ['message' => $e->getMessage()]);
            
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
