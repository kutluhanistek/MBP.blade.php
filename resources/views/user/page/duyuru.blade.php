@extends('user.user')
@section('user')
<div id="carouselExampleCaptions" class="carousel slide gecis w-75" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active ">
            <img src="{{asset("admin/plugins/images/duyuru1.jpg")}}" class="d-block w-100 resim" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color: black">First slide label</h5>
                <p style="color: black">Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="{{asset("admin/plugins/images/duyuru1.jpg")}}" class="d-block w-100 resim" alt="...">

            <h5 style="color: black; font-weight: bolder">Cumhurbaşkanlığı Koordinasyonunda Üniversitemizde Düzenlenecek Kariyer Fuarının Hazırlık Toplantısı Gerçekleştirildi</h5>
            <p style="color: black">Türkiye Cumhuriyeti Cumhurbaşkanlığı İnsan Kaynakları Ofisi koordinasyonunda Üniversitemiz ev sahipliğinde bölgedeki paydaş üniversitelerin de katılımıyla 09 -10 Mart 2022 tarihlerinde Elazığ’da gerçekleştirilecek. “Güneydoğu Bölgesel Kariyer Fuarı”nın ön hazırlık toplantısı düzenlendi.
                Üniversitemiz Senato Toplantı Salonunda düzenlenen toplantıya, Elazığ Valisi Dr. Ömer TORAMAN, Cumhurbaşkanlığı İnsan Kaynakları Ofisi Yetenek Kazanımı ve Organizasyon Daire Başkanı Dr. Neşe GÜLMEZ, Üniversitemiz Rektörü Prof. Dr. Fahrettin GÖKTAŞ, Dicle Üniversitesi Rektörü Prof. Dr. Prof. Dr. Mehmet KARAKOÇ, Munzur Üniversitesi Rektörü Prof. Dr. Ubeyde İPEK, Vali Yardımcısı Abdülkerem ABBASOĞLU, Üniversitemiz Rektör Yardımcıları Prof. Dr. Bilal ÜSTÜNDAĞ, Prof. Dr. Soner ÖZGEN, Prof. Dr. Mehmet YILMAZ, Üniversitemiz Genel Sekreteri Prof. Dr. Sinan AKPINAR, Elazığ TSO Başkanı Asilhan ARSLAN, Kosgeb İl Müdürü Şaban YAŞA, paydaş üniversiteler Batman, Bingöl, Dicle, Hakkâri, İnönü, Malatya Turgut Özal, Mardin Artuklu, Munzur, Siirt ve Şırnak Üniversitelerinin Rektör Yardımcıları ve Kariyer Merkezi Müdürleri katıldı.
                Toplantıda konuşan Elazığ Valisi Dr. Ömer TORAMAN, yapılacak fuarın eğitimli nüfusa yönelik önemli bir çaba ve önemli bir organizasyon olduğunu belirterek, bu senede fuarın Elazığ’da yapılmasından dolayı memnuniyet duyduğunu söyledi.
                Fırat Üniversitesinin tecrübesi ve birikimiyle bu büyük organizasyona ev sahipliği yapabilecek durumda olduğunu ifade eden Vali Toraman, Elazığ’da ki kamu kurum ve kuruluşları olarak ellerinden gelen bütün desteği vereceklerini kaydetti.
                Üniversitemiz Rektörü Prof. Dr. Fahrettin GÖKTAŞ ise Cumhurbaşkanlığı İnsan Kaynakları Ofisi tarafından 2019 yılından beridir “Yetenek Her Yerde” temasıyla ülkemizde çeşitli bölgelerde kariyer fuarları düzenlenmekte olduğunu belirterek, “Bu bağlamda bu yılda bu görevi biz üstlenmiş olduk. Paydaş 10 Üniversite bizlere destek olacaklar. Birçok firma 9-10 Mart tarihleri arasında düzenlenecek bu fuara katılarak, kendi firmalarını tanıtmış olacaklar. Ön hazırlık sürecini tamamladık. Amacımız hem öğrenci olan kardeşlerimiz, hem de mezun olan kardeşlerimizin bir şekilde Türkiye de lider, öne çıkmış firmalarla bir araya gelmeleri. Onlarla fikir alışverişimde bulunmalarıdır. Aynı zamanda öğrenci ve mezunların iş ve staj imkân bulmaları açısında da böyle bir organizasyonun önemli olduğunu düşünüyoruz” dedi.
                Cumhurbaşkanlığı İnsan Kaynakları Ofisi Yetenek Kazanımı ve Organizasyon Daire Başkanı Dr. Neşe GÜLMEZ de, düzenlenen kariyer fuarlarının amacının üniversite mezunları ile son sınıf öğrencilerini sanayicilerle buluşturmak olduğunu söyledi.
                Fuarın 9-10 Mart 2022 tarihleri arasında Fırat Üniversitesinin ev sahipliğinde Elazığ’da yapılacağını belirten GÜLMEZ, hedeflerinin bölgedeki 11 Üniversitenin öğrenci ve mezunlarına fayda yaratmak ve özelikle bölgedeki işverenlerin bu fuara katılmalarını sağlamak olduğunu belirtti.
            </p>

        </div>
        <div class="carousel-item ">
            <img src="{{asset("admin/plugins/images/duyuru1.jpg")}}" class="d-block w-100 resim" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="color: black">Third slide label</h5>
                <p style="color: black">Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span style="background-color: black" class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span style="background-color: black" class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
