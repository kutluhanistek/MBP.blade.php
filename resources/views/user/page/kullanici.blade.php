@extends('user.user')
@section('user')
    <div class="page-wrapper" style="margin-left: 250px;">
        <div class="container-fluid">
            <div class="col-lg-10 col-xlg-10 col-md-10" >
                <div class="card">
                    <div class="card-body">
                        <form method="get" action="" class="form-horizontal form-material">

                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Adı</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="adı" style="background-color: white" value="{{$kullanici->ad}}"
                                           class="form-control p-0 border-0" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Soyadı</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" style="background-color: white"name="soyadı" value="{{$kullanici->soyad}}"
                                           class="form-control p-0 border-0" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0"style="background-color: white" name="email" value="{{$kullanici->email}}" name="example-email"
                                           id="example-email" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Fakülte</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0"style="background-color: white" name="fakulte" value="{{$kullanici->fakulte}}" name="example-email"
                                           id="example-email" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Bölüm</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0" style="background-color: white" name="bolum" value="{{$kullanici->bolum}}" name="example-email"
                                           id="example-email" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Cinsiyet</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0"style="background-color: white" name="bolum" value="{{$kullanici->cinsiyet}}" name="example-email"
                                           id="example-email" disabled>
                                </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Meslek</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text"
                                               class="form-control p-0 border-0"style="background-color: white" name="bolum" value="{{$kullanici->getKisiselBilgiler->meslek}}" name="example-email"
                                               id="example-email" disabled>
                                    </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
