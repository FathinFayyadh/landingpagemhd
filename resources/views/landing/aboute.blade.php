@extends('template')
@section('title', 'Tentang Kami')
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
                    <li>Tentang Kami</li>
                  </ul>
                  <h1 class="page_title text-white">Tentang Kami</h1>
                  <p class="page_description text-white">
                    Kenali lebih dekat SD Muhammadiyah 10 Medan, sejarah perkembangan, visi misi, serta komitmen kami dalam mendidik calon pemimpin masa depan.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- About Intro Section - Start
        ================================================== -->
        <section class="courses_info_section section_space_lg pb-0">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-lg-6">
                <div class="image_widget">
                  <img src="{{ asset('landingpage/assets/images/about/about-profil.png') }}" alt="Tentang SD Muhammadiyah 10 Medan" style="border-radius: 8px;">
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="content_wrap ps-lg-4">
                  <div class="section_heading">
                    <h2 class="heading_text">
                      Profil & Sejarah Singkat
                    </h2>
                    <p class="heading_description mb-4">
                      SD Muhammadiyah 10 Medan didirikan sebagai wujud nyata kepedulian Persyarikatan Muhammadiyah terhadap pendidikan anak bangsa, khususnya di Kota Medan. Terletak di kawasan strategis Medan Kota, sekolah kami mengusung perpaduan kurikulum nasional dan nilai keagamaan yang kuat.
                    </p>
                    <p class="heading_description mb-0">
                      Sebagai lembaga pendidikan dasar, kami berkomitmen untuk melahirkan siswa yang tidak hanya unggul dalam pencapaian akademis, tetapi juga memiliki fondasi akhlak yang kokoh serta kecakapan hidup (life skills) untuk bekal masa depan mereka.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- About Intro Section - End
        ================================================== -->

        <!-- Vision and Mission Section - Start
        ================================================== -->
        <section class="advertisement_section mt-5">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-lg-6">
                <div class="section_heading mb-lg-0">
                  <h2 class="heading_text text-white">
                    Visi Dan Misi
                  </h2>
                  <div class="text-white mb-4">
                    <h4 class="text-warning mb-2">Visi Sekolah</h4>
                    <p class="fs-5" style="line-height: 1.5;">
                      "Mewujudkan generasi cerdas, mandiri, berprestasi, dan berakhlak mulia berlandaskan nilai-nilai Al-Islam dan Kemuhammadiyahan."
                    </p>
                  </div>
                  <div class="text-white">
                    <h4 class="text-warning mb-2">Misi Sekolah</h4>
                    <ul class="list-unstyled ps-0" style="line-height: 1.6;">
                      <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Menyelenggarakan proses pembelajaran yang inovatif, efektif, dan berbasis nilai-nilai keagamaan.</li>
                      <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Menumbuhkan kecintaan terhadap Al-Qur'an melalui program kelas Tahfidz dan pembiasaan ibadah terpadu.</li>
                      <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Membina kemandirian, kedisiplinan, dan tanggung jawab siswa melalui program ekstrakurikuler kepanduan Hisbul Wathan dan seni bela diri Tapak Suci.</li>
                      <li><i class="fas fa-check-circle text-warning me-2"></i> Mengembangkan potensi minat dan bakat secara optimal demi tercapainya prestasi terbaik siswa di bidang akademis maupun non-akademis.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="row images_group decoration_wrap">
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{ asset('landingpage/assets/images/misi.jpg') }}" alt="Misi">
                    </div>
                    <div class="image_wrap">
                      <img src="{{ asset('landingpage/assets/images/visi-misi.png') }}" alt="Visi Misi">
                    </div>
                  </div>
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{ asset('landingpage/assets/images/vis.jpg') }}" alt="Visi">
                    </div>
                    <div class="image_wrap">
                      <img src="{{ asset('landingpage/assets/images/visii.jpg') }}" alt="Visi Detail">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Vision and Mission Section - End
        ================================================== -->

        <!-- Values Section - Start
        ================================================== -->
        <section class="courses_info_section section_space_lg pb-0 mb-5">
          <div class="container">
            <h2 class="text-center m-5 heading_text">Nilai-Nilai Utama Kami</h2>
            <div class="row justify-content-center">
              
              <div class="col col-md-4 mb-4">
                <div class="service_item text-center p-4" style="border: 1px solid #EAEAEA; border-radius: 8px; background-color: #FAFAFA;">
                  <div class="item_icon mb-3 text-danger" style="font-size: 40px;">
                    <i class="fas fa-star"></i>
                  </div>
                  <h4 class="font-weight-bold text-dark mb-2">Iman & Taqwa (IMTAQ)</h4>
                  <p class="text-muted" style="font-size: 14px;">
                    Mengutamakan akhlak mulia dan pondasi keagamaan kuat sebagai pedoman hidup murid di masa depan.
                  </p>
                </div>
              </div>

              <div class="col col-md-4 mb-4">
                <div class="service_item text-center p-4" style="border: 1px solid #EAEAEA; border-radius: 8px; background-color: #FAFAFA;">
                  <div class="item_icon mb-3 text-danger" style="font-size: 40px;">
                    <i class="fas fa-user-graduate"></i>
                  </div>
                  <h4 class="font-weight-bold text-dark mb-2">Kemandirian</h4>
                  <p class="text-muted" style="font-size: 14px;">
                    Mendorong tumbuhnya rasa percaya diri, tanggung jawab, dan kemandirian dalam memecahkan masalah.
                  </p>
                </div>
              </div>

              <div class="col col-md-4 mb-4">
                <div class="service_item text-center p-4" style="border: 1px solid #EAEAEA; border-radius: 8px; background-color: #FAFAFA;">
                  <div class="item_icon mb-3 text-danger" style="font-size: 40px;">
                    <i class="fas fa-trophy"></i>
                  </div>
                  <h4 class="font-weight-bold text-dark mb-2">Prestasi</h4>
                  <p class="text-muted" style="font-size: 14px;">
                    Membina potensi optimal siswa untuk meraih prestasi membanggakan secara nasional maupun internasional.
                  </p>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- Values Section - End
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
