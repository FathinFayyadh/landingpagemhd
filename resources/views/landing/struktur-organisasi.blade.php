@extends('template')
@section('title', 'Struktur Organisasi')
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
                    <li>Struktur Organisasi</li>
                  </ul>
                  <h1 class="page_title text-white">Struktur Organisasi</h1>
                  <p class="page_description text-white">
                    Sistem koordinasi dan pembagian tugas kerja di SD Muhammadiyah 10 Medan guna menjamin efisiensi pelayanan akademis dan administrasi sekolah.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Organizational Structure Section - Start
        ================================================== -->
        <section class="mentor_section section_space_lg">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="heading_text">Struktur Kepengurusan Sekolah</h2>
              <p class="heading_description mb-5 text-muted">SD Muhammadiyah 10 Medan Periode 2026/2027</p>
            </div>

            <!-- LEVEL 1: KEPALA SEKOLAH -->
            <div class="row justify-content-center mb-5">
              <div class="col col-lg-4 col-md-6 text-center">
                <div class="text-uppercase text-danger fw-bold mb-2" style="font-size: 13px; letter-spacing: 2px;">Kepala Sekolah</div>
                <div class="mentor_item" style="border: 2px solid #FFD32B; box-shadow: 0 10px 30px rgba(255, 211, 43, 0.15);">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru2.png') }}" alt="Dra. Hj. Maimunah" style="border-radius: 8px;">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">Dra. Hj. Maimunah</a>
                    </h3>
                    <p class="mentor_designation mb-0">Kepala Sekolah / Penanggung Jawab Utama</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Connecting Line divider -->
            <div class="d-none d-md-flex justify-content-center mb-5">
              <div style="border-left: 2px dashed #D2D2D2; height: 50px;"></div>
            </div>

            <!-- LEVEL 2: KOMITE & BENDAHARA / SEKRETARIS -->
            <div class="row justify-content-center mb-5">
              <!-- Komite Sekolah -->
              <div class="col col-lg-4 col-md-6 text-center mb-4">
                <div class="text-uppercase text-danger fw-bold mb-2" style="font-size: 13px; letter-spacing: 2px;">Komite Sekolah</div>
                <div class="mentor_item" style="border: 1px solid #D2D2D2;">
                  <div class="mentor_image">
                    <a href="#!">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru2.png') }}" alt="Drs. H. Ahmad Fauzi" style="border-radius: 8px;">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="#!">Drs. H. Ahmad Fauzi</a>
                    </h3>
                    <p class="mentor_designation mb-0">Ketua Komite Sekolah</p>
                  </div>
                </div>
              </div>

              <!-- Jarak spacer untuk desktop -->
              <div class="d-none d-lg-block col-lg-1"></div>

              <!-- Bendahara & Administrasi -->
              <div class="col col-lg-4 col-md-6 text-center mb-4">
                <div class="text-uppercase text-danger fw-bold mb-2" style="font-size: 13px; letter-spacing: 2px;">Keuangan & Admisitrasi</div>
                <div class="mentor_item" style="border: 1px solid #D2D2D2;">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru3.png') }}" alt="Devi Safriani" style="border-radius: 8px;">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">Devi Safriani</a>
                    </h3>
                    <p class="mentor_designation mb-0">Bendahara Sekolah / Guru Kelas 5A</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Connecting Line divider -->
            <div class="d-none d-md-flex justify-content-center mb-5">
              <div style="border-left: 2px dashed #D2D2D2; height: 50px;"></div>
            </div>

            <!-- LEVEL 3: DEWAN GURU & STAF -->
            <div class="row">
              <div class="col-12 text-center mb-4">
                <div class="text-uppercase text-danger fw-bold" style="font-size: 14px; letter-spacing: 2px;">Dewan Guru & Staf Pendidik</div>
                <hr style="max-width: 200px; margin: 15px auto; border-top: 2px solid #FFD32B;">
              </div>
            </div>

            <div class="row justify-content-center">
              <!-- Guru 1: Al-Islam/KMD -->
              <div class="col col-lg-3 col-md-6 mb-4 text-center">
                <div class="mentor_item" style="border: 1px solid #EAEAEA; transition: all 0.3s ease;">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/profil1.jpeg') }}" alt="Abdul Rasyid S.Ag.Gr" style="border-radius: 8px; width: 100%; height: 200px; object-fit: cover;">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name" style="font-size: 18px;">
                      <a href="{{ route('detail-guru') }}">Abdul Rasyid S.Ag.Gr</a>
                    </h3>
                    <p class="mentor_designation mb-0" style="font-size: 13px;">Guru Al-Islam & Kemuhammadiyahan</p>
                  </div>
                </div>
              </div>

              <!-- Guru 2: Olahraga -->
              <div class="col col-lg-3 col-md-6 mb-4 text-center">
                <div class="mentor_item" style="border: 1px solid #EAEAEA; transition: all 0.3s ease;">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru2.png') }}" alt="Adi Jandru S.Pd" style="border-radius: 8px; width: 100%; height: 200px; object-fit: cover;">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name" style="font-size: 18px;">
                      <a href="{{ route('detail-guru') }}">Adi Jandru S.Pd</a>
                    </h3>
                    <p class="mentor_designation mb-0" style="font-size: 13px;">Guru Olahraga & Wali Kelas</p>
                  </div>
                </div>
              </div>

              <!-- Guru 3: Matematika & K6 -->
              <div class="col col-lg-3 col-md-6 mb-4 text-center">
                <div class="mentor_item" style="border: 1px solid #EAEAEA; transition: all 0.3s ease;">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru3.png') }}" alt="Faisal Rahman S.Pd" style="border-radius: 8px; width: 100%; height: 200px; object-fit: cover;">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name" style="font-size: 18px;">
                      <a href="{{ route('detail-guru') }}">Faisal Rahman S.Pd</a>
                    </h3>
                    <p class="mentor_designation mb-0" style="font-size: 13px;">Guru Kelas 6 & Bidang Studi Matematika</p>
                  </div>
                </div>
              </div>

              <!-- Guru 4: K1 & Keagamaan -->
              <div class="col col-lg-3 col-md-6 mb-4 text-center">
                <div class="mentor_item" style="border: 1px solid #EAEAEA; transition: all 0.3s ease;">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru3.png') }}" alt="Siti Aminah S.Pd" style="border-radius: 8px; width: 100%; height: 200px; object-fit: cover;">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name" style="font-size: 18px;">
                      <a href="{{ route('detail-guru') }}">Siti Aminah S.Pd</a>
                    </h3>
                    <p class="mentor_designation mb-0" style="font-size: 13px;">Guru Kelas 1 & Pendamping Keagamaan</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- Organizational Structure Section - End
        ================================================== -->

</main>
@endsection
