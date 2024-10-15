<?php 
    function curl($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    // alamat local host untuk file get Wisata.php, ambil hasil export JSON
    $send = curl("http://localhost/rekayasawebazzahra/pertemuan2/wisata.php");
<table>
  <tr>
    <th>kota</th>
    <th>landmark</th>
    <th>tarif</th>
  </tr>
  <tr>
    <td>SEMARANG</td>
    <td>LAWANG SEWU</td>
    <td>20000</td>
  </tr>
  <tr>
    <td>YOGYAKARTA</td>
    <td>PRAMBANAN</td>
    <td>35000</td>
  </tr>
  <tr>
    <td>MAGELANG</td>
    <td>BOROBUDUR</td>
    <td>45000</td>
  </tr>
  <tr>
    <td>SURAKARTA</td>
    <td>PGS</td>
    <td>GRATIS</td>
  </tr>
</table>