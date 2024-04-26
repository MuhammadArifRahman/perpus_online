@extends('main_menu.menu');
@section('title', 'Buku')
@section('main')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="mb-2 page-title">Data Buku</h2>
      <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <div class="row mb-3 ml-1">
                <a href="/buku/tambah" class="btn btn-primary mt-2">Tambah Buku</a>
                <button class="btn btn-primary mt-2 mx-4">Import Buku</button>
                <button class="btn btn-primary mt-2">Export Buku</button>
              </div>
                <!-- table -->
              <table class="table datatables" id="dataTable-1">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama Buku</th>
                    <th>Penulis</th>
                    <th class="text-center">Tahun Terbit</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($buku as $key => $b)
                  <tr>
                    <td class="text-center">{{ $key+1 }}</td>
                    <td>{{ $b->nama_buku }}</td>
                    <td>{{ $b->penulis }}</td>
                    <td class="text-center">{{ $b->tahun_terbit }}</td>
                    <td class="text-center">
                      <div class="d-flex justify-content-center">
                        <div class="mr-2">
                          <a href="/buku/edit/{{ $b->id }}" class="btn btn-primary">Edit</a>
                        </div>
                        <form action="{{ url('/buku/delete/post/'.$b->id) }}" method="POST" id="formHapus">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-danger" id="hapus">Hapus</button>
                        </form> 
                      </div>
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
    "columns": [
      null,
      { "width": "35%" },
      { "width": "25%" },
      null,
      null,
    ]
  });

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

  let destroy = "{{ session('destroy') }}"
  if(destroy == 'berhasil'){
    Swal.fire({
      position: 'middle',
      icon: 'success',
      title: 'Data Berhasil di Hapus',
      showConfirmButton: false,
      timer: 1500
    })
  }

  let btn_hapus = document.querySelectorAll('#hapus');

  btn_hapus.forEach(hapus => { 
      hapus.addEventListener('click', function(e){
          Swal.fire({
              title: 'Are you sure?',
              text: "Apakah Anda Yakin Ingin Mengapus Data Ini",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes'
              }).then((result) => {
              if (result.isConfirmed) {
                  e.target.parentElement.submit();
              }
          })
      })
  });
</script>
@endsection