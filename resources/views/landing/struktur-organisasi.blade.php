@extends('template')
@section('title', 'Struktur Organisasi')
@section('content')
@include('landing.navbar')
<main class="page_content" style="background: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('landingpage/assets/images/batik_background.jpg') }}'); background-repeat: repeat; background-size: 300px; position: relative;">

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

        <style>
          .mentor_section .row {
            display: flex;
            flex-wrap: wrap;
          }
          /* Ensure all grid columns behave as flex containers to stretch cards */
          .mentor_section [class*="col-"] {
            display: flex;
            flex-direction: column;
          }
          .mentor_item {
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            border: 1px solid #EAEAEA;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
          }
          .mentor_item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-color: #FFD32B !important;
          }
          .mentor_image {
            width: 100%;
            height: 250px; /* Uniform height on desktop */
            overflow: hidden;
            position: relative;
            background-color: #f8f9fa;
          }
          @media (max-width: 767.98px) {
            .mentor_image {
              height: 340px; /* Taller on mobile so faces are fully visible */
            }
          }
          .mentor_image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            transition: transform 0.3s ease;
          }
          .mentor_item:hover .mentor_image img {
            transform: scale(1.05);
          }
          .mentor_content {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            text-align: center;
          }
          .mentor_name {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.4;
          }
          .mentor_name a {
            color: #1a1a1a;
            text-decoration: none;
            transition: color 0.2s ease;
          }
          .mentor_name a:hover {
            color: #FFD32B;
          }
          .mentor_designation {
            font-size: 13px;
            color: #777777;
            margin-bottom: 0;
            line-height: 1.5;
            margin-top: auto; /* Push designation to bottom */
          }
        </style>

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
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 text-center">
                <div class="text-uppercase text-danger fw-bold mb-2" style="font-size: 13px; letter-spacing: 2px;">Kepala Sekolah</div>
                <div class="mentor_item" style="border: 2px solid #FFD32B; box-shadow: 0 10px 30px rgba(255, 211, 43, 0.15);">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/') }}" alt="Evi Handayani S.Pd">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">Evi Handayani S.Pd</a>
                    </h3>
                    <p class="mentor_designation">Kepala Sekolah / Penanggung Jawab Utama</p>
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
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 text-center mb-4">
                <div class="text-uppercase text-danger fw-bold mb-2" style="font-size: 13px; letter-spacing: 2px;">Komite Sekolah</div>
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="#!">
                      <img src="{{ asset('landingpage/assets/images/mentor/') }}" alt="FARADIBBA MUTIARA MAHARANI, S.Kom">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="#!">FARADIBBA MUTIARA MAHARANI, S.Kom</a>
                    </h3>
                    <p class="mentor_designation">Ketua Komite Sekolah</p>
                  </div>
                </div>
              </div>

              <!-- Jarak spacer untuk desktop -->
              <div class="d-none d-lg-block col-lg-1"></div>

              <!-- Bendahara & Administrasi -->
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 text-center mb-4">
                <div class="text-uppercase text-danger fw-bold mb-2" style="font-size: 13px; letter-spacing: 2px;">Keuangan & Administrasi</div>
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/') }}" alt="Bendahara Sekolah">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">NO Name</a>
                    </h3>
                    <p class="mentor_designation">Bendahara Sekolah</p>
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
              @foreach($dewan_guru as $guru)
              @php
                $imagePath = '';
                if (!empty($guru['image'])) {
                    $imagePath = asset('landingpage/assets/images/mentor/' . $guru['image']);
                } else {
                    $nameLower = strtolower($guru['name']);
                    $isFemale = str_contains($nameLower, 'sri') || 
                                str_contains($nameLower, 'aini') || 
                                str_contains($nameLower, 'devi') || 
                                str_contains($nameLower, 'tetty') || 
                                str_contains($nameLower, 'zakiya') || 
                                str_contains($nameLower, 'soleha') || 
                                str_contains($nameLower, 'hilda') || 
                                str_contains($nameLower, 'mila') || 
                                str_contains($nameLower, 'atika') || 
                                str_contains($nameLower, 'rohimah') || 
                                str_contains($nameLower, 'nuraida') ||
                                str_contains($nameLower, 'evi') ||
                                str_contains($nameLower, 'faradibba') ||
                                str_contains($nameLower, 'maimunah');
                    $imagePath = $isFemale ? asset('landingpage/assets/images/mentor/') : asset('landingpage/assets/images/mentor/');
                }
              @endphp
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 text-center">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ $imagePath }}" alt="{{ $guru['name'] }}">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">{{ $guru['name'] }}</a>
                    </h3>
                    <p class="mentor_designation text-muted">{{ $guru['role'] }}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>

</main>
@endsection
