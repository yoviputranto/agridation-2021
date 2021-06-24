@extends('user.layouts.app')
@section('title')
  List Lomba
@endsection

@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Lomba
      </h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-3">
          <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#kti" role="tab">
              Karya Tulis Ilmiah
            </a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#video" role="tab">
              Creative Video
            </a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#podcast" role="tab">
              Podcast
            </a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#poster" role="tab">
              Poster
            </a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content">
            <div class="tab-pane active" id="kti" role="tabpanel">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Karya Tulis Ilmiah</td>
                      <td>Merupakan lomba karya tulis ilmiah tentang pemikiran terbaharukan dan cerdas seputar pertanian dalam menghadapi krisis dengan inovasi terbaru pada bidang pertanian berbentuk karya tulis yang diperuntukkan bagi Masyarakat Umum dengan umur 17-25 tahun. Kegiatan karya
                        tulis berupa perlombaan yang bersifat kelompok dengan pilihan 4 topik, yaitu “Teknologi Pertanian Berbasis Industri 4.0”, “Inovasi Sistem Pertanian dalam Mewujudkan Indonesia Emas 
                        2045”, “Pemanfaatan Limbah Hasil Pertanian Menuju Indonesia Emas 2045”, dan “Pengolahan Industri Pertanian 
                        untuk Menaikkan Sektor Perekonomian”.</td>
                      <td>Rp. 35.000</td>
                      <td><a href="{{ route('user.daftarlomba') }}" class="btn btn-primary">Daftar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="video" role="tabpanel">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Creative Video</td>
                      <td>Merupakan lomba yang bertujuan untuk meningkatkan kreativitas user dan diharapkan dapat menggali serta menyampaikan pesan untuk pertanian Indonesia yang dikemas dalam bentuk video yang mengedepankan 
                          kreativitas. Perlombaan bersifat kelompok dengan user 1-5 orang. Lomba creative video memiliki 4 topik, yaitu“Teknologi Membangun Pertanian”, “Kreativitas untuk Pertanian”, “Harapan Pertanian Bangsa”, dan “Inspirasi 
                          untuk Kemajuan Tani”. Topik ini dipilih sebagai upaya dalammerealisasikan inovasi pertanian melalui cerita singkat video.</td>
                      <td>Rp. 35.000</td>
                      <td><a href="{{ route('user.daftarlomba') }}" class="btn btn-primary">Daftar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="podcast" role="tabpanel">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Podcast</td>
                      <td>Merupakan lomba siaran audio yang mengkaji bidang pertanian dengan pemikiran yang inovatif dan kreatif. Kegiatan ini bersifat kelompok dengan maksimal user
                          2 orang. Lomba podcast ini terdiri dari 4 topik, yaitu “Kesejahteraan Pertanian”, “Perkembangan Teknologi Pertanian”, “Peran Milenial dalam Pertanian”, dan
                          “Penyokong Pertanian”. Lomba podcast bertujuan untuk mengasah informasi maupun pengetahuan dibidang  pertanian dalam bentuk obrolan singkat maupun narasi.</td>
                      <td>Rp. 35.000</td>
                      <td><a href="{{ route('user.daftarlomba') }}" class="btn btn-primary">Daftar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="poster" role="tabpanel">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Poster</td>
                      <td>Merupakan kegiatan perlombaan mendesain poster yang menggambarkan kondisi pertanian di Indonesia sesuai dengan tema yang disediakan. Kegiatan ini bersifat perorangan untuk 
                          masyarakat umum yang berusia 17-25 tahun. Topik lomba ini adalah “Gambaran anak millenial yang semangat terhadap pertanian”, “Kaum millenial siap bertani di era new normal”, dan 
                          “Peralatan digital untuk pertanian”. Penentuan topik ini bertujuan untuk mengajak, mengimbau, dan memperkenalkan inovasi-inovasi pertanian melalui sebuah karya desain poster</td>
                      <td>Rp. 35.000</td>
                      <td><a href="{{ route('user.daftarlomba') }}" class="btn btn-primary">Daftar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="fotografi" role="tabpanel">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Fotografi</td>
                      <td>Kegiatan ini berupa perlombaan yang bersifat perorangan untuk masyarakat umum yang berusia 17-25 tahun. Topik lomba fotografi adalah “Cerita Pertanian di Bumi Pertiwi” dan “Bersama 
                          Teknologi Majukan Pertanian Negeri". Hasil karya yang diperlombakan diharapkan mampu menggambarkan potret pertanian Indonesia</td>
                      <td>Rp. 35.000</td>
                      <td><a href="{{ route('user.daftarlomba') }}" class="btn btn-primary">Daftar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  $(function() {
    $('#myList a:last-child').tab('show')
  })

</script>
@endpush

