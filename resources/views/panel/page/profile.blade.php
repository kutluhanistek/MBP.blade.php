@extends("panel.layout")
@section("content")
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Profil sayfası</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">

                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->

                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <form class="form-horizontal form-material">

                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Adınız</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text"  value="{{$user->ad}}"
                                               class="form-control p-0 border-0" disabled> </div>
                                </div> <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Soyadınız</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="{{$user->soyad}}"
                                               class="form-control p-0 border-0" disabled> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Email</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="email"
                                               class="form-control p-0 border-0" value="{{$user->email}}" name="example-email"
                                               id="example-email" disabled>
                                    </div>
                                </div>



                                <div class="form-group mb-4">
                                    <label class="col-sm-12">Cinsiyet</label>

                                    <div class="col-sm-12 border-bottom p-0">
                                        <input type="text"
                                               value="{{$user->cinsiyet}}"   class="form-control p-0 border-0" disabled>

                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <a href="{{route('adminkullanici.edit',$user->id)}}" class="btn btn-success">Profili Güncelle</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
@endsection
