<!DOCTYPE html>
<html>
<head>
	<?php include_once './headTag.php';?>
	<title>Magazine | IIITDMJ</title>Ï˝
</head>
<?php include './topheader.php'?>
<div class="container">
	<body>
		<?php include './Header.php';?>
		<?php include "./navbar.php" ?>
		<span class="br"></span>

		<div class="aboutHeader" id="adminHeader">
				<h2>Magazine</h2>
			</div>

	<div class="magazine">
		
		<?php include './connectionDB.php';

			$sql_query = "SELECT * FROM magazine ORDER by magazine_year DESC";


			$result = $link->query($sql_query);

			if($result -> num_rows > 0)
			{
				while($rows = $result -> fetch_assoc())
				{
					echo ("<div class='m_profile'>"."<a href='".$rows['magazine_link']."' target='_blank'>"
					
					 ."<img src='../Magazine/savitur-".$rows['magazine_year'].".png'/>"
					 ."<span>Savitur - ".$rows['magazine_year']."</span>"
					 ."</a>"
					 ."</div>");
				}
			}
			else
			{
				echo "View all - <a href='viewall.php'>View All</a>";
			}

			$link -> close();
		?>
	</div>

</div>

	</body>
</div>
<script type="text/javascript" src="./script.js"></script>
<?php include './footer.php'?>
</html>