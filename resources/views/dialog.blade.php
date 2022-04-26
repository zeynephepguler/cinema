<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    

         <form action="" method="post" action="{{route('musteri')}}">
             @csrf
         <tr><input type="text" placeholder="filmadı" name="filmid"></tr>
    <tr> <td> salon no: </td><th> <input type="text" name="salon" value=""> </th></tr>
    <tr> <td >koltuk no: </td><th> <input type="text" name="koltuk" value=""> </th></tr>
    <tr> <td >saat: </td><th> <input type="text" name="saat" value=""> </th></tr>
    <tr> <td >ücret: </td><th> <input type="text" name="ucret" value=""> </th></tr>
    <tr><input type="text" placeholder="e-mail" name="email"></tr>
        <tr><input type="text" placeholder="ad" name="ad"></tr>
        <tr><input type="text" placeholder="soyad" name="soyad"></tr>

  </table><br>
  <button type="submit" name="btn_giris" class="btn btn-block btn-primary " onClick="location='/k'" > GİRİŞ YAP</button>
</form>
</body>
</html>