<html>
<head>
  <title>(soal 2 [a dumpways jos])</title>
</head>
<body>
<script type="text/javascript">
      var jarak = 100 ;
      var waktuangela = 13;
      var waktunana = 12;
      var selisihwaktu = (waktuangela-waktunana);
      document.write("perbandingan waktu  : "+selisihwaktu+" Jam<br><br>");
      document.write("jarak tempuh  : "+jarak+" Km<br><br>");
      var waktunanaperjam = 7*3600 / 1000;
      var waktuangelaperjam = 10*3600 / 1000;
      var perbedaanjarak = waktunanaperjam * selisihwaktu;
      document.write("kecepatan ana perjam : "+  waktunanaperjam +" km/jam<br><br>");
      document.write("kecepatan angela perjam : "+ waktuangelaperjam +" km/jam<br><br>");
      var a = (jarak - perbedaanjarak);
      var b = (waktunanaperjam + waktuangelaperjam);
      var rumus = (a/b)*60;
      // var hasil = waktupapasan.toFixed(1);
      var x = rumus * 60;
      var y = x % 3600;
      var jam   = x / 3600;
      var menit = y / 60;
      var detik = y % 60;
      document.write("hasil rumus : "+Math.floor(jam) + ' Jam ' + Math.floor(menit) + ' Menit ' + "<br><br>");
      var waktupapasan =  (waktuangela + jam);
      document.write("waktu perjalanan angela dan nana sampai berpapasan pukul : "+ Math.floor(waktupapasan) +" : "+ Math.floor(menit) +" <br><br>");
</script>
</body>
</html>
