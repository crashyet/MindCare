@extends('app')

@section('title', 'Dashboard')

@section('content')

    <div class="min-h-screen bg-background">

        <!-- <x-header-admin></x-header-admin> -->
        <x-sidebar></x-sidebar>
        <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
            <div class="p-4 md:p-8">
                <div class="space-y-8">
                    <div>
                        <h1 class="text-3xl font-bold text-foreground">Dashboard Admin</h1>
                        <p class="text-muted-foreground">Selamat datang di panel admin MindCare</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft hover-scale">
                            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                                <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Total Pengguna</h3><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users w-5 h-5 text-primary">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-3xl font-bold text-foreground">{{ $totalUsers }}</div>
                                <p class="text-xs text-muted-foreground mt-1">Pengguna terdaftar</p>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft hover-scale">
                            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                                <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Total Artikel</h3><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-book-open w-5 h-5 text-accent">
                                    <path d="M12 7v14"></path>
                                    <path
                                        d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                    </path>
                                </svg>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-3xl font-bold text-foreground">{{ $totalArticles }}</div>
                                <p class="text-xs text-muted-foreground mt-1">Artikel diterbitkan</p>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft hover-scale">
                            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                                <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Total Diskusi</h3><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-message-square w-5 h-5 text-secondary">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-3xl font-bold text-foreground">2</div>
                                <p class="text-xs text-muted-foreground mt-1">Diskusi forum</p>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft hover-scale">
                            <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                                <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Total Tes</h3><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clipboard-list w-5 h-5 text-tertiary">
                                    <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                    </path>
                                    <path d="M12 11h4"></path>
                                    <path d="M12 16h4"></path>
                                    <path d="M8 11h.01"></path>
                                    <path d="M8 16h.01"></path>
                                </svg>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="text-3xl font-bold text-foreground">{{ $totalTests }}</div>
                                <p class="text-xs text-muted-foreground mt-1">Tes mental health</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight">Aktivitas Pengguna Mingguan
                                </h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="recharts-responsive-container"
                                    style="width: 100%; height: 300px; min-width: 0px;">
                                    <div class="recharts-wrapper"
                                        style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 300px; max-width: 805px;">
                                        <svg class="recharts-surface" width="805" height="300" viewBox="0 0 805 300"
                                            style="width: 100%; height: 100%;">
                                            <title></title>
                                            <desc></desc>
                                            <defs>
                                                <clipPath id="recharts1-clip">
                                                    <rect x="65" y="5" height="260" width="735"></rect>
                                                </clipPath>
                                            </defs>
                                            <g class="recharts-cartesian-grid">
                                                <g class="recharts-cartesian-grid-horizontal">
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                        width="735" height="260" x1="65" y1="265"
                                                        x2="800" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="200" x2="800" y2="200"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="135" x2="800" y2="135"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="70" x2="800" y2="70"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="5" x2="800" y2="5"></line>
                                                </g>
                                                <g class="recharts-cartesian-grid-vertical">
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="117.5"
                                                        y1="5" x2="117.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="222.5"
                                                        y1="5" x2="222.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="327.5"
                                                        y1="5" x2="327.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="432.5"
                                                        y1="5" x2="432.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="537.5"
                                                        y1="5" x2="537.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="642.5"
                                                        y1="5" x2="642.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="747.5"
                                                        y1="5" x2="747.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="5" x2="65" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="800"
                                                        y1="5" x2="800" y2="265"></line>
                                                </g>
                                            </g>
                                            <g class="recharts-layer recharts-cartesian-axis recharts-xAxis xAxis">
                                                <line orientation="bottom" width="735" height="30" x="65" y="265"
                                                    class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                    x1="65" y1="265" x2="800" y2="265"></line>
                                                <g class="recharts-cartesian-axis-ticks">
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="117.5" y1="271"
                                                            x2="117.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="117.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="117.5" dy="0.71em">Sen</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="222.5" y1="271"
                                                            x2="222.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="222.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="222.5" dy="0.71em">Sel</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="327.5" y1="271"
                                                            x2="327.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="327.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="327.5" dy="0.71em">Rab</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="432.5" y1="271"
                                                            x2="432.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="432.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="432.5" dy="0.71em">Kam</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="537.5" y1="271"
                                                            x2="537.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="537.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="537.5" dy="0.71em">Jum</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="642.5" y1="271"
                                                            x2="642.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="642.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="642.5" dy="0.71em">Sab</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="747.5" y1="271"
                                                            x2="747.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="747.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="747.5" dy="0.71em">Min</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="recharts-layer recharts-cartesian-axis recharts-yAxis yAxis">
                                                <line orientation="left" width="60" height="260" x="5" y="5"
                                                    class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                    x1="65" y1="5" x2="65" y2="265"></line>
                                                <g class="recharts-cartesian-axis-ticks">
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="265" x2="65"
                                                            y2="265"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="265"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">0</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="200" x2="65"
                                                            y2="200"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="200"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">8</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="135" x2="65"
                                                            y2="135"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="135"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">16</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="70" x2="65"
                                                            y2="70"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="70"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">24</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="5" x2="65"
                                                            y2="5"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="12"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">32</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="recharts-layer recharts-bar">
                                                <g class="recharts-layer recharts-bar-rectangles">
                                                    <g class="recharts-layer">
                                                        <g class="recharts-layer recharts-bar-rectangle">
                                                            <path x="75.5" y="167.5" width="84" height="97.5"
                                                                radius="0" fill="hsl(var(--primary))" name="Sen"
                                                                class="recharts-rectangle"
                                                                d="M 75.5,167.5 h 84 v 97.5 h -84 Z"></path>
                                                        </g>
                                                        <g class="recharts-layer recharts-bar-rectangle">
                                                            <path x="180.5" y="110.625" width="84" height="154.375"
                                                                radius="0" fill="hsl(var(--primary))" name="Sel"
                                                                class="recharts-rectangle"
                                                                d="M 180.5,110.625 h 84 v 154.375 h -84 Z"></path>
                                                        </g>
                                                        <g class="recharts-layer recharts-bar-rectangle">
                                                            <path x="285.5" y="143.125" width="84" height="121.875"
                                                                radius="0" fill="hsl(var(--primary))" name="Rab"
                                                                class="recharts-rectangle"
                                                                d="M 285.5,143.125 h 84 v 121.875 h -84 Z"></path>
                                                        </g>
                                                        <g class="recharts-layer recharts-bar-rectangle">
                                                            <path x="390.5" y="61.875" width="84" height="203.125"
                                                                radius="0" fill="hsl(var(--primary))" name="Kam"
                                                                class="recharts-rectangle"
                                                                d="M 390.5,61.875 h 84 v 203.125 h -84 Z"></path>
                                                        </g>
                                                        <g class="recharts-layer recharts-bar-rectangle">
                                                            <path x="495.5" y="86.25" width="84" height="178.75"
                                                                radius="0" fill="hsl(var(--primary))" name="Jum"
                                                                class="recharts-rectangle"
                                                                d="M 495.5,86.25 h 84 v 178.75 h -84 Z"></path>
                                                        </g>
                                                        <g class="recharts-layer recharts-bar-rectangle">
                                                            <path x="600.5" y="21.25" width="84" height="243.75"
                                                                radius="0" fill="hsl(var(--primary))" name="Sab"
                                                                class="recharts-rectangle"
                                                                d="M 600.5,21.25 h 84 v 243.75 h -84 Z"></path>
                                                        </g>
                                                        <g class="recharts-layer recharts-bar-rectangle">
                                                            <path x="705.5" y="118.75" width="84" height="146.25"
                                                                radius="0" fill="hsl(var(--primary))" name="Min"
                                                                class="recharts-rectangle"
                                                                d="M 705.5,118.75 h 84 v 146.25 h -84 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g class="recharts-layer"></g>
                                            </g>
                                        </svg>
                                        <div tabindex="-1"
                                            class="recharts-tooltip-wrapper recharts-tooltip-wrapper-right recharts-tooltip-wrapper-bottom"
                                            style="visibility: hidden; pointer-events: none; position: absolute; top: 0px; left: 0px; transform: translate(547.5px, 22.003px);">
                                            <div class="recharts-default-tooltip"
                                                style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;">
                                                <p class="recharts-tooltip-label" style="margin: 0px;">Jum</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                            <div class="flex flex-col space-y-1.5 p-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tight">Publikasi Artikel</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <div class="recharts-responsive-container"
                                    style="width: 100%; height: 300px; min-width: 0px;">
                                    <div class="recharts-wrapper"
                                        style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 300px; max-width: 805px;">
                                        <svg class="recharts-surface" width="805" height="300"
                                            viewBox="0 0 805 300" style="width: 100%; height: 100%;">
                                            <title></title>
                                            <desc></desc>
                                            <defs>
                                                <clipPath id="recharts4-clip">
                                                    <rect x="65" y="5" height="260" width="735"></rect>
                                                </clipPath>
                                            </defs>
                                            <g class="recharts-cartesian-grid">
                                                <g class="recharts-cartesian-grid-horizontal">
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="265" x2="800" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="200" x2="800" y2="200"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="135" x2="800" y2="135"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="70" x2="800" y2="70"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="5" x2="800" y2="5"></line>
                                                </g>
                                                <g class="recharts-cartesian-grid-vertical">
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="65"
                                                        y1="5" x2="65" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="187.5"
                                                        y1="5" x2="187.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="310"
                                                        y1="5" x2="310" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="432.5"
                                                        y1="5" x2="432.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="555"
                                                        y1="5" x2="555" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="677.5"
                                                        y1="5" x2="677.5" y2="265"></line>
                                                    <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65"
                                                        y="5" width="735" height="260" x1="800"
                                                        y1="5" x2="800" y2="265"></line>
                                                </g>
                                            </g>
                                            <g class="recharts-layer recharts-cartesian-axis recharts-xAxis xAxis">
                                                <line orientation="bottom" width="735" height="30" x="65" y="265"
                                                    class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                    x1="65" y1="265" x2="800" y2="265"></line>
                                                <g class="recharts-cartesian-axis-ticks">
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="65" y1="271"
                                                            x2="65" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="65" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="65" dy="0.71em">Sen</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="187.5" y1="271"
                                                            x2="187.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="187.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="187.5" dy="0.71em">Sel</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="310" y1="271"
                                                            x2="310" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="310" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="310" dy="0.71em">Rab</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="432.5" y1="271"
                                                            x2="432.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="432.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="432.5" dy="0.71em">Kam</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="555" y1="271"
                                                            x2="555" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="555" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="555" dy="0.71em">Jum</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="677.5" y1="271"
                                                            x2="677.5" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="677.5" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="677.5" dy="0.71em">Sab</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="bottom" width="735" height="30" x="65"
                                                            y="265" class="recharts-cartesian-axis-tick-line"
                                                            stroke="#666" fill="none" x1="800" y1="271"
                                                            x2="800" y2="265"></line><text
                                                            orientation="bottom" width="735" height="30"
                                                            stroke="none" x="791.1062498092651" y="273"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="middle" fill="#666">
                                                            <tspan x="791.1062498092651" dy="0.71em">Min</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="recharts-layer recharts-cartesian-axis recharts-yAxis yAxis">
                                                <line orientation="left" width="60" height="260" x="5" y="5"
                                                    class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                    x1="65" y1="5" x2="65" y2="265"></line>
                                                <g class="recharts-cartesian-axis-ticks">
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="265" x2="65"
                                                            y2="265"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="265"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">0</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="200" x2="65"
                                                            y2="200"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="200"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">3</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="135" x2="65"
                                                            y2="135"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="135"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">6</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="70" x2="65"
                                                            y2="70"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="70"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">9</tspan>
                                                        </text>
                                                    </g>
                                                    <g class="recharts-layer recharts-cartesian-axis-tick">
                                                        <line orientation="left" width="60" height="260" x="5"
                                                            y="5" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                            fill="none" x1="59" y1="5" x2="65"
                                                            y2="5"></line><text orientation="left" width="60"
                                                            height="260" stroke="none" x="57" y="12"
                                                            class="recharts-text recharts-cartesian-axis-tick-value"
                                                            text-anchor="end" fill="#666">
                                                            <tspan x="57" dy="0.355em">12</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="recharts-layer recharts-line">
                                                <path stroke="hsl(var(--accent))" stroke-width="2" fill="none"
                                                    width="735" height="260"
                                                    class="recharts-curve recharts-line-curve"
                                                    d="M65,156.667C105.833,124.167,146.667,91.667,187.5,91.667C228.333,91.667,269.167,135,310,135C350.833,135,391.667,48.333,432.5,48.333C473.333,48.333,514.167,70,555,70C595.833,70,636.667,5,677.5,5C718.333,5,759.167,59.167,800,113.333">
                                                </path>
                                                <g class="recharts-layer"></g>
                                                <g class="recharts-layer recharts-line-dots">
                                                    <circle r="3" stroke="hsl(var(--accent))" stroke-width="2"
                                                        fill="#fff" width="735" height="260" cx="65"
                                                        cy="156.66666666666666" class="recharts-dot recharts-line-dot">
                                                    </circle>
                                                    <circle r="3" stroke="hsl(var(--accent))" stroke-width="2"
                                                        fill="#fff" width="735" height="260" cx="187.5"
                                                        cy="91.66666666666667" class="recharts-dot recharts-line-dot">
                                                    </circle>
                                                    <circle r="3" stroke="hsl(var(--accent))" stroke-width="2"
                                                        fill="#fff" width="735" height="260" cx="310"
                                                        cy="135" class="recharts-dot recharts-line-dot"></circle>
                                                    <circle r="3" stroke="hsl(var(--accent))" stroke-width="2"
                                                        fill="#fff" width="735" height="260" cx="432.5"
                                                        cy="48.33333333333332" class="recharts-dot recharts-line-dot">
                                                    </circle>
                                                    <circle r="3" stroke="hsl(var(--accent))" stroke-width="2"
                                                        fill="#fff" width="735" height="260" cx="555"
                                                        cy="70" class="recharts-dot recharts-line-dot"></circle>
                                                    <circle r="3" stroke="hsl(var(--accent))" stroke-width="2"
                                                        fill="#fff" width="735" height="260" cx="677.5"
                                                        cy="5" class="recharts-dot recharts-line-dot"></circle>
                                                    <circle r="3" stroke="hsl(var(--accent))" stroke-width="2"
                                                        fill="#fff" width="735" height="260" cx="800"
                                                        cy="113.33333333333333" class="recharts-dot recharts-line-dot">
                                                    </circle>
                                                </g>
                                            </g>
                                        </svg>
                                        <div tabindex="-1"
                                            class="recharts-tooltip-wrapper recharts-tooltip-wrapper-right recharts-tooltip-wrapper-bottom"
                                            style="visibility: hidden; pointer-events: none; position: absolute; top: 0px; left: 0px; transform: translate(75px, 10px);">
                                            <div class="recharts-default-tooltip"
                                                style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;">
                                                <p class="recharts-tooltip-label" style="margin: 0px;">Sen</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
