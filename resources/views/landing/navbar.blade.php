<header class="site_header site_header_1">
        <div class="container">
          <div class="row align-items-center">
            <div class="col col-lg-3 col-5">
              <div class="site_logo">
                <a class="site_link" href="{{route('home')}}">
                  <img src="{{asset("landingpage/assets/images/logo/navbarmhd.png")}}" alt="Collab - Online Learning Platform">
                </a>
              </div>
            </div>
            <div class="col col-lg-6 col-2">
              <nav class="main_menu navbar navbar-expand-lg">
                <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                  <ul class="main_menu_list unordered_list_center">

                      <li class=" ">
                      <a class="nav-link" href="#" id="home_submenu" role="button"  >Program </a>
                    </li>
                    <li class="dropdown">
                      <a class="nav-link" href="#" id="service_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Sekolah
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="service_submenu">

                        <li class="dropdown">
                          <a class="nav-link" href="#" id="courses_details_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Program Sekolah
                          </a>
                        </li>
                        <li class="dropdown">
                          <a class="nav-link" href="#" id="courses_details_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Struktur Orgnisasi
                          </a>
                        </li>
                        <li class="dropdown">
                             <a class="nav-link" href="{{route('Profil-guru')}}"  role="button"  aria-expanded="false">
                          Profil Guru dan Staf
                          </a>
                        </li>
                      </ul>
                    </li>


                    <li><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <div class="col col-lg-3 col-5">
              <ul class="header_btns_group unordered_list_end">
                <li>
                  <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars"></i>
                  </button>
                </li>

                <li>
                  <a class="btn btn_dark" href="signup.html">
                    <span>
                      <small>PPDB</small>
                      <small>PPDB</small>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
