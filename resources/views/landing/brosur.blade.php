@extends('template')
@section('title', 'Brosur Pendaftaran')
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
                    <li>Brosur Pendaftaran</li>
                  </ul>
                  <h1 class="page_title text-white">Brosur Pendaftaran</h1>
                  <p class="page_description text-white">
                    Informasi Penerimaan Murid Baru (SPMB) SD Muhammadiyah 10 Medan Tahun Pelajaran 2026/2027.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Page Section - End
        ================================================== -->

        <!-- Brochure View Section - Start
        ================================================== -->
        <section class="section_space_lg">
          <div class="container">
            <div class="section_heading text-center">
              <h2 class="heading_text">Brosur Informasi Resmi Sekolah</h2>
              <p class="heading_description mb-5 text-muted">Lihat dan unduh brosur resmi penerimaan murid baru SD Swasta Muhammadiyah 10 Medan</p>
            </div>

            <!-- Brochure Images Display -->
            <div class="row justify-content-center mb-5">
              <!-- Page 1 (Front) -->
              <div class="col col-lg-6 col-md-12 mb-4">
                <div class="card shadow-sm border-0 h-100" style="background: #ffffff; border-radius: 12px; overflow: hidden;">
                  <div class="p-3 bg-light text-center border-bottom">
                    <h5 class="fw-bold mb-0 text-danger">Halaman Depan (SPMB)</h5>
                  </div>
                  <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                    <div class="mb-4">
                      <a href="{{ asset('landingpage/assets/images/brosur_pendaftaran_1.jpg') }}" target="_blank" title="Klik untuk memperbesar">
                        <img src="{{ asset('landingpage/assets/images/brosur_pendaftaran_1.jpg') }}" alt="Brosur Halaman Depan SD Swasta Muhammadiyah 10 Medan" style="border-radius: 8px; max-height: 600px; width: auto; max-width: 100%; border: 1px solid #EAEAEA;">
                      </a>
                    </div>
                    <div>
                      <a href="{{ asset('landingpage/assets/images/brosur_pendaftaran_1.jpg') }}" download="Brosur_Pendaftaran_SDM10_Depan.jpg" class="btn btn_primary w-100" id="btn_download_depan">
                        <span>
                          <small><i class="fas fa-download me-2"></i> Unduh Halaman Depan</small>
                          <small><i class="fas fa-download me-2"></i> Unduh Halaman Depan</small>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Page 2 (Back) -->
              <div class="col col-lg-6 col-md-12 mb-4">
                <div class="card shadow-sm border-0 h-100" style="background: #ffffff; border-radius: 12px; overflow: hidden;">
                  <div class="p-3 bg-light text-center border-bottom">
                    <h5 class="fw-bold mb-0 text-danger">Halaman Belakang (Fasilitas & Biaya)</h5>
                  </div>
                  <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                    <div class="mb-4">
                      <a href="{{ asset('landingpage/assets/images/brosur_pendaftaran_2.jpg') }}" target="_blank" title="Klik untuk memperbesar">
                        <img src="{{ asset('landingpage/assets/images/brosur_pendaftaran_2.jpg') }}" alt="Brosur Halaman Belakang SD Swasta Muhammadiyah 10 Medan" style="border-radius: 8px; max-height: 600px; width: auto; max-width: 100%; border: 1px solid #EAEAEA;">
                      </a>
                    </div>
                    <div>
                      <a href="{{ asset('landingpage/assets/images/brosur_pendaftaran_2.jpg') }}" download="Brosur_Pendaftaran_SDM10_Belakang.jpg" class="btn btn_primary w-100" id="btn_download_belakang">
                        <span>
                          <small><i class="fas fa-download me-2"></i> Unduh Halaman Belakang</small>
                          <small><i class="fas fa-download me-2"></i> Unduh Halaman Belakang</small>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- SEO Content & Details Cards -->
            <div class="row">
              <!-- Syarat & Jadwal Pendaftaran -->
              <div class="col col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow-sm border-0" style="background: #ffffff; border-radius: 12px; border-left: 5px solid #FFD32B;">
                  <div class="card-body p-4">
                    <h3 class="fw-bold text-danger mb-3" style="font-size: 22px;"><i class="fas fa-file-signature me-2"></i> Syarat & Jadwal Pendaftaran</h3>
                    <hr class="my-2">
                    <h5 class="fw-bold text-dark mt-3">Persyaratan Dokumen:</h5>
                    <ol class="ps-3 mb-4">
                      <li class="mb-2">Fotocopy Kartu Keluarga</li>
                      <li class="mb-2">Fotocopy Akte Kelahiran</li>
                      <li class="mb-2">Fotocopy Ijazah TK (jika ada)</li>
                      <li class="mb-2">Mengisi Formulir Pendaftaran</li>
                      <li class="mb-2">Fotocopy KIA dan KIP (Jika Ada)</li>
                    </ol>

                    <h5 class="fw-bold text-dark mt-3">Jadwal Gelombang Pendaftaran:</h5>
                    <ul class="unordered_list_block ps-0 mb-0">
                      <li class="mb-3 p-3 bg-light rounded" style="border-left: 3px solid #093FB4;">
                        <span class="fw-bold text-danger d-block">GELOMBANG I (Januari - Maret 2026)</span>
                        <small class="text-muted">Potongan 15% dari Biaya Pendaftaran</small>
                      </li>
                      <li class="p-3 bg-light rounded" style="border-left: 3px solid #093FB4;">
                        <span class="fw-bold text-danger d-block">GELOMBANG II (April - Mei 2026)</span>
                        <small class="text-muted">Potongan 10% dari Biaya Pendaftaran</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Biaya, Fasilitas & Ekskul -->
              <div class="col col-lg-6 col-md-12 mb-4">
                <div class="card h-100 shadow-sm border-0" style="background: #ffffff; border-radius: 12px; border-left: 5px solid #FFD32B;">
                  <div class="card-body p-4">
                    <h3 class="fw-bold text-danger mb-3" style="font-size: 22px;"><i class="fas fa-coins me-2"></i> Rincian Biaya & Ekstrakurikuler</h3>
                    <hr class="my-2">
                    <h5 class="fw-bold text-dark mt-3">Rincian Biaya Masuk:</h5>
                    <div class="p-3 rounded mb-4 text-center" style="background: #FFFDF0; border: 1px dashed #FFD32B;">
                      <span class="d-block text-muted" style="font-size: 14px;">Total Biaya Pendaftaran</span>
                      <span class="fw-bold text-danger d-block" style="font-size: 28px;">Rp. 750.000</span>
                      <small class="text-muted d-block mt-2">Termasuk Seragam Sekolah (Rompi, Kemeja/Kurung Batik, Baju HW, Baju Olahraga, & SPP Bulan Juli)</small>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <h5 class="fw-bold text-dark"><i class="fas fa-star text-warning me-2"></i> Ekstrakurikuler:</h5>
                        <ul class="ps-3">
                          <li class="mb-1">Tahfiz Qur'an</li>
                          <li class="mb-1">Tapak Suci</li>
                          <li class="mb-1">Hizbul Wathan</li>
                          <li class="mb-1">Futsal</li>
                          <li class="mb-1">Drum Band</li>
                        </ul>
                      </div>
                      <div class="col-md-6 mb-3">
                        <h5 class="fw-bold text-dark"><i class="fas fa-school text-primary me-2"></i> Fasilitas Utama:</h5>
                        <ul class="ps-3">
                          <li class="mb-1">Ruang Kelas Nyaman</li>
                          <li class="mb-1">Masjid Taqwa</li>
                          <li class="mb-1">Laboratorium Komputer</li>
                          <li class="mb-1">UKS & Perpustakaan</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Contact & Help Card -->
            <div class="row justify-content-center mt-3">
              <div class="col-lg-12">
                <div class="card shadow-sm border-0 text-center text-white" style="background: #093FB4; border-radius: 12px;">
                  <div class="card-body p-4">
                    <h4 class="fw-bold mb-3 text-white"><i class="fas fa-phone-alt me-2"></i> Butuh Bantuan Pendaftaran? Hubungi Kami:</h4>
                    <p class="mb-4" style="color: rgba(255,255,255,0.85);">Tim pendaftaran kami siap menjawab semua pertanyaan Anda terkait proses pendaftaran murid baru.</p>
                    <div class="row justify-content-center">
                      <div class="col-md-4 mb-3">
                        <div class="p-3 bg-white rounded text-dark shadow-sm">
                          <span class="fw-bold text-danger d-block">Ibu Faradibba, S.Kom</span>
                          <a href="https://wa.me/6281266939321" target="_blank" class="text-primary fw-bold"><i class="fab fa-whatsapp me-1"></i> 0812 6693 9321</a>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 bg-white rounded text-dark shadow-sm">
                          <span class="fw-bold text-danger d-block">Ibu Hilda, S.Ag</span>
                          <a href="https://wa.me/6281376241648" target="_blank" class="text-primary fw-bold"><i class="fab fa-whatsapp me-1"></i> 0813 7624 1648</a>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="p-3 bg-white rounded text-dark shadow-sm">
                          <span class="fw-bold text-danger d-block">Ibu Soleha, S.Pd</span>
                          <a href="https://wa.me/6282288332208" target="_blank" class="text-primary fw-bold"><i class="fab fa-whatsapp me-1"></i> 0822 8833 2208</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- Brochure View Section - End
        ================================================== -->

</main>
@endsection
