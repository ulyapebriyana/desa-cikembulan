@extends('templates.master')

@section('content')
    <div class="mx-5 md:mx-16 mt-10 md:mt-24 mb-20">
        {{-- Info Administrasi --}}
        <div class="md:flex md:items-center md:justify-center gap-8 mt-4">
            <div class="w-full sm:max-w-xl mx-auto md:mx-0">
                <img class="mx-auto" src="{{ asset('images/informasi_illust_1.png') }}" alt="" data-aos="fade-up"
                    data-aos-easing="ease-in-out">
            </div>
            <div class="flex flex-col gap-4 mt-6 sm:mt-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                <h1 class="w-full md:max-w-lg text-center sm:text-left font-bold text-3xl sm:text-4xl text-[#2EB5F8]">
                    Informasi Administrasi Kependudukan
                </h1>
                <ol class="w-full list-decimal list-inside md:max-w-xl mt-4 text-lg text-gray-500 font-medium">
                    <li>Persyaratan Pembuatan Akte Kelahiran</li>
                    <li>Persyaratan Warga Pindah Datang</li>
                    <li>Persyaratan Surat Keterangan Domisili Perorangan</li>
                    <li>Persyaratan Perubahan Kartu Keluarga</li>
                    <li>Persyaratan Warga Pindah Keluar</li>
                    <li>Persyaratan Pengantar Nikah</li>
                    <li>Persyaratan Surat Keterangan Usaha</li>
                </ol>
            </div>
        </div>

        {{-- Info Pembangunan --}}
        <div class="md:flex md:items-center md:justify-center gap-8 mt-20 sm:mt-32">
            <div class="flex flex-col gap-4 mt-6 sm:mt-0">
                <h1 class="w-full md:max-w-lg text-center sm:text-left font-bold text-3xl sm:text-4xl text-[#2EB5F8]"
                    data-aos="fade-up" data-aos-easing="ease-in-out">
                    Pembangunan
                </h1>
                <h3 class="w-full md:max-w-md text-center sm:text-left font-bold text-xl sm:text-xl text-gray-600"
                    data-aos="fade-up" data-aos-easing="ease-in-out">
                    Desa Cikembulan melakukan pembangunan bersama dengan warga
                </h3>
                <div class="w-full md:max-w-lg text-justify mt-4 text-lg text-gray-500" data-aos="fade-up"
                    data-aos-easing="ease-in-out">
                    Perencanaan pembangunan Desa Cikembulan dibahas bersama dalam musyarah perencanaan pembangunan Desa.
                    Semua warga berhak untuk mengusulkan ide untuk terwujudnya Desa Cikembulan yang mandiri.
                </div>
                {{-- <a href="/" class="w-full text-center md:max-w-fit px-8 py-5 mt-8 font-bold uppercase text-white bg-[#2EB5F8] hover:bg-[#009AE7] transition duration-300 ease-in-out rounded-full" data-aos="fade-up" data-aos-easing="ease-in-out">
                    Pembangunan <i class="fa-sharp fa-solid fa-caret-right"></i>
                </a> --}}
            </div>
            <div class="w-full sm:max-w-xl mx-auto md:mx-0 mt-6 md:mt-0">
                <img class="mx-auto" src="{{ asset('images/informasi_illust_2.png') }}" alt="" data-aos="fade-up"
                    data-aos-easing="ease-in-out">
            </div>
        </div>

        {{-- divider --}}
        <div class="w-full sm:max-w-6xl my-24 mx-auto h-0.5 bg-[#2EB5F8]" data-aos="fade-up" data-aos-easing="ease-in-out">
        </div>

        {{-- Info Pelayanan Administrasi --}}
        <h1 class="capitalize text-2xl sm:text-3xl text-center font-bold text-[#2EB5F8]" data-aos="fade-up"
            data-aos-easing="ease-in-out">
            Pelayanan Administrasi Kependudukan
        </h1>
        <div class="w-full mx-auto flex justify-center">
            <div class="mt-6 pt-10 grid grid-cols-1 md:grid-cols-2 gap-8 sm:max-w-6xl">
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">A. Persyaratan Pembuatan Akte Kelahiran:</h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Surat Pengantar Ketua RT Setempat</li>
                        <li>KK Asli</li>
                        <li>Surat Bidan Asli atau SPTJM</li>
                        <li>Buku Nikah Asli</li>
                        <li>Materai 10.000 (2 lembar)</li>
                        <li>Fotocopy KTP Orang Tua Kandung</li>
                        <li>Fotocopy KTP Saksi (2 orang)</li>
                        <li>Fotocopy Rapot/Ijazah Terakhir</li>
                    </ul>

                    <h2 class="text-lg font-semibold text-gray-700 mt-4">B. Persyaratan Warga Pindah Datang:</h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Surat Pindah dari Daerah Asal</li>
                        <li>KK (Asli & Fotocopy)</li>
                        <li>Fotocopy KTP</li>
                        <li>Surat Pengantar Ketua RT Setempat</li>
                        <li>Buku Nikah Asli</li>
                        <li>Materai 10.000 (2 lembar)</li>
                        <li>Fotocopy Ijazah Terakhir</li>
                    </ul>

                    <h2 class="text-lg font-semibold text-gray-700 mt-4">C. Persyaratan Surat Keterangan Domisili
                        Perorangan:
                    </h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Surat Pengantar Ketua RT Setempat</li>
                        <li>Fotocopy KK</li>
                        <li>Fotocopy KTP</li>
                    </ul>

                    <h2 class="text-lg font-semibold text-gray-700 mt-4">D. Persyaratan Perubahan Kartu Keluarga:</h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Surat Pengantar Ketua RT Setempat</li>
                        <li>KK Asli</li>
                        <li>Fotocopy KTP yang mengalami perubahan (jika ada anggota keluarga baru: lampirkan Akte Kelahiran)
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">E. Persyaratan Warga Pindah Keluar:</h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Surat Pengantar Ketua RT Setempat</li>
                        <li>KK (Asli & Fotocopy)</li>
                        <li>Fotocopy KTP</li>
                        <li>Buku Nikah Asli Orang Tua</li>
                        <li>Materai 10.000 (1 lembar)</li>
                        <li>Alamat Yang Dituju (Nama Jalan/RT/RW/Dusun/Desa/Kec/Kab/Prov)</li>
                    </ul>

                    <h2 class="text-lg font-semibold text-gray-700 mt-4">F. Persyaratan Pengantar Nikah:</h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Surat Pengantar Ketua RT Setempat</li>
                        <li>Fotocopy KK</li>
                        <li>Fotocopy KTP</li>
                        <li>Fotocopy Ijazah SLTA</li>
                        <li>Fotocopy Akte Kelahiran</li>
                        <li>Fotocopy KK Orang Tua</li>
                        <li>Fotocopy KTP Calon Suami/Istri</li>
                        <li>Fotocopy KK Calon Suami/Istri</li>
                        <li>Fotocopy KTP Saksi (2 orang)</li>
                        <li>Fotocopy KTP Saksi Jenis Kelamin (jika sudah tidak ada orang tua)</li>
                        <li>Materai 10.000 (laki-laki 2 lembar, perempuan 5 lembar)</li>
                        <li>Fotocopy Akte Perceraian (Duda/Janda)</li>
                        <li>Pas Photo 2x3 2 lembar (latar biru)</li>
                    </ul>

                    <h2 class="text-lg font-semibold text-gray-700 mt-4">G. Persyaratan Surat Keterangan Usaha:</h2>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Surat Pengantar Ketua RT Setempat</li>
                        <li>Fotocopy KK</li>
                        <li>Fotocopy KTP</li>
                        <li>Foto Tempat Usaha</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
