
<?php
echo "dzień-miesiąć-rok: ".date('d-m-Y')."<br>";
echo "rok-dzień-miesiąc: ".date('Y-m-d')."<br>";
echo strftime('%d %B %Y')."<br>";
setlocale(LC_TIME, 'pl');
echo strftime("%A %d %B %Y")."<br>";
echo date('G:i:s');
//date() i getdate()
?>
<script>
setTimeout(function(){
  window.location.reload();
},1000);
</script>

<?php
echo date('H:i:sa');
//getdate()
$date=getdate();
echo "<pre>";
print_r($date);
echo "</pre><br>";
echo "dzien tygodnia: ".$date['wday']."<br>";
//rok przestępny 0 jak nie jest 1 jak jest
echo date('L');
//mktime
$today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
echo "$today <br>";
//lata od 1 stycznia 1970
$year=$today/(60*60*24*365);
echo (int)$year."<br>";
//poprzedni rok
$today2 = mktime(0, 0, 0, date('m'), date('d'), date('Y')-1);
echo "$today2 <br>";
echo (int)$today2/(60*60*24*365);

 ?>
