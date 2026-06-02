@extends('template')
@section('title', 'Hubungi Kami')
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
              <li>Hubungi Kami</li>
            </ul>
            <h1 class="page_title text-white">Hubungi Kami</h1>
            <p class="page_description text-white">
              Punya pertanyaan seputar pendaftaran siswa baru (PPDB) atau informasi sekolah lainnya? Hubungi tim layanan informasi kami yang siap membantu Anda dengan senang hati.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Section - End
  ================================================== -->

  <!-- Contact Section - Start
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
                Kami siap memberikan informasi lengkap seputar program belajar, kegiatan, dan pendaftaran siswa di SD Muhammadiyah 10 Medan.
              </p>
            </div>
            <div class="iconbox_item contact_info_iconbox">
              <div class="item_icon">
                <i class="fas fa-phone"></i>
              </div>
              <div class="item_content">
                <h3 class="item_title">Telepon & WhatsApp</h3>
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
                <p class="mb-0">Kec. Medan Kota, Kota Medan, Sumatera Utara 20216</p>
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
  <!-- Contact Section - End
  ================================================== -->

  <!-- Contact Form Section - Start
  ================================================== -->
  <section class="contact_form_section section_space_lg bg_light decoration_wrap overflow-hidden">
    <div class="container decoration_wrap">
      <div class="row justify-content-center">
        <div class="col col-lg-7">
          <div class="section_heading text-center">
            <h2 class="heading_text mb-0">
              Kirimkan Pesan atau Pertanyaan Anda Kepada Kami
            </h2>
          </div>
        </div>
      </div>

      <form action="#">
        <div class="row justify-content-center">
          <div class="col col-lg-8">
            <div class="row">
              <div class="col col-md-6">
                <div class="form_item m-0">
                  <label for="input_name" class="input_title">Nama Lengkap</label>
                  <input id="input_name" type="text" name="name" placeholder="Nama Anda">
                </div>
              </div>
              <div class="col col-md-6">
                <div class="form_item m-0">
                  <label for="input_email" class="input_title">Email</label>
                  <input id="input_email" type="email" name="email" placeholder="Alamat Email">
                </div>
              </div>
              <div class="col col-md-6">
                <div class="form_item m-0">
                  <label for="input_phone" class="input_title">Nomor HP / WA</label>
                  <input id="input_phone" type="tel" name="telephone" placeholder="Nomor Telepon/WA">
                </div>
              </div>
              <div class="col col-md-6">
                <div class="form_item m-0">
                  <label for="input_subject" class="input_title">Subjek</label>
                  <select name="subject" id="input_subject">
                    <option value="PPDB" selected>Pertanyaan PPDB</option>
                    <option value="Informasi Umum">Informasi Umum</option>
                    <option value="Kegiatan Sekolah">Kegiatan Sekolah</option>
                    <option value="Saran & Masukan">Saran & Masukan</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form_item">
                  <label for="input_message" class="input_title">Pesan Anda</label>
                  <textarea id="input_message" name="message" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."></textarea>
                </div>
                <button type="submit" class="btn btn_dark w-100 b-block">
                  <span>
                    <small>Kirim Pesan</small>
                    <small>Kirim Pesan</small>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Contact Form Section - End
  ================================================== -->

  <!-- Newsletter Section - Start
  ================================================== -->
  <section class="newslatter_section">
    <div class="container">
      <div class="newslatter_box" style="background-image: url('{{ asset('landingpage/assets/images/shape/shape_img_6.svg') }}');">
        <div class="row justify-content-center">
          <div class="col col-lg-6">
            <div class="section_heading text-center">
              <h2 class="heading_text">
                Berlangganan Informasi PPDB & Kegiatan
              </h2>
              <p class="heading_description mb-0">
                Masukkan email Anda untuk mendapatkan update terbaru seputar pembukaan pendaftaran siswa baru, kegiatan sekolah, dan prestasi terbaru kami.
              </p>
            </div>
            <form action="#">
              <div class="form_item m-0">
                <input type="email" name="email" placeholder="Alamat Email Anda">
                <button type="submit" class="btn btn_dark">
                  <span>
                    <small>Langganan</small>
                    <small>Langganan</small>
                  </span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Newsletter Section - End
  ================================================== -->

</main>

@endsection
