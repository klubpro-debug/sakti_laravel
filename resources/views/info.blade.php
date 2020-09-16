@extends('layouts.app', ['title' => __('List Kategori')])

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
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Info</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-info">Tambah Info</button>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Visi</th>
                                <th scope="col">Misi</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><textarea rows="10" cols="50">{{ $info->visi }}</textarea></td>
                                <td><textarea rows="10" cols="50">{{ $info->misi }}</textarea></td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-edit{{ $info->id }}">Edit</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-delete{{ $info->id }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- modal add info --}}
    <div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="modal-info"
      aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-0">

            <div class="card bg-transparent border-0 mb-0">
              <div class="card-body px-lg-4 py-lg-4">
                <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Kategori : </span>
                    </label>
                    <div class="input-group input-group-merge input-group-alternative">
                      <input class="form-control" type="text" name="kategori">
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary my-4" type="submit" id="upload_image_form">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- modal edit info --}}
    <div class="modal fade" id="modal-edit{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-kategori"
      aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-0">

            <div class="card bg-transparent border-0 mb-0">
              <div class="card-body px-lg-4 py-lg-4">
                <form action="{{ route('kategori.update', $info->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group mb-3">
                    <label for="">
                      <span>Visi : </span>
                    </label>
                    <div class="input-group input-group-merge input-group-alternative">
                        <td><textarea rows="10" cols="50">{{ $info->visi }}</textarea></td>
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

    <!-- Modal delete info -->
    <div class="modal fade" id="modal-delete{{ $info->id }}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="{{ route('kategori.destroy', $info->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
              Anda yakin ingin menghapus info ini?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-warning">Yes</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    
@endsection