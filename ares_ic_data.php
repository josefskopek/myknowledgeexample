<?php
  include "functions.php";
  session_start();
  head();
?>
  </head>
  <body>
  <!-- detailní data z databáze "zelnakyccz_1"/tabulky "ares_ic" u vybrané položky pro modal-->
<?php
  $q = ($_GET['q']);
  $con = mysqli_connect('uvdb50.active24.cz','zelnakyccz_1','d7qNSiQ6FT','zelnakyccz_1');
  if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
  }
  mysqli_select_db($con,"zelnakyccz_1");
  $sql = "SELECT * FROM ares_ic WHERE ico = '".$q."'";
  $result = mysqli_query($con,$sql);

  while($row = mysqli_fetch_array($result)){
    $ico = $row['ico'];
    $name_of_company = $row['name_of_company'];
    $name_of_city = $row['name_of_city'];
    $name_of_street = $row['name_of_street'];
    $descriptive_number = $row['descriptive_number'];
    $indicative_number = $row['indicative_number'];
    $postcode = $row['postcode'];
    $date = $row['date'];
 
    $response .= "<tr>";
    $response .= "<td>IČO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$ico."</td>";
    $response .= "</tr>"."<br>";
    $response .= "<tr>";
    $response .= "<td>Název firmy:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$name_of_company."</td>";
    $response .= "</tr>"."<br>";
    $response .= "<tr>";
    $response .= "<td>Název obce:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$name_of_city."</td>";
    $response .= "</tr>"."<br>";
    $response .= "<tr>";
    $response .= "<td>Název ulice:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$name_of_street."</td>";
    $response .= "</tr>"."<br>"; 
    $response .= "<tr>"; 
    $response .= "<td>Číslo popisné:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$descriptive_number."</td>"; 
    $response .= "</tr>"."<br>"; 
    $response .= "<tr>"; 
    $response .= "<td>Číslo orientační:&nbsp;&nbsp;&nbsp;</td><td>".$indicative_number."</td>"; 
    $response .= "</tr>"."<br>"; 
    $response .= "<tr>"; 
    $response .= "<td>PSČ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$postcode."</td>"; 
    $response .= "</tr>"."<br>"; 
    $response .= "<tr>"; 
    $response .= "<td>Datum záznamu:&nbsp;&nbsp;</td><td>".$date."</td>"; 
    $response .= "</tr>"."<br>";
  }

  echo $response;

  mysqli_close($con);

  ends()
?>










