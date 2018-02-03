<!Doctype html:5>
<html>
<head>
<title>Get The Cube Of Any Number Without Multiplication and division  </title> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
  <form action="" method="POST">
    <div class="form-group">
      <label for="Html">Enter Your Number Here </label>
      <input class="form-control" id="Html" placeholder="Enter Number" name="number">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>

<div class="container" >
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = intval($_POST['number']);
	$cube = 0;
	$newcube = 0;
    for ($i=0;$i<$data;$i++){
		$cube += intval($data);
	}
	for ($i=0;$i<$data;$i++){
		$newcube += intval($cube);
	}
	echo "<hr>";
	echo "Cube Of the Number Is = ".$newcube;
	echo "<hr>";
	
}
?>
</div>
</body>
</html>
