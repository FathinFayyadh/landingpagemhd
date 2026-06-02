@extends('template')
@section('title', 'SD Muhammadiyah 10 Medan')
@section('content')
@include('landing.navbar')
<main class="page_content">

        <!-- Banner Section - Start
        ================================================== -->
        <section class="hero_banner style_1">
          <div class="container">
            <div class="content_wrap">
              <div class="row">
                <div class="col col-lg-7 ">
                  <h1 class="banner_small_title fs-4">Welcome</h1>
                  <h2 class="banner_big_title">SD MUHAMMADIYAH 10 MEDAN</h2>

                  <ul class="banner_btns_group unordered_list">

                    <li>
                      <a class="video_play_btn text-white popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                        <span class="icon" data-magnetic><i class="fas fa-play"></i></span>
                        <span class="text">Watch video</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col col-lg-5">
                  <div class="banner_image_1 decoration_wrap">
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/assets/images/bannersd.png")}}" alt="Collab – Online Learning Platform">
                    </div>

                    <div class="deco_item shape_img_1 w-25" data-parallax='{"y" : -130, "smoothness": 6}'>
                      <img src="{{asset("landingpage/assets/images/shape/stack-of-books.png")}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="deco_item shape_img_2 w-25" data-parallax='{"y" : 160, "smoothness": 6}'>
                      <img class="" src="{{asset("landingpage/assets/images/shape/textbook.png")}}" alt="Collab – Online Learning Platform">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Banner Section - End
        ================================================== -->

        <!-- Expect From Course - Start
        ================================================== -->
        <section class="courses_info_section section_space_lg pb-0">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <h1 class="m-5 text-center ">Tentang SD Muhammadiyah 10 Medan</h1>
              </div>
              <div class="col col-lg-6">
                <div class="image_widget">
                  <img src="{{asset("landingpage/assets/images/about/about-profil.png")}}" alt="Collab – Online Learning Platform">
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="content_wrap ps-lg-3">
                  <div class="section_heading">
                    <h2 class="heading_text">
                      SD Muhammadiyah 10 Medan
                    </h2>
                    <p class="heading_description mb-0  ">
                     SD Muhammadiyah 10 Medan merupakan lembaga pendidikan yang berkomitmen untuk mencetak generasi unggul dengan kompetensi tinggi, berintegritas, dan siap menghadapi tantangan masa depan. Dengan menerapkan kurikulum yang inovatif, didukung oleh tenaga pendidik profesional, serta lingkungan belajar yang kondusif, kami berupaya mengoptimalkan potensi akademik sekaligus membentuk karakter peserta didik agar menjadi individu yang cerdas, berdaya saing, dan berkontribusi bagi masyarakat.
                    </p>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Courses Section - Start -->
      <section class="expect_from_course section_space_lg mt-lg-5 mt-ms-2">
          <div class="container">
            <div class="row ">
              <h1 class="heading_text text-center m-3">Keunggulan SD Muhammadiyah 10 Medan</h1>
              <p class="text-center mb-4 fw-bold fs-5">SD Muhammadiyah 10 Medan dikenal sebagai sekolah yang unggul dalam membentuk karakter peserta didik, seperti:</p>
                <div class="row justify-content-center align-items-center">
                  <div class="col col-md-3">
                    <div class="service_item text-center" data-magnetic>
                      <div class="text-center w-100 align-items-center d-flex justify-content-center">
                        <div class="item_icon  ">
                          <img  src="{{asset("landingpage/assets/images/gold-medal.png")}}" alt="Karakter Islami">
                        </div>
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Karakter Islami</h3>
                        <p class="mb-0">
                          Menerapkan pembiasaan ibadah harian, tahfidz Al-Qur'an juz 30, dan pembentukan akhlak mulia sejak dini.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-3">
                    <div class="service_item" data-magnetic>
                     <div class="text-center w-100 align-items-center d-flex justify-content-center">
                        <div class="item_icon  ">
                          <img  src="{{asset("landingpage/assets/images/graduation-hat.png")}}" alt="Akademik Unggul">
                        </div>
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Akademik Unggul</h3>
                        <p class="mb-0">
                          Pembelajaran aktif berbasis Kurikulum Merdeka yang dikolaborasikan dengan nilai keagamaan yang inovatif.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-3">
                    <div class="service_item" data-magnetic>
                      <div class="text-center w-100 align-items-center d-flex justify-content-center">
                        <div class="item_icon  ">
                          <img  src="{{asset("landingpage/assets/images/office-man.png")}}" alt="Minat & Bakat">
                        </div>
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Minat & Bakat</h3>
                        <p class="mb-0">
                          Berbagai program ekstrakurikuler seperti seni bela diri Tapak Suci, pramuka Hisbul Wathan, dan kelas IT.
                        </p>
                      </div>
                    </div>
                  </div>


                <!-- Button will show on Mobile Device -->
                <div class="btn_wrap pb-0 d-block d-lg-none text-center">
                  <a class="btn border_dark" href="{{ route('aboute') }}">
                    <span>
                      <small>Lihat Profil</small>
                      <small>Lihat Profil</small>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Advertisement Section - Start
          ================================================== -->
        <section class="advertisement_section ">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-lg-6">
                <div class="section_heading mb-lg-0">
                  <h2 class="heading_text text-white">
                    Visi Dan Misi
                  </h2>
                  <p class="heading_description mb-3 text-white">
                    <strong>Visi:</strong> Mewujudkan generasi cerdas, mandiri, berprestasi, dan berakhlak mulia berlandaskan nilai-nilai Al-Islam dan Kemuhammadiyahan.
                  </p>
                  <p class="heading_description mb-4 text-white">
                    <strong>Misi:</strong> Menyelenggarakan proses pembelajaran inovatif berbasis nilai keagamaan, menanamkan karakter jujur, mandiri, disiplin, serta membina minat dan bakat secara optimal.
                  </p>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn_primary" href="{{route('aboute')}}">
                      <span>
                        <small>Profil Sekolah</small>
                        <small>Profil Sekolah</small>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="row images_group decoration_wrap">
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/assets/images/misi.jpg")}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/assets/images/visi-misi.png")}}" alt="Collab – Online Learning Platform">
                    </div>
                  </div>
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/assets/images/vis.jpg")}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/assets/images/visii.jpg")}}" alt="Collab – Online Learning Platform">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Advertisement Section - End
        ================================================== -->

       <section class="contact_section section_space_lg">
          <div class="container">
            <div class="row">
              <div class="col col-lg-5">
                <div class="pe-lg-5">
                  <div class="section_heading">
                    <h2 class="heading_text">
                     Hubungi Kami
                    </h2>
                    <p class="heading_description mb-0">
                      Silakan hubungi tim administrasi kami untuk informasi pendaftaran, kegiatan sekolah, atau kunjungan langsung ke sekolah.
                    </p>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Telepon & WA</h3>
                      <p class="mb-0">(061) 732-1010</p>
                      <p class="mb-0">+62 812-3456-7890</p>
                    </div>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Alamat Email</h3>
                      <p class="mb-0">sdmuhammadiyah10medan@gmail.com</p>
                      <p class="mb-0">info@sdmuh10medan.sch.id</p>
                    </div>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Alamat Sekolah</h3>
                      <p class="mb-0">Jl. H. Adenan Benawi No.66, Sudirejo I,</p>
                      <p class="mb-0">Medan Kota, Kota Medan, Sumatera Utara 20216</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col-lg-7">
                <div class="gmap_canvas">
                  <iframe id="gmap_canvas_iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1143557904966!2d98.69491397351138!3d3.561132350485045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031305dec0f3cd9%3A0x801443a8142022f3!2sMuhammadiyah%2010%20Elementary%20School!5e0!3m2!1sen!2sus!4v1752243184223!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
