<?php 
$data = file_get_contents('https://api.covid19india.org/states_daily.json');
$coronalive = json_decode($data, true);
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
    <title>COVID-19 ODISHA DAILY UPDATES</title>
    <style>
    html {
  scroll-behavior: smooth;
}
    </style>
</head>
<body">

<!--Corona Data-->
    <section class="corona_data container-fluid">
    <h1 class="text-danger text-center">COVID- 19 ODISHA UPDATES DAILY WISE</h1>

<div class="btn-group" role="group" aria-label="Basic example">
<a class="btn btn-lg bg-success text-white" href="world.php">GLOBAL</a>
<a class="btn btn-lg bg-danger text-white" href="index.php">INDIA</a>
<a class="btn btn-lg bg-warning text-white" href="odisha.php">ODISHA</a>
</div>


<div class="table-responsive">
<table class="table table-bordered table-striped text-center">



<?php



$total = count($coronalive['states_daily']);

$i=1;
while($i < $total){

?>

    <tr>
    <th class="text-left">Date & Month</th>
    <th colspan="5"></th>
    </tr>

    <tr>
    <td colspan="6" class="text-left"> <?php echo $coronalive['states_daily'][$total-1]['date']."<br>" ?> </td>
    </tr>

    <tr class="text-capitalize text-white">
    <th style="color: #fff; background: #2196f3;">Confirmed</th>
    
    <th style="color: #fff; background: #e91e7f;">Recovered</th>
       
    <th style="color: #fff; background: #4caf50;">Deceased</th>


    </tr>


<tr class="mb-5">

<td style="background: #bed2f3"> <?php echo $coronalive['states_daily'][$total-3]['or']."<br>" ?> </td>

<td style="background: #9ED9CCFF"> <?php echo $coronalive['states_daily'][$total-2]['or']."<br>" ?> </td>

<td style="background: #88d28b"> <?php echo $coronalive['states_daily'][$total-1]['or']."<br>" ?> </td>

</tr>
    
<?php
  $total -= 3;
}

?>
</table>
</div>



    </section>

<footer class="bg-danger text-center text-white p-1">
<h5>
Developed By:- SAIKRISHNA PANDA
</h5>
<p>"All The Data are Fetched From Official COVID- 19 Database"</p>
</footer>
   


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


</body>
</html>