<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezun Bilgi Platformu</title>
    <link rel="stylesheet" href="{{asset("admin/css/deneme.css")}}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body style="background-color: whitesmoke" >


<div class="ust_menu" >
    <img class="logo" src="{{asset("admin/plugins/images/uni-logo.gif")}}" alt="Fırat logo" width="30px" >
    <a href="http://www.firat.edu.tr/tr" target="_blank" style="text-decoration: none; font-weight: bolder; font-size:30px; color:rgba(247, 247, 247, 0.925); ">Fırat Üniversitesi</a>

</div>
<h1 style="color: rgb(76, 71, 71);margin-top: 10px">Mezun Bilgi Platformu</h1>
<div class="container" >
    <h4 id="login">Kayıt Sayfası</h4>

    <form method="post" action="{{route('auth.register')}}">
        @csrf


        <input type="text" name="adi" placeholder="adınızı giriniz..."><br>
        <input type="text" name="soyadi" placeholder="soyadınızı giriniz..."><br>
        <input type="email" name="emaili" placeholder="emailinizi giriniz..."><br>
        <input type="email" name="epostai" placeholder="öğrenci mailinizi giriniz..."><br>

        <select class="secim" name="cinsiyeti" >
            <option style="text-align: center" value="0">Cinsiyet:</option>
            <option style="text-align: center"  >Erkek</option>
            <option style="text-align: center"  >Kadın</option>

        </select><br><br>
        <select id="select_faculty" class="secim a" name="fakultei" >
            <option  style="text-align: center" value="0">Fakülte:</option>

            @foreach($fakultes as $fakulte)
            <option id="{{$fakulte->id}}" style="text-align: center"  >{{$fakulte->fakulte_adi}}</option>

            @endforeach
        </select><br><br>
        <select id="select_field" class="secim a" name="bolumi" >
            <option style="text-align: center" value="0">Bölüm:</option>
            @foreach($bolums as $bolum)

                <option class="{{$bolum->fakulte_id}}"  style="text-align: center" >{{$bolum->bolum_adi}}</option>

            @endforeach
        </select><br>

        <input type="password" style="margin-top: 20px" name="passwordi" placeholder="şifrenizi giriniz"><br>
        <input type="password" name="sifrei" placeholder="şifre tekrar"><br>
        <input type="submit" class="btn b" style="cursor: pointer" value="Kayıt ol">
    </form>
</div>
<script>
    $('#select_faculty').change(function (){
        var fakulte_id = $(this).find(":selected").attr("id");
        var bolum = $('#select_field').children();
        bolum.each(function (register){
            if(bolum[register].getAttribute('class') !== fakulte_id){
                bolum[register].style = "display:none";
            }
            else {
                bolum[register].style = "";
            }
        })
    })
</script>
</body>

</html>
