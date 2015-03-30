<html>
	<head><title>Etalase Toko</title>
	<style> #nav {
					color: white;
					background-color: #330000;
					font-size:larger;
					height:60px;
					}
				.menu {
					display:inline-block;
					float:right;
					text-align:left;
				}
				.menubar{
					text-align:right;
					float:left;
					display:inline-block;
				}
				.title {
					background:url("image/accesories.jpg") repeat;
					font-size:150px;
					height:400px;
					clear:both;
					padding:0 30px;
					text-align:center;
				}
				.searchbar {
					color: white;
					background-color:#330000;
					width :100%;
					padding:5px;}
			div {background-color:#ffd4aa;}
			p.closebar {background-color:#d6d6d6; text-align: center;}
	</style>
	</head> 
	<body>
		<div id="nav"><p class="menubar">FASHION</p>
			<p class="menu">Home Stores AboutUs</p>
		</div>
		<div class="title">
				Accesories Stores
		</div>
			<div class="searchbar">
					<input type="text" name="search" value="search"/>
					<input type="button" value="search"/>
			</div>
		<div> 
	
			

		<?php 
			$dbc = mysqli_connect('localhost','root','','websiteetalasetoko');
			$query = "SELECT gambartoko FROM tokoaksesoris";
			$data = mysqli_query($dbc, $query);
			echo "<table>";
			echo '<tr><td class="gambartoko">';

			while ($row = mysqli_fetch_array($data)) {
				
	//if (is_file($row['gambartoko'])&&filesize($row['gambartoko'])>0) 
			
				echo '<td> <img src="image';
				echo $row['gambartoko'];
				echo  '" /></td></tr>'; 
			}
				//echo'<td><img src="C:\xampp\htdocs\website etalase toko\image'.$row['gambartoko'].'"alt="gambartoko"/></td></tr>';
			//else echo '<td><img src="image/unverified.gif"alt="unverified"/></td></tr>';
			echo '</table>';
			mysqli_close($dbc);
		?>
		
		
		<div>
		<table style="border=1;width:100%"> 
			<!-- tabel daftar toko-->
				<tr>
					<td colspan="3"> control pictures up</td>
					<td rowspan="3"> Search table</td>
				</tr>
				<tr>
					<td>
						<a href="Halaman Profil Toko.html">
						<img src="/C:/xampp/htdocs/website_etalase_toko/image/princesa.jpg" alt="princesa" style="width:100%;height:200px">
						</a>
					</td>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/aldo.jpg" alt="aldo" style="width:100%;height:200px">
					</td>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/Alexa Koi.jpg" alt="Alexa Koi" style="width:100%;height:200px">
					</td>
					
				</tr>
				<tr>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/accessorize.jpg" alt="accesorize" style="width:100%;height:200px">
					</td>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/ayesha.jpg" alt="ayesha" style="width:100%;height:200px">
					</td>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/STROBERI.jpg" alt="stroberi" style="width:100%;height:200px"></td>
				</tr>
				<tr>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/Iam.jpg" alt="I am" style="width:100%;height:200px"></td>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/claire's.jpg" alt="claire's" style="width:100%;height:200px"></td>
					<td><img src="/C:/xampp/htdocs/website_etalase_toko/image/stroberi3.jpg" alt="stroberi3" style="width:100%;height:200px"></td>
				</tr>
		</table> 
		</div>
		<div><p class="controldown">control pictures down</p></div>
		<div><p class="closebar">copyright 2015 website.com</p></div>
	</body>
</html>
