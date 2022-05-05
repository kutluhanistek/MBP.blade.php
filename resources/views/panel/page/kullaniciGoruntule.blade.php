@extends("panel.layout")
@section("content")
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="get" action="{{route('user.show',$kullanici->id)}}" class="form-horizontal form-material">

                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Adı</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="adı" value="{{$kullanici->ad}}"
                                           class="form-control p-0 border-0" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Soyadı</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="soyadı" value="{{$kullanici->soyad}}"
                                           class="form-control p-0 border-0" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0" name="email" value="{{$kullanici->email}}" name="example-email"
                                           id="example-email" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Fakülte</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0" name="fakulte" value="{{$kullanici->fakulte}}" name="example-email"
                                           id="example-email" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Bölüm</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0" name="bolum" value="{{$kullanici->bolum}}" name="example-email"
                                           id="example-email" disabled>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Cinsiyet</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"
                                           class="form-control p-0 border-0" name="bolum" value="{{$kullanici->cinsiyet}}" name="example-email"
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
