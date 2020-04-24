<?php 
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125168538-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125168538-4');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" href="android-chrome-192*192.png">
    <link rel="icon" href="android-chrome-512*512.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<meta http-equiv="refresh" content="30"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>COVID-19 INDIA LIVE TRACKER</title>
     <style>
    html {
  scroll-behavior: smooth;
}
    </style>
</head>
<body>

<!--Corona Data-->
    <section class="corona_data container-fluid">
    <h1 class="text-danger text-center">COVID- 19 INDIA  LIVE TRACKER</h1>

<div class="btn-group" role="group" aria-label="Basic example">
    <a class="btn btn-lg bg-primary text-white" href="world.php">GLOBAL</a>
    <a class="btn btn-lg bg-danger text-white" href="dailyIndia.php">DAILY UPDATES</a>
<a class="btn btn-lg bg-success text-white" href="odisha.php">ODISHA</a>
</div>



<div class="table-responsive">
<table class="table table-bordered table-striped text-center" id="tbval">

<tr class="bg-secondary text-white">
    
    <td><?php echo "Last Update: ".$coranalive['statewise'][0]['lastupdatedtime'] . "<br>"  ; ?></td>
    <td><?php  echo "Total Confirmed: ".$coranalive['statewise'][0]['confirmed'];  ?></td>
    <td><?php echo "Total Active: ".$coranalive['statewise'][0]['active'] . "<br>"  ; ?></td>
    <td><?php echo "Total Recovered: ".$coranalive['statewise'][0]['recovered'] . "<br>"  ; ?></td>
    <td><?php  echo "Total Deaths: ".$coranalive['statewise'][0]['deaths'] . "<br>"  ;  ?></td>
    </tr>

<tr class="text-white">
<th style="background: #2196f3;">Last Update Time</th>
<th style="background: #008C76FF;">State</th>
<th style="background: #e91e7f;">Confirmed</th>
<th style="background: #EE2737FF;">Active</th>
<th style="background: #4caf50;">Recovered</th>
<th style="background: #EE2737FF;">Deaths</th>
</tr>

<?php



$statescount = count($coranalive['statewise']);


$i=1;
while($i < $statescount){
    
    ?>

    <tr>

    <td style="background: #bed2f3;"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ; ?></td>
    <td style="background: #ffe493;"><?php echo $coranalive['statewise'][$i]['state'] . "<br>"  ; ?></td>
    <td style="background: #9ED9CCFF;"><?php echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ; ?></td>
    <td style="background: #fc95c6;"><?php echo $coranalive['statewise'][$i]['active'] . "<br>"  ; ?></td>
    <td style="background: #88d28b;"><?php echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ; ?></td>
    <td style="background: #fd99a1;"><?php  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ;  ?></td>

    </tr>

<?php

  $i++;
  
}


?>
<tr class="bg-primary text-white">
    
    <td><?php echo "Last Update: ".$coranalive['statewise'][0]['lastupdatedtime'] . "<br>"  ; ?></td>
    <td><?php  echo "Total Confirmed: ".$coranalive['statewise'][0]['confirmed'];  ?></td>
    <td><?php echo "Total Active: ".$coranalive['statewise'][0]['active'] . "<br>"  ; ?></td>
    <td><?php echo "Total Recovered: ".$coranalive['statewise'][0]['recovered'] . "<br>"  ; ?></td>
    <td><?php  echo "Total Deaths: ".$coranalive['statewise'][0]['deaths'] . "<br>"  ;  ?></td>
    </tr>
</table>
</div>



    </section>

<footer class="bg-danger text-center text-white p-1">
<h4>
Developed By:- SAIKRISHNA PANDA
</h4>
<p>"All The Data are Fetched From Official COVID- 19 Database"</p>
</footer>
   


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


</body>
</html>