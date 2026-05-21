@extends('layouts.app')

@section('content')
<!-- Contact Section -->
            <section id="contact" class="pt-32 pb-24 min-h-screen relative z-10 border-t border-slate-800/50">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Get In Touch</h2>
                    <p class="text-slate-400 text-lg mb-6 max-w-2xl mx-auto">
                        Whether you have a question, a project idea, or just want to discuss AI, ML, and the future of automotive tech, my inbox is always open.
                    </p>
                    <a href="mailto:siddiquezabir2020@gmail.com" class="inline-flex items-center gap-2 text-brand-400 hover:text-brand-300 transition-colors text-sm font-mono mb-10">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        siddiquezabir2020@gmail.com
                    </a>
                    
                    <!-- Success Message Alert -->
                    @if(session('success'))
                        <div class="mb-8 p-4 rounded-xl border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-sm flex items-center max-w-2xl mx-auto">
                            <span class="flex w-2.5 h-2.5 rounded-full bg-emerald-500 mr-3"></span>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="glass-card rounded-2xl p-8 md:p-12 text-left max-w-2xl mx-auto border border-slate-700/50 shadow-2xl">
                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full bg-slate-900/50 border @error('name') border-red-500/50 focus:border-red-500 focus:ring-red-500 @else border-slate-700 focus:border-brand-500 focus:ring-brand-500 @enderror rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-1 transition-colors" placeholder="John Doe">
                                    @error('name')
                                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full bg-slate-900/50 border @error('email') border-red-500/50 focus:border-red-500 focus:ring-red-500 @else border-slate-700 focus:border-brand-500 focus:ring-brand-500 @enderror rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-1 transition-colors" placeholder="john@example.com">
                                    @error('email')
                                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Message</label>
                                <textarea name="message" id="message" rows="4" class="w-full bg-slate-900/50 border @error('message') border-red-500/50 focus:border-red-500 focus:ring-red-500 @else border-slate-700 focus:border-brand-500 focus:ring-brand-500 @enderror rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-1 transition-colors resize-none" placeholder="Hello Zabir, I'd like to talk about...">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="w-full bg-brand-600 hover:bg-brand-500 text-white font-medium py-3.5 rounded-lg transition-colors flex items-center justify-center cursor-pointer">
                                Send Message
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
@endsection