<!DOCTYPE html>
<html lang="en">

<head>



    <title>Tiles Calculator</title>



<body>
	

	
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">				
					<label>
						<span>Width</span>
						  <input type="text" name="width" value="">
						  <br>
					</label>
					<label>
						<span>Length</span>
						  <input type="text" name="length" value="">
						  <br>
					</label>
					<label>
						<span>Tile Size</span>
						<select name="tiles_area">
						  <option value="0.36" >600 x 600 mm</option>
						  <option value="0.18" >300 x 600 mm</option>
						  <option value="0.12" >200 x 600 mm</option>
						  <option value="0.06" >100 x 600 mm</option>
						</select>
					</label>
					<input type="submit" name="submit" value="Submit">
			</form>

<?php
if(isset($_POST['submit'])) 
{ 
$width = $_POST['width'];
$length = $_POST['length'];
$tiles_area = $_POST['tiles_area'];

$area= $width * $length;


$no_of_tiles = $area/$tiles_area;



print "Total Area:<b>" . $area . "</b></br>number of tiles: " . $no_of_tiles;

}
?>			
	
</body>


	




</html>
