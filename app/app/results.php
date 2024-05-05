<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'classes/init.php';
require __DIR__ . '/vendor/autoload.php';

$sid = "ACd7e65087f7d58f3c954ed59558785d23";
$token = "18d928df15c48e429fa167327ed100b0";
$client = new Twilio\Rest\Client($sid, $token);

$results = $_SESSION['results'];
$displayObj = array();

foreach($results as $phone)
{
  try {
    $phoneNumber = $client
        ->lookups
        ->v1
        ->phoneNumbers($phone)
        ->fetch(
            [
                "type" => ["caller-name"]
            ]
        );

        //for display purposes
        array_push($displayObj, [$phone, 'Valid']);

  } catch (\Twilio\Exceptions\TwilioException $e) {

    array_push($displayObj, [$phone, 'Invalid']);
  }
}

try {
    $mongoClient = new MongoDB\Client("mongodb://admin:pass@mongodb:27017"); //new MongoDB\Driver\Manager("mongodb://admin:pass@mongodb:27017/");
  
    echo "Connected to MongoDB successfully! <br/>";
    // select a database
    $db = $mongoClient->generator;
   echo "Database selected <br/>";

   $collection = $db->phones;
   echo "collection selected <br/>";

  //  $document = ['number' => '+27682566581', 'outcome' => 'valid'];
  //   try{
  //     $insertOneResult = $collection->insert(['_id' => 1, 'number' => 'here', 'outcome' => 'hytt']);
  //   } catch (Exception $e) {
  //     echo $e->getMessage();
  //   }
   

  //echo "phone inserted successfully: ";

  } catch (Exception $e) {
    echo "Failed to connect to MongoDB: " . $e->getMessage();
  }

// $connection = new MongoDB\Driver\Manager("mongodb://admin:pass@mongodb:27017/");

// $db = $connection->generator;

// $collection = $db->phones;

// $document = ['number' => '+27682566581', 'outcome' => 'valid'];

// $collection->insertOne($document);

// echo "<p>phone inserted successfully: ";




// //store phone numbers into mongoDB
// $collection = $db->createCollection("phones");
// $id = 1;
// echo "Collection created succsessfully";

//   foreach($displayObj as $row)
//   {
//     $insertOneResult = $collection->insertOne(['_id' => $id, 'number' => $row[0], 'outcome' => $row[1]]);
//     $id = $id + 1;

//     printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

//     var_dump($insertOneResult->getInsertedId());
//   }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Results</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
    <header class="header black-bg">    
        <a class="logo"><b>Results</b></a>
    </header>
      
      <section id="main-content">
          <section class="wrapper">
            <br/>
     
                  <div class="col-md-6">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Generated Phones </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Phone Number</th>
                                  <th>Outcome</th>  
                              </tr>
                              </thead>

                              <tbody>

                              <?php foreach ($displayObj as $row) { ?>
                              <tr>
                                  <td><?php echo $row[0];?></td>
                                  <td>
                                    <?php if($row[1] == 'Valid') { ?>
                                     <p style="color:blue">Valid</p>
                                    <?php } else { ?>
                                     <p style="color:red">Invalid</p>
                                    <?php } ?>
                                  </td>   
                              </tr>
                              <?php } ?>
                             
                              </tbody>

                          </table>

                          <div">
                              <input type="submit" name="submit" value="API Check" class="btn btn-theme">
                              <a href="index.php" class="btn btn-theme">Back</a>
                          </div>

                      </div>
                  </div>
		</section>

      </section>
    </section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
