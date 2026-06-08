@extends('template')
@section('title', 'Profil Guru dan Staf')
@section('content')
@include('landing.navbar')
<main class="page_content" style="background: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('landingpage/assets/images/batik_background.jpg') }}'); background-repeat: repeat; background-size: 300px; position: relative;">

        <!-- Page Section - Start
        ================================================== -->
        
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
            margin-top: auto; /* Push designation to the bottom if names differ in length */
          }
        </style>

        <!-- Mentor Section - Start
        ================================================== -->
        <section class="mentor_section section_space_lg">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="heading_text">Tenaga Pendidik & Kependidikan</h2>
              <p class="heading_description mb-5 text-muted">Membimbing dengan hati, mendidik dengan prestasi</p>
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
        <!-- Mentor Section - End
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
