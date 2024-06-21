<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // cewek
    public function index(Request $request)
    {
        $data = $this->nizar($request->to);

        return view('template1', ['data' => $data]);
    }

    public function nizar($toName)
    {
            // Nama Capeng Wanita : Anizarul Khoiriyah
        // Nama Capeng Pria : Adi Saputra
        // Nama Ortu Wanita : Moh Waras & Sumiati
        // Nama Ortu Pria : (Alm. Adiq) & Sariyam
        // Tanggal : 06-07-2024
        // Lokasi: Dusun jegreg rt 03 rw 1 desa kalitengah kec sugio lamongan
        // Jam: Siang-Malam
        // Link maps: Menyusul

        // - BRI: ADI SAPUTRA_177601006309503 // cowok
        // - MANDIRI: ANIZARUL KHOIRIYAH_1780006585992 // cewek

        // https://maps.app.goo.gl/Nph9mHambdhtUqvz5 // rumah cowok
        // https://maps.app.goo.gl/oHELGmZjwrepcoh39 // rumah cewek
        $galery = [
            ['nama' => 'gal1', 'link' => asset('assets/img/nizar/foto-1.jpg')],
            ['nama' => 'gal2', 'link' => asset('assets/img/nizar/foto-2.jpg')],
            ['nama' => 'gal3', 'link' => asset('assets/img/nizar/foto-3.JPG')],
            ['nama' => 'gal4', 'link' => asset('assets/img/nizar/foto-4.JPG')],
            ['nama' => 'gal5', 'link' => asset('assets/img/nizar/foto-5.jpg')],
            ['nama' => 'gal6', 'link' => asset('assets/img/nizar/foto-6.JPG')],
            ['nama' => 'gal7', 'link' => asset('assets/img/nizar/foto-7.jpg')],
            ['nama' => 'gal9', 'link' => asset('assets/img/nizar/foto-9.jpeg')],
            ['nama' => 'gal10', 'link' => asset('assets/img/nizar/foto-10.jpeg')],
        ];

        $data = [
            'title' => 'Wedding Of Adi & Nizar',
            'backsound' => asset('assets/audio/backsound_nizar.mp3'),
            'background' => [
                'body' => asset('assets/img/nizar/bg-cover.jpg'),
                'cover' => $galery[1]['link'],
                'depan' => asset('assets/img/nizar/bg-depan.jpg'),
                'savedate' => asset('assets/img/nizar/bg-savedate.jpg'),
                'kehadiran' => asset('assets/img/nizar/foto-8.jpg'),
            ],
            'waktu' => [
                'hari' => 'Selasa',
                'tgl' => '02',
                'bulan' => '07',
                'tahun' => '2024',
                'tglText' => 'Selasa, 02 Juli 2024',
                'tanggalLengkap' => '2024-07-02 12:30:00',
                'linkKalender' => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Acara+Pernikahan+Nizar+dan+Adi&ctz=Asia/Jakarta&dates=20240207T120000/20240702T150000%7D&details=Acara+Pernikahan+Nizar+dan+Adi&location=Dusun+Kedungmas+RT.+009+RW.+002,+Ds.+Wotanngare+Kec.+kalitidu+Kab.+Bojonegoro+Jawa+Timur&sprop&sprop=name:',
            ],
            'to' => $toName,
            'pengantinWanita' => [
                'foto' => asset('assets/img/nizar/wanita.jpg'),
                'namaPanggilan' => 'Nizar',
                'namaLengkap' => 'Anizarul Khoiriyah',
                'alamat' => 'Dusun Kedungmas RT. 009 RW. 002, Ds. Wotanngare, Kec. Kalitidu - Bojonegoro',
                'ayah' => "Bpk. Moh Waras",
                'ibu' => 'Ibu. Sumiati',
            ],
            'pengantinPria' => [
                'foto' => asset('assets/img/nizar/pria.jpg'),
                'namaPanggilan' => 'Adi',
                'namaLengkap' => 'Adi Saputra',
                'alamat' => 'Ds. Kalitengah Kec. Sugio Kab. Lamongan',
                'ayah' => '(Alm) Bpk. Adiq',
                'ibu' => 'Ibu. Sariyam',
            ],
            'gallery' => $galery, 
            'maps' => [
                'link' => 'https://maps.app.goo.gl/oHELGmZjwrepcoh39',
                'embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15835.14625865528!2d111.76377!3d-7.15066005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e777955d74c98a3%3A0xc298b43fbf660bd!2sWotan%20Ngare%2C%20Kec.%20Kalitidu%2C%20Kabupaten%20Bojonegoro%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1718765764579!5m2!1sid!2sid',
            ],
            'rundown' => [
                'akad' => [
                    'hari' => 'Selasa',
                    'tgl' => '02',
                    'bulan' => 'Juli',
                    'tahun' => '2024',
                    'tanggalLengkap' => '02 Juli 2024',
                    'waktu' => '10.00 WIB',
                    'lokasi' => 'Kediaman Mempelai Wanita',
                    'alamat' => 'Dusun Kedungmas RT. 009 RW. 002, Ds. Wotanngare, Kec. Kalitidu - Bojonegoro',
                    'maps' => 'https://maps.app.goo.gl/oHELGmZjwrepcoh39',
                    'foto' => asset('assets/img/nizar/bg-akad.jpg'),
                ],
                'resepsi' => [
                    'hari' => 'Selasa',
                    'tgl' => '02',
                    'bulan' => 'Juli',
                    'tahun' => '2024',
                    'tanggalLengkap' => '02 Juli 2024',
                    'waktu' => '12.30 WIB',
                    'lokasi' => 'Kediaman Mempelai Wanita',
                    'alamat' => 'Dusun Kedungmas RT. 009 RW. 002, Ds. Wotanngare, Kec. Kalitidu - Bojonegoro',
                    'maps' => 'https://maps.app.goo.gl/oHELGmZjwrepcoh39',
                    'foto' => asset('assets/img/nizar/bg-resepsi.jpg'),
                ],
            ],
            'bank' => [
                [
                    'pemilik' => 'ANIZARUL KHOIRIYAH',
                    'norek' => '1780006585992',
                    'bankname' => 'Mandiri',
                    'atasnama' => 'AN. ANIZARUL KHOIRIYAH',
                    'icon' => asset('assets/img/mandiri.png'),
                ],
                [
                    'pemilik' => 'ANIZARUL KHOIRIYAH',
                    'norek' => '085236400886',
                    'bankname' => 'DANA',
                    'atasnama' => 'AN. ANIZARUL KHOIRIYAH',
                    'icon' => asset('assets/img/dana.png'),
                ],
            ],
        ];

        return $data;
    }

    public function agni(Request $request)
    {
        $galery = [
            ['nama' => 'gal1', 'link' => asset('assets/img/danifa/foto1.jpeg')],
            ['nama' => 'gal2', 'link' => asset('assets/img/danifa/foto2.jpeg')],
            ['nama' => 'gal3', 'link' => asset('assets/img/danifa/foto3.jpeg')],
            ['nama' => 'gal4', 'link' => asset('assets/img/danifa/foto4.jpeg')],
            ['nama' => 'gal5', 'link' => asset('assets/img/danifa/foto5.jpeg')],
            ['nama' => 'gal6', 'link' => asset('assets/img/danifa/foto6.jpeg')],
            ['nama' => 'gal7', 'link' => asset('assets/img/danifa/foto7.jpeg')],
        ];

        $data = [
            'title' => 'Wedding Of Dina & Budi',
            'backsound' => asset('assets/audio/backsound_danifa.mp3'),
            'background' => [
                'body' => asset('assets/img/danifa/foto5.jpeg'),
                'cover' => asset('assets/img/danifa/foto2.jpeg'),
                'depan' => asset('assets/img/danifa/foto10.jpeg'),
                'savedate' => asset('assets/img/danifa/foto11.jpeg'),
                'kehadiran' => asset('assets/img/danifa/foto9.jpeg'),
            ],
            'waktu' => [
                'hari' => 'Selasa',
                'tgl' => '31',
                'bulan' => '10',
                'tahun' => '2023',
                'tglText' => 'Selasa, 31 Oktober 2023',
                'tanggalLengkap' => '2023-10-31 09:00:00',
                'linkKalender' => 'https://www.google.com/calendar/render?action=TEMPLATE&text=Acara%20Pernikahan%20Danifa%20dan%20Saiful&ctz=Asia/Jakarta&dates=20231022T060000/20231031T090000%7D&details=Acara%20Pernikahan%20Danifa%20dan%20Saiful&location=Jalan%20Sitarda%20RT.001/RW.017,%20Pangkah%20Wetan-Gresik,%20Jawatimurt&sprop=&sprop=name:',
            ],
            'to' => $request->to,
            'pengantinWanita' => [
                'foto' => asset('assets/img/danifa/foto-wanita.jpg'),
                'namaPanggilan' => 'Danifa',
                'namaLengkap' => 'Danifa',
                'alamat' => 'Jl. Sitarda Rt. 001/ Rw. 017 Pangkah Wetan-Gresik',
                'ayah' => "Bpk. Soni agung yuda tama",
                'ibu' => 'Ibu. Eliyah hamidah',
            ],
            'pengantinPria' => [
                'foto' => asset('assets/img/danifa/foto-pria.jpg'),
                'namaPanggilan' => 'Saiful',
                'namaLengkap' => 'Saiful',
                'alamat' => 'Ds. Kapu (Wetan) Kec. Merakurak Kab. Tuban',
                'ayah' => '(Alm) Bpk. Karto',
                'ibu' => 'Ibu. Asmonah',
            ],
            'gallery' => $galery, 
            'maps' => [
                'link' => 'https://maps.app.goo.gl/N9dGbgrfMVyypzqu6',
                'embed' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3960.72522921076!2d112.54175947499667!3d-6.923413293076296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTUnMjQuMyJTIDExMsKwMzInMzkuNiJF!5e0!3m2!1sid!2sid!4v1697754269865!5m2!1sid!2sid',
            ],
            'rundown' => [
                'akad' => [
                    'hari' => 'Senin',
                    'tgl' => '30',
                    'bulan' => 'Oktober',
                    'tahun' => '2023',
                    'tanggalLengkap' => '30 Oktober 2023',
                    'waktu' => '09.00 WIB',
                    'lokasi' => 'Kediaman Mempelai Wanita',
                    'alamat' => 'Jl. Sitarda Rt. 001/ Rw. 017 Pangkah Wetan-Gresik',
                    'maps' => 'https://maps.app.goo.gl/N9dGbgrfMVyypzqu6',
                    'foto' => asset('assets/img/danifa/foto5.jpeg'),
                ],
                'resepsi' => [
                    'hari' => 'Selasa',
                    'tgl' => '31',
                    'bulan' => 'Oktober',
                    'tahun' => '2023',
                    'tanggalLengkap' => '31 Oktober 2023',
                    'waktu' => '09.00 WIB',
                    'lokasi' => 'Kediaman Mempelai Wanita',
                    'alamat' => 'Jl. Sitarda Rt. 001/ Rw. 017 Pangkah Wetan-Gresik',
                    'maps' => 'https://maps.app.goo.gl/N9dGbgrfMVyypzqu6',
                    'foto' => asset('assets/img/danifa/foto4.jpeg'),
                ],
            ],
            'bank' => [
                [
                    'pemilik' => 'Dhanifatul Khamidah',
                    'norek' => '1780003992845',
                    'bankname' => 'Mandiri',
                    'atasnama' => 'AN. Dhanifatul Khamidah',
                    'icon' => asset('assets/img/mandiri.png'),
                ],
                [
                    'pemilik' => 'Dhanifatul Khamidah',
                    'norek' => '085236400886',
                    'bankname' => 'DANA',
                    'atasnama' => 'AN. Dhanifatul Khamidah',
                    'icon' => asset('assets/img/dana.png'),
                ],
            ],
        ];

        return view('template1', ['data' => $data]);
    }
}
