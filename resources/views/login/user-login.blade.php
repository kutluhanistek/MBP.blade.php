<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezun Bilgi Platformu</title>
    <link rel="stylesheet" href="{{asset("admin/css/deneme.css")}}">

</head>
<body  style=" background: url({{asset("admin/plugins/images/paper.jpg")}}) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;"
>


<div class="ust_menu" >
    <img class="logo" src="{{asset("admin/plugins/images/uni-logo.gif")}}" alt="Fırat logo" width="30px" style=" margin-left: 200px; margin-top: 10px;">
    <a href="http://www.firat.edu.tr/tr" target="_blank" style="text-decoration: none; font-weight: bolder; font-size:30px; color:rgba(247, 247, 247, 0.925); ">Fırat Üniversitesi</a>

</div>
<h1 style="color: rgb(76, 71, 71);">Mezun Bilgi Platformu</h1>
<div class="container">
    <h4 id="login">Kullanıcı adı ve parolanızı giriniz</h4>

    <form method="post" action="{{route("user.login")}}">
        @csrf

        @if($errors->any())
            <div style="background-color: #ffb5bd; color: #ff3245; width:250px; margin-left: 120px; height: 30px; text-align:center; border-radius: 5px">
                {{$errors->first()}}
            </div>
        @endif
        <input type="text" name="email" placeholder="Kullanıcı adı"><br>
        <input type="password" name="password" placeholder="Şifre"><br><br>
        <input type="submit" class="btn" value="Giriş">
        <a href="{{route('register')}}" class="btn b " style="text-decoration: none; border: 1px solid darkblue;border-right-width: 18px;border-left-width: 18px;border-top-width: 3px;border-bottom-width: 3px">Kayıt ol</a>

    </form>
</div>

</body>

</html>
