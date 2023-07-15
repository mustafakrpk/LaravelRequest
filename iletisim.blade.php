<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>İletisim Form Sayfası</title>
</head>
<body>
<form action="{{route('iletisim-sonuc')}}" method="post">
    @csrf
    <label>Ad Soyad</label><br>
<input type="text" name="adsoyad"><br>
    <label>Telefon</label><br>
<input type="text" name="telefon"><br>
    <label>E-Mail</label><br>
<input type="text" name="email"><br>
    <label>Mesaj</label><br>

    <textarea name="metin" style="height: 300px; width: 300px;"></textarea>
    <input type="submit" name="ilet" value="Gönder">

</form>
</body>
</html>
