@extends('user.layouts.app')

@section('title')
  Profile
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4 col-xs-12">
      <div class="card border-left-primary shadow">
        <div class="card-body">
          <div class="mt-4"> <img id="user-image" class="rounded-circle" width="150"
              src="https://sanbercode.com/images/dummy_user.png">
            <h4 class="card-title mt-2">Yanto</h4>
            <h6 class="card-subtitle">yanto@gmail.com</h6>
          </div>

          <div class="user-btm-box">
            <p>Ganti gambar profil</p>
            <form id="formUploadPhoto" wtx-context="F6C5705D-5149-4D6A-9FE0-D118CCBCD7F5">
              <input type="file" id="userPhoto" name="picture" class="form-control" required=""
                wtx-context="8F269584-002D-4163-81C2-AE6A3D256DE1">
              <br>
              <button type="submit" id="btnUploadPhoto" class="btn btn-primary btn-small">Submit</button>
              <img id="loader-gif" src="https://sanbercode.com/images/loader.gif" width="16px" alt=""
                style="display:none">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-xs-12">
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link show" href="#settings" data-toggle="pill" role="tab" aria-controls="pills-timeline"
                aria-selected="false"><span class="hidden-xs">Quick Status</span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link show active" href="#home" role="tab" data-toggle="pill" aria-selected="true"><span
                  class="hidden-xs">Data Diri</span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile" role="tab" data-toggle="pill"> <span class="hidden-xs">Pengalaman
                  Pekerjaan</span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#new" role="tab" data-toggle="pill" aria-expanded="false"> <span
                  class="hidden-xs">Portofolio Project</span> </a>
            </li>
            <!-- <li class="tab">
                                                    <a href="#messages" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fas fa-envelope"></i></span> <span class="hidden-xs">Messages</span> </a>
                                                </li> -->
          </ul>
        </div>
        <div class="card-body">

          <div class="tab-content">
            <div class="tab-pane quick-status show" id="settings">
              <p><small>Quick status last update: <strong><span id="last-update-quick-status">Rabu, 26 Agustus
                      2020</span></strong></small></p>
              <form class="form-horizontal form-material" id="quick-status"
                wtx-context="7DF6AC15-3D72-41C7-8FC4-A084A0B5832D">
                <input type="hidden" name="_token" value="8ZnuH3QZFiLKePFbhJnNl6uAF9otDxzglgO12hi8"
                  wtx-context="3466BF97-996F-4CD6-80CF-D1AA4D7BA182">
                <div class="form-group">
                  <label class="col-md-12">Available Bekerja Fulltimer</label>
                  <div class="col-md-12">
                    <input type="radio" name="available_fulltime" value="1"
                      wtx-context="82927373-E709-4157-850D-BE8FED76B6B2"> Ya <br>
                    <input type="radio" name="available_fulltime" value="0"
                      wtx-context="88A7B70B-4BFC-41FB-8D03-94016DF05D2C"> Tidak
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Available Bekerja Freelance / Project Based</label>
                  <div class="col-md-12">
                    <input type="radio" name="available_freelance" value="1"
                      wtx-context="7B56A507-E6CA-4F27-8945-985B2FE13F24"> Ya <br>
                    <input type="radio" name="available_freelance" value="0"
                      wtx-context="048658B3-65E9-4BED-84E5-D71F847961EA"> Tidak
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Preferensi lokasi kerjaan</label>
                  <div class="col-md-12">
                    <input type="radio" name="bekerja_luar_domisili" value="1"
                      wtx-context="A40FDF9C-698D-4A73-81FE-22BE7D426F04"> bisa dimana saja, tidak ada batasan khusus <br>
                    <input type="radio" name="bekerja_luar_domisili" value="0"
                      wtx-context="A0318B6B-756F-43CC-9F8D-114775D1CB68"> harus kota/kab dekat domisili saya
                  </div>
                </div>
                <div class="form-group">
                  <label for="example-email" class="col-md-12">Target ideal gaji yang diinginkan (Rp)</label>
                  <div class="col-md-12">
                    <input type="number" class="form-control form-control-line" name="target_gaji"
                      wtx-context="9ABB884D-8966-46DE-A056-2C16609CC12D">
                  </div>
                </div>
                <div class="form-group">
                  <label for="example-email" class="col-md-12">Minimum gaji yang diinginkan (Rp)</label>
                  <div class="col-md-12">
                    <input type="number" class="form-control form-control-line" name="minimum_gaji"
                      wtx-context="A4F3F1B6-FD40-46E9-9250-3CDF4590006D">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Catatan tambahan terkait bahasa programming yang pernah digunakan beserta
                    estimasi pengalaman menggunakannya:</label>
                  <div class="col-md-12">
                    <textarea name="catatan_tambahan" cols="30" rows="5" class="form-control form-control-line"
                      placeholder="contoh: C++ (6 bulan), python (1 tahun), php (3 tahun), dan seterusnya..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">
                    <button class="btn btn-success" id="btn-quick-status">Update</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane data-diri show active" id="home">
              <form class="form-horizontal form-material" id="data-diri"
                wtx-context="82A775DA-54C2-482F-81AC-7D94E7DCDB0A">
                <div class="form-group">
                  <label class="col-md-12">Nama Lengkap</label>
                  <div class="col-md-12">
                    <input type="text" name="nama_lengkap" class="form-control form-control-line"
                      wtx-context="6FEFD87D-7F84-44DD-B159-B0D05C8B20C8">
                  </div>
                </div>
                <div class="form-group clearfix">
                  <label for="example-email" class="col-md-12">Email</label>
                  <div class="col-md-12">
                    yoanto@gmail.com
                    <button type="button" class="btn btn-secondary btn-sm pull-right" id="ganti_email_button"
                      data-toggle="modal" data-target="#modal_ganti_email">Ganti email</button>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Password (Isi hanya jika Anda ingin mengganti password)</label>
                  <div class="col-md-12">
                    <input type="password" name="change_password" class="form-control form-control-line"
                      wtx-context="23D6951D-4A93-4B45-80D1-A8FE1317945F">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Nomor HP</label>
                  <div class="col-md-12">
                    <input type="text" name="no_hp" class="form-control form-control-line"
                      wtx-context="954C8CCE-5EC0-4DDB-BA25-415032E1441D">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Alamat domisili saat ini</label>
                  <div class="col-md-12">
                    <input type="text" name="alamat_domisili" class="form-control form-control-line" value=""
                      wtx-context="593533CA-1021-4347-8053-7569B520E992">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-12">Pilih Provinsi (sesuai domisili)</label>
                  <div class="col-sm-12">
                    <select class="form-control" name="provinsi" id="provinsi"
                      wtx-context="7AE5A896-DE37-42CB-8899-4C60D883AB56">

                      <option value="060000">PROV. ACEH</option>
                      <option value="220000">PROV. BALI</option>
                      <option value="280000">PROV. BANTEN</option>
                      <option value="260000">PROV. BENGKULU</option>
                      <option value="040000">PROV. D.I. YOGYAKARTA</option>
                      <option value="010000">PROV. D.K.I. JAKARTA</option>
                      <option value="300000">PROV. GORONTALO</option>
                      <option value="100000">PROV. JAMBI</option>
                      <option value="020000">PROV. JAWA BARAT</option>
                      <option value="030000">PROV. JAWA TENGAH</option>
                      <option value="050000" selected="">PROV. JAWA TIMUR</option>
                      <option value="130000">PROV. KALIMANTAN BARAT</option>
                      <option value="150000">PROV. KALIMANTAN SELATAN</option>
                      <option value="140000">PROV. KALIMANTAN TENGAH</option>
                      <option value="160000">PROV. KALIMANTAN TIMUR</option>
                      <option value="340000">PROV. KALIMANTAN UTARA</option>
                      <option value="290000">PROV. KEPULAUAN BANGKA BELITUNG</option>
                      <option value="310000">PROV. KEPULAUAN RIAU</option>
                      <option value="120000">PROV. LAMPUNG</option>
                      <option value="210000">PROV. MALUKU</option>
                      <option value="270000">PROV. MALUKU UTARA</option>
                      <option value="230000">PROV. NUSA TENGGARA BARAT</option>
                      <option value="240000">PROV. NUSA TENGGARA TIMUR</option>
                      <option value="250000">PROV. PAPUA</option>
                      <option value="320000">PROV. PAPUA BARAT</option>
                      <option value="090000">PROV. RIAU</option>
                      <option value="330000">PROV. SULAWESI BARAT</option>
                      <option value="190000">PROV. SULAWESI SELATAN</option>
                      <option value="180000">PROV. SULAWESI TENGAH</option>
                      <option value="200000">PROV. SULAWESI TENGGARA</option>
                      <option value="170000">PROV. SULAWESI UTARA</option>
                      <option value="080000">PROV. SUMATERA BARAT</option>
                      <option value="110000">PROV. SUMATERA SELATAN</option>
                      <option value="070000">PROV. SUMATERA UTARA</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-12">Pilih Kota / Kabupaten (sesuai domisili)</label>
                  <div class="col-sm-12">
                    <select class="form-control form-control-line" name="kokab" id="kokab"
                      wtx-context="1C8DBF76-894F-4C96-B236-A8A15C12FD48">

                      <option value="052900">KAB. BANGKALAN</option>
                      <option value="052500">KAB. BANYUWANGI</option>
                      <option value="051500">KAB. BLITAR</option>
                      <option value="050500">KAB. BOJONEGORO</option>
                      <option value="052200">KAB. BONDOWOSO</option>
                      <option value="050100">KAB. GRESIK</option>
                      <option value="052400">KAB. JEMBER</option>
                      <option value="050400">KAB. JOMBANG</option>
                      <option value="051300">KAB. KEDIRI</option>
                      <option value="050700">KAB. LAMONGAN</option>
                      <option value="052100">KAB. LUMAJANG</option>
                      <option value="050800">KAB. MADIUN</option>
                      <option value="051000">KAB. MAGETAN</option>
                      <option value="051800">KAB. MALANG</option>
                      <option value="050300">KAB. MOJOKERTO</option>
                      <option value="051400">KAB. NGANJUK</option>
                      <option value="050900">KAB. NGAWI</option>
                      <option value="051200">KAB. PACITAN</option>
                      <option value="052600">KAB. PAMEKASAN</option>
                      <option value="051900">KAB. PASURUAN</option>
                      <option value="051100">KAB. PONOROGO</option>
                      <option value="052000">KAB. PROBOLINGGO</option>
                      <option value="052700">KAB. SAMPANG</option>
                      <option value="050200">KAB. SIDOARJO</option>
                      <option value="052300">KAB. SITUBONDO</option>
                      <option value="052800">KAB. SUMENEP</option>
                      <option value="051700">KAB. TRENGGALEK</option>
                      <option value="050600">KAB. TUBAN</option>
                      <option value="051600">KAB. TULUNGAGUNG</option>
                      <option value="056800">KOTA BATU</option>
                      <option value="056500">KOTA BLITAR</option>
                      <option value="056300">KOTA KEDIRI</option>
                      <option value="056200" selected="">KOTA MADIUN</option>
                      <option value="056100">KOTA MALANG</option>
                      <option value="056400">KOTA MOJOKERTO</option>
                      <option value="056600">KOTA PASURUAN</option>
                      <option value="056700">KOTA PROBOLINGGO</option>
                      <option value="056000">KOTA SURABAYA</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-12">Tanggal Lahir :</label>
                  <div class="col-md-12">
                    <input type="date" name="tanggal_lahir" class="form-control form-control-line" value="2001-05-26"
                      wtx-context="4C8ED57E-62D4-42EF-B2F9-C2A66A9F13D9">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-12">Pendidikan Terakhir</label>
                  <div class="col-sm-12">
                    <select class="form-control form-control-line" name="pendidikan_terakhir"
                      wtx-context="DADA975F-863C-45AD-8B3F-5A099516D699">
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMA">SMA</option>
                      <option value="SMK">SMK</option>
                      <option value="D1">D1</option>
                      <option value="D2">D2</option>
                      <option value="D3">D3</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-12">Nama Institusi Pendidikan Terakhir</label>
                  <div class="col-md-12">
                    <input type="text" name="institusi_pendidikan" class="form-control form-control-line"
                      value="SMAN 3 Taruna Angkasa Madiun" wtx-context="45F40F97-268C-44C3-849F-09FBE5061072">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-12">Gender</label>
                  <div class="col-sm-12">
                    <select class="form-control form-control-line" name="gender"
                      wtx-context="897DFCB7-81D5-4E8F-BF18-B17542816327">
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12">
                    <button class="btn btn-success" id="btn-data-diri">Update</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="profile">
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah-pengalaman">Tambah
                    pengalaman</button>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul id="daftar-pengalaman">

                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="new">
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah-portofolio">Tambah
                    portofolio</button>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul id="daftar-portofolio">

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================== -->
    <!-- Modal tambah pengalaman -->
    <div class="modal fade" id="tambah-pengalaman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h5 class="modal-title" id="myModalLabel">Tambah Pengalaman Pekerjaan</h5>
          </div>
          <div class="modal-body">
            <form id="form-tambah-pengalaman" wtx-context="097D5C1E-0E89-4C4D-840D-506513D99BEE">

              <input type="text" name="user_id" value="7443" style="display:none"
                wtx-context="07E01C8C-19C0-4730-89E0-1E6E947D6956">
              <p>
                <label for="nama_institusi">Nama Institusi (*)</label>
                <br>
                <input type="text" name="nama_institusi" class="form-control form-input" required=""
                  wtx-context="5FE45F7D-F111-4A86-8C12-4FCE96B76B0D">
              </p>
              <p>
                <label for="jabatan">Jabatan / Posisi (*)</label>
                <br>
                <input type="text" name="jabatan" class="form-control form-input" required=""
                  wtx-context="E400D485-0E48-4440-8E4C-12418D711003">
              </p>
              <p>
                <label for="tanggal_mulai">Tanggal Mulai: (*)</label>
                <input type="date" name="tanggal_mulai" class="form-control form-input" required=""
                  wtx-context="D517313F-C0F5-4DA3-8B12-FF575179EC4D">
              </p>
              <p>
                <label for="tanggal_selesai">Tanggal Selesai: (*)</label>
                <input type="date" name="tanggal_selesai" class="form-control form-input"
                  wtx-context="5DD3781A-8F47-4FE2-B879-315BA3428ED9">
              </p>
              <p>
                <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan (*)</label>
                <textarea name="deskripsi_pekerjaan" class="form-control form-input" rows="4"></textarea>
              </p>
              <p>
                <label for="link_profil_institusi">Link Web Profil Institusi</label>
                <input type="text" name="link_profil_institusi" class="form-control optional-input"
                  wtx-context="4239FDC6-D5EB-4BB1-88D6-7857F453B6B8">
              </p>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="closeModal">Close</button>
            <button type="button" id="form-submit" class="btn btn-primary" onclick="submitTambahPengalaman()"
              disabled="disabled">Submit</button>
            <br><br>
            <div class="alert alert-success alert-dismissible fade in" role="alert" style="display:none">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                  aria-hidden="true">×</span></button>
              Data berhasil Ditambah.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal tambah portofolio -->
    <div class="modal fade" id="tambah-portofolio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h5 class="modal-title" id="myModalLabel">Tambah Portofolio</h5>
          </div>
          <div class="modal-body">
            <form id="form-tambah-portofolio" wtx-context="1517B200-B5B7-41A8-B2D6-0E74CF28627B">

              <input type="text" name="user_id" value="7443" style="display:none"
                wtx-context="8DC61E16-D6C1-4440-ADF1-568772D75BD8">
              <p>
                <label for="judul_project">Judul Project (*)</label>
                <br>
                <input type="text" name="judul_project" class="form-control form-input-portofolio" required=""
                  wtx-context="E502B3EB-2C1E-4938-B95A-424F3EBE59D7">
              </p>
              <p>
                <label for="deskripsi">Deskripsi Project</label>
                <br>
                <textarea class="form-control optional-input-portofolio" name="deskripsi"></textarea>
              </p>
              <p>
                <label for="link_preview_project">Link Preview Project</label>
                <input type="text" name="link_preview_project" class="form-control optional-input-portofolio"
                  wtx-context="E9E53D8A-C886-448D-976B-F0A26AE5102C">
              </p>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" id="closeModal">Close</button>
            <button type="button" id="form-submit-portofolio" class="btn btn-primary" onclick="submitTambahPortofolio()"
              disabled="disabled">Submit</button>
            <br><br>
            <div class="alert alert-success alert-dismissible fade in" role="alert" style="display:none">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                  aria-hidden="true">×</span></button>
              Data berhasil Ditambah.
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
