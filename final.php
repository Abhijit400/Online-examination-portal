<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
?>
<style>
	.starttest a{
		font-family: "Sofia", Georgia, Serif;
		font-size: 25px;
		color:#121069;
	}
</style>
<div class="main">
<h1>You are passed    !</h1>
	<div class="starttest">
	<p>Congratulations ! You have just Completed the examination.</p>
	<p>Final Sore : 
		<?php
			if(isset($_SESSION['score'])){
				echo $_SESSION['score'];
				unset($_SESSION['score']);
			}
		?>
	</p>
	<a href="viewans.php">View Correct Answer</a>
	<a href="starttest.php">Again Start Test!!!!</a>
	</div>
  </div>
<?php include 'inc/footer.php'; ?>