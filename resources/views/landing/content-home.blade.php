@extends('template')
@include('landing.navbar')
@section('title', 'SD Muhammadiyah 10 Medan')
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
                  <p class="banner_description">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum fugiat nulla pariatur
                  </p>
                  <ul class="banner_btns_group unordered_list">
                    <li>
                      <a class="btn btn_primary" href="course.html">
                        <span>
                          <small>Pelajari Selengkapnya</small>
                          <small>Lihat selengkapnya</small>
                        </span>
                      </a>
                    </li>
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
                      <img src="{{asset("landingpage/Template/assets/images/profilsd.png  ")}}" alt="Collab – Online Learning Platform">
                    </div>

                    <div class="deco_item shape_img_1 w-25" data-parallax='{"y" : -130, "smoothness": 6}'>
                      <img src="{{asset("landingpage/Template/assets/images/shape/stack-of-books.png")}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="deco_item shape_img_2 w-25" data-parallax='{"y" : 160, "smoothness": 6}'>
                      <img class="" src="{{asset("landingpage/Template/assets/images/shape/textbook.png")}}" alt="Collab – Online Learning Platform">
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
                  <img src="{{asset("landingpage/Template/assets/images/about/about-profil.png")}}" alt="Collab – Online Learning Platform">
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
      <section class="expect_from_course section_space_lg">
          <div class="container">
            <div class="row ">
              <h1 class="heading_text text-center m-3">Keunggulan SD Muhammadiyah 10 Medan</h1>
              <p class="text-center mb-4 fw-bold fs-5">SD Muhammadiyah Sapen dikenal sebagai sekolah yang unggul dalam membentuk karakter peserta didik, seperti:</p>
                <div class="row justify-content-center align-items-center">
                  <div class="col col-md-3">
                    <div class="service_item text-center" data-magnetic>
                      <div class="text-center w-100 align-items-center d-flex justify-content-center">
                        <div class="item_icon  ">
                          <img  src="{{asset("landingpage/Template/assets/images/gold-medal.png")}}" alt="Collab – Online Learning Platform">
                        </div>
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Knowledge</h3>
                        <p class="mb-0">
                          Duis aute irure dolor in repreh in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-3">
                    <div class="service_item" data-magnetic>
                     <div class="text-center w-100 align-items-center d-flex justify-content-center">
                        <div class="item_icon  ">
                          <img  src="{{asset("landingpage/Template/assets/images/graduation-hat.png")}}" alt="Collab – Online Learning Platform">
                        </div>
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Unlimited access</h3>
                        <p class="mb-0">
                          Libero nunc consequat interd varius sit amet mattis vulpute enim liquet sagittis
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-3">
                    <div class="service_item" data-magnetic>
                      <div class="text-center w-100 align-items-center d-flex justify-content-center">
                        <div class="item_icon  ">
                          <img  src="{{asset("landingpage/Template/assets/images/office-man.png")}}" alt="Collab – Online Learning Platform">
                        </div>
                      </div>
                      <div class="item_content">
                        <h3 class="item_title">Practical Skills</h3>
                        <p class="mb-0">
                          Vulputate enim nulla aliquet porttitor lacus luctus accums. Cras sed felis eget velit
                        </p>
                      </div>
                    </div>
                  </div>


                <!-- Button will show on Mobile Device -->
                <div class="btn_wrap pb-0 d-block d-lg-none text-center">
                  <a class="btn border_dark" href="course.html">
                    <span>
                      <small>Explore Courses</small>
                      <small>Explore Courses</small>
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
                  <p class="heading_description mb-0 text-white">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </p>
                  <div class="btn_wrap pb-0">
                    <a class="btn btn_primary" href="course.html">
                      <span>
                        <small>Explore Courses</small>
                        <small>Explore Courses</small>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col col-lg-6">
                <div class="row images_group decoration_wrap">
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/Template/assets/images/misi.jpg")}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/Template/assets/images/visi-misi.png")}}" alt="Collab – Online Learning Platform">
                    </div>
                  </div>
                  <div class="col col-md-6 col-sm-6">
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/Template/assets/images/vis.jpg")}}" alt="Collab – Online Learning Platform">
                    </div>
                    <div class="image_wrap">
                      <img src="{{asset("landingpage/Template/assets/images/visii.jpg")}}" alt="Collab – Online Learning Platform">
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
                      Viverra maecenas accumsan lacus vel facilisis volutpat. Faucibus purus in massa tempor nec feugiat nisl
                    </p>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Call Us</h3>
                      <p class="mb-0">(101) 222 123 456</p>
                      <p class="mb-0">(102) 333 234 674</p>
                    </div>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Email Address</h3>
                      <p class="mb-0">info-collab@example.com</p>
                      <p class="mb-0">collab-support@exapmple.com</p>
                    </div>
                  </div>
                  <div class="iconbox_item contact_info_iconbox">
                    <div class="item_icon">
                      <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="item_content">
                      <h3 class="item_title">Reach Us</h3>
                      <p class="mb-0">31 Sunset Road, Gales Ferry, </p>
                      <p class="mb-0">6335 United States</p>
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
