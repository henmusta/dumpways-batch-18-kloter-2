<!DOCTYPE html>
<html>
<body>

<p>soal 2</p>

<button onclick="myFunction()">ubah</button>

<p id="demo"></p>
<script>
var myArray = ['8lampung', '5botcamp', '3calon','2mustakim','1hendri','4peserta','6dumpways','7batchlapanbelas','indonesia9'];
document.getElementById("demo").innerHTML = myArray;

function myFunction() 
    {
    var collator = new Intl.Collator(undefined, 
    {
        numeric: true, sensitivity: 'base'
    });
    myArray.sort(collator.compare)
    document.getElementById("demo").innerHTML = myArray;
    }
</script>

</body>
</html>