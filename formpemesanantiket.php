<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
<form method="POST" action="output.php">
   **Pemesanan Tiket Maskapai**
==================================
Nama Pemesan : <input type="text" name="nama_pemesan" id="">

Jumlah Tiket : <input type="text" name="jumlah_tiket" id="">


Kelas : <select name="kelas" id="">
                <option value="ekonomi">Ekonomi</option>
                <option value="bisnis">Bisnis</option>
                <option value="eksekutif">Eksekutif</option>
        </select>

Tujuan : <select name="tujuan" id="">
                <option value="bali">Bali</option>
        </select>


Bagasi    : <input type="radio" name="bagasi" id=""value="5kg">5kg<input type="radio" name="bagasi" value="10kg">10kg<input type="radio" name="bagasi" value="15kg">15kg

Asuransi    : <input type="checkbox" name="asuransi" id="" value="asuransi_jiwa">Asuransi Jiwa
              <input type="checkbox" name="asuransi" id="" value="asuransi_kecelakaan">Asuransi Kecelakaan
              <input type="checkbox" name="asuransi" id="" value="asuransi_keterlambatan">Asuransi Keterlambatan

<input type="submit" value="Sumbit"> <input type="reset" value="Batal">
</form>
</pre>

    
</body>
</html>