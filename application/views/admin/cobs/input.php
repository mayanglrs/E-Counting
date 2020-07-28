<!doctype html>
<html>
    <head>
     <meta charset="utf-8">
        <title>Demo Tugas</title>
    <style type="text/css">
    body {
        background: #1f8dd6;
        color: #df4231;
        font-family: Arial;
    }
 
 h1{
  font-family: Comic Sans MS;
  color: Green;
  font-size: 40px;
 }
 
    h2 {
        margin-bottom: -5px;
    }
 
 h3 {
        margin-bottom: 5px;
    }
 
    p {
  margin-top: 5px;
        font-size: 20px;
//        color: #c9c9c9;
  color: black;
    }
 
 h4 {
  margin-top: 5px;
        font-size: 20px;
        color: black;
    } 
 
    table {
        background: #ffffff;
        border-radius: 5px;
        padding: 20px;
    }

    input.alamat {
        background: url(images/maps.png)no-repeat 7px 9px;
        border: 1px solid #c9c9c9;
        border-radius: 3px;
        height: 15px;
        padding: 8px;
        padding-left: 37px;
        
        transition: 1s all;
        -moz-transition: 1s all;
        -o-transition: 1s all;
    }

    .button {
        background: #df4231;
        color: #ffffff;
        width: 370px;
        margin-top: 10px;
        height: 40px;
        border: 1px solid #c9c9c9;
        border-radius: 5px;
        transition: 1s all;
        -moz-transition: 1s all;
        -o-transition: 1s all;
    }
    .button:hover {
        background: #19B5FE;   
        transition: 1s all;
        -moz-transition: 1s all;
        -o-transition: 1s all;
    }
    .button-gambar {
        height: 35px;
    }
</style>
</head>
<body>

<table align="center">

    <tr>
        <td align="center" colspan="2"><h1>MENGHITUNG LUAS DAN VOLUME BANGUNAN</h1></td>
    </tr>

<tr>
<td>

<form method="POST" action="<?=base_url('bangun/hasil') ?>">
<div align="center"></div>
<table width="366" border="0" align="center">
<tr><td colspan="2">
<div align="center"> <h2>BANGUN BALOK</h2>
<p>.....................................................</p>
</div>
</td></tr>
<tr><td width="354"><h4> Panjang  : </h4><input class="alamat" type="text" name="panjang"></td></tr>
<tr><td><h4> Lebar  : </h4><input class="alamat" type="text" name="lebar"><br></td></tr>
<tr><td><h4> Tinggi : </h4><input class="alamat" type="text" name="tinggibalok"></td></tr>
<tr><td><input class="button" type="submit" name="luasbalok" value="Hitung Luas"></td></tr>
<tr><td><input class="button" type="submit" name="volumebalok" value="Hitung Volume"></td></tr>
<tr><td><h3>Rumus Balok<h3></td></tr>
<tr><td>
<p>Luas Balok :<br>
2(P x L + P x T + L x T)<br><br>
Volume Balok :<br>
P x L x T<br><br>
Ket :<br>
P = Panjang Balok<br>
L = Lebar Balok<br>
T = Tinggi Balok<br></p>
</td></tr>
</table></form>

</td>

<td>

<form method="POST" action="<?=base_url('bangun/hasil') ?>">
<div align="center"></div>
<table width="366" border="0" align="center">
<tr><td colspan="2">
<div align="center"> <h2>BANGUN TABUNG</h2>
<p>.....................................................</p>
</div>
</td></tr>
<tr><td width="354"><h4> Jari-Jari  : </h4><input class="alamat" type="text" name="jari2luas"></td></tr>
<tr><td><input class="button" type="submit" name="luastabung" value="Hitung Luas"></td></tr>
<tr><td><h4> Jari-Jari  : </h4><input class="alamat" type="text" name="jari2volume"><br></td></tr>
<tr><td><h4> Tinggi : </h4><input class="alamat" type="text" name="tinggitabung"></td></tr>
<tr><td><input class="button" type="submit" name="volumetabung" value="Hitung Volume"></td></tr>
<tr><td><h3>Rumus Tabung<h3></td></tr>
<tr><td>
<p>Luas Tabung :<br>
3.14 x R x R<br><br>
Volume Tabung :<br>
3.14 x R x R x T<br><br>
Ket :<br>
R = Jari-jari Tabung<br>
T = Tinggi Tabung<br><br></p>
</td></tr>
</table></form>

</td>

</tr>

<tr>
<td>

<form method="POST" action="<?=base_url('bangun/hasil') ?>">
<div align="center"></div>
<table width="366" border="0" align="center">
<tr><td colspan="2">
<div align="center"> <h2>BANGUN LIMAS SEGIEMPAT</h2>
<p>.....................................................</p>
</div>
</td></tr>
<tr><td width="354"><h4> Sisi  : </h4><input class="alamat" type="text" name="sisilimas"></td></tr>
<tr><td><h4> Lebar  : </h4><input class="alamat" type="text" name="alaslimas"><br></td></tr>
<tr><td><h4> Tinggi : </h4><input class="alamat" type="text" name="tinggilimas"></td></tr>
<tr><td><input class="button" type="submit" name="luaslimas" value="Hitung Luas"></td></tr>
<tr><td><input class="button" type="submit" name="volumelimas" value="Hitung Volume"></td></tr>
<tr><td><h3>Rumus Limas Segiempat<h3></td></tr>
<tr><td>
<p>Luas Alas :<br>
S x S<br>
Luas Sisi :<br>
(0.5 x A x T) x 4<br>
Luas Limas :<br>
LA + (4 x LS)<br><br>

Volume Limas :<br>
1/3 x LA x T<br><br>
Ket :<br>
LA = Luas Alas<br>
LS = Luas Sisi<br>
S = Sisi Segitiga<br>
A = Alas Segitiga<br>
T = Tinggi Limas<br><br></p>
</td></tr>
</table></form>

</td>

<td>

<form method="POST" action="<?=base_url('bangun/hasil') ?>">
<div align="center"></div>
<table width="366" border="0" align="center">
<tr><td colspan="2">
<div align="center"> <h2>BANGUN PRISMA SEGITIGA</h2>
<p>.....................................................</p>
</div>
</td></tr>
<tr><td width="354"><h4> Alas Segitiga  : </h4><input class="alamat" type="text" name="alassegitiga"></td></tr>
<tr><td><h4> Tinggi Segitiga  : </h4><input class="alamat" type="text" name="tinggisegitiga"><br></td></tr>
<tr><td><h4> Tinggi Prisma : </h4><input class="alamat" type="text" name="tinggiprisma"></td></tr>
<tr><td><input class="button" type="submit" name="luasprisma" value="Hitung Luas"></td></tr>
<tr><td><input class="button" type="submit" name="volumeprisma" value="Hitung Volume"></td></tr>
<tr><td><h3>Rumus Prisma Segitiga<h3></td></tr>
<tr><td>
<p>Luas Prisma :<br>
TS x (A + (3 x TP ))<br><br>

Volume Prisma :<br>
0.5 x A x TS x TP<br><br>
Ket :<br>
A = Alas Segitiga<br>
TS = Tinggi Segitiga<br>
TP = Tinggi Prisma<br><br><br><br><br><br><br><br></p>
</td></tr>
</table></form>

</td>

</tr>
</table>

</table></form>
</body>
</html>