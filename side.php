<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left"><table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Arial Calligraphy; font-size:30px; color:red"><b>Category</b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>
</div>
</div>