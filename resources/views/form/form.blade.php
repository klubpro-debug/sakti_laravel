@extends('layouts.master')
@section('nav')
@include('layouts/nav')
@endsection
@section('title','Form Pendaftaran')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="form-widget">
                <div class="row d-flex justify-content-center py-4">
                    <div class="col-lg-6">
                        <form class="row" id="event-registration"
                            action="http://themes.semicolonweb.com/html/canvas/include/form.php" method="post"
                            enctype="multipart/form-data">
                            <div class="form-process"></div>
                            <div class="col-6 form-group">
                                <label>Nama:</label>
                                <input type="text" name="event-registration-first-name"
                                    id="event-registration-first-name" class="form-control required" value=""
                                    placeholder="Enter your First Name">
                            </div>
                            <div class="col-6 form-group">
                                <label>NIM:</label>
                                <input type="text" name="event-registration-nim" id="event-registration-nim"
                                    class="form-control required" value="" placeholder="Enter your NIM">
                            </div>
                            <div class="col-6 form-group">
                                <label>Fakultas:</label>
                                <input type="text" name="event-registration-fakultas"
                                    id="event-registration-fakultas" class="form-control required" value=""
                                    placeholder="Enter your Fakultas">
                            </div>
                            <div class="col-6 form-group">
                                <label>Jurusan:</label>
                                <input type="text" name="event-registration-jurusan" id="event-registration-jurusan"
                                    class="form-control required" value="" placeholder="Enter your Jurusan">
                            </div>                              
                            <div class="col-12 form-group">
                                <label>Email:</label>
                                <input type="email" name="event-registration-email" id="event-registration-email"
                                    class="form-control required" value="" placeholder="Enter your Email Address">
                            </div>                          
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Minat:</label>
                                    <textarea name="event-registration-minat" id="event-registration-minat"
                                        class="form-control required" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Divisi</label>
                                    <select class="form-control required" name="event-registration-passes"
                                        id="event-registration-passes">
                                        <option value="">-- Select One --</option>
                                        <option value="">Robotik</option>
                                        <option value="">Multimedia</option>
                                        <option value="">Programming</option>
                                    </select>
                                </div>
                            </div>                            
                            <div class="col-6 form-group">
                                <label>Sosial Media</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Whatsapp</span>
                                    </div>
                                    <input type="text" name="event-registration-twitter" id="event-registration-twitter"
                                        class="form-control" value="" placeholder="0899999999">
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <label for="">&nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Instagram</span>
                                    </div>
                                    <input type="text" name="event-registration-github" id="event-registration-github"
                                        class="form-control" value="" placeholder="@username">
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" name="event-registration-submit"
                                    class="btn btn-secondary">Register</button>
                            </div>
                            <input type="hidden" name="prefix" value="event-registration-">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection