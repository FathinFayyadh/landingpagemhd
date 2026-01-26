@extends('template')
@section('title', 'Profil Guru dan Staf')
@section('content')
@include('landing.navbar')
<main class="page_content">

        <!-- Page Section - Start
        ================================================== -->
        <section class="page_banner">
          <div class="container">
            <div class="content_wrapper" style="background-image: url('assets/images/banner/page_banner_image.png');">
              <div class="row align-items-center">
                <div class="col col-lg-6">
                  <ul class="breadcrumb_nav unordered_list">
                    <li><a href="index.html">Home</a></li>
                    <li>Pages</li>
                    <li>Our Mentors</li>
                    <li>Mentors</li>
                  </ul>
                  <h1 class="page_title">Our Mentors</h1>
                  <p class="page_description">
                    Egestas sed tempus urna et pharetra. Leo integer malesuada nunc vel. Libero id faucibus nisl tincidunt eget nullam non nisi. Faucibus turpis in eu mi bibendum neque egestas
                  </p>
                  <form action="#">
                    <div class="form_item mb-0">
                      <input type="search" name="search" placeholder="What do you want to learn ?">
                      <button type="submit" class="btn btn_dark">
                        <span>
                          <small>Search</small>
                          <small>Search</small>
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Mentor Section - Start
        ================================================== -->
        <section class="mentor_section section_space_lg">
          <div class="container">
            <div class="row">
                <h1 class="text-center m-3">Profil Guru dan Staf</h1>
              <div class="col col-lg-4 col-md-6">
                <div class="mentor_item">
                  <div class="mentor_image">
                    <a href="{{ route('detail-guru') }}">
                      <img src="{{ asset('landingpage/Template//assets/images/mentor/Profil.jpg') }}" alt="assets/images/mentor/mentor_image_4.jpg" alt="Collab – Online Learning Platform">
                    </a>
                  </div>
                  <div class="mentor_content">
                    <h3 class="mentor_name">
                      <a href="mentor_details.html">Alex Edwards</a>
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
                      <a href="mentor_details.html">Wendy Chandler</a>
                    </h3>
                    <p class="mentor_designation">Java Developer</p>
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
                      <a href="mentor_details.html">James Grant</a>
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
