@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
      <h1
        class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold"
      >
        Sejarah B-University
      </h1>
      <p
        class="text-xneutral-200 text-sm sm:text-base font-montserrat font-semibold"
      >
        Bersama mengembangkan pendidikan Negeri
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
        <div class="space-y-3">
          <h3
            class="font-montserrat text-base sm:text-lg font-semibold text-primary-200 text-center"
          >
            VISI
          </h3>
          <div
            class="text-lg sm:text-xl font-semibold font-montserrat text-xneutral-200 text-center uppercase"
          >
            {!! $visi ?? '"No data available"' !!}
          </div>
        </div>
        <div class="space-y-3">
          <h2
            class="font-montserrat text-base sm:text-lg font-semibold text-primary-200 text-center"
          >
            MISI
          </h2>
          <ol
            class="list-decimal pl-4 font-montserrat font-semibold text-xneutral-200 text-sm sm:text-base text-justify"
          >
            {!! str_replace(['<span style="white-space-collapse: preserve;">','</span>'],'',$misi) ?? '<li>No data available</li>' !!}
          </ol>
        </div>
      </div>

      <div
        class="grid grid-cols-1 sm:grid-cols-3 mt-10 border border-xneutral-100 rounded-2xl overflow-hidden"
      >
        <div class="p-[30px]">
          {!! $visimisi->about_1 !!}
        </div>
        <div>
          <img src="{{ asset('storage/' . $visimisiImg[0]) }}" alt="Inovatif" />
        </div>
        <div class="p-[30px]">
          {!! $visimisi->about_2 !!}
        </div>
        <div>
          <img src="{{ asset('storage/' . $visimisiImg[1]) }}" alt="Profesional" />
        </div>
        <div class="p-[30px]">
          {!! $visimisi->about_3 !!}
        </div>
        <div>
          <img src="{{ asset('storage/' . $visimisiImg[2]) }}" alt="Islami" />
        </div>
      </div>
    </article>
@endsection