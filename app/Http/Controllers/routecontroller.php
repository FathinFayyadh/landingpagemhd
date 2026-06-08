<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routecontroller extends Controller
{
      public function home(){
        return view('landing.content-home');
    }
    Public function aboute(){
        return view('landing.aboute');
    }
    Public function fasilitas(){
        return view('landing.fasilitas');
    }
    private function getDewanGuru(){
        return [
            [
                'name' => 'Abdul Rasyid S.Ag.Gr',
                'role' => 'Guru Al-Islam & Kemuhammadiyahan',
                'image' => 'guru1.jpeg'
            ],
            [
                'name' => 'Adi Jandru S.Pd',
                'role' => 'Guru Pendidikan Jasmani  ',
                'image' => 'guru2.png'
            ],
            [
                'name' => 'DEVI SYAFRIANI, S.Ag',
                'role' => 'Guru Agama Islam',
                'image' => 'guru3.png'
            ],
            [
                'name' => "NU'RAINI AMINI, S.Pd.I",
                'role' => 'Guru Kelas 1 & Pendamping Keagamaan',
                'image' => ''
            ],
            [
                'name' => 'TETTY LUMONGGA LUBIS, S.Ag',
                'role' => 'Guru Al-Qur\'an Hadits & Fiqih',
                'image' => 'guru11.png'
            ],
            [
                'name' => 'ZAKIYA MURSYIDA, S.Pd',
                'role' => 'Wali Kelas 6 A',
                'image' => 'guru8.png'
            ],
            [
                'name' => 'SOLEHA, S.Pd',
                'role' => 'Wali Kelas 2',
                'image' => 'guru4.png'
            ],
            [
                'name' => 'HILDA PANGGABEAN, S.Ag',
                'role' => 'Guru Kelas 3 & Wali Kelas',
                'image' => 'guru12.png'
            ],
            [
                'name' => 'GUSMILA SARI, S.Pd',
                'role' => 'Wali Kelas 6 B',
                'image' => 'guru10.png'
            ],
            [
                'name' => 'ATIKA RISKA, S.Pd',
                'role' => 'Wali Kelas 4',
                'image' => 'guru6.png'
            ],
            [
                'name' => 'ROHIMAH DAIM, S.Pd',
                'role' => 'Wali Kelas 5',
                'image' => 'guru7.png'
            ],
            [
                'name' => 'NURAIDA, S.Pd',
                'role' => 'Guru Bidang Studi',
                'image' => 'guru9.png'
            ],
            [
                'name' => 'IBRAHIM HANIF NASUTION',
                'role' => 'Guru PJOK & Ekstrakurikuler',
                'image' => ''
            ],
            [
                'name' => 'M. FAISAL FIKRI',
                'role' => 'Ekstrakurikuler Karate',
                'image' => ''
            ],
            [
                'name' => 'RICKY ZULHERNANDA',
                'role' => 'Guru Kelas 5C & Bidang Studi IPS',
                'image' => ''
            ],
            [
                'name' => 'SRI KARYATI',
                'role' => 'Guru Bahasa Indonesia & SBdP',
                'image' => ''
            ],
        ];
    }

    public function ProfilGuru(){
        $dewan_guru = $this->getDewanGuru();
        return view('landing.profil-guru', compact('dewan_guru'));
    }
    public function contact(){
        return view('landing.contact-me');
    }
  
    public function DetailGuru(){
        return view('landing.detail-guru');
    }
    public function StrukturOrganisasi(){
        $dewan_guru = $this->getDewanGuru();
        return view('landing.struktur-organisasi', compact('dewan_guru'));
    }

    public function Brosur(){
        return view('landing.brosur');
    }
}
