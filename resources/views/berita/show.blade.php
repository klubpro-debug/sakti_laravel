@extends('layouts.app', ['title' => __('List Berita')])

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
              <h3 class="mb-0">Berita</h3>
            </div>
            <div class="col text-right">
              <a href="{{ route('list_berita.create') }}" class="btn btn-sm btn-primary">Add Berita</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="gambar">Gambar</th>
                <th scope="col" class="sort" data-sort="judul">Judul</th>
                <th scope="col" class="sort" data-sort="tanggal">Tanggal</th>
                <th scope="col" class="sort" data-sort="author">Author</th>
                <th scope="col" class="sort" data-sort="kategori">Kategori</th>
                <th scope="col" class="sort" data-sort="aksi"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($berita as $g)
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="uploads/{{ $g->gambar }}">
                      <img alt="Image placeholder" src="uploads/{{ $g->gambar }}" class="avatar rounded-circle mr-3" />
                    </a>
                  </div>
                </th>
                <td>
                  {{ $g->judul }}
                </td>
                <td>
                  {{ \Carbon\Carbon::parse($g->tanggal)->format('d F Y') }}
                </td>
                <td>
                  {{ $g->author }}
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
                      <a class="dropdown-item" href="{{ route('list_berita.edit', $g->id) }}">Edit</a>
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

    {{-- modal edit berita --}}
    @foreach ($berita as $g)
    <div class="modal fade" id="modal-edit{{ $g->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-berita"
      aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-0">

            <div class="card bg-transparent border-0 mb-0">
              <div class="card-body px-lg-4 py-lg-4">
                <form action="{{ route('list_galeri.update', $g->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Judul : </span>
                    </label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <input class="form-control" type="text" name="judul" value="{{ $g->judul }}">
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Gambar : </span>
                    </label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileLangEdit" name="file" accept="image/*">
                      <label class="custom-file-label" for="customFileLangEdit">Select file</label>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Preview : </span>
                    </label>
                    <div>
                      <img id="image_preview_edit_container" alt="" src="uploads/{{ $g->gambar }}" width="150"
                        height="150">
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary my-4" type="submit">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach


    <!-- Modal delete berita -->
    @foreach ($berita as $g)
    <div class="modal fade" id="modal-delete{{ $g->id }}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="{{ route('list_berita.destroy', $g->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
              Anda ingin menghapus {{ $g->judul }} ?
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