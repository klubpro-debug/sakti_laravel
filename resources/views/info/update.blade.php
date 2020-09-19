@extends('layouts.app', ['title' => __('Edit Info')])

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

    <form action="{{ route('info.update', $info->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Edit Info</h3>
                            </div>
                            <div class="col text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Update Info</button>
                              </div>                            
                        </div>
                    </div>
                    <input type="text" name="id" id="id" hidden>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header border-0 pb-2">
                                <h3>Visi</h3>
                            </div>
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <textarea id="ckeditor1" name="visi" required>{{ $info->visi }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header border-0 pb-2">
                                <h3>Misi</h3>
                            </div>
                            <div class="card-body pt-0">
                                <div class="form-group">
                                    <textarea id="ckeditor2" name="misi" required>{{ $info->misi }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @include('layouts.footers.auth')
</div>
@endsection

@section('script')
<script src="{{ asset('ckeditor') }}/ckeditor.js"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('ckeditor1');
      CKEDITOR.replace('ckeditor2');
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