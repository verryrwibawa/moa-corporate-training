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

    <!-- About Us -->
    <section id="def">
      <div class="def-container">
        <div class="def-title">
          <h2 class="text-center">
            <span style="color: #efa117">Apa Itu</span> <span style="color: #4b00e0; font-weight: bold">Corporate Training?</span>
          </h2>
        </div>

        <div class="d-flex def-content justify-content-around align-items-center mt-4">
          <div class="def-text">
            <p>
              <span style="color: #4b00e0; font-weight: 700">Corporate Training</span> yang diselengrakan oleh Amikom Center merupakan program
              pelatihan yang ditujukan untuk karyawan di perusahaan atau organisasi. Tujuan dari corporate training ini adalah untuk meningkatkan
              keterampilan, pengetahuan, dan kemampuan karyawan dalam menjalankan tugas-tugasnya, sehingga dapat membantu perusahaan atau organisasi
              tersebut untuk mencapai tujuan dan sasaran yang telah ditetapkan. Corporate training biasanya meliputi berbagai topik, mulai dari
              teknis, bisnis, hingga manajemen, dan dapat dilakukan secara internal maupun eksternal.
            </p>
          </div>

          <div class="def-img">
            <div id="carouselImage" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/def-img-1.png" class="d-block def-img-item" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="img/def-img-2.png" class="d-block def-img-item" alt="" />
                </div>
                <div class="carousel-item">
                  <img src="img/def-img-3.png" class="d-block def-img-item" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Program Kami -->
    <section id="prog">
      <div class="prog-container">
        <div class="prog-title">
          <h2 class="text-center"><span style="font-weight: 700; color: #4b00e0">Program</span> <span style="color: #efa117"> Kami</span></h2>

          <h5 class="text-center pt-2">
            <span style="font-weight: 400">Beberapa program yang kami tawarkan</span>
          </h5>
        </div>

        <div class="prog-content">
          <div class="row">
            <div class="col-sm-12">
              <div id="prog-item" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-1.png" alt="" class="prog-img" />
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-2.png" alt="" class="prog-img" />
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-3.png" alt="" class="prog-img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-4.png" alt="" class="prog-img" />
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-5.png" alt="" class="prog-img" />
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-6.png" alt="" class="prog-img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-7.png" alt="" class="prog-img" />
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-8.png" alt="" class="prog-img" />
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-9.png" alt="" class="prog-img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-10.png" alt="" class="prog-img" />
                          </div>
                        </div>

                        <div class="col-sm-12 col-lg-4">
                          <div class="m-auto">
                            <img src="img/p-11.png" alt="" class="prog-img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#prog-item" data-bs-slide="prev">
                  <span class="fa fa-angle-left" style="margin-right: 250px; font-size: 32pt; color: rgb(142, 45, 226)" aria-hidden="true"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#prog-item" data-bs-slide="next">
                  <span class="fa fa-angle-right" style="margin-left: 200px; font-size: 32pt; color: rgb(142, 45, 226)" aria-hidden="true"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
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

    {{-- Testimonials --}}
    <section id="testi">
      <div class="testi-container">
        <div class="testi-title">
          <h2 class="text-center"><span style="font-weight: 700; color: #4b00e0">Testimoni</span> <span style="color: #efa117">Klien</span></h2>
          <h5 class="text-center pt-2">
            <span style="font-weight: 400">Tanggapan klien yang sudah pernah mengikuti pelatihan bersama kami</span>
          </h5>
        </div>

        <div class="testi-content">
          <div id="testiCarou" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner testi-carou">
              <div class="carousel-item active">
                <div class="d-flex justify-content-around">
                  <div class="testi-card">
                    <div class="up-card">
                      <div class="d-flex">
                        <div class="up-img">
                          <img src="img/man.jpg" alt="" class="rounded-circle testi-img" />
                        </div>

                        <div class="up-text mx-4">
                          <h5>Mike Wazowzski</h5>
                          <p>
                            Divisi Full-Stack Web <br />
                            Batch 5
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="botm-card text-center">
                      <p>
                        "Materi yang diberikan mudah dimengerti. <br />
                        Mentor nya juga baik"
                      </p>
                    </div>
                  </div>

                  <div class="testi-card">
                    <div class="up-card">
                      <div class="d-flex">
                        <div class="up-img">
                          <img src="img/man2.jpg" alt="" class="rounded-circle testi-img" />
                        </div>

                        <div class="up-text mx-4">
                          <h5>Dorothy Atkins</h5>
                          <p>
                            Divisi Project Manager <br />
                            Batch 5
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="botm-card text-center">
                      <p>"Saya mendapatkan banyak pengalaman yang menyenangkan.</p>
                    </div>
                  </div>

                  <div class="testi-card">
                    <div class="up-card">
                      <div class="d-flex">
                        <div class="up-img">
                          <img src="img/woman.jpg" alt="" class="rounded-circle testi-img" />
                        </div>

                        <div class="up-text mx-4">
                          <h5>Duane Gregory</h5>
                          <p>
                            Divisi UI/UX <br />
                            Batch 4
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="botm-card text-center">
                      <p>"Di MOA pasti diajarkan dari awal sampai kamu bisa"</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="d-flex justify-content-start">
                  <div class="testi-card mx-5">
                    <div class="up-card">
                      <div class="d-flex">
                        <div class="up-img">
                          <img src="img/man3.png" alt="" class="rounded-circle testi-img" />
                        </div>

                        <div class="up-text mx-4">
                          <h5>Jeffrey White</h5>
                          <p>
                            Divisi Database Admin. <br />
                            Batch 3
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="botm-card text-center">
                      <p>"Materi nya ringan tetapi berbobot.</p>
                    </div>
                  </div>

                  <div class="testi-card">
                    <div class="up-card">
                      <div class="d-flex">
                        <div class="up-img">
                          <img src="img/woman2.jpg" alt="" class="rounded-circle testi-img" />
                        </div>

                        <div class="up-text mx-4">
                          <h5>Flora Cannon</h5>
                          <p>
                            Divisi Project Manager <br />
                            Batch 4
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="botm-card text-center">
                      <p>"Dibimbing oleh mentor yang berpengalaman dalam bidangnya"</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Consultation --}}
    <section id="konsul">
      <div class="konsul-container">
        <h2 class="text-center">
          <span style="font-weight: 700; color: #4b00e0">Konsultasikan</span> <br />
          <span style="color: #efa117">Perusahaan Anda</span>
        </h2>

        <div class="konsul-content">
          <div class="d-flex justify-content-around">
            <div class="konsul-left">
              <img src="img/konsul-img.png" alt="" class="konsul-img" />
            </div>

            <div class="konsul-right">
              <form action="">
                <div class="form-container">
                  <div class="konsul-input">
                    <input type="text" name="nama-comp" id="" class="form-control p-3" placeholder="Nama Perusahaan" />
                  </div>
                  <div class="konsul-input">
                    <input type="text" name="alamat-comp" id="" class="form-control p-3" placeholder="Alamat Email" />
                  </div>
                  <div class="konsul-input">
                    <textarea name="text-comp" id="" cols="30" rows="10" class="form-control p-3" placeholder="Masukkan Pertanyaan Anda"></textarea>
                  </div>
                </div>

                <div class="form-check mt-4 mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" />
                  <label class="form-check-label" for="flexCheckIndeterminate">
                    Saya setuju dengan Syarat dan Ketentuan Kebijakan Privasi Amikom Center
                  </label>
                </div>

                <div class="form-btn">
                  <button type="submit" class="w-100 p-3 konsul-btn">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  {{-- Footer --}}
  <footer id="footer">
    <div class="foo-container">
      <div class="d-flex justify-content-between">
        <div class="foo-left">
          <div class="ac-logo d-flex align-items-center justify-content-start">
            <div class="mx-2">
              <img src="img/amikom.png" alt="" style="width: 40px; margin-right: 5px" />
            </div>
            <div>
              <h5><span style="font-weight: 700">AMIKOM</span> <span style="font-weight: 400">CENTER</span></h5>
            </div>
          </div>

          <div class="ac-address mt-4">
            <div class="add-text d-flex">
              <div class="mx-4">
                <span><i class="fa fa-location-dot"></i></span>
              </div>
              <div>
                Graha Universitas AMIKOM Yogyakarta, Gedung 1 Lantai 2 <br />
                Jl. Ring Road Utara, Condong Catur, Sleman, Yogyakarta
              </div>
            </div>
          </div>
        </div>

        <div class="foo-right">
          <div class="foo-right-up d-flex justify-content-around">
            <div class="foo-program">
              <ul>
                <li class="li-title">Program Kami</li>
                <li>
                  <a href="#">Web Dev</a>
                </li>
                <li>
                  <a href="#">Mobile Dev</a>
                </li>
                <li>
                  <a href="#">Network Admin</a>
                </li>

                <li>
                  <a href="#">Content Admin</a>
                </li>
              </ul>
            </div>

            <div class="foo-about">
              <ul>
                <li class="li-title">Products</li>
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">Online Courses</a>
                </li>
                <li>
                  <a href="#">Tips</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="foo-right-botm d-flex justify-content-around">
            <div class="foo-media">
              <ul>
                <li class="li-title">Products</li>
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">Online Courses</a>
                </li>
                <li>
                  <a href="#">Tips</a>
                </li>
              </ul>
            </div>

            <div class="foo-hubungi">
              <ul>
                <li class="li-title">Products</li>
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">Online Courses</a>
                </li>
                <li>
                  <a href="#">Tips</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection