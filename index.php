<?php 

	require_once('database.php');

	include("head.php");
	include("nav.php");

	// get all grave info
	$qryGetAllGraves = "SELECT firstName, middleName, lastName, birthDate, deathDate, PhotoLink FROM graves;";
	$result = mysqli_query($connection, $qryGetAllGraves);

	//test for query failure
	if(!$result) {
		die("Database query failed.");
}

?>


<!-- ====HERO==== -->

<section id="hero">
	<h1>Welcome to the Grave Site</h1>
	<div class="search">
		<form action="graves.php">
			<input type="search" name="ancestor_search" placeholder="Find your ancestor.">
		</form>
	</div>
	<!-- end search -->
</section>
<!-- end hero -->

<!-- =====Description==== -->

<section id="description">
	<h2>The Grave Site</h2>
	<p>As you develop the Grave Site you will learn the basics of coding a website. The course will cover many different
		tags
		but no one can remember all of them. If you need to look up or reference a tag or just remember what one does go look
		around
		<a href="http://www.w3schools.com" title="https://www.w3schools.com/" target="_blank">w3schools.com</a>
	</p>
</section>
<!-- END description -->

<!-- ====classes==== -->

<section id="classes">

	<div class="w3-row">
		<div class="w3-half">
			<div class="w3-card-2">
				<div id="essentials">
					<img src="img/squirrel.jpg" alt="squirrel">
					<h3>Web Developement Essentials</h3>
					<p>In
						<em>Web Essentials</em> we will learn how to code the page using HTML5 as well as style the page using CSS3</p>
				</div>
				<!-- End essentials -->
			</div>
			<!-- end card 2 -->
		</div>
		<!-- end half -->
		<div class="w3-half">
			<div class="w3-card-2">
				<div id="databases">
					<img src="img/barn.jpg" alt="barn">
					<h3>Web Databases</h3>
					<p>In
						<strong>Web Databases</strong> you will learn how to set up and structure a Database of tombstones using MySql</p>
				</div>
				<!-- end databases -->
			</div>
			<!-- end card 2 -->
		</div>
		<!-- end half -->
	</div>
	<!-- end row -->

	<div class="w3-row">
		<div class="w3-half">
			<div class="w3-card-2">
				<div id="server">
					<img src="img/home.jpg">
					<h3>Server Side Scripting</h3>
					<p>In
						<i>Server Side Scripting</i> we will be teaching you about PHP. PHP allows you to make a web site dynamic, as
						well as
						interact with, retrieve, and post data to the Database</p>
				</div>
				<!-- end server -->
			</div>
			<!-- end card 2 -->
		</div>
		<!-- end half -->

		<div class="w3-half">
			<div class="w3-card-2">
				<div id="client">
					<img src="img/cat.jpg">
					<h3>Client Side Scripting</h3>
					<p>
						<b>Client Side Scripting</b> will cover JavaScript &amp; JQuery adding additional functionality to the website
						and completing
						the basic languages used in web development.
						<br> By the end of this class you will have completed most of the core classes in the program
					</p>
				</div>
				<!-- end client -->
			</div>
			<!-- end card 2 -->
		</div>
		<!-- end half -->
	</div>
	<!-- End Row -->

	<!-- add new grave button -->
	<div class="add-button">
		<p><a href="add_grave.php">Add New Grave</a></p>
	</div>

	<!-- new grave output begins -->
	<div class="graves">
		<h3> Graves </h3>
	</div>

	<div class="grave">
		<table>
			<th>Grave Stone</th>
			<th>Name</th>
			<th>Birth Date</th>
			<th>Death Date</th>

			<?php
	$graves = array();
				while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<!-- this will output a string to the cloudinary link-->
				<td><img src="<?php echo $row['PhotoLink']?>" </td> <td>
					<?php echo $row['firstName'] . ' ' . $row['middleName'] . ' ' . $row['lastName']?>
				</td>
				<td>
					<?php echo $row['birthDate']?>
				</td>
				<td>
					<?php echo $row['deathDate']?>
				</td>
			</tr>
			<?php	

	}

?>

		</table>
	</div>

</section>
<!--END classes-->

<?php 

include("footer.php");

?>