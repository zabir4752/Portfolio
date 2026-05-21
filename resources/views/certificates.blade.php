@extends('layouts.app')

@section('content')
<!-- Certificates Section -->
<section id="certificates" class="pt-32 pb-24 min-h-screen relative z-10">
    <!-- Background glow -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/3 left-1/4 w-96 h-96 bg-brand-500/5 rounded-full mix-blend-screen filter blur-[120px]"></div>
        <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-indigo-500/5 rounded-full mix-blend-screen filter blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col items-center mb-16 text-center">
            <div class="inline-flex items-center px-3 py-1 rounded-full border border-brand-500/30 bg-brand-500/10 text-brand-400 text-xs font-mono mb-6">
                Verified Credentials
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-4">
                Achievements & <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-indigo-400">Certifications</span>
            </h2>
            <p class="text-slate-400 max-w-2xl text-lg">
                A chronicle of specialized bootcamps, programming achievements, and academic credentials I have earned over my developmental journey.
            </p>
        </div>

        @php
            $certs = [
                [
                    'title' => 'Computer Vision & Deep Learning',
                    'subtitle' => 'Medical Data Analysis Bootcamp 2025',
                    'issuer' => 'Daffodil International University (CSE / HIRL)',
                    'desc' => 'Awarded for completing intensive training in Medical Data Analysis, leveraging advanced Deep Learning architectures and Computer Vision models to solve health informatics challenges.',
                    'image' => 'computer_vision.png'
                ],
                [
                    'title' => 'Unlock the Algorithm',
                    'subtitle' => 'Programming Contest Spring 2024',
                    'issuer' => 'DIU Computer Programming Club (CPC)',
                    'desc' => 'Awarded for successful participation in the Spring 2024 Programming Contest, demonstrating rapid analytical thinking, data structure expertise, and competitive coding capability.',
                    'image' => 'unlock_algorithm.png'
                ]
            ];
        @endphp

        <div class="grid md:grid-cols-2 gap-10 lg:gap-16">
            @foreach($certs as $index => $cert)
                <div class="relative group cursor-pointer" onclick="openLightbox('{{ asset('images/certificates/' . $cert['image']) }}', '{{ $cert['title'] }}')">
                    <!-- Glow Behind Card -->
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-500/10 to-indigo-500/10 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

                    <!-- Glassmorphic Card -->
                    <div class="relative glass-card rounded-3xl overflow-hidden border border-slate-700/40 bg-slate-900/40 hover:border-brand-500/30 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full">
                        
                        <!-- Image Container with Hover zoom and overlay -->
                        <div class="relative aspect-[4/3] bg-slate-950 overflow-hidden flex items-center justify-center p-4">
                            <img src="{{ asset('images/certificates/' . $cert['image']) }}" alt="{{ $cert['title'] }}" class="max-h-full max-w-full object-contain rounded-lg border border-slate-800/80 group-hover:scale-105 transition-all duration-700 shadow-lg">
                            <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-slate-950/0 transition-colors duration-500"></div>
                            
                            <!-- Glass magnifying badge -->
                            <div class="absolute bottom-6 right-6 p-3 rounded-full bg-slate-900/80 backdrop-blur-md border border-slate-700/80 text-brand-400 opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-md">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path></svg>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-8 flex flex-col flex-grow border-t border-slate-800/60 bg-slate-900/30">
                            <div class="mb-4">
                                <span class="text-xs font-mono text-brand-400 tracking-wider uppercase">{{ $cert['issuer'] }}</span>
                                <h3 class="text-2xl font-bold text-white mt-1 group-hover:text-brand-300 transition-colors duration-300">{{ $cert['title'] }}</h3>
                                <p class="text-sm font-medium text-indigo-400/90 font-mono mt-1">{{ $cert['subtitle'] }}</p>
                            </div>
                            <p class="text-slate-400 text-sm leading-relaxed flex-grow">
                                {{ $cert['desc'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 z-50 bg-slate-950/90 backdrop-blur-lg flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-500">
    <!-- Close Area -->
    <div class="absolute inset-0 cursor-zoom-out" onclick="closeLightbox()"></div>
    
    <div class="relative max-w-5xl w-full max-h-[85vh] flex flex-col items-center z-10">
        <!-- Close Button -->
        <button onclick="closeLightbox()" class="absolute -top-12 right-0 p-2.5 rounded-full bg-slate-900/80 border border-slate-700 text-slate-400 hover:text-white hover:border-slate-500 transition-all shadow-md cursor-pointer">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <img id="lightbox-img" src="" alt="" class="max-w-full max-h-[80vh] object-contain rounded-xl border border-slate-800 shadow-2xl">
        <h4 id="lightbox-caption" class="text-xl font-bold text-white mt-6 tracking-wide"></h4>
    </div>
</div>

<script>
    function openLightbox(src, title) {
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        const caption = document.getElementById('lightbox-caption');

        img.src = src;
        img.alt = title;
        caption.textContent = title;

        lightbox.classList.remove('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'hidden'; // Lock background scroll
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = ''; // Unlock background scroll
    }
    
    // Press ESC to close Lightbox
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeLightbox();
        }
    });
</script>
@endsection
