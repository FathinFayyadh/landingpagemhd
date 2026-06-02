@extends('template')
@section('title', 'Fasilitas Sekolah')
@section('content')
@include('landing.navbar')
<main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner">
          <div class="container">
            <div class="content_wrapper bg-danger" style="background-image: url('{{ asset('landingpage/assets/images/banner/page_banner_image.png') }}');">
              <div class="row align-items-center">
                <div class="col col-lg-6">
                  <ul class="breadcrumb_nav unordered_list">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li>Fasilitas</li>
                  </ul>
                  <h1 class="page_title text-white">Fasilitas</h1>
                  <p class="page_description text-white">
                    SD Muhammadiyah 10 Medan menyediakan sarana dan prasarana yang lengkap dan modern untuk menunjang kenyamanan belajar serta mengoptimalkan potensi akademis dan karakter siswa.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Facilities Section - Start
        ================================================== -->
        <section class="mentor_section section_space_lg">
          <div class="container">
            <div class="row">
              <h1 class="text-center m-5">Fasilitas Unggulan Kami</h1>
              
              <!-- Fasilitas 1 -->
              <div class="col col-lg-4 col-md-6 mb-4">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <img src="{{ asset('landingpage/assets/images/about/about-profil.png') }}" alt="Ruang Kelas Nyaman" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;">
                  </div>
                  <div class="mentor_content mt-3">
                    <h3 class="mentor_name text-dark font-weight-bold">Ruang Kelas Nyaman</h3>
                    <p class="mentor_designation text-muted" style="font-size: 14px; line-height: 1.5;">
                      Ruang kelas yang representatif, bersih, ber-AC, serta dilengkapi dengan media pembelajaran multimedia LCD proyektor untuk metode belajar interaktif.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Fasilitas 2 -->
              <div class="col col-lg-4 col-md-6 mb-4">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <img src="{{ asset('landingpage/assets/images/misi.jpg') }}" alt="Laboratorium Komputer" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;">
                  </div>
                  <div class="mentor_content mt-3">
                    <h3 class="mentor_name text-dark font-weight-bold">Lab Komputer & IT</h3>
                    <p class="mentor_designation text-muted" style="font-size: 14px; line-height: 1.5;">
                      Fasilitas komputer modern untuk membekali siswa dengan literasi teknologi digital dan kelas pemrograman dasar sejak usia dini.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Fasilitas 3 -->
              <div class="col col-lg-4 col-md-6 mb-4">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <img src="{{ asset('landingpage/assets/images/visi-misi.png') }}" alt="Perpustakaan Lengkap" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;">
                  </div>
                  <div class="mentor_content mt-3">
                    <h3 class="mentor_name text-dark font-weight-bold">Perpustakaan</h3>
                    <p class="mentor_designation text-muted" style="font-size: 14px; line-height: 1.5;">
                      Menyediakan ratusan koleksi buku bacaan edukatif, buku sains, pengetahuan umum, serta buku keagamaan Islami untuk memupuk minat baca siswa.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Fasilitas 4 -->
              <div class="col col-lg-4 col-md-6 mb-4">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <img src="{{ asset('landingpage/assets/images/visii.jpg') }}" alt="Musholla Al-Ikhlas" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;">
                  </div>
                  <div class="mentor_content mt-3">
                    <h3 class="mentor_name text-dark font-weight-bold">Musholla Sekolah</h3>
                    <p class="mentor_designation text-muted" style="font-size: 14px; line-height: 1.5;">
                      Sarana ibadah yang bersih dan nyaman sebagai tempat pembiasaan shalat berjamaah, hafalan surah (tahfidz), dan pembinaan spiritual akhlak mulia.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Fasilitas 5 -->
              <div class="col col-lg-4 col-md-6 mb-4">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <img src="{{ asset('landingpage/assets/images/vis.jpg') }}" alt="Lapangan Olahraga" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;">
                  </div>
                  <div class="mentor_content mt-3">
                    <h3 class="mentor_name text-dark font-weight-bold">Lapangan Olahraga</h3>
                    <p class="mentor_designation text-muted" style="font-size: 14px; line-height: 1.5;">
                      Area luas terbuka untuk mendukung aktivitas fisik, olahraga (futsal, badminton, senam), upacara bendera, dan latihan Tapak Suci.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Fasilitas 6 -->
              <div class="col col-lg-4 col-md-6 mb-4">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <img src="{{ asset('landingpage/assets/images/bannersd.png') }}" alt="Area Bermain Terbuka" style="border-radius: 8px; width: 100%; height: 220px; object-fit: cover;">
                  </div>
                  <div class="mentor_content mt-3">
                    <h3 class="mentor_name text-dark font-weight-bold">Taman & Area Bermain</h3>
                    <p class="mentor_designation text-muted" style="font-size: 14px; line-height: 1.5;">
                      Lingkungan sekolah yang asri, hijau, bersih, serta aman untuk menunjang tumbuh kembang fisik dan interaksi sosial ramah anak.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- Facilities Section - End
        ================================================== -->

        <!-- Counter Section - Start
        ================================================== -->
        <section class="counter_section bg_light section_space_md">
          <div class="container">
            <div class="row">
              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">300</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    Siswa Aktif Berprestasi
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">25</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    Tenaga Pendidik Profesional & Kompeten
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">12</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    Kegiatan Ekstrakurikuler Pilihan
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">100</span>
                    <span>%</span>
                  </h3>
                  <p class="mb-0">
                    Komitmen Pendidikan Akhlak & Karakter Islami
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->

</main>
@endsection
