@extends('layouts.app', ['title' => __('User Profile')])

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
              <h3 class="mb-0">Galeri</h3>
            </div>
            <div class="col text-right">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-galeri">Add
                Photo</button>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-dark">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="sort" data-sort="gambar">Gambar</th>
                <th scope="col" class="sort" data-sort="judul">Judul</th>
                <th scope="col" class="sort" data-sort="tanggal">Tanggal</th>
                <th scope="col" class="sort" data-sort="author">Author</th>
                <th scope="col" class="sort" data-sort="aksi">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($galeri as $g)
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
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-edit">
                    <i class="fas fa-edit text-normal mr-3"></i>
                  </a>                  
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-delete">
                    <i class="fas fa-trash-alt text-danger mr-3"></i>
                  </a>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

{{-- modal add photo --}}
    <div class="modal fade" id="modal-galeri" tabindex="-1" role="dialog" aria-labelledby="modal-galeri"
      aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Photo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-0">

            <div class="card bg-transparent border-0 mb-0">
              <div class="card-body px-lg-4 py-lg-4">
                <form action="{{ route('list_galeri.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Judul : </span>
                    </label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <input class="form-control" type="text" name="judul">
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Gambar : </span>
                    </label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFileLang" name="file">
                      <label class="custom-file-label" for="customFileLang">Select file</label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary my-4" type="submit">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

{{-- modal edit photo --}}
    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-galeri"
      aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Photo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-0">

            <div class="card bg-transparent border-0 mb-0">
              <div class="card-body px-lg-4 py-lg-4">
                @foreach ($galeri as $g)
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
                      <input type="file" class="custom-file-input" id="customFileLang" name="file">
                      <label class="custom-file-label" for="customFileLang">Select file</label>
                    </div>
                  </div>                  
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Preview : </span>
                    </label>
                    <div>
                      <img alt="" src="uploads/{{ $g->gambar }}" width="150" height="150">
                    </div>
                  </div>
                  @endforeach
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

<!-- Modal delete photo -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      @foreach ($galeri as $g)      
      <form action="{{ route('list_galeri.destroy', $g->id) }}" method="POST">
        @csrf
        @method('DELETE')
      <div class="modal-body">
        Do you want delete this photo?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-warning">Yes</button>
      </div>
    </div>
    @endforeach    
    </form>
  </div>
</div>    

    @include('layouts.footers.auth')
  </div>
  @endsection