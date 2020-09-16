@extends('layouts.app', ['title' => __('Tambah Berita')])

@section('head')
<!-- Page plugins -->
<link rel="stylesheet" href="{{ asset('argon') }}/vendor/select2/dist/css/select2.min.css">
@endsection

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

  <form action="{{ route('list_berita.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Tambah Berita</h3>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-11 ml-4 pr-0">
            <div class="input-group mb-3">
              <input type="text" name="judul" class="form-control" placeholder="Judul" aria-label="Judul"
                aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Publish</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="card-header border-0 pb-2">
              Isi Berita
            </div>
            <div class="card-body pt-0">
              <div class="form-group">
                <textarea id="ckeditor" name="isi" required></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-3 ml-0 pl-0 pr-5 pt-4">
            <div class="form-group mb-3">
              <label for="">
                <span>Kategori : </span>
              </label>
              <select name="kategori" class="form-control" data-toggle="select" title="Simple select"
                data-live-search="true" data-live-search-placeholder="Search ...">
                @foreach ($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                @endforeach
              </select>
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
            <div class="form-group mb-3" id="preview" style="display: none">
              <label for="">
                <span>Preview : </span>
              </label>
              <div>
                <img id="image_preview_container" alt="" width="150" height="150">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

    <!-- Modal delete berita -->
    @foreach ($berita as $g)
    <div class="modal fade" id="modal-delete{{ $g->id }}" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
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
        </form>
      </div>
    </div>
    @endforeach

    @include('layouts.footers.auth')
  </div>
  @endsection

  @section('script')
  <script src="{{ asset('ckeditor') }}/ckeditor.js"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
  
      CKEDITOR.replace('ckeditor');
  
  
    });
  </script>
  <script src="{{ asset('argon') }}/vendor/select2/dist/js/select2.min.js"></script>
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