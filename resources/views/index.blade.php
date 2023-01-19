@extends('layouts.main')
 
@section('container')
    <!-- Hero -->
    <section id="hero" class="p-0">
    @include('partials.navbar') 
        <div class="bg-img">
          <div class="container pt-5">
            <div class="hero-text">
              <span style="font-weight: bold">Tingkatkan</span> <br />
              <span style="font-weight: 400">Kinerja Anda Bersama Kami</span>
            </div>
      
            <div class="hero-subtext">
              <p>
                Corporate Training yang diselenggarakan oleh Amikom Center merupakan <br />
                program pelatihan yang ditujukan untuk karyawan di perusahaan atau organisasi.
              </p>
            </div>
      
            <div class="hero-btn">
              <a href="">
                Lihat Program
                <i class="fa-solid fa-chevron-right"></i>
              </a>
            </div>
      
            <div class="hero-link d-flex justify-content-between">
              <div class="link-item">
                <a href="#">
                  <span class="fa-regular fa-envelope"></span>
                </a>
              </div>
              <div class="link-item">
                <a href="#">
                  <span class="fa-brands fa-whatsapp"></span>
                </a>
              </div>
            </div>
          </div>
        </div> 
    </section>

    <!-- Corporate Training -->
    <section id="about">
        <div class="container">
            <h1>Corporate Training</h1>
        </div>
    </section>

    <!-- Program Kami -->
    <section id="programs">
        <div class="container">
            <h1>Program Kami</h1>
        </div>
    </section>

    <!-- Benefits -->
    <section class="bg-light-purple" id="benefits">
        <div class="container">
            <h1 class="text-title text-center text-gold">
                <b class="text-purple">Benefit</b> Yang Akan<br>Anda Dapatkan
            </h1>
            <div class="card-wrapper row mt-5">
                <div class="col-md-4 my-md-0 my-2">
                    <div class="card py-4 text-center">
                        <div class="benefit-image-wrapper position-relative"> 
                            <div class="circle-background"></div>
                            <img src="{{ asset('img/benefits/certificate.svg') }}" alt="certificate.svg" class="benefit-image img-fluid">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-purple fw-bold mb-3">Sertifikat Ganda</h5>
                          <p class="card-text">Anda akan mendapatkan dua sertifikat, yaitu Training dan Uji Kompetensi</p> 
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 my-md-0 my-2">
                    <div class="card py-4 text-center">
                        <div class="benefit-image-wrapper position-relative"> 
                            <div class="circle-background"></div>
                            <img src="{{ asset('img/benefits/mentor.svg') }}" alt="mentor.svg" class="benefit-image img-fluid">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-purple fw-bold mb-3">Mentor Berpengalaman</h5>
                          <p class="card-text">Anda akan dibimbing oleh mentor yang sudah berpengalaman di bidangnya</p> 
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 my-md-0 my-2">
                    <div class="card py-4 text-center">
                        <div class="benefit-image-wrapper position-relative"> 
                            <div class="circle-background"></div>
                            <img src="{{ asset('img/benefits/certificate.svg') }}" alt="certificate.svg" class="benefit-image img-fluid">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-purple fw-bold mb-3">Sertifikat Ganda</h5>
                          <p class="card-text">Anda akan mendapatkan dua sertifikat, yaitu Training dan Uji Kompetensi</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section id="clients">
        <div class="container">
            <div class="title text-center">   
                <h1 class="text-title text-center text-gold">
                    <b class="text-purple">Klien</b> Kami
                </h1>
                <p class="fs-5">Klien yang sudah mempercayakan kami untuk melakukan training</p>
            </div>
            <div class="clients-logo-wrapper card mt-5 flex flex-row flex-wrap justify-content-center">
                <img src="{{ asset('img/clients/ky 1.png') }}" alt="ky 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/ump 1.png') }}" alt="ump 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/unpab 1.png') }}" alt="unpab 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/aknema 1.png') }}" alt="aknema 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/ubb 1.png') }}" alt="ubb 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/kepri 1.png') }}" alt="kepri 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/dishub_diy 1.png') }}" alt="dishub_diy 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/dishub_sleman 1.png') }}" alt="dishub_sleman 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/lpp 1.png') }}" alt="lpp 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/rs_kartini 1.png') }}" alt="rs_kartini 1.png" class="client-logo-image">
                <img src="{{ asset('img/clients/lpse 1.png') }}" alt="lpse 1.png" class="client-logo-image">
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section>
        <div class="container">
            <h1>Testimoni</h1>
        </div>
    </section>

    <!-- Konsultasi -->
    <section>
        <div class="container">
            <h1>Konsultasi</h1>
        </div>
    </section>

    <!-- Footer -->
    <section>
        <div class="container">
            <h1>Footer</h1>
        </div>
    </section>
@endsection