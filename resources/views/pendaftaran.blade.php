@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Pendaftaran
        </h1>
        <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
            Bergabung bersama kami untuk Masa Depan yang gemilang
        </p>
        @if (session('success'))
            <div id="alert" style="background-color: #3b82f5;"
                class="flex items-center p-4 mb-4 text-sm text-white bg-green-500 rounded-lg" role="alert">
                <svg class="w-5 h-5 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414L9 14.414l-3.707-3.707a1 1 0 00-1.414 1.414l4.414 4.414a1 1 0 001.414 0l8.414-8.414a1 1 0 00-1.414-1.414z"
                        clip-rule="evenodd" />
                </svg>
                <p>{{ session('success') }}</p>
            </div>

            <script>
                // Menghilangkan alert setelah 3 detik dengan animasi
                setTimeout(function() {
                    var alert = document.getElementById('alert');
                    if (alert) {
                        alert.style.opacity = '0';
                        alert.style.transition = 'opacity 0.5s ease';
                        setTimeout(function() {
                            alert.style.display = 'none';
                        }, 500);
                    }
                }, 3000);
            </script>
        @endif


        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data"
            class="space-y-6 mt-[70px]">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 md:gap-[124px] font-montserrat">
                <div class="space-y-10">
                    <div class="flex flex-col gap-3">
                        <label for="nama-lengkap" class="font-semibold text-sm text-xneutral-400">Nama Lengkap
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="text" id="nama-lengkap" name="full_name" placeholder="Masukan Nama Lengkap Anda"
                            required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="email" class="font-semibold text-sm text-xneutral-400">Email
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="email" id="email" name="email" placeholder="Masukan Email Anda" required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="jalur" class="font-semibold text-sm text-xneutral-400">Jalur
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select name="admission_pathway_id" required
                                class="border w-full peer placeholder:font-semibold appearance-none placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                @foreach ($admissionPathways as $pathway)
                                    <option value="{{ $pathway->id }}">{{ $pathway->name }}</option>
                                @endforeach
                            </select>
                            {{-- <select id="jalur" name="admission_pathway" required
                                class="border w-full peer placeholder:font-semibold appearance-none placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                <option class="font-montserrat text-xneutral-300" value="KIP-K">
                                    KIP-K
                                </option>
                                <option class="font-montserrat text-xneutral-300" value="Reguler">
                                    Reguler
                                </option>
                            </select> --}}
                            <i
                                class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="foto" class="font-semibold text-sm text-xneutral-400">Foto
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex gap-3 items-center w-full">
                            <input type="file" id="foto" name="image" accept="image/*" required
                                placeholder="Masukkan foto Anda"
                                class="border w-full file:hidden placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                            <button type="button"
                                class="border text-nowrap bg-primary-200 text-xneutral-0 font-semibold py-[18px] px-6 rounded-lg">
                                Upload Foto
                            </button>
                        </div>
                    </div>
                </div>

                <div class="space-y-10">
                    <div class="flex flex-col gap-3">
                        <label for="nama-panggilan" class="font-semibold text-sm text-xneutral-400">Nama Panggilan
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="text" id="nama-panggilan" name="name" placeholder="Masukan Nama Panggilan Anda"
                            required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="nomor-hp" class="font-semibold text-sm text-xneutral-400">Nomor HP
                            <span class="text-secondary-error">*</span>
                        </label>
                        <input type="tel" id="nomor-hp" name="phone" placeholder="Masukan Nomor HP Anda" required
                            class="border placeholder:font-semibold placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg" />
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="program-studi-1" class="font-semibold text-sm text-xneutral-400">Program Studi 1
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select name="studyprogram_1_id" required
                                class="border w-full peer placeholder:font-semibold appearance-none placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">>
                                @foreach ($studyPrograms as $program)
                                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                            <i
                                class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <label for="program-studi-2" class="font-semibold text-sm text-xneutral-400">Program Studi 2
                            <span class="text-secondary-error">*</span>
                        </label>
                        <div class="flex items-center">
                            <select name="studyprogram_2_id" required
                                class="border w-full peer placeholder:font-semibold appearance-none placeholder:text-xneutral-100 border-xneutral-100 py-[18px] px-6 rounded-lg">
                                @foreach ($studyPrograms as $program)
                                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                                @endforeach
                            </select>
                            <i
                                class="bi bi-chevron-down pointer-events-none -ml-8 peer-focus:rotate-180 transition-all"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-12 md:gap-[124px] !mt-[60px]">
                <a href="{{ route('index') }}"
                    class="px-6 py-[14px] w-full text-center font-montserrat text-neutral-0 bg-white border text-lg font-semibold border-primary-200 text-primary-200 rounded-full">
                    Kembali Ke Homepage
                </a>
                <button type="submit"
                    class="px-6 py-[14px] text-center w-full font-montserrat text-neutral-0 bg-primary-200 border text-lg font-semibold border-primary-200 text-xneutral-0 rounded-full">
                    Daftar
                </button>
            </div>
        </form>
    </article>
@endsection
