@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Pengumuman
        </h1>
        <p class="text-xneutral-200 text-sm sm:text-base font-montserrat font-semibold">
            Dapatkan Pengumuman terbaru
        </p>
        @if ($announcements->isEmpty())
            <div class="text-center text-xneutral-300 font-montserrat font-medium text-sm sm:text-base">
                No data available
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
                @foreach ($announcements as $list)
                    <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                        <a href=""
                            class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2 mb-4">
                            {{ $list->title }}
                        </a>
                        <div class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5">
                            {!! Str::limit($list->content, 150, '...') !!}
                        </div>
                        <p class="font-montserrat text-xs font-semibold text-xneutral-200">
                            {{ \Carbon\Carbon::parse($list->created_at)->format('d/m/y') }}
                        </p>
                    </div>
                @endforeach
        @endif
        </div>
    </article>
@endsection
