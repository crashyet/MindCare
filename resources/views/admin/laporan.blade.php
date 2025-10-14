@extends('app')

@section('title', 'Laporan dan Statistik')

@section('content')

    <x-sidebar></x-sidebar>
    <main class="lg:ml-64 min-h-screen pt-16 lg:pt-0">
        <div class="p-4 md:p-8">
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl font-bold text-foreground">Laporan &amp; Statistik</h1>
                    <p class="text-muted-foreground">Analisis performa platform</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                            <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Pertumbuhan Pengguna</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trending-up w-5 h-5 text-green-500">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                <polyline points="16 7 22 7 22 13"></polyline>
                            </svg>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-2xl font-bold text-foreground">+28%</div>
                            <p class="text-xs text-muted-foreground mt-1">Dibanding bulan lalu</p>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                            <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Engagement Rate</h3><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-activity w-5 h-5 text-blue-500">
                                <path
                                    d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                </path>
                            </svg>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-2xl font-bold text-foreground">76%</div>
                            <p class="text-xs text-muted-foreground mt-1">Pengguna aktif harian</p>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                            <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Completion Rate</h3><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-trending-down w-5 h-5 text-orange-500">
                                <polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline>
                                <polyline points="16 17 22 17 22 11"></polyline>
                            </svg>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-2xl font-bold text-foreground">82%</div>
                            <p class="text-xs text-muted-foreground mt-1">Tes diselesaikan</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Pertumbuhan Pengguna</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="recharts-responsive-container" style="width: 100%; height: 300px; min-width: 0px;">
                                <div class="recharts-wrapper"
                                    style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 300px; max-width: 805px;">
                                    <svg class="recharts-surface" width="805" height="300" viewBox="0 0 805 300"
                                        style="width: 100%; height: 100%;">
                                        <title></title>
                                        <desc></desc>
                                        <defs>
                                            <clipPath id="recharts11-clip">
                                                <rect x="65" y="5" height="236" width="735"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-cartesian-grid">
                                            <g class="recharts-cartesian-grid-horizontal">
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="241"
                                                    x2="800" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="182"
                                                    x2="800" y2="182"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="123"
                                                    x2="800" y2="123"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="64"
                                                    x2="800" y2="64"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="5"
                                                    x2="800" y2="5"></line>
                                            </g>
                                            <g class="recharts-cartesian-grid-vertical">
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="5"
                                                    x2="65" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="212" y1="5"
                                                    x2="212" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="359" y1="5"
                                                    x2="359" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="506" y1="5"
                                                    x2="506" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="653" y1="5"
                                                    x2="653" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="800" y1="5"
                                                    x2="800" y2="241"></line>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-cartesian-axis recharts-xAxis xAxis">
                                            <line orientation="bottom" width="735" height="30" x="65" y="241"
                                                class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                x1="65" y1="241" x2="800" y2="241"></line>
                                            <g class="recharts-cartesian-axis-ticks">
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="65" y1="247" x2="65"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="65" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="65" dy="0.71em">Jan</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="212" y1="247" x2="212"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="212" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="212" dy="0.71em">Feb</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="359" y1="247" x2="359"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="359" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="359" dy="0.71em">Mar</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="506" y1="247" x2="506"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="506" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="506" dy="0.71em">Apr</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="653" y1="247" x2="653"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="653" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="653" dy="0.71em">Mei</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="800" y1="247" x2="800"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="790.9749994277954" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="790.9749994277954" dy="0.71em">Jun</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-cartesian-axis recharts-yAxis yAxis">
                                            <line orientation="left" width="60" height="236" x="5" y="5"
                                                class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                x1="65" y1="5" x2="65" y2="241"></line>
                                            <g class="recharts-cartesian-axis-ticks">
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="241" x2="65"
                                                        y2="241"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="241"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">0</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="182" x2="65"
                                                        y2="182"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="182"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">90</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="123" x2="65"
                                                        y2="123"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="123"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">180</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="64" x2="65"
                                                        y2="64"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="64"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">270</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="5" x2="65"
                                                        y2="5"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="12"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">360</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-line">
                                            <path stroke="hsl(var(--primary))" stroke-width="2" fill="none"
                                                width="735" height="236" class="recharts-curve recharts-line-curve"
                                                stroke-dasharray="752.2474975585938px 0px"
                                                d="M65,162.333C114,157.417,163,152.5,212,145.944C261,139.389,310,131.194,359,123C408,114.806,457,107.704,506,96.778C555,85.852,604,71.648,653,57.444C702,43.241,751,27.398,800,11.556">
                                            </path>
                                            <g class="recharts-layer"></g>
                                            <g class="recharts-layer recharts-line-dots">
                                                <circle r="3" stroke="hsl(var(--primary))" stroke-width="2"
                                                    fill="#fff" width="735" height="236" cx="65"
                                                    cy="162.33333333333334" class="recharts-dot recharts-line-dot">
                                                </circle>
                                                <circle r="3" stroke="hsl(var(--primary))" stroke-width="2"
                                                    fill="#fff" width="735" height="236" cx="212"
                                                    cy="145.94444444444443" class="recharts-dot recharts-line-dot">
                                                </circle>
                                                <circle r="3" stroke="hsl(var(--primary))" stroke-width="2"
                                                    fill="#fff" width="735" height="236" cx="359"
                                                    cy="123" class="recharts-dot recharts-line-dot"></circle>
                                                <circle r="3" stroke="hsl(var(--primary))" stroke-width="2"
                                                    fill="#fff" width="735" height="236" cx="506"
                                                    cy="96.77777777777777" class="recharts-dot recharts-line-dot">
                                                </circle>
                                                <circle r="3" stroke="hsl(var(--primary))" stroke-width="2"
                                                    fill="#fff" width="735" height="236" cx="653"
                                                    cy="57.444444444444436" class="recharts-dot recharts-line-dot">
                                                </circle>
                                                <circle r="3" stroke="hsl(var(--primary))" stroke-width="2"
                                                    fill="#fff" width="735" height="236" cx="800"
                                                    cy="11.555555555555557" class="recharts-dot recharts-line-dot">
                                                </circle>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="recharts-legend-wrapper"
                                        style="position: absolute; width: 795px; height: auto; left: 5px; bottom: 5px;">
                                        <ul class="recharts-default-legend"
                                            style="padding: 0px; margin: 0px; text-align: center;">
                                            <li class="recharts-legend-item legend-item-0"
                                                style="display: inline-block; margin-right: 10px;"><svg
                                                    class="recharts-surface" width="14" height="14"
                                                    viewBox="0 0 32 32"
                                                    style="display: inline-block; vertical-align: middle; margin-right: 4px;">
                                                    <title></title>
                                                    <desc></desc>
                                                    <path stroke-width="4" fill="none" stroke="hsl(var(--primary))" d="M0,16h10.666666666666666
                A5.333333333333333,5.333333333333333,0,1,1,21.333333333333332,16
                H32M21.333333333333332,16
                A5.333333333333333,5.333333333333333,0,1,1,10.666666666666666,16" class="recharts-legend-icon"></path>
                                                </svg><span class="recharts-legend-item-text"
                                                    style="color: hsl(var(--primary));">users</span></li>
                                        </ul>
                                    </div>
                                    <div tabindex="-1"
                                        class="recharts-tooltip-wrapper recharts-tooltip-wrapper-left recharts-tooltip-wrapper-bottom"
                                        style="visibility: hidden; pointer-events: none; position: absolute; top: 0px; left: 0px; transform: translate(683.463px, 15.0012px);">
                                        <div class="recharts-default-tooltip"
                                            style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;">
                                            <p class="recharts-tooltip-label" style="margin: 0px;">Jun</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Distribusi Konten</h3>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="recharts-responsive-container"
                                style="width: 100%; height: 300px; min-width: 0px;">
                                <div class="recharts-wrapper"
                                    style="position: relative; cursor: default; width: 100%; height: 100%; max-height: 300px; max-width: 805px;">
                                    <svg cx="50%" cy="50%" class="recharts-surface" width="805"
                                        height="300" viewBox="0 0 805 300" style="width: 100%; height: 100%;">
                                        <title></title>
                                        <desc></desc>
                                        <defs>
                                            <clipPath id="recharts14-clip">
                                                <rect x="5" y="5" height="290" width="795"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-layer recharts-pie" tabindex="0">
                                            <g class="recharts-layer">
                                                <g class="recharts-layer recharts-pie-sector" tabindex="-1">
                                                    <path cx="402.5" cy="150" name="Artikel" stroke="#fff"
                                                        fill="#60A5FA" tabindex="-1" class="recharts-sector" d="M 482.5,150
        A 80,80,0,
        0,0,
        326.4154786963877,125.2786404500042
      L 402.5,150 Z" role="img"></path>
                                                </g>
                                                <g class="recharts-layer recharts-pie-sector" tabindex="-1">
                                                    <path cx="402.5" cy="150" name="Quiz" stroke="#fff"
                                                        fill="#34D399" tabindex="-1" class="recharts-sector" d="M 326.4154786963877,125.2786404500042
        A 80,80,0,
        0,0,
        377.7786404500042,226.0845213036123
      L 402.5,150 Z" role="img"></path>
                                                </g>
                                                <g class="recharts-layer recharts-pie-sector" tabindex="-1">
                                                    <path cx="402.5" cy="150" name="Tes" stroke="#fff"
                                                        fill="#F472B6" tabindex="-1" class="recharts-sector" d="M 377.7786404500042,226.0845213036123
        A 80,80,0,
        0,0,
        467.2213595499958,197.02282018339787
      L 402.5,150 Z" role="img"></path>
                                                </g>
                                                <g class="recharts-layer recharts-pie-sector" tabindex="-1">
                                                    <path cx="402.5" cy="150" name="Diskusi" stroke="#fff"
                                                        fill="#FBBF24" tabindex="-1" class="recharts-sector" d="M 467.2213595499958,197.02282018339787
        A 80,80,0,
        0,0,
        482.5,150.00000000000003
      L 402.5,150 Z" role="img"></path>
                                                </g>
                                            </g>
                                            <g class="recharts-layer recharts-pie-labels">
                                                <g class="recharts-layer"><text cx="402.5" cy="150"
                                                        stroke="none" name="Artikel" alignment-baseline="middle"
                                                        x="418.1434465040231" y="51.23116594048622"
                                                        class="recharts-text recharts-pie-label-text" text-anchor="start"
                                                        fill="#60A5FA">
                                                        <tspan x="418.1434465040231" dy="0em">Artikel 45%</tspan>
                                                    </text></g>
                                                <g class="recharts-layer"><text cx="402.5" cy="150"
                                                        stroke="none" name="Quiz" alignment-baseline="middle"
                                                        x="313.3993475811632" y="195.39904997395467"
                                                        class="recharts-text recharts-pie-label-text" text-anchor="end"
                                                        fill="#34D399">
                                                        <tspan x="313.3993475811632" dy="0em">Quiz 25%</tspan>
                                                    </text></g>
                                                <g class="recharts-layer"><text cx="402.5" cy="150"
                                                        stroke="none" name="Tes" alignment-baseline="middle"
                                                        x="433.4016994374947" y="245.10565162951536"
                                                        class="recharts-text recharts-pie-label-text" text-anchor="start"
                                                        fill="#F472B6">
                                                        <tspan x="433.4016994374947" dy="0em">Tes 20%</tspan>
                                                    </text></g>
                                                <g class="recharts-layer"><text cx="402.5" cy="150"
                                                        stroke="none" name="Diskusi" alignment-baseline="middle"
                                                        x="497.60565162951536" y="180.90169943749476"
                                                        class="recharts-text recharts-pie-label-text" text-anchor="start"
                                                        fill="#FBBF24">
                                                        <tspan x="497.60565162951536" dy="0em">Diskusi 10%</tspan>
                                                    </text></g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div tabindex="-1"
                                        class="recharts-tooltip-wrapper recharts-tooltip-wrapper-right recharts-tooltip-wrapper-bottom"
                                        style="visibility: hidden; pointer-events: none; position: absolute; top: 0px; left: 0px; transform: translate(10px, 10px);">
                                        <div class="recharts-default-tooltip"
                                            style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;">
                                            <p class="recharts-tooltip-label" style="margin: 0px;"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm shadow-soft lg:col-span-2">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Kategori Terpopuler</h3>
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
                                            <clipPath id="recharts16-clip">
                                                <rect x="65" y="5" height="236" width="735"></rect>
                                            </clipPath>
                                        </defs>
                                        <g class="recharts-cartesian-grid">
                                            <g class="recharts-cartesian-grid-horizontal">
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="241"
                                                    x2="800" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="182"
                                                    x2="800" y2="182"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="123"
                                                    x2="800" y2="123"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="64"
                                                    x2="800" y2="64"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="5"
                                                    x2="800" y2="5"></line>
                                            </g>
                                            <g class="recharts-cartesian-grid-vertical">
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="138.5" y1="5"
                                                    x2="138.5" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="285.5" y1="5"
                                                    x2="285.5" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="432.5" y1="5"
                                                    x2="432.5" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="579.5" y1="5"
                                                    x2="579.5" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="726.5" y1="5"
                                                    x2="726.5" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="65" y1="5"
                                                    x2="65" y2="241"></line>
                                                <line stroke-dasharray="3 3" stroke="#ccc" fill="none" x="65" y="5"
                                                    width="735" height="236" x1="800" y1="5"
                                                    x2="800" y2="241"></line>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-cartesian-axis recharts-xAxis xAxis">
                                            <line orientation="bottom" width="735" height="30" x="65" y="241"
                                                class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                x1="65" y1="241" x2="800" y2="241"></line>
                                            <g class="recharts-cartesian-axis-ticks">
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="138.5" y1="247" x2="138.5"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="138.5" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="138.5" dy="0.71em">Anxiety</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="285.5" y1="247" x2="285.5"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="285.5" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="285.5" dy="0.71em">Depression</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="432.5" y1="247" x2="432.5"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="432.5" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="432.5" dy="0.71em">Stress</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="579.5" y1="247" x2="579.5"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="579.5" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="579.5" dy="0.71em">Self-Care</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="bottom" width="735" height="30" x="65"
                                                        y="241" class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="726.5" y1="247" x2="726.5"
                                                        y2="241"></line><text orientation="bottom" width="735"
                                                        height="30" stroke="none" x="726.5" y="249"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="middle" fill="#666">
                                                        <tspan x="726.5" dy="0.71em">Mindfulness</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-cartesian-axis recharts-yAxis yAxis">
                                            <line orientation="left" width="60" height="236" x="5" y="5"
                                                class="recharts-cartesian-axis-line" stroke="#666" fill="none"
                                                x1="65" y1="5" x2="65" y2="241"></line>
                                            <g class="recharts-cartesian-axis-ticks">
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="241" x2="65"
                                                        y2="241"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="241"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">0</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="182" x2="65"
                                                        y2="182"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="182"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">25</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="123" x2="65"
                                                        y2="123"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="123"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">50</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="64" x2="65"
                                                        y2="64"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="64"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">75</tspan>
                                                    </text>
                                                </g>
                                                <g class="recharts-layer recharts-cartesian-axis-tick">
                                                    <line orientation="left" width="60" height="236" x="5" y="5"
                                                        class="recharts-cartesian-axis-tick-line" stroke="#666"
                                                        fill="none" x1="59" y1="5" x2="65"
                                                        y2="5"></line><text orientation="left" width="60"
                                                        height="236" stroke="none" x="57" y="12"
                                                        class="recharts-text recharts-cartesian-axis-tick-value"
                                                        text-anchor="end" fill="#666">
                                                        <tspan x="57" dy="0.355em">100</tspan>
                                                    </text>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="recharts-layer recharts-bar">
                                            <g class="recharts-layer recharts-bar-rectangles">
                                                <g class="recharts-layer">
                                                    <g class="recharts-layer recharts-bar-rectangle">
                                                        <path x="79.7" y="40.400000000000006" width="117"
                                                            height="200.6" radius="0" fill="hsl(var(--accent))"
                                                            class="recharts-rectangle"
                                                            d="M 79.7,40.400000000000006 h 117 v 200.6 h -117 Z"></path>
                                                    </g>
                                                    <g class="recharts-layer recharts-bar-rectangle">
                                                        <path x="226.7" y="71.07999999999998" width="117"
                                                            height="169.92000000000002" radius="0"
                                                            fill="hsl(var(--accent))" class="recharts-rectangle"
                                                            d="M 226.7,71.07999999999998 h 117 v 169.92000000000002 h -117 Z">
                                                        </path>
                                                    </g>
                                                    <g class="recharts-layer recharts-bar-rectangle">
                                                        <path x="373.7" y="16.80000000000001" width="117"
                                                            height="224.2" radius="0" fill="hsl(var(--accent))"
                                                            class="recharts-rectangle"
                                                            d="M 373.7,16.80000000000001 h 117 v 224.2 h -117 Z"></path>
                                                    </g>
                                                    <g class="recharts-layer recharts-bar-rectangle">
                                                        <path x="520.7" y="80.51999999999998" width="117"
                                                            height="160.48000000000002" radius="0"
                                                            fill="hsl(var(--accent))" class="recharts-rectangle"
                                                            d="M 520.7,80.51999999999998 h 117 v 160.48000000000002 h -117 Z">
                                                        </path>
                                                    </g>
                                                    <g class="recharts-layer recharts-bar-rectangle">
                                                        <path x="667.7" y="113.55999999999999" width="117"
                                                            height="127.44000000000001" radius="0"
                                                            fill="hsl(var(--accent))" class="recharts-rectangle"
                                                            d="M 667.7,113.55999999999999 h 117 v 127.44000000000001 h -117 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="recharts-layer"></g>
                                        </g>
                                    </svg>
                                    <div class="recharts-legend-wrapper"
                                        style="position: absolute; width: 795px; height: auto; left: 5px; bottom: 5px;">
                                        <ul class="recharts-default-legend"
                                            style="padding: 0px; margin: 0px; text-align: center;">
                                            <li class="recharts-legend-item legend-item-0"
                                                style="display: inline-block; margin-right: 10px;"><svg
                                                    class="recharts-surface" width="14" height="14"
                                                    viewBox="0 0 32 32"
                                                    style="display: inline-block; vertical-align: middle; margin-right: 4px;">
                                                    <title></title>
                                                    <desc></desc>
                                                    <path stroke="none" fill="hsl(var(--accent))" d="M0,4h32v24h-32z"
                                                        class="recharts-legend-icon"></path>
                                                </svg><span class="recharts-legend-item-text"
                                                    style="color: hsl(var(--accent));">count</span></li>
                                        </ul>
                                    </div>
                                    <div tabindex="-1"
                                        class="recharts-tooltip-wrapper recharts-tooltip-wrapper-right recharts-tooltip-wrapper-bottom"
                                        style="visibility: hidden; pointer-events: none; position: absolute; top: 0px; left: 0px; transform: translate(65px, 10px);">
                                        <div class="recharts-default-tooltip"
                                            style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;">
                                            <p class="recharts-tooltip-label" style="margin: 0px;"></p>
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

@endsection
