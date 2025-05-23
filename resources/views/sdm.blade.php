@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Data Dosen
        </h1>
        <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
            Dosen berkompeten dibidangnya
        </p>
        @if ($lectures->isEmpty())
            <div class="text-center text-xneutral-300 font-montserrat font-medium text-sm sm:text-base mt-10">
                No data available
            </div>
        @else
            <div class="mt-10 space-y-11">
                @foreach ($lectures as $lecture)
                    <div class="flex flex-col items-center sm:flex-row gap-8 sm:gap-16">
                        <img class="sm:col-span-2" src="{{ asset('storage/' . $lecture->image) }}"
                            alt="{{ $lecture->name }}" />
                        <div class="sm:col-span-10 font-montserrat">
                            <h3 class="text-base sm:text-lg font-semibold text-primary-200">
                                {{ $lecture->name }}
                            </h3>
                            <table class="table-auto sm:table-fixed font-medium text-xs sm:text-sm text-xneutral-300 mt-5">
                                <tbody>
                                    <tr>
                                        <td class="w-24 sm:w-48 py-1">NIDN</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->nidn }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 sm:w-48 py-1">Pendidikan</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>
                                            {{ $lecture->education }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 sm:w-48 py-1">Jabatan</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->position }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 sm:w-48 py-1">Email</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 sm:w-48 py-1">Topik</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->topic }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </article>

    <article class="container mt-[150px]">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Tenaga Kependidikan
        </h1>
        <p class="text-xneutral-200 font-montserrat text-sm sm:text-base font-semibold">
            Tendik B-University
        </p>
        @if ($admins->isEmpty())
            <div class="text-center text-xneutral-300 font-montserrat font-medium text-sm sm:text-base mt-10">
                No data available
            </div>
        @else
            <div class="mt-10 space-y-11">
                @foreach ($admins as $admin)
                    <div class="flex flex-col items-center sm:flex-row gap-8 sm:gap-16">
                        <img class="sm:col-span-2" src="{{ asset('storage/' . $admin->image) }}"
                            alt="{{ $admin->name }}" />
                        <div class="sm:col-span-10 font-montserrat">
                            <h3 class="text-base sm:text-lg font-semibold text-primary-200">
                                {{ $admin->name }}
                            </h3>
                            <table
                                class="table-fixed w-full sm:table-fixed font-medium text-xs sm:text-sm text-xneutral-300 mt-5">
                                <tbody>
                                    <tr>
                                        <td class="w-24 sm:w-48 py-1">NIP</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $admin->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 sm:w-48 py-1">Jabatan</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $admin->position }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </article>

@endsection
