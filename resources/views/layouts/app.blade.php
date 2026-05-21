<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Zabir Bin Abu Bakar | Aspiring Data Scientist & ML Engineer</title>
        
        <!-- Google Fonts: Inter -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
            <script>
                tailwind.config = {
                    darkMode: 'class',
                    theme: {
                        extend: {
                            fontFamily: {
                                sans: ['Inter', 'sans-serif'],
                                mono: ['JetBrains Mono', 'monospace'],
                            },
                            colors: {
                                brand: {
                                    400: '#38bdf8', // sky-400
                                    500: '#0ea5e9', // sky-500
                                    600: '#0284c7', // sky-600
                                }
                            },
                            animation: {
                                'gradient-x': 'gradient-x 15s ease infinite',
                                'blob': 'blob 7s infinite',
                                'typewriter': 'typing 3s steps(48, end), blink .75s step-end infinite',
                                'float': 'float 6s ease-in-out infinite'
                            },
                            keyframes: {
                                'gradient-x': {
                                    '0%, 100%': {
                                        'background-size': '200% 200%',
                                        'background-position': 'left center'
                                    },
                                    '50%': {
                                        'background-size': '200% 200%',
                                        'background-position': 'right center'
                                    }
                                },
                                blob: {
                                    '0%': { transform: 'translate(0px, 0px) scale(1)' },
                                    '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                                    '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                                    '100%': { transform: 'translate(0px, 0px) scale(1)' }
                                },
                                float: {
                                    '0%, 100%': { transform: 'translateY(0)' },
                                    '50%': { transform: 'translateY(-10px)' }
                                },
                                typing: {
                                    from: { width: '0' },
                                    to: { width: '100%' }
                                },
                                blink: {
                                    'from, to': { borderColor: 'transparent' },
                                    '50%': { borderColor: 'currentColor' }
                                }
                            }
                        }
                    }
                }
            </script>
        @endif
        
        <style>
            body { font-family: 'Inter', sans-serif; }
            .glass-card {
                background: rgba(15, 23, 42, 0.6);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border: 1px solid rgba(255, 255, 255, 0.08);
            }
            /* Fallback animation styles in case Tailwind CDN doesn't load them correctly */
            .animation-delay-2000 { animation-delay: 2s; }
            .animation-delay-4000 { animation-delay: 4s; }
            
            /* Hide scrollbar for clean look */
            ::-webkit-scrollbar {
                width: 8px;
            }
            ::-webkit-scrollbar-track {
                background: #0f172a; 
            }
            ::-webkit-scrollbar-thumb {
                background: #334155; 
                border-radius: 4px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #475569; 
            }
        </style>
    </head>
    <body class="bg-slate-950 text-slate-300 antialiased selection:bg-brand-500/30 min-h-screen flex flex-col overflow-x-hidden">
        
        <!-- Navigation -->
        <nav class="fixed w-full z-50 top-0 transition-all duration-300 glass-card border-b-0 border-slate-800/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="text-xl font-bold tracking-tighter text-white">
                            Zabir<span class="text-brand-500">.</span>
                        </a>
                    </div>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-6">
                            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white bg-slate-800/50' : 'text-slate-300 hover:text-white' }} transition-colors px-3 py-2 rounded-md text-sm font-medium">About</a>
                            <a href="{{ route('experience') }}" class="{{ request()->routeIs('experience') ? 'text-white bg-slate-800/50' : 'text-slate-300 hover:text-white' }} transition-colors px-3 py-2 rounded-md text-sm font-medium">Experience</a>
                            <a href="{{ route('skills') }}" class="{{ request()->routeIs('skills') ? 'text-white bg-slate-800/50' : 'text-slate-300 hover:text-white' }} transition-colors px-3 py-2 rounded-md text-sm font-medium">Skills</a>
                            <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-white bg-slate-800/50' : 'text-slate-300 hover:text-white' }} transition-colors px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                            <a href="{{ route('certificates') }}" class="{{ request()->routeIs('certificates') ? 'text-white bg-slate-800/50' : 'text-slate-300 hover:text-white' }} transition-colors px-3 py-2 rounded-md text-sm font-medium">Certificates</a>
                            <a href="{{ route('training') }}" class="{{ request()->routeIs('training') ? 'text-white bg-slate-800/50' : 'text-slate-300 hover:text-white' }} transition-colors px-3 py-2 rounded-md text-sm font-medium">Training</a>
                            <a href="{{ route('contact') }}" class="px-4 py-2 rounded-full bg-brand-500/10 text-brand-400 border border-brand-500/20 hover:bg-brand-500/20 transition-all text-sm font-medium ml-4">Say Hello</a>
                        </div>
                    </div>

                    <!-- Mobile Hamburger Button -->
                    <div class="flex items-center md:hidden">
                        <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-white hover:bg-slate-800/50 focus:outline-none transition-all cursor-pointer">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6 block" id="hamburger-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                            <svg class="h-6 w-6 hidden" id="close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="hidden md:hidden border-t border-slate-800/50 bg-slate-950/95 backdrop-blur-xl transition-all duration-300">
                <div class="px-2 pt-3 pb-6 space-y-2">
                    <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-white bg-slate-800/60' : 'text-slate-305 hover:text-white hover:bg-slate-900/50' }} transition-colors">About</a>
                    <a href="{{ route('experience') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('experience') ? 'text-white bg-slate-800/60' : 'text-slate-305 hover:text-white hover:bg-slate-900/50' }} transition-colors">Experience</a>
                    <a href="{{ route('skills') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('skills') ? 'text-white bg-slate-800/60' : 'text-slate-305 hover:text-white hover:bg-slate-900/50' }} transition-colors">Skills</a>
                    <a href="{{ route('projects') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('projects') ? 'text-white bg-slate-800/60' : 'text-slate-305 hover:text-white hover:bg-slate-900/50' }} transition-colors">Projects</a>
                    <a href="{{ route('certificates') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('certificates') ? 'text-white bg-slate-800/60' : 'text-slate-305 hover:text-white hover:bg-slate-900/50' }} transition-colors">Certificates</a>
                    <a href="{{ route('training') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('training') ? 'text-white bg-slate-800/60' : 'text-slate-305 hover:text-white hover:bg-slate-900/50' }} transition-colors">Training</a>
                    <div class="pt-4 border-t border-slate-900 px-3">
                        <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2.5 rounded-full bg-brand-500/10 text-brand-400 border border-brand-500/20 hover:bg-brand-500/20 transition-all text-sm font-semibold">Say Hello</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="py-12 border-t border-slate-800/50 bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center">
                <div class="flex space-x-6 mb-8">
                    <!-- Email -->
                    <a href="mailto:siddiquezabir2020@gmail.com" title="siddiquezabir2020@gmail.com" class="text-slate-400 hover:text-brand-400 transition-colors p-2 glass-card rounded-full hover:-translate-y-1">
                        <span class="sr-only">Email</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </a>
                    <!-- GitHub -->
                    <a href="https://github.com/zabir4752" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white transition-colors p-2 glass-card rounded-full hover:-translate-y-1">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/zabir-bin-abu-bakar-584542332/" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-brand-500 transition-colors p-2 glass-card rounded-full hover:-translate-y-1">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
                <p class="text-sm text-slate-500 font-mono text-center">
                    Designed & Built by <span class="text-slate-300">Zabir Bin Abu Bakar</span><br>
                    &copy; {{ date('Y') }} All rights reserved.
                </p>
            </div>
        </footer>
        
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Mobile Menu Toggle logic
                const mobileMenuButton = document.getElementById("mobile-menu-button");
                const mobileMenu = document.getElementById("mobile-menu");
                const hamburgerIcon = document.getElementById("hamburger-icon");
                const closeIcon = document.getElementById("close-icon");
                
                if (mobileMenuButton && mobileMenu) {
                    mobileMenuButton.addEventListener("click", function() {
                        const isHidden = mobileMenu.classList.contains("hidden");
                        if (isHidden) {
                            mobileMenu.classList.remove("hidden");
                            hamburgerIcon.classList.add("hidden");
                            closeIcon.classList.remove("hidden");
                        } else {
                            mobileMenu.classList.add("hidden");
                            hamburgerIcon.classList.remove("hidden");
                            closeIcon.classList.add("hidden");
                        }
                    });
                }

                // Typewriter effect
                const text = "Aspiring Data Scientist & Machine Learning Engineer";
                const element = document.getElementById("typewriter");
                if (!element) return;
                
                element.innerHTML = "";
                let i = 0;
                
                // Slight delay before typing starts
                setTimeout(() => {
                    function typeWriter() {
                        if (i < text.length) {
                            element.innerHTML += text.charAt(i);
                            i++;
                            setTimeout(typeWriter, 50); // typing speed
                        }
                    }
                    typeWriter();
                }, 1000);
            });
        </script>
    </body>
</html>
