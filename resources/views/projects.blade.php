@extends('layouts.app')

@section('content')
<!-- Projects Section -->
            <section id="projects" class="pt-32 pb-24 min-h-screen relative z-10 border-t border-slate-800/50 bg-slate-900/20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-4 mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-white">Featured Projects</h2>
                        <div class="h-px bg-slate-800 flex-grow max-w-xs"></div>
                    </div>

                    <div class="grid lg:grid-cols-3 gap-8">
                        @php
                            $projects = [
                                [
                                    'title' => 'Titanic Survival Prediction',
                                    'desc' => 'A machine learning model built to predict the survival of passengers on the Titanic based on various features such as age, sex, and passenger class.',
                                    'tags' => ['Python', 'Machine Learning', 'Scikit-Learn', 'Pandas'],
                                    'image' => 'titanic.png'
                                ],
                                [
                                    'title' => 'Smart Door Security System',
                                    'desc' => 'An IoT-based security solution utilizing the ESP32 microcontroller. The system provides smart access control and monitoring capabilities.',
                                    'tags' => ['C++', 'ESP32', 'IoT', 'Embedded Systems'],
                                    'image' => 'smart_door.png'
                                ],
                                [
                                    'title' => 'Data Analysis Dashboard',
                                    'desc' => 'A comprehensive data visualization dashboard that processes complex datasets and presents actionable insights through interactive charts.',
                                    'tags' => ['Python', 'Data Analysis', 'Matplotlib', 'Seaborn'],
                                    'image' => 'data_dashboard.png'
                                ]
                            ];
                        @endphp

                        @foreach($projects as $project)
                            <div class="glass-card rounded-2xl overflow-hidden flex flex-col group hover:shadow-[0_0_30px_rgba(2,132,199,0.15)] transition-all duration-500 border border-slate-700/50 hover:border-brand-500/30">
                                <!-- Project Image -->
                                <div class="h-48 bg-slate-900 relative overflow-hidden">
                                    <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition-all duration-700">
                                    <!-- Subtle Gradient Overlay for blending -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent pointer-events-none"></div>
                                </div>
                                
                                <div class="p-8 flex flex-col flex-grow">
                                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-brand-400 transition-colors">{{ $project['title'] }}</h3>
                                    <p class="text-slate-400 text-sm leading-relaxed mb-6 flex-grow">
                                        {{ $project['desc'] }}
                                    </p>
                                    
                                    <div class="flex flex-wrap gap-2 mb-6">
                                        @foreach($project['tags'] as $tag)
                                            <span class="text-xs font-mono text-brand-300 bg-brand-500/10 px-3 py-1 rounded-full">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    </div>
                                    
                                    <div class="flex items-center gap-4 mt-auto pt-4 border-t border-slate-800">
                                        <a href="#" class="text-slate-400 hover:text-white transition-colors" title="View Source">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                        </a>
                                        <a href="#" class="text-slate-400 hover:text-brand-400 transition-colors ml-auto text-sm font-medium flex items-center">
                                            Details
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
@endsection