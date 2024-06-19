<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="base-url" content="{{ url('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/assets/img/logo.png" type="image/x-icon">
    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon">
    <title>Wedding Of {{ $data['pengantinWanita']['namaPanggilan'] }} & {{ $data['pengantinPria']['namaPanggilan'] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        @font-face {
            font-family: 'Halimun';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('./assets/fonts/Halimun.ttf') format('truetype');
        }
    </style>
    @vite('resources/css/template1.css')
</head>
<body id="body" class="box-border w-screen flex items-center justify-center overflow-x-hidden">
    <div id="nav" class="w-full fixed top-3 z-[9999] flex flex-col items-end justify-end" style="display: none;">
        <div class="mb-3">
            <audio id="audio" tabindex="0" preload="auto" class="music-audio">
                <source src="{{ $data['backsound'] }}">
            </audio>
            <button id="btn-audio" class="flex items-center justify-center rounded-full p-3 mr-7 border text-neutral-600 bg-neutral-300" data-status="1">
                <svg id="play-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 putar-kiri">
                    <path d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM18.584 5.106a.75.75 0 011.06 0c3.808 3.807 3.808 9.98 0 13.788a.75.75 0 11-1.06-1.06 8.25 8.25 0 000-11.668.75.75 0 010-1.06z" />
                <path d="M15.932 7.757a.75.75 0 011.061 0 6 6 0 010 8.486.75.75 0 01-1.06-1.061 4.5 4.5 0 000-6.364.75.75 0 010-1.06z" />
                </svg>

                <svg id="mute-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6" style="display:none;">
                    <path d="M13.5 4.06c0-1.336-1.616-2.005-2.56-1.06l-4.5 4.5H4.508c-1.141 0-2.318.664-2.66 1.905A9.76 9.76 0 001.5 12c0 .898.121 1.768.35 2.595.341 1.24 1.518 1.905 2.659 1.905h1.93l4.5 4.5c.945.945 2.561.276 2.561-1.06V4.06zM17.78 9.22a.75.75 0 10-1.06 1.06L18.44 12l-1.72 1.72a.75.75 0 001.06 1.06l1.72-1.72 1.72 1.72a.75.75 0 101.06-1.06L20.56 12l1.72-1.72a.75.75 0 00-1.06-1.06l-1.72 1.72-1.72-1.72z" />
                </svg>
            </button>
        </div>
        <div class="">
            <button id="btn-autoscroll" class="flex items-center justify-center rounded-full p-3 mr-7 border text-neutral-600 bg-neutral-300" data-status="1">
                <svg xmlns="http://www.w3.org/2000/svg" id="autoscroll-icon" data-name="Layer 1" viewBox="0 0 24 24" class="w-6 h-6 fill-current"><path d="M12,24c-1.02,0-2.03-.39-2.81-1.16l-6.37-6.77c-.85-.85-1.1-2.09-.63-3.22,.47-1.13,1.52-1.84,2.75-1.85h2.06V3c0-1.65,1.35-3,3-3h4c1.65,0,3,1.35,3,3V11h2.06c1.23,0,2.28,.71,2.75,1.85,.47,1.13,.22,2.38-.65,3.24,0,0-6.34,6.74-6.35,6.75-.77,.77-1.79,1.16-2.81,1.16Z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" id="stopscroll-icon" data-name="Layer 1" viewBox="0 0 24 24" class="w-6 h-6 fill-current" style="display:none;"><path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm0,21c-4.962,0-9-4.038-9-9S7.038,3,12,3s9,4.038,9,9-4.038,9-9,9Zm4-11v4c0,1.105-.895,2-2,2h-4c-1.105,0-2-.895-2-2v-4c0-1.105.895-2,2-2h4c1.105,0,2,.895,2,2Z"/></svg>
            </button>
        </div>
    </div>

    <div class="fixed top-0 left-0 w-screen h-screen bg-no-repeat bg-cover bg-center galery blur-sm" style="background-image: url({{ $data['background']['body'] }})"></div>
    <!-- Welcome Page -->

    <div id="cover" class="w-full lg:w-[480px] h-screen box-border overflow-hidden bg-no-repeat bg-cover bg-center relative z-[999]" style="background-image: url({{ $data['background']['cover'] }})">

        <div class="absolute w-full h-full box-border z-20 flex items-center justify-center">
            <div
                class="w-full h-full bg-white bg-no-repeat bg-cover bg-center flex items-center justify-between flex-col"
                style="background-image: url({{ $data['background']['cover'] }})"
            >
                <div class="w-full pt-24 flex flex-col items-center justify-center text-white">
                    <h1 class="uppercase text-xl mb-px tracking-[5px] lg:tracking-[10px]">Wedding invitation</h1>
                </div>

                <div class="w-full flex items-center justify-center flex-col text-white pb-10">
                    <div class="mb-5">
                        <div class="text-center text-5xl font-normal mb-5 font-dmsans tracking-[3px]">{{ $data['pengantinWanita']['namaPanggilan'] }} & {{ $data['pengantinPria']['namaPanggilan'] }}</div>
                        <div class="w-full lg:w-96 h-px bg-white mb-3"></div>
                        <div class="text-center text-xl tracking-[5px] font-dmsans">{{ $data['waktu']['tgl'] }} <span>.</span> {{ $data['waktu']['bulan'] }} <span>.</span> {{ $data['waktu']['tahun'] }}</div>
                    </div>

                    <div class="w-64 lg:w-96 flex items-center justify-center flex-col bg-white/10 rounded-lg backdrop-blur py-3 mb-5">
                        <div class="font-light text-xs mb-4">Kepada Bapak/Ibu/Saudara/I</div>
                        <div class="font-bold font-dmsans">{{ $data['to'] }}</div>
                    </div>

                    <div id="open-invite" class="cursor-pointer uppercase text-sm font-light tracking-[2px] font-dmsans text-white text-capitalize py-3 px-8 bg-[#6c757d] flex justify-center items-center space-x-2">
                        <span>Open Invitation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="main-content" class="w-full lg:w-[480px] box-border overflow-hidden bg-no-repeat bg-cover bg-center relative z-[999] bg-white bg-opacity-80 backdrop-blur-md" style="display: none;">
        <section
            id="cover-main"
            class="w-full h-screen box-border overflow-hidden bg-no-repeat bg-cover bg-center relative flex justify-end flex-col"
            style="background-image: url({{ $data['background']['depan'] }})"
        >
            <div class="w-full h-full absolute bg-black bg-opacity-30"></div>
            <div class="w-full p-6 box-border text-white relative z-10">
                <div class="w-full" data-aos="fade-up">
                    <p class="text-5xl mb-5 font-dancing font-semibold">{{ $data['pengantinWanita']['namaPanggilan'] }} &amp; {{ $data['pengantinPria']['namaPanggilan'] }}</p>
                </div>
                <div class="w-full mb-5" data-aos="fade-up">
                    <p class="text-xl mb-2">وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُوْنَ</p>
                    <p class="text-white italic leading-7 font-light font-family-caveat mb-5">"Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah)." (QS. Az Zariyat: 49).</p>
                    <div class="text-lg tracking-[5px] font-dmsans">{{ $data['waktu']['tgl'] }} <span>.</span> {{ $data['waktu']['bulan'] }} <span>.</span> {{ $data['waktu']['tahun'] }}</div>
                </div>
            </div>
        </section>

        <section id="couple" class="w-full flex flex-col box-border items-center mt-20">
            <h1 data-aos="fade-right" id="title-couple" class="font-family-halimun text-3xl capitalize text-[#8a8a8a]">calon pengantin</h1>

            <div id="pengantin-putri" data-aos="fade-right" class="flex flex-col items-center w-full p-4 mb-10">
                <div class="w-[60%] box-border relative flex items-center justify-center">
                    <div class="w-full box-border overflow-hidden rounded-full couple-img">
                        <img src="{{ $data['pengantinWanita']['foto'] }}" alt="" class="w-full rounded-full">
                    </div>
                    <img src="/assets/img/bingkai.png" alt="" class="w-full absolute top-0">
                </div>
                
                <div class="text-center text-[#404345]">
                    <h1 class="font-dancing text-5xl font-bold text-[#8a8a8a] mb-2">{{ $data['pengantinWanita']['namaLengkap'] }}</h1>
                    <p class="font-semibold text-xl">Putri dari</p>
                    <p class="text-xl">
                        {{ $data['pengantinWanita']['ayah'] }}
                        <br>
                        &
                        <br>
                        {{ $data['pengantinWanita']['ibu'] }}
                    </p>
                    <p>{{ $data['pengantinWanita']['alamat'] }}</p>
                </div>
            </div>

            <div data-aos="fade-up" id="separator-pengantin" class="separator-calon w-full text-center text-4xl p-10 py-14 box-border text-[#8a8a8a] font-family-halimun bg-cover bg-center bg-no-repeat" style="background-image: url('/assets/img/separator.png')">
                &
            </div>

            <div id="pengantin-putra" data-aos="fade-left" class="flex flex-col items-center w-full p-4 mb-10">
                <div class="w-[60%] box-border relative flex items-center justify-center">
                    <div class="w-full box-border overflow-hidden rounded-full couple-img">
                        <img src="{{ $data['pengantinPria']['foto'] }}" alt="" class="w-full rounded-full">
                    </div>
                    <img src="/assets/img/bingkai.png" alt="" class="w-full absolute top-0">
                </div>
                
                <div class="text-center text-[#404345]">
                    <h1 class="font-dancing text-5xl font-bold text-[#8a8a8a] mb-2">{{ $data['pengantinPria']['namaLengkap'] }}</h1>
                    <p class="font-semibold text-xl">Putra dari</p>
                    <p class="text-xl">
                        {{ $data['pengantinPria']['ayah'] }}
                        <br>
                        &
                        <br>
                        {{ $data['pengantinPria']['ibu'] }}
                    </p>
                    <p>{{ $data['pengantinPria']['alamat'] }}</p>
                </div>
            </div>
        </section>

        <section id="galery-couple" class="w-full box-border overflow-hidden mt-10 p-4 text-[#404345] mt-20">
            <h1 data-aos="fade-top" class="opacity-0 font-family-halimun text-center text-2xl py-6">Moment Berharga</h1>
            <p data-aos="fade-top" class="opacity-0 text-[#404345] text-center mb-10">
                "Menciptakan kenangan adalah hadiah yang tak ternilai harganya. Kenangan akan bertahan seumur hidup, benda-benda hanya dalam waktu singkat."
            </p>
            <div data-aos="fade-up" class="w-full">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper mb-5">
                        @foreach($data['gallery'] as $item)
                        <div class="swiper-slide">
                            <div class="w-[480px] h-[480px] box-border overflow-hidden flex items-center justify-center">
                                <img src="{{ $item['link'] }}" class="w-full" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($data['gallery'] as $item)
                        <div class="swiper-slide">
                            <div class="w-[80px] h-[80px] box-border overflow-hidden flex items-center justify-center">
                                <img src="{{ $item['link'] }}" class="w-full" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section data-aos="fade-top" id="save-date" data-time="{{ $data['waktu']['tanggalLengkap'] }}" class="w-full box-border bg-[#8a8a8a] bg-cover bg-no-repeat bg-center mt-20 coutdown" style="background-image: url({{ $data['background']['savedate'] }})">
            <div class="bg-black bg-opacity-50 py-10">
                <h1 id="title-date" class="font-family-halimun text-center text-white text-3xl py-6 mb-10">Save The Date</h1>

                <div id="box-date" class="w-full text-center box-border text-white mb-10">
                    <div class="w-full grid grid-cols-4 gap-4 px-4">
                        <div class="w-full box-border flex items-center justify-center flex-col bg-white/20 backdrop-blur-md rounded-lg py-4">
                            <div id="hari" class="text-2xl font-semibold">21</div>
                            <div class="text-xl">Hari</div>
                        </div>
                        <div class="w-full box-border flex items-center justify-center flex-col bg-white/20 backdrop-blur-md rounded-lg py-4">
                            <div id="jam" class="text-2xl font-semibold">18</div>
                            <div class="text-xl">Jam</div>
                        </div>
                        <div class="w-full box-border flex items-center justify-center flex-col bg-white/20 backdrop-blur-md rounded-lg py-4">
                            <div id="menit" class="text-2xl font-semibold">20</div>
                            <div class="text-xl">Menit</div>
                        </div>
                        <div class="w-full box-border flex items-center justify-center flex-col bg-white/20 backdrop-blur-md rounded-lg py-4">
                            <div id="detik" class="text-2xl font-semibold">21</div>
                            <div class="text-xl">Detik</div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex items-center justify-center border-y py-2 px-4 space-x-3">
                    <div class="text-center text-lg text-white font-family-caveat font-semibold">{{ $data['waktu']['tglText'] }}</div>
                    
                    <div class="w-px bg-white h-12"></div>

                    <a
                        href="{{ $data['waktu']['linkKalender'] }}"
                        class="inline-block box-border text-white border text-sm p-3 rounded font-semibold flex items-center justify-center space-x-1 bg-white/20 backdrop-blur-md" target="_blank">
                        <span>Simpan Acara Ke Kalender</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- rundown -->
        <section class="w-full box-border overflow-hidden mt-10 p-4 text-[#404345] mt-20">
            <!-- akad nikah -->
            <div data-aos="fade-right" class="w-full overflow-hidden rounded shadow-lg mb-10">
                <div class="w-full h-[240px]">
                    <img src="{{ $data['rundown']['akad']['foto'] }}" class="w-full" alt="">
                </div>
                <div class="flex items-stretch justify-center">
                    <div class="flex-none w-32 bg-emerald-400 text-center flex items-center justify-center">
                        <p class="text-white text-center text-5xl tracking-[5px] font-dancing" style="writing-mode: vertical-rl; transform: rotate(180deg);">Akad Nikah</p>
                    </div>
    
                    <div class="flex-auto text-gray-700 w-full flex items-center justify-center box-border flex-col p-6 bg-white">
                        <div class="font-semibold text-xl mb-2">{{ $data['rundown']['akad']['hari'] }}</div>
                        <div class="w-24 text-5xl font-bold py-1 border-y border-gray-500 text-center mb-2">{{ $data['rundown']['akad']['tgl'] }}</div>
                        <div class="text-base font-semibold mb-2">{{ $data['rundown']['akad']['bulan'] }} {{ $data['rundown']['akad']['tahun'] }}</div>
                        <div class="mb-4 font-semibold">{{ $data['rundown']['akad']['waktu'] }}</div>
                        <div>
                            <a href="{{ $data['rundown']['akad']['maps'] }}" class="inline-block w-6 h-6" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="w-full h-full fill-current"><path d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z"/></svg>
                            </a>
                        </div>
                        <div class="text-sm mb-4">Bertempat di</div>
                        <p class="text-center text-sm italic">
                            {{ $data['rundown']['akad']['lokasi'] }} <br>
                            {{ $data['rundown']['akad']['alamat'] }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- resepsi -->
            <div data-aos="fade-left" class="w-full overflow-hidden rounded shadow-lg mb-10">
                <div class="w-full h-[240px]">
                    <img src="{{ $data['rundown']['resepsi']['foto'] }}" class="w-full" alt="">
                </div>
                <div class="flex items-stretch justify-center">
                    <div class="flex-auto text-gray-700 w-full flex items-center justify-center box-border flex-col p-6 bg-white">
                        <div class="font-semibold text-xl mb-2">{{ $data['rundown']['resepsi']['hari'] }}</div>
                        <div class="w-24 text-5xl font-bold py-1 border-y border-gray-500 text-center mb-2">{{ $data['rundown']['resepsi']['tgl'] }}</div>
                        <div class="text-base font-semibold mb-2">{{ $data['rundown']['resepsi']['bulan'] }} {{ $data['rundown']['resepsi']['tahun'] }}</div>
                        <div class="mb-4 font-semibold">{{ $data['rundown']['resepsi']['waktu'] }}</div>
                        <div>
                            <a href="{{ $data['rundown']['resepsi']['maps'] }}" class="inline-block w-6 h-6" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="w-full h-full fill-current"><path d="M14,7a2,2,0,1,1-2-2A2,2,0,0,1,14,7Zm2.958,5.184L13.9,15.215a2.669,2.669,0,0,1-3.79,0L7.054,12.2A7.262,7.262,0,0,1,7.042,2.1a6.9,6.9,0,0,1,9.916,0A7.257,7.257,0,0,1,16.958,12.184ZM16,7a4,4,0,1,0-4,4A4,4,0,0,0,16,7Zm4.753,2.2a9.1,9.1,0,0,1-2.364,4.384l-3.078,3.053a4.667,4.667,0,0,1-3.3,1.371h0a4.665,4.665,0,0,1-3.3-1.366L5.648,13.619A9.2,9.2,0,0,1,3.283,9.308a5.066,5.066,0,0,0-1.745,1.083A4.946,4.946,0,0,0,0,14v4.075a5.013,5.013,0,0,0,3.6,4.8l2.87.9A4.981,4.981,0,0,0,7.959,24a5.076,5.076,0,0,0,1.355-.186l5.78-1.71a2.976,2.976,0,0,1,1.573,0l2.387.8A4,4,0,0,0,24,19.021V13.872A5.009,5.009,0,0,0,20.753,9.2Z"/></svg>
                            </a>
                        </div>
                        <div class="text-sm mb-4">Bertempat di</div>
                        <p class="text-center text-sm italic">
                            {{ $data['rundown']['resepsi']['lokasi'] }} <br>
                            {{ $data['rundown']['resepsi']['alamat'] }}
                        </p>
                    </div>
                    <div class="flex-none w-32 bg-emerald-400 text-center flex items-center justify-center">
                        <p class="text-white text-center text-5xl tracking-[5px] font-dancing" style="writing-mode: vertical-rl;">Resepsi</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- maps -->
        <section data-aos="zoom-in" id="maps" class="box-border overflow-hidden mt-10">
            <div class="rounded box-border overflow-hidden">

                <iframe src="{{ $data['maps']['embed'] }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <!-- kirim hadiah -->
        <section id="hadiah" class="w-full box-border overflow-hidden mt-10 p-4 text-[#404345]">
            <h1 data-aos="fade-up" class="font-family-halimun text-center text-2xl py-6">Kirim Hadiah</h1>
            <div data-aos="fade-up" class="text-center mb-5">
                <p>Tanpa Mengurangi Rasa Hormat,<br>Bagi Anda Yang Ingin Memberikan Tanda Kasih<br>Untuk Mempelai, Dapat Melalui Transfer Bank / E-Wallet</p>
            </div>

            @foreach($data['bank'] as $bank)
            <div data-aos="fade-up" class="w-full bg-white rounded-lg">
                <div class="w-full">
                    <div class="mt-3 sm:ml-4 sm:mt-0 sm:text-left">
                        <div class="w-full mb-2 text-sm text-gray-500">

                            <div class="overflow-hidden box-border w-full p-2">
                                <div class="w-full box-border flex justify-between items-center p-3 border-b mb-4">
                                    <div class="text-base font-bold">{{ $bank['pemilik'] }}</div>
                                    <img src="{{ $bank['icon'] }}" alt="" class="w-24">
                                </div>

                                <div class="box-border w-full px-3">
                                    <div class="font-medium mb-px">{{ $bank['bankname'] }}</div>
                                    <div class="flex items-center space-x-4 font-medium mb-px text-xl">
                                        <input id="no-rek" value="{{ $bank['norek'] }}" class="block font-semibold text-xl outline-none" />
                                        <button id="btn-copy-norek" class="inline-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="font-medium mb-2">{{ $bank['atasnama'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <a href="#" @click.prevent="isOpenModalHadiah = true" class="block p-2 text-center rounded bg-[#8a8a8a] text-white mb-2">Kirim Hadiah</a> -->
            <!-- <div class="italic text-center">Silakan melakukan konfirmasi kirim hadiah.</div> -->
        </section>
        <!-- end kirim hadiah -->

        <!-- ucapan -->
        <section id="kehadiran" class="w-full box-border overflow-hidden mt-10 text-white bg-cover bg-no-repeat" style="background-image: url({{ $data['background']['kehadiran'] }})">
            <div class="bg-black bg-opacity-50 py-10 px-4">
                <h1 data-aos="fade-up" class="font-family-halimun text-center text-2xl py-6">Reservation <span class="font-dmsans">(RSVP)</span></h1>
                <div data-aos="fade-up" class="text-center mb-5">
                    <p>Mohon Bapak / Ibu / Saudara / i dapat mengisi <br> Konfirmasi Kehadiran dibawah ini : </p>
                </div>

                <button data-aos="zoom-in" id="open-konfirmasi" class="block w-full p-2 text-center rounded bg-[#8a8a8a] text-white">Konfirmasi</button>
            </div>
        </section>
        <!-- end ucapan -->

        <!-- ucapan -->
        <section id="ucapan" class="w-full box-border overflow-hidden mt-10 px-4 py-8 text-[#404345]">
            <h1 data-aos="fade-up" class="font-family-halimun text-center text-2xl py-6">Kirim Ucapan</h1>
            <div data-aos="fade-up" class="box-border w-full h-[600px] bg-white relative flex flex-col">
                <div id="box-chats" class="flex-auto overflow-x-hidden overflow-y-auto w-full h-full box-border p-4 pb-10">

                    <!-- <div class="flex items-start justify-between mb-4">
                        <div class="flex-none w-12 h-12 rounded-full bg-gray-400 box-border overflow-hidden flex items-center justify-center font-bold text-white text-lg mr-2">HD</div>
                        <div class="relative w-full bg-neutral-200 rounded-lg box-border p-2 pb-4 px-3 pr-5 text-sm relative">
                            <div class="arrow rotate-45"></div>
                            <div class="text-black font-bold text-black text-base">selamat</div>
                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quod.</div>
                            <div class="absolute bottom-0 right-0 px-2 text-[10px] text-black">10/09 06:10</div>
                        </div>
                    </div> -->

                </div>

                <div class="flex-none w-full h-20 border-t border-gray-200 bg-white box-border p-4 flex items-center justify-center">
                    <button id="btn-show-message" class="rounded-full w-full p-2 bg-neutral-200 font-semibold text-black">Tulis Ucapan</button>
                </div>
            </div>
        </section>
        <!-- end ucapan -->

        <footer id="footer" class="box-border w-full">
            <div class="box-border w-full rounded overflow-hidden">
                <div class="box-border w-full overflow-hidden p-4" style="background: linear-gradient(180deg, transparent 0, transparent 40%, #fff);">
                    <div data-aos="fade-up" class="text-center mb-5">
                        <p class="text-center text-[#404345] italic">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak / Ibu / Saudara / i. berkenan hadir untuk memberikan do'a restunya kami ucapkan terimakasih</p>
                    </div>
    
                    <div data-aos="fade-up" class="mt-5 text-center text-[#404345] italic">
                        <div class="font-semibold">Hormat Kami</div>
                        <div>Keluarga Besar {{ $data['pengantinWanita']['ayah'] }} & {{ $data['pengantinWanita']['ibu'] }}</div>
                        <div>Keluarga Besar {{ $data['pengantinPria']['ayah'] }} & {{ $data['pengantinPria']['ibu'] }}</div>
                        <div>{{ $data['pengantinWanita']['namaLengkap'] }}</div>
                        <div>{{ $data['pengantinPria']['namaLengkap'] }}</div>
                    </div>
    
                    <div class="w-full relative flex items-center justify-center h-24" data-aos="fade-up">
                        <!-- <div class="w-full h-px bg-gray-400 absolute left-0 z-[-99]"></div> -->
                        <div class="inline-block text-5xl mb-5 font-dancing font-semibold text-gray-500 p-4">{{ $data['pengantinWanita']['namaPanggilan'] }} &amp; {{ $data['pengantinPria']['namaPanggilan'] }}</div>
                    </div>
                </div>
            </div>

            <div class="w-full py-20 box-border bg-white">
                <div class="w-full flex items-center justify-center flex-col text-gray-600">
                    <div class="font-dmsans tracking-[5px] mb-3">Powered By</div>
                    <div class="font-dmsans font-bold tracking-[2px] text-xl mb-5">PiiArt</div>
                    <div class="w-54 flex flex-col items-start justify-start">
                        <!-- wa -->
                        <a href="https://wa.me/6282333879490" class="flex items-center justify-center mb-3" target="_blank">
                            <div class="flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" class="w-5 h-5 fill-current">
                                    <g id="WA_Logo">
                                        <g>
                                            <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <div class="text-base">+62 823-3387-9490</div>
                        </a>

                        <a href="https://instagram.com/undanganmurahbojonegoro?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class="flex items-center justify-center mb-3" target="_blank">
                            <div class="flex items-center justify-center mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" class="w-5 h-5 fill-current">
                                    <g>
                                        <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z"/>
                                        <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z"/>
                                        <circle cx="18.406" cy="5.594" r="1.44"/>
                                    </g>
                                </svg>
                            </div>

                            <div class="text-base">@PiiArt</div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <div id="modal-message" class="w-full fixed top-0 left-0 bottom-0 right-0 z-[9999] flex flex-col items-end justify-end lg:items-center lg:justify-center bg-white/20 backdrop-blur-sm" style="display: none;">
        <div class="w-full lg:w-[480px] box-border bg-white p-6">
            <form action="#" id="form-submit-message">
                <div class="w-full mb-2">
                    <input id="message-fullname" type="text" name="fullname" placeholder="Nama Lengkap" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-blue-200 focus:shadow-outline">
                </div>

                <div class="w-full mb-2">
                    <div class="italic text-xs text-gray-200">Optional</div>
                    <textarea id="message-alamat" name="alamat" type="text" placeholder="Alamat" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-blue-200 focus:shadow-outline"></textarea>
                </div>

                <div class="w-full mb-2">
                    <textarea id="message-body" name="body" rows="5" wrap="soft" type="text" placeholder="Ketikkan Sesuatu" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-blue-200 focus:shadow-outline"></textarea>
                </div>

                <div class="w-full box-border flex space-x-5 mt-2">
                    <button type="submit" class="rounded bg-green-400 text-white block w-full p-2">Kirim</button>
                    <button id="btn-cancel-message" type="button" class="rounded bg-red-400 text-white block w-full p-2">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <div id="modal-konfir-hadir" class="w-full fixed top-0 left-0 bottom-0 right-0 z-[9999] flex flex-col items-end justify-end lg:items-center lg:justify-center bg-white/20 backdrop-blur-sm" style="display: none;">
        <div class="w-full lg:w-[480px] box-border bg-white p-6">
            <form action="#" id="form-submit-konfir">
                <div class="text-base font-semibold leading-6 text-gray-900 text-center">Konfirmasi Kehadiran</div>
                <div class="mt-2">
                    <p class="text-sm text-gray-500 mb-2 text-center">Silahkan isi form berikut untuk konfirmasi kehadiran.</p>
                </div>
                <div class="w-full mb-2">
                    <input id="konfirmasi-fullname" name="konfirmasiNama" type="text" placeholder="Nama Lengkap" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-blue-200 focus:shadow-outline">
                </div>
                <div class="w-full mb-2 text-sm text-gray-500">
                    <div class="w-full mb-2">
                        Konfirmasi Kehadiran
                    </div>
                    <div class="w-full flex space-x-2 items-center mb-2">
                        <input type="radio" value="1" name="konfirmasiHadir"> <span>Hadir</span>
                    </div>
                    <div class="w-full flex space-x-2 items-center mb-2">
                        <input type="radio" value="0" name="konfirmasiHadir"> <span>Tidak</span>
                    </div>
                </div>

                <div class="w-full box-border flex space-x-5 mt-2">
                    <button type="submit" class="rounded bg-green-400 text-white block w-full p-2">Kirim</button>
                    <button id="btn-cancel-konfir" type="button" class="rounded bg-red-400 text-white block w-full p-2">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    @vite('resources/js/template1.js')
</body>
</html>