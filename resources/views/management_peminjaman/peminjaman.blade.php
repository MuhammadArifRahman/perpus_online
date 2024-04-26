@extends('main_menu.menu');
@section('title', 'Buku')
@section('main')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="mb-2 page-title">Data Peminjaman Buku</h2>
      <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <table class="table datatables" id="dataTable-1">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Buku</th>
                    <th class="text-center">Jumlah Buku</th>
                    <th class="text-center">Jumlah Di Pinjam</th>
                    <th class="text-center">Tersedia</th>
                    <th class="text-center">Detail</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($buku as $key => $b)
                  <tr>
                    <td class="text-center">{{ $key+1 }}</td>
                    <td>{{ $b->nama_buku }}</td>
                    <td class="text-center">{{ $b->jumlah }}</td>
                    <td class="text-center">{{ $b->jml_peminjaman }}</td>
                    <td class="text-center">{{ $b->jumlah - $b->jml_peminjaman }}</td>
                    <th class="text-center"><button class="btn btn-primary">Detail</button></th>
                    <td class="text-center">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#peminjaman" data-whatever="{{ $b->nama_buku }}">Peminjaman</button>
                      <br class="my-2">
                      <button type="button" class="btn btn-info mt-2 pengembalian" data-toggle="modal" data-target="#pengembalian" data-buku="{{ $b->id }}">Pengembalian</button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- simple table -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
</div> <!-- .container-fluid -->

<!-- Modal Peminjaman-->
<div class="modal fade" id="peminjaman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('/peminjaman/pinjam/post') }}" method="POST">
        <div class="modal-body">
            @csrf
            <label for="buku">Judul Buku</label>
            <input type="text" class="form-control" id="buku" value="" name="nama_buku" readonly>
            <label for="nama_siswa" class="mt-2">Nama Siswa</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
            <label for="kelas" class="mt-2">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas">
            <label for="tgl_pinjaman" class="mt-2"class="mt-2">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="tgl_pinjaman" name="tgl_pinjaman">
            <label for="tgl_pengembalian" class="mt-2">Tanggal Pengembalian</label>
            <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Modal Pengembalian-->
<div class="modal fade" id="pengembalian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('/peminjaman/pinjam/post') }}" method="POST">
        <div class="modal-body">
            @csrf
            <table class="table datatables" id="dataTable-2">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Nama Siswa</th>
                  <th class="text-center">Batas Pengembalian</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection


@section('script')
<script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
<script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
<script>
  $('#dataTable-1').DataTable(
  {
    autoWidth: true,
    "lengthMenu": [
      [5, 10, 20, -1],
      [5, 10, 20, "All"]
    ],
  });
  $('#dataTable-2').DataTable(
  {
    autoWidth: true,
    "lengthMenu": [
      [5, 10, 20, -1],
      [5, 10, 20, "All"]
    ],
  });

  $('#peminjaman').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #buku').val(recipient)
  })

  $('.pengembalian').on('click', function(){
      var buku = $(this).attr("data-buku");
      console.log(buku);
      // $.ajax({
      //     url:"/datakategori/action",
      //     type:"GET",
      //     data:{'search':query, 'id' : id},
      //     success:function(data){
      //         let out = data
      //         $('#form_kategori').html(data);
      //     }
      // })
  })

  $('.close').on('click', function(){
      $('#form_kategori').html('');
      $('#kategori').val("");
  })

  let store = "{{ session('store') }}"
  if(store == 'berhasil'){
    Swal.fire({
      position: 'middle',
      icon: 'success',
      title: 'Data Berhasil di Tambahkan',
      showConfirmButton: false,
      timer: 1500
    })
  }

  let update = "{{ session('update') }}"
  if(update == 'berhasil'){
    Swal.fire({
      position: 'middle',
      icon: 'success',
      title: 'Data Berhasil di Edit',
      showConfirmButton: false,
      timer: 1500
    })
  }

  
</script>
@endsection