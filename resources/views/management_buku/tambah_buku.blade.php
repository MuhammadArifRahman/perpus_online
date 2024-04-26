@extends('main_menu.menu');
@section('title', 'Tambah Buku')
@section('main')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Tambah Buku</h2>
      <div class="card shadow mb-4">
        <div class="card-body">
          <form action="{{ url('buku/tambah/post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Nama Buku</label>
                  <input type="text" id="simpleinput" name="nama_buku" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Tahun Terbit</label>
                  <input type="number" id="simpleinput" name="tahun_terbit" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="example-select">Kategori</label>
                  <select class="form-control" name="kategori" id="example-select">
                    <option class="d-none" selected></option>
                    <option value="Novel">Novel</option>
                    <option value="Majalah">Majalah</option>
                    <option value="Pelajaran">Pelajaran</option>
                    <option value="Komik">Komik</option>
                    <option value="Manga">Manga</option>
                    <option value="Ensiklopedia">Ensiklopedia</option>
                    <option value="Biografi">Biografi</option>
                    <option value="Naskah">Naskah</option>
                    <option value="Komik">Komik</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Deskripsi</label>
                  <input type="text" id="simpleinput" name="deskripsi" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Rak Penyimpanan</label>
                  <input type="text" id="simpleinput" name="rak" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Nama Penulis</label>
                  <input type="text" id="simpleinput" name="penulis" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Penerbit</label>
                  <input type="text" id="simpleinput" name="penerbit" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Jumlah</label>
                  <input type="number" id="simpleinput" name="jumlah" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="customFile">Foto Buku</label>
                  <div class="form-group mb-3 d-flex form-control align-items-center px-2" style="padding: 0">
                    <input type="file" id="example-fileinput" name="foto" class="form-control-file">
                  </div>
                </div>
              </div>
              <div class="row">
                <button class="btn btn-primary mx-auto mt-3 px-5">Tambah</button>
              </div>
          </form>
        </div>
      </div> <!-- / .card -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection