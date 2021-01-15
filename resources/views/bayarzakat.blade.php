<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<title>Bayar Zakat</title>

<h1>Kalkulator Zakat</h1><br>
<!-- <p>Nisab Zakat Penghasilan
Nisab adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara 522 kg beras normal.</p> -->

<form>
  <label for="fname">Nama</label><br>
  <input type="text" id="nama" name="nama"><br><br>

  <label for="fname">No Handphone</label><br>
  <input type="text" id="hp" name="hp"><br><br>

  <label for="fname">Jumlah Penghasilan per Bulan</label><br>
  <input type="text" id="jumlah" name="jumlah"><br><br>

  <label for="lname">Masukan harga beras saat ini (per kg)</label><br>
  <input type="text" id="harga" name="harga"><br><br>

  <label for="lname">Besarnya Nishab Zakat Penghasilan per Bulan</label><br>
  <input type="text" id="nishab" name="nishab"><br><br>

  <label for="lname">Apakah Saya Wajib Membayar Zakat Penghasilan?</label><br>
  <input type="text" id="wajib" name="wajib"><br><br>

  <label for="lname">Jumlah yang Harus Saya Bayarkan per bulan</label><br>
  <input type="text" id="bayar" name="bayar"><br><br>
  <input id="submit" type="submit" value="Bayar Zakat">

</form>
</body>

<script>
var beras = 0;

$("#harga" ).keyup(function() {
    var bla = $('#harga').val();
    var bla2 = $('#jumlah').val();
    var bayar = (bla2 * 0.025);
    beras = bla*522;
    if(bla2>=beras){
        $('#wajib').val("Ya");
        $('#bayar').val(bayar);
        $('#nishab').val(beras);
    }else{
        $('#wajib').val("Tidak");
        $('#bayar').val('');
        $('#nishab').val(beras);
    }
});

</script>
</html>