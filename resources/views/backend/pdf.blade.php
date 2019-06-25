<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- title -->
    <title>Tentang Kami</title>
    <!-- end title -->
    @include('master.head')
    @yield('head-frontend')
  </head>

  <body style="height: 100%;">
    <!-- logo atas -->
    @include('master.body')
    <!-- end logo -->

    <div class="pdf">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">

          </div>

          <div class="col-md-8" style="">
            <!-- Header -->
            <div class="header text-center">
              <img src="{{url('assets/img/icon/logobaru.png')}}" class="" alt="" style="width: 180px; height: 59px; margin-top: 17px;">
              <p style="margin-top: 5px; font-family: Cambria;">
                <b>E-tiket (Elektronik Tiket)</b>
              </p>
            </div>

            <!-- Detail Tiket -->
            <div class="row">
              <div class="col-md-4 text-center" style="font-family: Cambria; margin-top: 50px;">
                <img src="{{url('assets/img/icon/logobaru.png')}}" class="" alt="" style="width: 180px; height: 59px;">
                <p style="margin-top: 10px;"><b>PO HIBA UTAMA</b></p>
                <p style="">BBHU Hiba Utama 1</p>
              </div>
              <div class="col-md-4 text-center" style="font-family: Cambria; margin-top: 50px;">
                <p><b>Tanggal Berangkat</b></p>
                <p style="">Senin, 18 Maret 2019</p>
                <p><b>Tanggal Pulang</b></p>
                <p style="">Rabu, 20 Maret 2019</p>
              </div>
              <div class="col-md-4 text-center" style="font-family: Cambria; margin-top: 50px;">
                <p><b>Id Pemesanan</b></p>
                <p style="">110318</p>
              </div>
            </div>
            <hr style="width: auto; border-bottom: 2px solid #f96d01;">

            <div class="row text-center">
              <div class="col-md-4">
                <img src="{{url('assets/img/icon/jam.png')}}" class="img-fluid" alt="">
                <p style="font-family: Cambria; margin-top: 10px;">
                  Pelunasan Paling Lama H-1 Minggu Sebelum Keberangkatan
                </p>
              </div>
              <div class="col-md-4">
                <img src="{{url('assets/img/icon/tiket.png')}}" class="img-fluid" alt="">
                <p style="font-family: Cambria; margin-top: 10px;">
                  Tunjukkan E-Tiket anda ketika akan Berangkat
                </p>
              </div>
              <div class="col-md-4">
                <img src="{{url('assets/img/icon/warning.png')}}" class="img-fluid" alt="">
                <p style="font-family: Cambria; margin-top: 10px;">
                  Tanggal Keberangkatan dan Kepulangan tidak bisa dirubah
                </p>
              </div>
            </div>
            <hr style="width: auto; border-bottom: 2px solid #f96d01;">

            <div class="tabel" style="font-family: Cambria; margin-top: 30px;">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Rute</th>
                    <th>Fasilitas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Willy Jonnaedi</td>
                    <td>Jakarta -> Yogyakarta</td>
                    <td>AC, Toilet, Bagasi</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <hr style="width: auto; border-bottom: 2px solid #f96d01; margin-top: 400px;">
            <!-- Footer -->
            <div class="row">
              <div class="col-md-6">
                <p style="font-family: Cambria; margin-top: 10px;">
                  <b>Customer Service</b>
                </p>
                <p style="font-family: Cambria; margin-top: 10px;">0812 6865 0827</p>
              </div>
              <div class="col-md-6">
                <p style="font-family: Cambria; margin-top: 10px; text-align: right;">
                  <b>Customer Service Email</b>
                </p>
                <p style="font-family: Cambria; margin-top: 10px; text-align: right;">TripPartner@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-md-2">

          </div>
        </div>


      </div>
    </div>

    <!-- script -->
    @yield('script-frontend')
    <!-- endscript -->
  </body>
</html>
