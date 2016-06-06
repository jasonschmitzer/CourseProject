<html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Private Contacts</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled fa CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
</head>

<body>
<div class="splash">
<div class="container" data-example-id="hoverable-table">
<div class="row">
    <div class="col-lg-12 text-center">
        <h1 class="splash-text">Number Added <i class="fa fa-inbox splash-icon" aria-hidden="true"></i></h1>
    </div>
</div>
        <div class="jumbotron">
          <?php

                // Connect to MySQL
 				$mysqli = new mysqli( 'us-cdbr-azure-central-a.cloudapp.net', 'ba02f0e0d37b6a','a7285add', 'privatecontacts' );


               $number = (isset($_POST['number'])    ? $_POST['number']   : '');
               $loc = (isset($_POST['loc'])    ? $_POST['loc']   : '');


			  // Insert our data
			  $sql = "INSERT INTO contacts ( number, loc ) 	VALUES ( '{$mysqli->real_escape_string(isset($_POST['number'])    ? $_POST['number']   : '')}' , '{$mysqli->real_escape_string(isset($_POST['loc'])    ? $_POST['loc']   : '')}'	)";


			  $insert = $mysqli->query($sql);

			  // Print response from MySQL
			  if ( $insert ) {
				echo "Success! Row ID: {$mysqli->insert_id}";
			  } else {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			  }


            ?>
            </div>
        <div class="row text-center">
                <a href="index.html"><i class="fa fa-arrow-circle-left fa-3x foot-icons" aria-hidden="true"></i></a>
                <a href="../display/displaylist.php"><i class= "fa fa-list-alt fa-3x foot-icons" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
</body>
<!-- Latest compiled and minified JQuery -->
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- JS Validator -->
<script src="validator.js"></script>
</html>