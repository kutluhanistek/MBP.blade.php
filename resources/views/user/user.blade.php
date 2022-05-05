<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("admin/css/user.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Mezun Bilgi Platformu</title>
</head>
<body>
        <div class="menu" >
            <a class="aa" href="http://www.firat.edu.tr/tr" target="_blank" style=" font-weight: bolder; font-size:30px;">Fırat Üniversitesi</a>

        </div>



<div class="containers">
<div class="sidebar">
    <h2 class="baslik">Mezun Bilgi <span>Platformu</span> </h2>
    <ul class="satir">
        <li><a href="{{route("user.index")}}"><i class="fa-solid fa-house-user"></i>Anasayfa</a></li>
        <li><a href="{{route('user.profile')}}" ><i class="fas fa-user"></i>Profil</a></li>
        <li><a href="{{route('user.kullanicilar')}}" ><i class="fas fa-users"></i>Kullanıcılar</a></li>
        <li><a href="{{route('user.logout')}}" ><i class="fa-solid fa-right-to-bracket"></i>Çıkış Yap</a></li>

    </ul>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @yield('user')
</body>
</html>

