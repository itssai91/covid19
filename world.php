<?php 
$data = file_get_contents('https://api.covid19api.com/summary');
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
    <title>COVID-19 WORLD LIVE TRACKER</title>
     <style>
    html {
  scroll-behavior: smooth;
}
    </style>
</head>
<body>

<!--Corona Data-->
    <section class="corona_data container-fluid">
    <h1 class="text-danger text-center">COVID- 19 WORLD LIVE TRACKER</h1>

<div class="btn-group" role="group" aria-label="Basic example">
<a class="btn btn-lg bg-primary text-white" href="odisha.php">ODISHA</a>
<a class="btn btn-lg bg-success text-white" href="index.php">INDIA</a>
</div>

<div class="table-responsive">

<table class="table table-bordered table-striped text-center">

<tr class="bg-secondary text-white">
    
    
    <td><?php echo "Total New Confirmed: ".$coranalive['Global']['NewConfirmed'] . "<br>"  ; ?></td>
    <td><?php echo "Total Confirmed: ".$coranalive['Global']['TotalConfirmed'] . "<br>"  ; ?></td>
    <td><?php echo "New Recovered: ".$coranalive['Global']['NewRecovered'] . "<br>"  ; ?></td>
    <td><?php echo "Total Recovered: ".$coranalive['Global']['TotalRecovered'] . "<br>"  ; ?></td>
    <td><?php echo "New Deaths: ".$coranalive['Global']['NewDeaths'] . "<br>"  ; ?></td>
    <td><?php echo "Total Deaths: ".$coranalive['Global']['TotalDeaths'] . "<br>"  ; ?></td>

    </tr>

<tr class="text-white">
<th style="background: #2196f3;">Date</th>
<th style="background: #008C76FF;">Country</th>
<th style="background: #e91e7f;">New Confirmed</th>
<th style="background: #EE2737FF;">Total Confirmed</th>
<th style="background: #4caf50;">Total Recovered</th>
<th style="background: #EE2737FF;">Total Deaths</th>
</tr>

<?php



$countryCount = count($coranalive['Countries']);


$i=0;
while($i < $countryCount){
    
    ?>

    <tr>

    <td style="background: #bed2f3;"><?php echo $coranalive['Countries'][$i]['Date'] . "<br>"  ; ?></td>
    <td style="background: #ffe493;"><?php echo $coranalive['Countries'][$i]['Country'] . "<br>"  ; ?></td>
    <td style="background: #9ED9CCFF;"><?php echo $coranalive['Countries'][$i]['NewConfirmed'] . "<br>"  ; ?></td>
    <td style="background: #fc95c6;"><?php echo $coranalive['Countries'][$i]['TotalConfirmed'] . "<br>"  ; ?></td>
    <td style="background: #88d28b;"><?php echo $coranalive['Countries'][$i]['TotalRecovered'] . "<br>"  ; ?></td>
    <td style="background: #fd99a1;"><?php  echo $coranalive['Countries'][$i]['TotalDeaths'] . "<br>"  ;  ?></td>

    </tr>

<?php

  $i++;
  
}


?>
<tr class="bg-primary text-white">
    
    <td><?php echo "Total New Confirmed: ".$coranalive['Global']['NewConfirmed'] . "<br>"  ; ?></td>
    <td><?php echo "Total Confirmed: ".$coranalive['Global']['TotalConfirmed'] . "<br>"  ; ?></td>
    <td><?php echo "New Recovered: ".$coranalive['Global']['NewRecovered'] . "<br>"  ; ?></td>
    <td><?php echo "Total Recovered: ".$coranalive['Global']['TotalRecovered'] . "<br>"  ; ?></td>
    <td><?php echo "New Deaths: ".$coranalive['Global']['NewDeaths'] . "<br>"  ; ?></td>
    <td><?php echo "Total Deaths: ".$coranalive['Global']['TotalDeaths'] . "<br>"  ; ?></td>

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