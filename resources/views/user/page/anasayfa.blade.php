@extends('user.user')
@section('user')

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-8" style="margin-left: 250px">
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


                                        <td><a href="{{route('kullanici.show',$user->id)}}" class="btn btn-sm btn-primary" style="font-size: 15px; color: white; width: 85px">görüntüle</a></td>
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

@endsection
