@extends('layouts.app', ['title' => __('List Pendaftar')])

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
                            <h3 class="mb-0">Pendaftaran</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('export') }}" class="btn btn-sm btn-primary">Export ke Excel</a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Fakultas</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Minat</th>
                                <th scope="col">No. WA</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tanggal Daftar</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftaran as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->nim }}</td>
                                <td>{{ $p->fakultas }}</td>
                                <td>{{ $p->jurusan }}</td>
                                <td>{{ $p->minat }}</td>
                                <td>{{ $p->whatsapp }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->created_at->format('d F Y') }}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"
                                                data-target="#modal-delete{{ $p->id }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal delete photo -->
    @foreach ($pendaftaran as $p)
    <div class="modal fade" id="modal-delete{{ $p->id }}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <form action="{{ route('pendaftaran.destroy', $p->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
              Anda yakin ingin menghapus {{ $p->nama }} ?
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

@endsection