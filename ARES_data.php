<?php
  include "functions.php";
  session_start();
  head();
?>
  </head>
  <body>

  <!-- odeslání IČO do ARES a načtení dohledaných dat z ARES do modalu -->
<?php
  $_SESSION[ic]=($_GET['q']);
  $fp=fopen('https://wwwinfo.mfcr.cz/cgi-bin/ares/darv_std.cgi?ico='.$_SESSION[ic],'r');      
  $z=1;
  while (!feof($fp)) {
    $order=fgetss($fp);
    //název firmy(=name)
    //sídlo firmy(=address)
    if ($z==21):         
      $_SESSION[data1]=$order;
    endif;
    if ($z==20): {         
      $_SESSION[data2]=$order;
      $_SESSION[data2]=trim($_SESSION[data2]);
      }
    endif;
    if ($z==27):         
      $_SESSION[data3]=$order;
    endif;
    if ($z==29):         
      $_SESSION[data4]=$order;
    endif;
    if ($z==30):         
      $_SESSION[data5]=$order;
    endif;
    if ($z==32):         
      $_SESSION[data6]=$order;
    endif;
    if ($z==33):         
      $_SESSION[data7]=$order;
    endif;         
    $z=$z+1;   
  }   
  fclose($fp);
  //datum(=date)
  $_SESSION[date]=date("Y-m-d");

  $response .= "<tr>";
  $response .= "<td>IČO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$_SESSION[data1]."</td>";
  $response .= "</tr>"."<br>";
  $response .= "<tr>";
  $response .= "<td>Název firmy:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$_SESSION[data2]."</td>";
  $response .= "</tr>"."<br>";
  $response .= "<tr>";
  $response .= "<td>Název obce:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$_SESSION[data3]."</td>";
  $response .= "</tr>"."<br>";
  $response .= "<tr>";
  $response .= "<td>Název ulice:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$_SESSION[data4]."</td>";
  $response .= "</tr>"."<br>";
  $response .= "<tr>"; 
  $response .= "<td>Číslo popisné:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$_SESSION[data5]."</td>"; 
  $response .= "</tr>"."<br>"; 
  $response .= "<tr>"; 
  $response .= "<td>Číslo orientační:&nbsp;&nbsp;&nbsp;</td><td>".$_SESSION[data6]."</td>"; 
  $response .= "</tr>"."<br>"; 
  $response .= "<tr>"; 
  $response .= "<td>PSČ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>".$_SESSION[data7]."</td>"; 
  $response .= "</tr>"."<br>"; 
  $response .= "<tr>"; 
  $response .= "<td>Datum záznamu:&nbsp;&nbsp;</td><td>".$_SESSION[date]."</td>"; 
  $response .= "</tr>"."<br>";

  echo $response;

  ends()
?>




