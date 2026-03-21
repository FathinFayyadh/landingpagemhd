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
                    <a href="mentor_details.html">
                      <img src="{{ asset('landingpage/Template//assets/images/mentor/Profil.jpg') }}" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html">Carolyn Jackson</a>
                    </h3>
                    <p class="mentor_designation">Fullstack developer</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                      <li>
                        <i class="fas fa-clock"></i>
                        <span>120 Hours</span>
                      </li>
                      <li>
                        <i class="fas fa-star"></i>
                        <span>4.9 (22 reviews)</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="mentor_details.html">
                      <img src="{{ asset('landingpage/Template//assets/images/mentor/Profil.jpg') }}" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html">William Morgan</a>
                    </h3>
                    <p class="mentor_designation">Python Mentor</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                      <li>
                        <i class="fas fa-clock"></i>
                        <span>100 Hours</span>
                      </li>
                      <li>
                        <i class="fas fa-star"></i>
                        <span>5 (10 reviews)</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="mentor_details.html">
                      <img src="{{ asset('landingpage/Template//assets/images/mentor/Profil.jpg') }}" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html">Christine Nelson</a>
                    </h3>
                    <p class="mentor_designation">AQ/Mentor</p>
                    <ul class="meta_info_list unordered_list_center mb-0">
                      <li>
                        <i class="fas fa-clock"></i>
                        <span>120 Hours</span>
                      </li>
                      <li>
                        <i class="fas fa-star"></i>
                        <span>4.9 (22 reviews)</span>
                      </li>
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
                    <span class="counter_value_text">500</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    Hours of hands-on learning in our courses
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">1500</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    Students Passed Our Competitions and Got a Job
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">25</span>
                    <span>/75</span>
                  </h3>
                  <p class="mb-0">
                    The Ratio of Theory and Practice in Each Course
                  </p>
                </div>
              </div>

              <div class="col col-lg-3 col-md-6">
                <div class="counter_item">
                  <h3 class="counter_value">
                    <span class="counter_value_text">40</span>
                    <span>+</span>
                  </h3>
                  <p class="mb-0">
                    We teach people from 4 continents and over 40 countries
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->



@endsection
