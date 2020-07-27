@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
'title' => '',
])

<div class="container-fluid mt--7">
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
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="{{ $g->gambar }}" />
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
                  <i class="fas fa-arrow-up text-success mr-3"></i>
                  <i class="fas fa-arrow-down text-danger mr-3"></i>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

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
                <form action="{{ route('list_galeri.store') }}" method="POST">
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
                      <input type="file" class="custom-file-input" id="customFileLang" name="filefoto">
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

    @include('layouts.footers.auth')
  </div>
  @endsection