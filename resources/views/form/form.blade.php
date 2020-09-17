@extends('layouts.master')
@section('nav')
@include('layouts/nav')
@endsection
@section('title','Form Pendaftaran')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-widget">
                    <div class="row d-flex justify-content-center py-4">
                        <div class="col-lg-6">
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="row">
                                <div class="form-process"></div>
                                <div class="col-6 form-group">
                                    <label>Nama:</label>
                                    <input type="text" name="nama" id="nama" class="form-control required" value="{{ old('nama') }}"
                                        placeholder="Enter your Nama">
                                    @error('nama')
                                    <span role="alert" style="color: red">
                                        <strong>{{ (__('Nama wajib diisi')) }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>NIM:</label>
                                    <input type="text" name="nim" id="nim" class="form-control required" maxlength="12"
                                        value="{{ old('nim') }}" placeholder="Enter your NIM">
                                        @error('nim')
                                        <span role="alert" style="color: red">
                                            <strong>{{ (__('Nim wajib diisi')) }}</strong>
                                        </span>
                                        @enderror                                        
                                </div>
                                <div class="col-6 form-group">
                                    <label>Fakultas:</label>
                                    <input type="text" name="fakultas" id="fakultas" class="form-control required"
                                        value="{{ old('fakultas') }}" placeholder="Enter your Fakultas">
                                        @error('fakultas')
                                        <span role="alert" style="color: red">
                                            <strong>{{ (__('Fakultas wajib diisi')) }}</strong>
                                        </span>
                                        @enderror                                            
                                </div>
                                <div class="col-6 form-group">
                                    <label>Jurusan:</label>
                                    <input type="text" name="jurusan" id="jurusan" class="form-control required"
                                        value="{{ old('jurusan') }}" placeholder="Enter your Jurusan">
                                        @error('jurusan')
                                        <span role="alert" style="color: red">
                                            <strong>{{ (__('Jurusan wajib diisi')) }}</strong>
                                        </span>
                                        @enderror                                           
                                </div>
                                <div class="col-12 form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" id="email" class="form-control required" value="{{ old('email') }}"
                                        placeholder="Enter your Email Address">
                                        @error('email')
                                        <span role="alert" style="color: red">
                                            <strong>{{ (__('Email wajib diisi')) }}</strong>
                                        </span>
                                        @enderror                                              
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Minat:</label>
                                        <textarea name="minat" id="minat" class="form-control required" cols="30"
                                            rows="2">{{ old('minat') }}</textarea>
                                            @error('minat')
                                            <span role="alert" style="color: red">
                                                <strong>{{ (__('Minat wajib diisi')) }}</strong>
                                            </span>
                                            @enderror                                                  
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Divisi</label>
                                        <select class="form-control required" name="divisi" id="divisi">
                                            <option>-- Select One --</option>
                                            <option value="Robotik"{{ old('divisi') == 'Robotik' ? ' selected' : '' }}>Robotik</option>
                                            <option value="Multimedia"{{ old('divisi') == 'Multimedia' ? ' selected' : '' }}>Multimedia</option>
                                            <option value="Programming"{{ old('divisi') == 'Programming' ? ' selected' : '' }}>Programming</option>
                                        </select>
                                        @error('divisi')
                                        <span role="alert" style="color: red">
                                            <strong>{{ (__('Divisi wajib diisi')) }}</strong>
                                        </span>
                                        @enderror                                              
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <label>Sosial Media</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Whatsapp</span>
                                        </div>
                                        <input type="tel" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp') }}"
                                            placeholder="0899999999">
                                    </div>
                                    @error('whatsapp')
                                    <span role="alert" style="color: red">
                                        <strong>{{ $message == 'The whatsapp field is required.' ? (__('Whatsapp wajib diisi')) : (__('Masukan nomor dengan benar')) }}</strong>
                                    </span>
                                    @enderror                                          
                                </div>
                                <div class="col-6 form-group">
                                    <label for="">&nbsp;</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Instagram</span>
                                        </div>
                                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram') }}"
                                            placeholder="@username">
                                    </div>
                                    @error('instagram')
                                    <span role="alert" style="color: red">
                                        <strong>{{ (__('Instagram wajib diisi')) }}</strong>
                                    </span>
                                    @enderror                                       
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" name="submit" class="btn btn-secondary">Register</button>
                                </div>
                            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection