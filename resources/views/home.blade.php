@extends('layouts.app')

@section('content')
<!-- Hero Section -->
            <section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
                <!-- Abstract Background Elements -->
                <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
                    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-600/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob"></div>
                    <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-indigo-600/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-2000"></div>
                    <div class="absolute bottom-1/4 left-1/2 w-96 h-96 bg-slate-600/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-4000"></div>
                    <!-- Grid Pattern -->
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0wIDBoNDB2NDBIMHoiIGZpbGw9Im5vbmUiLz4KPHBhdGggZD0iTTAgMGg0MHYxSDB6TTAgMHY0MGgxdi00MHoiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wMykiLz4KPC9zdmc+')] opacity-30"></div>
                </div>
                
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
                    <div class="grid lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-7">
                            <div class="inline-flex items-center px-3 py-1 rounded-full border border-brand-500/30 bg-brand-500/10 text-brand-400 text-xs font-mono mb-6">
                                <span class="flex w-2 h-2 rounded-full bg-brand-500 mr-2 animate-pulse"></span>
                                Available for new opportunities
                            </div>
                            
                            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white mb-4">
                                Hi, I'm <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-400 via-indigo-400 to-purple-400 animate-gradient-x">Zabir Bin Abu Bakar</span>
                            </h1>
                            
                            <div class="h-auto min-h-[3rem] mb-6 flex items-center">
                                <span class="text-xl sm:text-2xl lg:text-3xl font-medium text-slate-400 font-mono inline-block">
                                    <span id="typewriter"></span><span class="animate-pulse border-r-2 border-brand-500 ml-1 h-6 sm:h-8 inline-block align-middle"></span>
                                </span>
                            </div>
                            
                            <p class="text-lg sm:text-xl text-slate-400 max-w-2xl mb-10 leading-relaxed">
                                Passionate about Artificial Intelligence, Data Science, and IoT. I build intelligent systems and tech startups with a vision to innovate the automotive and embedded systems industry.
                            </p>
                            
                            <div class="flex flex-wrap gap-4">
                                <a href="{{ route('projects') }}" class="px-8 py-3.5 rounded-lg text-white bg-brand-600 hover:bg-brand-500 shadow-lg hover:shadow-brand-500/25 transition-all font-medium text-sm sm:text-base flex items-center">
                                    View Projects
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                                <a href="{{ route('contact') }}" class="px-8 py-3.5 rounded-lg text-white bg-slate-800 hover:bg-slate-700 transition-all font-medium text-sm sm:text-base border border-slate-700">
                                    Contact Me
                                </a>
                                <a href="{{ asset('files/zabir_cv.jpg') }}" download="Zabir_Bin_Abu_Bakar_CV.jpg" class="px-8 py-3.5 rounded-lg text-slate-300 hover:text-white transition-all font-medium text-sm sm:text-base flex items-center group">
                                    Download CV
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex justify-center lg:justify-end mt-12 lg:mt-0 relative">
                            <!-- Professional Image Frame -->
                            <div class="relative w-64 sm:w-80 lg:w-[22rem] aspect-[4/5] rounded-2xl overflow-hidden bg-slate-900 border border-slate-800 shadow-2xl group flex items-center justify-center">
                                <img src="{{ asset('images/zabir_nobg.png') }}" alt="Zabir Bin Abu Bakar" class="w-full h-full object-cover object-[center_10%] -translate-x-6 scale-[1.8] filter grayscale-[80%] opacity-90 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-[1.9] transition-all duration-700 z-10 relative">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/20 to-transparent z-20 pointer-events-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
@endsection