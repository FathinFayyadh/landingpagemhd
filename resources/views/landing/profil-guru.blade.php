@extends('template')
@section('title', 'Profil Guru dan Staf')
@section('content')
@include('landing.navbar')
<main class="page_content">


        <!-- Mentor Section - Start
        ================================================== -->
        <section class="mentor_section section_space_lg">
          <div class="container">
            <div class="row">
                <h1 class="text-center m-3">Profil Guru dan Staff</h1>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/profil1.jpeg') }}" alt="assets/images/mentor/mentor_image_4.jpg" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html">Abdul Rasyid S.Ag.Gr</a>
                    </h3>
                    <p class="mentor_designation">Guru Al-Islam/KMD Kemuhammadiyahan</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="mentor_details.html">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru2.png') }}" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html"> Adi Jandru S.Pd</a>
                    </h3>
                    <p class="mentor_designation">Guru Olahraga </p>
                    <ul class="meta_info_list unordered_list_center mb-0">

                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="mentor_details.html">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru3.png') }}" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html">Devi safriani</a>
                    </h3>
                    <p class="mentor_designation">Guru Kelas 5A</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                      <li>
                       
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru2.png') }}" alt="Dra. Hj. Maimunah">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">Dra. Hj. Maimunah</a>
                    </h3>
                    <p class="mentor_designation">Kepala Sekolah / Guru Al-Qur'an Hadits</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru3.png') }}" alt="Faisal Rahman S.Pd">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">Faisal Rahman S.Pd</a>
                    </h3>
                    <p class="mentor_designation">Guru Kelas 6 & Bidang Studi Matematika</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/assets/images/mentor/guru3.png') }}" alt="Siti Aminah S.Pd">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="{{ route('detail-guru') }}">Siti Aminah S.Pd</a>
                    </h3>
                    <p class="mentor_designation">Guru Kelas 1 & Pendamping Keagamaan</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                    </ul>
                  </div>
                </div>
              </div>
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



@endsection
