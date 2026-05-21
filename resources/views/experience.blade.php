@extends('layouts.app')

@section('content')
<section id="experience" class="relative pt-32 pb-28 min-h-screen overflow-hidden">

    {{-- Background Atmosphere --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_left,rgba(14,165,233,0.06)_0%,transparent_60%)]"></div>
        <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(99,102,241,0.06)_0%,transparent_60%)]"></div>
        {{-- Faint dot grid --}}
        <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xNSkiLz48L3N2Zz4=')]"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ── Section Header ── --}}
        <div class="flex flex-col items-center text-center mb-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-brand-500/25 bg-brand-500/8 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-400 animate-pulse"></span>
                <span class="text-[11px] font-mono text-brand-400 tracking-[0.2em] uppercase">Professional Journey</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-white tracking-tight leading-tight">
                Work <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 via-sky-400 to-indigo-400">Experience</span>
            </h2>
            <p class="mt-4 text-slate-400 text-base max-w-xl leading-relaxed">
                A record of leadership, strategy, and impact across technology startups and community organizations.
            </p>
        </div>

        @php
        $experiences = [
            [
                'index'    => '01',
                'role'     => 'COO & Managing Director',
                'company'  => 'HaxyGen Corporation',
                'location' => 'Dhaka, Bangladesh',
                'from'     => '2024',
                'to'       => '2025',
                'type'     => 'Full-Time · Executive',
                'initials' => 'HX',
                'color'    => 'sky',
                'accent'   => '#0ea5e9',
                'ring'     => 'ring-sky-500/30',
                'badge_bg' => 'bg-sky-500/10 text-sky-400',
                'dot'      => 'bg-sky-500',
                'bullets'  => [
                    'Directed overall operational strategy and cross-functional team coordination across engineering, marketing, and business development units.',
                    'Supervised AI-driven product roadmaps and engineering pipelines, accelerating pre-seed milestones for the firm\'s core software platforms.',
                    'Orchestrated resource allocation, financial modeling, and stakeholder communication — forging high-value industry partnerships.'
                ],
                'stats' => [
                    ['label' => 'Team Size', 'value' => '12+'],
                    ['label' => 'Duration',  'value' => '1 yr'],
                    ['label' => 'Role Level', 'value' => 'C-Suite'],
                ],
            ],
            [
                'index'    => '02',
                'role'     => 'Joint Secretary',
                'company'  => 'Daffodil Blood Donors Club (DIUBDC)',
                'location' => 'DIU, Dhaka, Bangladesh',
                'from'     => '2024',
                'to'       => 'Present',
                'type'     => 'Volunteer · Leadership',
                'initials' => 'DB',
                'color'    => 'indigo',
                'accent'   => '#6366f1',
                'ring'     => 'ring-indigo-500/30',
                'badge_bg' => 'bg-indigo-500/10 text-indigo-400',
                'dot'      => 'bg-indigo-500',
                'bullets'  => [
                    'Administered volunteer recruitment and logistics for university-wide emergency blood donation drives, impacting hundreds of lives.',
                    'Coordinated institutional operations and digital member databases, streamlining donor-hospital communication pipelines.',
                    'Spearheaded PR campaigns that grew club membership by 40% and elevated campus public-health awareness significantly.'
                ],
                'stats' => [
                    ['label' => 'Members',  'value' => '200+'],
                    ['label' => 'Events',   'value' => '15+'],
                    ['label' => 'Growth',   'value' => '+40%'],
                ],
            ],
            [
                'index'    => '03',
                'role'     => 'Event Lead & Organizer',
                'company'  => 'Daffodil International University',
                'location' => 'Main Auditorium, Dhaka',
                'from'     => '2023',
                'to'       => '2024',
                'type'     => 'Contract · Events',
                'initials' => 'DU',
                'color'    => 'violet',
                'accent'   => '#8b5cf6',
                'ring'     => 'ring-violet-500/30',
                'badge_bg' => 'bg-violet-500/10 text-violet-400',
                'dot'      => 'bg-violet-500',
                'bullets'  => [
                    'Supervised complete event lifecycles at the DIU Main Auditorium — managing speaker coordination, AV production, and guest protocols.',
                    'Led large student volunteer teams ensuring flawless crowd management and operational precision for national-scale events.',
                    'Served as primary liaison between university administrators, academic faculties, and external production sponsors.'
                ],
                'stats' => [
                    ['label' => 'Events',      'value' => '10+'],
                    ['label' => 'Volunteers',  'value' => '50+'],
                    ['label' => 'Attendees',   'value' => '1k+'],
                ],
            ],
        ];
        @endphp

        {{-- ── Experience Cards ── --}}
        <div class="space-y-8">
            @foreach($experiences as $exp)
            <div class="group relative rounded-2xl border border-slate-800/60 bg-slate-900/30 backdrop-blur-sm overflow-hidden transition-all duration-500 hover:border-slate-700/80 hover:bg-slate-900/50 hover:shadow-2xl hover:-translate-y-0.5"
                 style="--accent: {{ $exp['accent'] }}">

                {{-- Left accent bar --}}
                <div class="absolute inset-y-0 left-0 w-[3px] opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-l-2xl"
                     style="background: linear-gradient(to bottom, {{ $exp['accent'] }}, transparent)"></div>

                {{-- Subtle glow on hover --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none rounded-2xl"
                     style="background: radial-gradient(ellipse at top left, {{ $exp['accent'] }}0d 0%, transparent 60%)"></div>

                <div class="relative p-6 md:p-8">

                    {{-- ── Top Row: Number + Company + Duration ── --}}
                    <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4 mb-6">

                        {{-- Left: Index + Avatar + Company --}}
                        <div class="flex items-center gap-4">
                            {{-- Large Number --}}
                            <span class="hidden sm:block text-5xl font-black font-mono text-slate-800 group-hover:text-slate-700 transition-colors select-none leading-none">
                                {{ $exp['index'] }}
                            </span>

                            {{-- Company Avatar --}}
                            <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center font-mono font-black text-sm ring-1 {{ $exp['ring'] }} {{ $exp['badge_bg'] }} transition-transform duration-300 group-hover:scale-110">
                                {{ $exp['initials'] }}
                            </div>

                            {{-- Company Meta --}}
                            <div>
                                <h3 class="text-lg font-bold text-white group-hover:text-white transition-colors">
                                    {{ $exp['company'] }}
                                </h3>
                                <div class="flex flex-wrap items-center gap-2 mt-0.5 text-xs text-slate-400 font-mono">
                                    <svg class="w-3 h-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span>{{ $exp['location'] }}</span>
                                    <span class="text-slate-700">·</span>
                                    <span class="{{ $exp['badge_bg'] }} px-2 py-0.5 rounded-full text-[10px] font-semibold tracking-wide">{{ $exp['type'] }}</span>
                                </div>
                            </div>
                        </div>

                        {{-- Right: Duration Badge --}}
                        <div class="flex-shrink-0 flex items-center gap-2 self-start">
                            <span class="w-1.5 h-1.5 rounded-full {{ $exp['dot'] }} flex-shrink-0 @if($exp['to'] === 'Present') animate-pulse @endif"></span>
                            <span class="text-sm font-mono font-semibold text-slate-300 bg-slate-800/80 border border-slate-700/60 px-3 py-1 rounded-lg">
                                {{ $exp['from'] }} – {{ $exp['to'] }}
                            </span>
                        </div>
                    </div>

                    {{-- ── Role Title ── --}}
                    <div class="mb-5 pl-0 sm:pl-20">
                        <h4 class="text-2xl font-extrabold text-white tracking-tight">{{ $exp['role'] }}</h4>
                    </div>

                    {{-- ── Two-column: Bullets + Stats ── --}}
                    <div class="sm:pl-20 grid lg:grid-cols-12 gap-6 lg:gap-10">

                        {{-- Bullet Achievements --}}
                        <ul class="lg:col-span-8 space-y-3">
                            @foreach($exp['bullets'] as $i => $bullet)
                            <li class="flex items-start gap-3 text-slate-300 text-sm leading-relaxed">
                                <span class="mt-1.5 flex-shrink-0 w-1.5 h-1.5 rounded-full" style="background:{{ $exp['accent'] }}"></span>
                                <span>{{ $bullet }}</span>
                            </li>
                            @endforeach
                        </ul>

                        {{-- Key Stats --}}
                        <div class="lg:col-span-4 grid grid-cols-3 lg:grid-cols-1 gap-3">
                            @foreach($exp['stats'] as $stat)
                            <div class="flex flex-col items-center lg:items-start justify-center bg-slate-800/40 border border-slate-800 rounded-xl px-3 py-3 lg:flex-row lg:gap-4 lg:py-2.5">
                                <span class="text-xl lg:text-lg font-black font-mono" style="color:{{ $exp['accent'] }}">{{ $stat['value'] }}</span>
                                <span class="text-[10px] text-slate-500 uppercase tracking-wider font-mono mt-0.5 lg:mt-0">{{ $stat['label'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection