@extends('main_menu.menu');
@section('title', 'Edit Buku')
@section('main')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Edit Buku</h2>
      <div class="card shadow mb-4">
        <div class="card-body">
          <form action="{{ url('/buku/edit/post/'.$buku->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Nama Buku</label>
                  <input type="text" id="simpleinput" name="nama_buku" value="{{ $buku->nama_buku }}" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Tahun Terbit</label>
                  <input type="number" id="simpleinput" name="tahun_terbit" value="{{ $buku->tahun_terbit}}" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="example-select">Kategori</label>
                  <select class="form-control" name="kategori" id="example-select">
                    <option class="d-none" value="{{ $buku->kategori }}" selected>{{ $buku->kategori}}</option>
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
                  <input type="text" id="simpleinput" name="deskripsi" value="{{ $buku->deskripsi }}" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Rak Penyimpanan</label>
                  <input type="text" id="simpleinput" name="rak" value="{{ $buku->rak }}" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Nama Penulis</label>
                  <input type="text" id="simpleinput" name="penulis" value="{{ $buku->penulis }}" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Penerbit</label>
                  <input type="text" id="simpleinput" name="penerbit" value="{{ $buku->penerbit }}" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="simpleinput">Jumlah</label>
                  <input type="number" id="simpleinput" name="jumlah" value="{{ $buku->jumlah }}" class="form-control">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="customFile">Foto Buku</label>
                  <div class="form-group mb-3 d-flex form-control align-items-center px-2" style="padding: 0">
                    <input type="file" id="foto" name="foto" class="form-control-file">
                  </div>
                </div>
              </div>
              <div class="row">
                <img src="C:\\fakepath\\WhatsApp Image 2023-01-27 at 13.47.03.jpeg" alt="">
                <button class="btn btn-primary mx-auto mt-3 px-4">Edit Data</button>
              </div>
          </form>
        </div>
      </div> <!-- / .card -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection

@section('script')
    <script>
      let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
      let foto = document.querySelector('#foto')
    </script>
@endsection
