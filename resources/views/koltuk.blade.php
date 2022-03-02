<div>
<dialog id="koltuksec" style="width:60%;background-color:#abcecd;border:1px dotted black;">
<table>
<tr>
  <th>.</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th>
</tr>

<tr>
<td><h1> A</h1></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" onclick="location="/"" ></td><td><img id="a2"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a3"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td>

</tr>

<tr>
<td><h1> B</h1></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td>

<tr>
<td><h1> C</h1></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td>

</tr>
<tr>

<td><h1> D</h1></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td><td><img id="a1"src="{{asset('koltuk.png')}}" height="50px" width="50px" ></td>

</tr></table>


<button id="hide">Pencereyi Kapat</button>
</dialog>
<button id="show">İçeriği Göster</button>
</div>
<script type="text/JavaScript">
(function() {
    var dialog = document.getElementById('koltuksec');
    document.getElementById('show').onclick = function() {
        dialog.show();
    };
    document.getElementById('hide').onclick = function() {
        dialog.close();
    };
})();
</script>
