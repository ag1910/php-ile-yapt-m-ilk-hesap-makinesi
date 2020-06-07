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
elseif(isset($_POST['alan']))
{
	echo $_POST['birincisayi'] * $_POST['ikincisayi'];
}
elseif(isset($_POST['alan1']))
{
	echo $_POST['birincisayi'] + $_POST['birincisayi'] * $_POST['ikincisayi'] / 100;
}
elseif(isset($_POST['alan2']))
{
	echo $_POST['birincisayi'] - $_POST['birincisayi'] * $_POST['ikincisayi'] / 100;
}
elseif(isset($_POST['alan3']))
{
	echo $_POST['birincisayi'] * $_POST['ikincisayi'] / 100;
}

else {

?>

<form name="form1" method="post" action="">
  <p>
    <label for="birincisayi">X:</label>
    <input type="text" name="birincisayi">
  </p>
  <p>
    <label for="ikincisayi">Y:</label>
    <input type="text" name="ikincisayi">
		<br>
				<br>
					<input type="submit" name="alan3" value="x'in %y'si kactır?">
						<input type="submit" name="alan2" value="x, %y kadar azaltılırsa kaç olur?">
							<input type="submit" name="alan1" value="x, %y kadar artırılırsa kaç olur?">
		<input type="submit" name="alan" value="Alan">
    <input type="submit" name="topla" value="Topla">
    <input type="submit" name="cikar"  value="Çıkar">
    <input type="submit" name="carp" value="Çarp">
    <input type="submit" name="bol" value="Böl">
  </p>
</form>

<?php  } ?>
