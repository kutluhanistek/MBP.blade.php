@extends("panel.layout")
@section("content")

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

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
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">

                        <h3 class="box-title">Kullanıcı Tablosu</h3>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Ad</th>
                                    <th class="border-top-0">Soyad</th>
                                    <th class="border-top-0">Fakülte</th>
                                    <th class="border-top-0">Bölüm</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $sayac=0 ?>
                                @foreach($users as $user)
                                <tr>


                                   @if($user->id!=1)
                                    <td>{{++$sayac}}</td>
                                    <td>{{$user->ad}}</td>
                                    <td>{{$user->soyad}}</td>
                                    <td>{{$user->fakulte}}</td>
                                    <td>{{$user->bolum}}</td>

                                    <td><a href="{{route('kullanici.edit',$user->id)}}" class="btn btn-sm btn-success" style="font-size: 15px; color: white; width: 75px">güncelle</a></td>
                                    <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-sm btn-danger" style="font-size: 15px; color: white; width: 60px">sil</a></td>
                                    <td><a href="{{route('adminkullanici.show',$user->id)}}" class="btn btn-sm btn-primary" style="font-size: 15px; color: white; width: 85px">görüntüle</a></td>
                                    @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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


    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
@endsection
