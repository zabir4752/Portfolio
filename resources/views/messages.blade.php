@extends('layouts.app')

@section('content')
<section class="pt-32 pb-24 min-h-screen relative z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="flex items-center justify-between mb-10">
            <div>
                <span class="text-xs font-mono text-brand-400 uppercase tracking-widest">Admin Panel</span>
                <h2 class="text-3xl font-extrabold text-white mt-1">Contact Messages</h2>
            </div>
            <span class="px-4 py-1.5 bg-brand-500/10 text-brand-400 border border-brand-500/20 rounded-full text-sm font-mono">
                {{ $contacts->count() }} total
            </span>
        </div>

        @if($contacts->isEmpty())
            <div class="glass-card rounded-2xl p-12 text-center border border-slate-800">
                <svg class="w-12 h-12 mx-auto text-slate-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <p class="text-slate-400">No messages yet.</p>
            </div>
        @else
            <div class="space-y-4">
                @foreach($contacts as $contact)
                <div class="glass-card rounded-2xl p-6 border border-slate-800/60 hover:border-slate-700 transition-all duration-300">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-4 pb-4 border-b border-slate-800/50">
                        <div>
                            <h3 class="text-white font-bold text-lg">{{ $contact->name }}</h3>
                            <a href="mailto:{{ $contact->email }}" class="text-brand-400 hover:text-brand-300 text-sm font-mono transition-colors">
                                {{ $contact->email }}
                            </a>
                        </div>
                        <span class="text-xs font-mono text-slate-500 bg-slate-900 border border-slate-800 px-3 py-1 rounded-lg flex-shrink-0">
                            {{ $contact->created_at->format('d M Y, h:i A') }}
                        </span>
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed whitespace-pre-line">{{ $contact->message }}</p>
                    <div class="mt-4 flex gap-3">
                        <a href="mailto:{{ $contact->email }}" class="inline-flex items-center gap-1.5 text-xs font-mono text-slate-400 hover:text-white bg-slate-800/60 border border-slate-700 rounded-lg px-3 py-1.5 transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            Reply
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

    </div>
</section>
@endsection
