@extends('layouts.app', ['title' => __('List Divisi')])

@section('content')
@include('users.partials.header', [
'title' => '',
])

<div class="container-fluid mt--7">
  @if (session('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Divisi</h3>
            </div>
            <div class="col text-right">
              <a href="{{ route('list_divisi.create') }}" class="btn btn-sm btn-primary">Tambah Divisi</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="gambar">Gambar</th>
                <th scope="col" class="sort" data-sort="nama">Nama</th>
                <th scope="col" class="sort" data-sort="bio">Bio</th>
                <th scope="col" class="sort" data-sort="latar_belakang">Latar Belakang</th>
                <th scope="col" class="sort" data-sort="kegiatan">Kegiatan</th>
                <th scope="col" class="sort" data-sort="kategori">Kategori</th>
                <th scope="col" class="sort" data-sort="aksi"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($divisi as $g)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="uploads/{{ $g->gambar }}">
                      <img alt="Image placeholder" src="uploads/{{ $g->gambar }}" class="avatar rounded-circle mr-3" />
                    </a>
                  </div>
                </th>
                <td>
                  {{ $g->nama }}
                </td>
                <td>
                  {{ $g->bio }}
                </td>
                <td>
                  {{ $g->latar_belakang }}
                </td>
                <td>
                  {{ $g->kegiatan }}
                </td>
                <td>
                  {{ $g->kategori->nama }}
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="{{ route('list_divisi.edit', $g->id) }}">Edit</a>
                      <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#modal-delete{{ $g->id }}">Delete</a>
                    </div>
                  </div>
                </td>                
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Modal delete divisi -->
    @foreach ($divisi as $g)
    <div class="modal fade" id="modal-delete{{ $g->id }}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="{{ route('list_divisi.destroy', $g->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
              Anda yakin ingin menghapus {{ $g->judul }} ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-warning">Yes</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    @endforeach

    @include('layouts.footers.auth')
  </div>
  @endsection

  @section('script')
  <script>
    $(document).ready(function (e) {
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });
  
   $('#customFileLang').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      $('#image_preview_container').attr('src', e.target.result); 
      $('#preview')[0].style.display = "block";
    }

    reader.readAsDataURL(this.files[0]); 
  
   });

   $('#customFileLangEdit').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      console.log(e.target.result);
      $('#image_preview_edit_container').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
   });
  
});    
  </script>
  @endsection