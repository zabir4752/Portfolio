@extends('layouts.app')

@section('content')
<section id="training" class="relative pt-32 pb-28 min-h-screen overflow-hidden">

    {{-- Background Atmosphere / Glowing blobs --}}
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_left,rgba(14,165,233,0.08)_0%,transparent_60%)]"></div>
        <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_right,rgba(99,102,241,0.08)_0%,transparent_60%)]"></div>
        
        {{-- Floating blur spheres --}}
        <div class="absolute top-1/4 left-10 w-96 h-96 rounded-full bg-brand-500/5 blur-[120px] animate-blob"></div>
        <div class="absolute bottom-1/3 right-10 w-[400px] h-[400px] rounded-full bg-indigo-500/5 blur-[140px] animate-blob animation-delay-2000"></div>
        
        {{-- Faint dot grid --}}
        <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xNSkiLz48L3N2Zz4=')]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ── Section Header ── --}}
        <div class="flex flex-col items-center text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-brand-500/25 bg-brand-500/8 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-400 animate-pulse"></span>
                <span class="text-[11px] font-mono text-brand-400 tracking-[0.2em] uppercase">Mentorship & Leadership</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-black text-white tracking-tight leading-tight">
                Training <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 via-sky-400 to-indigo-400">Programs & Teaching</span>
            </h2>
            <p class="mt-4 text-slate-400 text-base max-w-2xl leading-relaxed">
                As a Chief Instructor, I have architected, curated, and led numerous comprehensive technology training initiatives. Here is a review of courses I designed and coached, fostering the next generation of software engineers.
            </p>
        </div>

        {{-- ── Global Statistics Board ── --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-20">
            @php
            $global_stats = [
                [
                    'value' => '385+',
                    'label' => 'Total Students Mentored',
                    'icon' => '<svg class="w-6 h-6 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>',
                    'border' => 'border-sky-500/20 hover:border-sky-500/40',
                    'shadow' => 'hover:shadow-sky-500/5',
                ],
                [
                    'value' => '21+',
                    'label' => 'Completed Batches',
                    'icon' => '<svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>',
                    'border' => 'border-indigo-500/20 hover:border-indigo-500/40',
                    'shadow' => 'hover:shadow-indigo-500/5',
                ],
                [
                    'value' => '6+',
                    'label' => 'Core Programming Tracks',
                    'icon' => '<svg class="w-6 h-6 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>',
                    'border' => 'border-violet-500/20 hover:border-violet-500/40',
                    'shadow' => 'hover:shadow-violet-500/5',
                ],
                [
                    'value' => '100%',
                    'label' => 'Problem Solving Focus',
                    'icon' => '<svg class="w-6 h-6 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 01-2 2h0a2 2 0 01-2-2v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
                    'border' => 'border-rose-500/20 hover:border-rose-500/40',
                    'shadow' => 'hover:shadow-rose-500/5',
                ],
            ];
            @endphp

            @foreach($global_stats as $stat)
            <div class="relative group rounded-2xl border bg-slate-900/30 backdrop-blur-sm p-6 sm:p-8 flex flex-col justify-between transition-all duration-300 hover:-translate-y-1 {{ $stat['border'] }} {{ $stat['shadow'] }}">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-2.5 rounded-xl bg-slate-850/60 ring-1 ring-white/5 group-hover:scale-110 transition-all duration-300">
                        {!! $stat['icon'] !!}
                    </div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-white font-mono tracking-tight">{{ $stat['value'] }}</div>
                    <div class="text-xs sm:text-sm text-slate-400 mt-2 font-medium tracking-tight">{{ $stat['label'] }}</div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- ── Dynamic Course Grid ── --}}
        @php
        $courses = [
            [
                'index' => '01',
                'title' => 'C Programming Language with Problem Solving',
                'sub' => 'Logic Foundations & Code Rigor',
                'batches' => '7 Batches',
                'students' => '200+ Students',
                'description' => 'Structured C language program starting from dynamic flow architectures, memory management, pointers, and recursive operations, with massive logic training.',
                'accent' => '#0ea5e9', // sky
                'ring' => 'ring-sky-500/25',
                'badge' => 'bg-sky-500/10 text-sky-400 border border-sky-500/20',
                'hover_shadow' => 'hover:shadow-sky-500/10',
                'bullets' => [
                    'Mastery of low-level concepts: pointer arithmetic, static/dynamic multi-dimensional arrays, and struct layout designs.',
                    'Rigorous problem solving covering 150+ challenges per batch from classic online judges (UVa, Codeforces, Beecrowd).',
                    'Curated algorithmic logic including recursion design, binary search, and initial structure implementations.'
                ],
                'techs' => ['C Language', 'Memory Management', 'Pointers', 'Recursion', 'Algorithmic Logic', 'Online Judges'],
                'icon' => '<svg class="w-8 h-8 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>'
            ],
            [
                'index' => '02',
                'title' => 'C++ Programming Language',
                'sub' => 'Object-Oriented Design & Performance',
                'batches' => '2 Batches',
                'students' => '30+ Students',
                'description' => 'Advanced software design introducing low-level optimization, template frameworks, abstract modeling, and custom data container architectures.',
                'accent' => '#6366f1', // indigo
                'ring' => 'ring-indigo-500/25',
                'badge' => 'bg-indigo-500/10 text-indigo-400 border border-indigo-500/20',
                'hover_shadow' => 'hover:shadow-indigo-500/10',
                'bullets' => [
                    'Comprehensive coverage of OOP pillars: polymorphism (static/dynamic), encapsulation, and hybrid inheritance models.',
                    'Deep dive into Standard Template Library (STL) vector mechanisms, maps, custom operators, and iterators.',
                    'Hands-on systems construction: custom shell controls, dynamic storage systems, and simulated operating structures.'
                ],
                'techs' => ['C++', 'OOP Pillars', 'STL Libraries', 'Templates', 'Virtual Functions', 'System Simulation'],
                'icon' => '<svg class="w-8 h-8 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>'
            ],
            [
                'index' => '03',
                'title' => 'Java with OOP',
                'sub' => 'Modular Architectures & SOLID Principles',
                'batches' => '3 Batches',
                'students' => '25+ Students',
                'description' => 'Enterprise architectural programming featuring clean design, SOLID layouts, multithreaded workflows, and strong exception paradigms.',
                'accent' => '#f59e0b', // amber
                'ring' => 'ring-amber-500/25',
                'badge' => 'bg-amber-500/10 text-amber-400 border border-amber-500/20',
                'hover_shadow' => 'hover:shadow-amber-500/10',
                'bullets' => [
                    'JVM internals: trash collection, class loaders, runtime data layouts, and compilation pipelines.',
                    'Architectural clean coding: SOLID design models, design patterns (Singleton, Factory), and interface abstraction.',
                    'Concurrent programming: threads execution, lock frameworks, synchronized blocks, and multi-process interfaces.'
                ],
                'techs' => ['Java Development', 'JVM Architecture', 'SOLID Principles', 'Design Patterns', 'Concurrency', 'GUI Frameworks'],
                'icon' => '<svg class="w-8 h-8 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>'
            ],
            [
                'index' => '04',
                'title' => 'Data Structure and Algorithm (DSA)',
                'sub' => 'Computational Optimization & Analysis',
                'batches' => '3 Batches',
                'students' => '20+ Students',
                'description' => 'Rigorous logical curriculum focused on dynamic node management, structural layout scaling, search/sort efficiency, and Big-O verification.',
                'accent' => '#8b5cf6', // violet
                'ring' => 'ring-violet-500/25',
                'badge' => 'bg-violet-500/10 text-violet-400 border border-violet-500/20',
                'hover_shadow' => 'hover:shadow-violet-500/10',
                'bullets' => [
                    'Built complex models from scratch: double-linked lists, binary lookup trees, min/max heaps, and custom graph grids.',
                    'Deep dive in advanced algorithm tactics: dynamic programming models, recursion backtracking, and sorting bounds.',
                    'Rigorous computational complexity analysis (Big-O, Big-Omega) and optimization strategies for enterprise execution.'
                ],
                'techs' => ['Structures Design', 'Complexity Analysis', 'Dynamic Programming', 'Graph Networks', 'Recursion Backtracking', 'Sorting Engine'],
                'icon' => '<svg class="w-8 h-8 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>'
            ],
            [
                'index' => '05',
                'title' => 'Core Python Programming and OOP',
                'sub' => 'Clean Scripting & Functional Automation',
                'batches' => '4 Batches',
                'students' => '80+ Students',
                'description' => 'Dynamic scripting and architectural OOP workflows, emphasizing rapid prototyping, automation systems, and modular library layout builds.',
                'accent' => '#10b981', // emerald
                'ring' => 'ring-emerald-500/25',
                'badge' => 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20',
                'hover_shadow' => 'hover:shadow-emerald-500/10',
                'bullets' => [
                    'Pythonic workflows: lists and dicts comprehensions, decorators, generator patterns, and lambda engines.',
                    'Advanced object model designs: magic functions (__init__, __str__, __call__), multi-inheritance, and encapsulation.',
                    'Practical automation: web data scrapers, local file organizers, custom API hooks, and CLI systems.'
                ],
                'techs' => ['Python Core', 'Pythonic Design', 'Generators/Decorators', 'Functional Scripts', 'Automations', 'API Integrations'],
                'icon' => '<svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>'
            ],
            [
                'index' => '06',
                'title' => 'Python, Data Science & Machine Learning',
                'sub' => 'Predictive Pipelines & Analytics Modeling',
                'batches' => '2 Batches',
                'students' => '20+ Students',
                'description' => 'Empirical engineering focused on exploratory analysis, data pipelines, predictive modeling, and algorithm validation metrics.',
                'accent' => '#f43f5e', // rose
                'ring' => 'ring-rose-500/25',
                'badge' => 'bg-rose-500/10 text-rose-400 border border-rose-500/20',
                'hover_shadow' => 'hover:shadow-rose-500/10',
                'bullets' => [
                    'Data curation: structured data manipulation in Pandas, complex matrix calculations in NumPy, and EDA plotting in Seaborn.',
                    'Machine Learning: linear regression, classification forests, support vector vectoring, and K-Means clusters.',
                    'Model training pipelines: data normalization, feature analysis, grid hyperparameter tuning, and MSE/Accuracy verification.'
                ],
                'techs' => ['Predictive Models', 'Pandas & NumPy', 'Supervised Learning', 'Clustering Algorithms', 'EDA & Visualization', 'Scikit-Learn'],
                'icon' => '<svg class="w-8 h-8 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z"></path></svg>'
            ],
        ];
        @endphp

        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($courses as $course)
            <div class="group relative rounded-2xl border border-slate-800/60 bg-slate-900/30 backdrop-blur-sm overflow-hidden transition-all duration-500 hover:border-slate-700/85 hover:bg-slate-900/50 hover:shadow-2xl hover:-translate-y-1.5 {{ $course['hover_shadow'] }}"
                 style="--accent: {{ $course['accent'] }}">

                {{-- Left accent hover highlight bar --}}
                <div class="absolute inset-y-0 left-0 w-[4px] opacity-0 group-hover:opacity-100 transition-all duration-500 rounded-l-2xl"
                     style="background: linear-gradient(to bottom, {{ $course['accent'] }}, transparent)"></div>

                {{-- Hover radial glow highlight --}}
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none rounded-2xl"
                     style="background: radial-gradient(ellipse at top left, {{ $course['accent'] }}0d 0%, transparent 60%)"></div>

                <div class="relative p-6 sm:p-8">
                    {{-- Card Top Row: Number, Icon, Title and Subtitle --}}
                    <div class="flex items-start gap-4 mb-6">
                        {{-- Icon Circle --}}
                        <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center bg-slate-850/60 ring-1 {{ $course['ring'] }} transition-transform duration-300 group-hover:scale-110">
                            {!! $course['icon'] !!}
                        </div>

                        {{-- Metadata Title & Subtitle --}}
                        <div class="flex-grow">
                            <span class="text-xs font-mono font-bold tracking-widest uppercase" style="color: {{ $course['accent'] }}">
                                Course {{ $course['index'] }}
                            </span>
                            <h3 class="text-xl sm:text-2xl font-extrabold text-white leading-tight mt-1 group-hover:text-white transition-colors">
                                {{ $course['title'] }}
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-400 font-mono mt-1 font-medium tracking-tight">
                                {{ $course['sub'] }}
                            </p>
                        </div>
                    </div>

                    {{-- Badges Row --}}
                    <div class="flex flex-wrap gap-2.5 mb-6 pl-0 sm:pl-[72px]">
                        <span class="px-3 py-1 rounded-full text-xs font-mono font-bold tracking-wide {{ $course['badge'] }}">
                            {{ $course['batches'] }}
                        </span>
                        <span class="px-3 py-1 rounded-full text-xs font-mono font-bold tracking-wide bg-slate-800/80 text-slate-300 border border-slate-700/60">
                            {{ $course['students'] }}
                        </span>
                    </div>

                    {{-- Course Description --}}
                    <div class="pl-0 sm:pl-[72px] mb-6">
                        <p class="text-sm text-slate-350 leading-relaxed font-medium">
                            {{ $course['description'] }}
                        </p>
                    </div>

                    {{-- Bullet List Achievements --}}
                    <div class="pl-0 sm:pl-[72px] mb-6">
                        <h4 class="text-xs font-mono text-slate-500 uppercase tracking-widest font-bold mb-3">Syllabus Overview & Achievements</h4>
                        <ul class="space-y-3">
                            @foreach($course['bullets'] as $bullet)
                            <li class="flex items-start gap-3 text-sm text-slate-300 leading-relaxed">
                                <span class="mt-1.5 flex-shrink-0 w-1.5 h-1.5 rounded-full" style="background: {{ $course['accent'] }}"></span>
                                <span class="font-medium">{{ $bullet }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Technologies Badge Row --}}
                    <div class="pl-0 sm:pl-[72px] pt-4 border-t border-slate-850/60">
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($course['techs'] as $tech)
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-slate-850 border border-slate-800/50 text-slate-400 group-hover:text-slate-300 transition-colors">
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- ── Curriculum Leadership & Administration Panel ── --}}
        <div class="mt-24 relative rounded-3xl border border-slate-800/60 bg-slate-900/10 backdrop-blur-sm overflow-hidden p-8 sm:p-12 lg:p-16">
            
            {{-- Decorative Accent Glow Behind --}}
            <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-brand-500/5 blur-[80px] pointer-events-none"></div>
            <div class="absolute -left-20 -bottom-20 w-80 h-80 rounded-full bg-indigo-500/5 blur-[80px] pointer-events-none"></div>

            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 relative z-10">
                {{-- Left column: Title & Role --}}
                <div class="lg:col-span-5 flex flex-col justify-center">
                    <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full border border-indigo-500/25 bg-indigo-500/8 mb-6 self-start">
                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                        <span class="text-[10px] font-mono text-indigo-400 tracking-wider uppercase font-semibold">Program Director Role</span>
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">
                        Curriculum Design & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-indigo-400 font-black">Program Leadership</span>
                    </h3>
                    <p class="mt-4 text-slate-400 text-sm sm:text-base leading-relaxed font-medium">
                        I did not just teach; I built the infrastructure. As a Chief Instructor and Program Leader, I personally took absolute charge of designing entire curriculums, standardizing programming environments, and coordinating modern learning pathways.
                    </p>
                </div>

                {{-- Right column: Key Leadership Details --}}
                <div class="lg:col-span-7 flex flex-col justify-center space-y-6">
                    @php
                    $lead_bullets = [
                        [
                            'title' => 'Curriculum Design & Standardization',
                            'desc' => 'Created robust lecture structures, comprehensive code libraries, visual logic walkthroughs, and custom exercises mapping students from novice syntax to advanced programming paradigms.',
                        ],
                        [
                            'title' => 'Teaching Assistants & Mentoring',
                            'desc' => 'Supervised junior coaches and teaching assistants, establishing standard parameters for grading, error tracking, code reviews, and personal student guidance pipelines.',
                        ],
                        [
                            'title' => 'Automated Judges & Scaled Grading',
                            'desc' => 'Integrated modern sandboxed grading judges and custom code review architectures, making sure students received automated, clean diagnostics for complex runtime logic.',
                        ],
                        [
                            'title' => 'Bootcamps & High-Intensive Hackathons',
                            'desc' => 'Directed collaborative team coding contests and overnight logical sprints, pushing collaborative project designs, code standards, and agile architecture implementation.',
                        ]
                    ];
                    @endphp

                    @foreach($lead_bullets as $index => $item)
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg flex items-center justify-center bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 text-xs font-mono font-bold">
                            {{ sprintf('%02d', $index + 1) }}
                        </div>
                        <div>
                            <h4 class="text-base font-bold text-white tracking-tight">{{ $item['title'] }}</h4>
                            <p class="text-slate-400 text-xs sm:text-sm mt-1 leading-relaxed font-medium">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ── Call-To-Action Banner ── --}}
        <div class="mt-20 text-center">
            <div class="inline-block relative rounded-2xl border border-brand-500/20 bg-brand-500/5 p-8 max-w-2xl">
                <h4 class="text-xl font-bold text-white tracking-tight">Need a custom training program or logic mentoring?</h4>
                <p class="text-slate-400 text-sm mt-2 max-w-md mx-auto leading-relaxed">
                    I design technical courses, coordinate software bootcamps, and engineer clean educational curriculums. Let's build together!
                </p>
                <div class="mt-6 flex flex-wrap gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="px-6 py-2.5 rounded-full bg-brand-500 text-white font-semibold text-sm hover:bg-brand-600 hover:shadow-lg hover:shadow-brand-500/20 transition-all">
                        Get In Touch
                    </a>
                    <a href="{{ route('projects') }}" class="px-6 py-2.5 rounded-full border border-slate-700/60 text-slate-300 font-semibold text-sm hover:text-white hover:bg-slate-900/50 transition-all">
                        View Projects
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
