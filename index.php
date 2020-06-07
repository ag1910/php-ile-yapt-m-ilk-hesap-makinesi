<?php
if (isset($_POST['topla']))
{
	echo $_POST['birincisayi'] + $_POST['ikincisayi'];
}
elseif(isset($_POST['cikar']))
{
	echo $_POST['birincisayi'] - $_POST['ikincisayi'];
}

elseif(isset($_POST['carp']))
{
	echo $_POST['birincisayi'] * $_POST['ikincisayi'];
}

elseif(isset($_POST['bol']))
{
	echo $_POST['birincisayi'] / $_POST['ikincisayi'];
}

else {

?>

<form name="form1" method="post" action="">
  <p>
    <label for="birincisayi">Birinci Sayı:</label>
    <input type="text" name="birincisayi">
  </p>
  <p>
    <label for="ikincisayi">İkinci Sayı:</label>
    <input type="text" name="ikincisayi">
		<br>
				<br>
    <input type="submit" name="topla" value="Topla">
    <input type="submit" name="cikar"  value="Çıkar">
    <input type="submit" name="carp" value="Çarp">
    <input type="submit" name="bol" value="Böl">
  </p>
</form>

<?php  } ?>
