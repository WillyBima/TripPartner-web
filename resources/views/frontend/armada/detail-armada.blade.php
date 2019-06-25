<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Detail Armada</title>
    <!-- end title -->
    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%;">
    <!-- logo atas -->
    @include('master.body')
    @yield('header-frontend')
    <!-- end logo -->

    <!-- Navbar -->
    @yield('navbar-frontend')
    <!-- End Navbar -->

    <!-- Header -->
        <section id="header">
            <div class="container-fluid" style="background-image: url({{url('assets/img/header.jpg')}});
            margin-bottom: 40px;
            background-size: cover;
            height: auto;
            padding: 25px;">
                <p class="title-header"><b>ARMADA</b></p>
                <p class="subtitle-header"> Beranda > Armada > PO. HIBA UTAMA </p>
            </div>
        </section>

    <section>
      <div class="container-fluid">
        @foreach($datapo as $dpo)
          <p class="title-po"><b>PO {{$dpo->nama_po}}</b></p>
            <div class="row">
              <div class="col-md-3" style="text-align: center; padding-right: 0px;">
                <p class="title-armada"><b>Big Bus</b></p>
              </div>
              <div class="col-md-9" style="margin-top: 4px; padding-left: 0px; padding-right: 0px;">
                <hr style="width: 920px; border-bottom: 2px solid #25aae2;">
              </div>
            </div>
          @endforeach
            <!-- big bus -->
            <div class="row text-center" style="padding: 30px;">
              @foreach($big_bus as $bb)
              <div class="col-md-4">
                <div class="card" style="width:399px">
                  <img class="card-img-top" src="{{url('img/bus/'.$bb->gambar_bus)}}" alt="Card image" style="width: 398px; height: 369px;">
                  <div class="card-body">
                    <p class="card-text">{{$bb->nama_bus}}</p>
                    <a href="{{url('/boking/booking-sekarang/'.$bb->slug)}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

            <div class="row">
              <div class="col-md-8" style="margin-top: 4px; padding-left: 0px; padding-right: 0px;">
                <hr style="width: 820px; border-bottom: 2px solid #25aae2;">
              </div>
              <div class="col-md-4" style="text-align: center;">
                <p class="title-armada"><b>Medium Bus</b></p>
              </div>
            </div>
            <!-- Medium bus -->
            <div class="row text-center" style="padding: 30px;">
              @foreach($medium_bus as $mb)
              <div class="col-md-4">
                <div class="card" style="width:399px">
                  <img class="card-img-top" src="{{url('img/bus/'.$mb->gambar_bus)}}" alt="Card image" style="width: 398px; height: 369px;">
                  <div class="card-body">
                    <p class="card-text">{{$mb->nama_bus}}</p>
                    <a href="{{url('/boking/booking-sekarang/'.$mb->slug)}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

            <div class="row">
              <div class="col-md-3" style="text-align: center; padding-right: 0px;">
                <p class="title-armada"><b>Small Bus</b></p>
              </div>
              <div class="col-md-9" style="margin-top: 4px; padding-left: 0px; padding-right: 0px;">
                <hr style="width: 920px; border-bottom: 2px solid #25aae2;">
              </div>
            </div>
            <!-- big bus -->
            <div class="row text-center" style="padding: 30px;">
              @foreach($small_bus as $sb)
              <div class="col-md-4">
                <div class="card" style="width:399px">
                  <img class="card-img-top" src="{{url('img/bus/'.$sb->gambar_bus)}}" alt="Card image" style="width: 398px; height: 369px;">
                  <div class="card-body">
                    <p class="card-text">{{$sb->nama_bus}}</p>
                    <a href="{{url('/boking/booking-sekarang/'.$sb->slug)}}" class="btn btn-sm card-btn" role="button">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

      </div>
    </section>

    <!-- FOOTER -->
    @yield('footer-frontend')
    <!-- end Footer -->

    <!-- script -->
    @yield('script-frontend')
    <!-- endscript -->
  </body>
</html>
