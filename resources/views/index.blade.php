@extends('layouts.guesttemplate')


@section('title','Aksitageh')

@section('container')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div>
        <div class="intro-img">
          <img src="{{ url('backend/asset/img/pict/database.png') }}" class="img-fluid">
        </div>
      </div>
      
      <div class="intro-info">
        <h2>Aksitageh<br></h2>
        <p>
          Merupakan sebuah platform digital yang 
          menyatukan dan memanggil Relawan untuk ikut 
          ambil bagian dalam gerakan sosial Sumbar Lawan 
          Covid 19.
        </p>
        <p>
          Aksitageh diinisiasi oleh rekan-rekan dari IA UKM-ITB 
          dan Neo-Telemetri UNAND untuk bersatu dan 
          menjalankan aksi sosial. Selain membuka 
          kesempatan untuk menjadi relawan, Aksitageh juga 
          memberikan informasi serta penggalangan dana 
          dan penyaluran bantuan. 
        </p>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="donatur" class="wow fadeIn">
      <div class="container">
        <div class="daerah row row-eq-height d-flex justify-content-center">
            <div class="col-lg-4 mb-4">
              <div class="cardnew card wow bounceInUp">
                <div class="card-body">
                  <h1 class="card-title">Pasien</h1>
                  <img src="{{ url('backend/asset/img/pict/graph.png') }}">
                  <button type="button" class="tombol donaturbtn">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="cardnew card wow bounceInUp">
                <div class="card-body">
                  <h1 class="card-title">APD</h1>
                  <img src="{{ url('backend/asset/img/pict/graphapd.png') }}">
                  <button type="button" class="tombol donaturbtn">MORE</button>
                </div>
              </div> 
            </div>

            <div class="col-lg-4 mb-4">
              <div class="cardnew card wow bounceInUp">
                <div class="card-body">
                  <h1 class="card-title">Rumah Sakit</h1>
                  <img src="{{ url('backend/asset/img/pict/hospital.png') }}">
                  <button type="button" class="tombol donaturbtn">MORE</button>
                </div>
              </div>
            </div>

          </div> 
        </div> 
      </div>
    </section><!-- #about -->
    
    <!--==========================
      OUR DIVISIONS
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Kebutuhan per Daerah</h3>
          <br>
        </header>
        
        <div class="daerah row row-eq-height justify-content-center owl-carousel testimonials-carousel wow fadeInUp">
          <!-- <img class="bg" src="pict/Path5.png"> -->
          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Agam</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Dharmasraya</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Kep. Mentawai</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div> 
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Bukittinggi</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Padang</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pariaman</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">50 Kota</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Payakumbuh</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Sawah Lunto</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pasaman Barat</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Padang Panjang</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Googles<br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Padang Pariaman</h5><br>
                    <p class="card-text">Masker N95 <br>Hansanitizer<br>Googles<br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pasaman</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Solok</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Pesisir Selatan</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Sijunjung</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Solok</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Solok Selatan</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
              <div class="card wow bounceInUp">
                <div class="card-body">
                  <h5 class="card-title">Tanah Datar</h5><br>
                    <p class="card-text">Masker N95 <br>Gloves<br>Hansanitizer<br>Googles <br>. . .</p>
                  <button type="button" class="tombol">MORE</button>
                </div>
              </div>
            </div>
          </div>

          </div>
      </div>
    </section>
 
    <section id="regis" class="clearfix">
      <div class="container">
        <div class="row justify-content-center mt-100">
          <img src="{{ url('backend/asset/img/pict/donation.png') }}" class="col-md-8 img-fluid">
           <header class="section-header">
            <h3 style="padding-top: 6%; font-weight: bold; color: #000;">Ayo Donasi Sekarang!</h3>  
          </header>
        </div>
      </div>
    </section><!-- #Regis -->

  </main>
  @endsection
