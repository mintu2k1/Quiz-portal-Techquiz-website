<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:index.php');
}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'techquiz');
?>
<!DOCTYPE html>
<html>
<head>
	 <title>Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <Link rel="stylesheet" href="style.css"></Link>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
		<div class="container">
			<br><h1 class="text-center text-primary">TECHNICAL QUIZ PORTAL</h1><br>
		<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h2><br>
		<div class="col-lg-8 m-auto d-block">
		<div class="card">
			<h3 class="text-center card-header">Welcome <?php echo $_SESSION['username'];?> ,you have to select only one out of 4 and all questions are mandatory.Best of luck :)</h3>
		</div><br>
		<form action="check.php" method="POST" onsubmit="return validation()">
		<?php
		for($i=1;$i<=10;$i++)
		{
			$q = " select * from questions where qid = $i";
			$query = mysqli_query($con, $q);
			while($rows = mysqli_fetch_array($query))
			{
		?>
		<div class="card">
			<h4 class="card-header"><?php echo $rows['question'] ?></h4>

			<?php

			$q = " select * from answers where ans_id = $i";
			$query = mysqli_query($con, $q);
			while($rows = mysqli_fetch_array($query))
			{
		?>
		<div class="card-body">
			<input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid']; ?>" id="check1">
			<?php echo $rows['answer']; ?>
			 <span id="check" class="text-danger font-weight-bold"></span>
                              
		</div>
	





<?php
}
}
}
?>
	<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
</form>
</div>
<br><br>
<div class="m-auto d-block text-center">
		<a href="logout.php" class="btn btn-primary">Logout</a>
	</div><br>
	<div>
	<h5 class="text-center">@2022 Technical Quiz</h5>
		
	</div>
	</div>
</div>
<script type="text/javascript">
    function validation()
    {
        var check1=document.getElementById('check1').value;
        if(check1=="")
        {
            document.getElementById('check').innerHTML="**";
            return false;
        }
       }
   </script>
</body>
</html>


