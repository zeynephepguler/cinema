
<link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/baglanti.css') }}" type="text/css">
<body class="üst">
<div class ="bas"><center><h1>X SiNEMA</h1></center></div>
<div >
    <center>
        

<dialog id="koltuksec" style="width:60%; background-color:rgba(255, 255, 255, 0.932); border:1px dotted black; box-shadow: 0 0 6px 4px rgba(0, 0, 0, 0.404);border-radius: 8%;"  
>
<table class="resim">
    <form method="">
        @csrf
    <tr><td><button class="submit" value="09:00" name="salon">1</button></td>
<td><button class="button">2</button></td>
<td><button class="button">3</button></td>
<td><button class="button">4</button></td>
<td><button class="button">5</button></td>
</tr></form>
    
<tr>
  <th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
</tr>

<tr >
<td><h1> A</h1></td>
<td><button class="button" id="a1" height="50px" width="50px" value="a1" name="koltuk">A1</td>
<td><button class="button" id="a2" height="50px" width="50px" >A2</td>
<td><button class="button" id="a3" height="50px" width="50px" >A3</td>
<td><button class="button" id="a4" height="50px" width="50px" >A4</td>
<td><button class="button" id="a4" height="50px" width="50px" >A5</td>
<td><button class="button" id="a5" height="50px" width="50px" >A6</td>
<td><button class="button" id="a6" height="50px" width="50px" >A7</td>
<td><button class="button" id="a7" height="50px" width="50px" >A8</td>
<td><button class="button" id="a8" height="50px" width="50px" >A9</td>
<td><button class="button" id="a9" height="50px" width="50px" >A10</td>

</tr>

<tr>
<td><h1> B</h1></td><td><button class="button" id="a1" height="50px" width="50px" select" value="a1" name="koltuk">B1</td>
<td><button class="button" id="a2" height="50px" width="50px" onclick="style="background: black"">B2</td>
<td><button class="button" id="a3" height="50px" width="50px" >B3</td>
<td><button class="button" id="a4" height="50px" width="50px" >B4</td>
<td><button class="button" id="a4" height="50px" width="50px" >B5</td>
<td><button class="button" id="a5" height="50px" width="50px" >B6</td>
<td><button class="button" id="a6" height="50px" width="50px" >B7</td>
<td><button class="button" id="a7" height="50px" width="50px" >B8</td>
<td><button class="button" id="a8" height="50px" width="50px" >B9</td>
<td><button class="button" id="a9" height="50px" width="50px" >B10</td>
<tr>
<td><h1> C</h1></td><td><button class="button" id="a1" height="50px" width="50px" select" value="a1" name="koltuk">C1</td>
<td><button class="button" id="a2" height="50px" width="50px" onclick="style="background: black"">C2</td>
<td><button class="button" id="a3" height="50px" width="50px" >C3</td>
<td><button class="button" id="a4" height="50px" width="50px" >C4</td>
<td><button class="button" id="a4" height="50px" width="50px" >C5</td>
<td><button class="button" id="a5" height="50px" width="50px" >C6</td>
<td><button class="button" id="a6" height="50px" width="50px" >C7</td>
<td><button class="button" id="a7" height="50px" width="50px" >C8</td>
<td><button class="button" id="a8" height="50px" width="50px" >C9</td>
<td><button class="button" id="a9" height="50px" width="50px" >C10</td>
</tr>
<tr>

<td><h1> D</h1></td><td><button class="button" id="a1" height="50px" width="50px" select" value="a1" name="koltuk">D1</td>
<td><button class="button" id="a2" height="50px" width="50px" onclick="style="background: black"">D2</td>
<td><button class="button" id="a3" height="50px" width="50px" >D3</td>
<td><button class="button" id="a4" height="50px" width="50px" >D4</td>
<td><button class="button" id="a4" height="50px" width="50px" >D5</td>
<td><button class="button" id="a5" height="50px" width="50px" >D6</td>
<td><button class="button" id="a6" height="50px" width="50px" >D7</td>
<td><button class="button" id="a7" height="50px" width="50px" >D8</td>
<td><button class="button" id="a8" height="50px" width="50px" >D9</td>
<td><button class="button" id="a9" height="50px" width="50px" >D10</td>
</tr>

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
<table>
    <form action="" method="post"></form>
    <tr>
 <td><button class="submit" value="09:00" name="saat">09:00</button></td>
<td><button class="button">10:00</button></td>
<td><button class="button">11:00</button></td>
<td><button class="button">12:00</button></td>
<td><button class="button">13:00</button></td>
<td><button class="button">14:00</button></td>
<td><button class="button">15:00</button></td>
<td><button class="button">16:00</button></td>
</tr></table>
</table>


<button id="hide">Pencereyi Kapat</button>
</dialog></form>
</center>

   
</div>
<table>
    <thead>
    <tr>
        <th>Film Adı</th>
        <th>Yapımcı</th>
        <th>Yayın Tarihi</th>
        <th>Saat</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($film as $key => $fil)
                <td>{{$fil->filmadi}}</td>
                <td>{{$fil->yapimci}}</td>
                <td>{{$fil->yayinTarihi}}</td>
                <td>{{$fil->saat}}</td>
            @endforeach
        </tr>
    </tbody>
</tale>
</body>
<script type="text/JavaScript">
(function() {
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show1').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show2').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show3').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show4').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show5').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show6').onclick = function() {
        dialog.show();
    };
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show7').onclick = function() {
        dialog.show();
    };
    document.getElementById('hide').onclick = function() {
        dialog.close();
    };
   
   
    function myFunction() {
    document.getElementById("k")
    this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
}
var a1=document.querySelector("#a1");
    a1.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
             
                }
var a2=document.querySelector("#a2");
    a2.onclick=function(){
            this.style.background="red 5px";// tıklanan butonun zemin rengini kırmızı yap
            this.style.border="red 5px solid";
             
                }
    
})();
</script>
