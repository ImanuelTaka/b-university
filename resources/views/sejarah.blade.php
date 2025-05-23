@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Sejarah B-University
        </h1>
        <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
            Bersama mengembangkan pendidikan Negeri
        </p>
        @if ($historys->isEmpty())
            <div class="text-center text-xneutral-300 font-montserrat font-medium text-sm sm:text-base mt-10">
                No data available
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-8 mt-8">
                @foreach ($historys as $history)
                    <img src="{{ asset('storage/' . $history->image) }}" alt="Sejarah B-University"
                        class="w-full h-[600px] object-cover rounded-[30px] sm:col-span-5" />
                    <div class="font-montserrat font-medium text-sm sm:text-base text-justify sm:col-span-7 text-xneutral-300">
                        {!! $history->content !!}
                    </div>
                @endforeach
            </div>
        @endif
    </article>
@endsection
