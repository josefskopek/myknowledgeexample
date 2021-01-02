<?php
  include "functions.php";
  session_start();
  head();
?>
  </head>
  <body>

  <!-- uložení dat z ARES do databáze "zelnakyccz_1"/tabulky "ares_ic"-->
<?php
  //kontaktní parametry pro připojení k databázovému serveru a k databázi
  $dbhost="uvdb50.active24.cz";
  $dbusr="zelnakyccz_1";
  $dbpassw="d7qNSiQ6FT";
  $dbname="zelnakyccz_1";
?>
  <div class="text-warning">
<?php
  //připojení k databázovému serveru
  if(@$link=mysql_connect($dbhost,$dbusr,$dbpassw)) 
    echo ""; 
    else die("<p>Server není připojen!!!</p>");
?>      
  <br /><br />      
<?php   
  //připojení k databázi
  if(@$db=mysql_select_db($dbname,$link)) {
    echo "";
    } 
    else die("<p>Databáze nebyla nalezena!!!</p>");      
?>      
  </div>      
<?php      
  //uložení dat z ARES do databáze "zelnakyccz_1"/tabulky "ares_ic"      
  $dotaz="insert into ares_ic values
  ('$_SESSION[data1]', '$_SESSION[data2]', '$_SESSION[data3]', '$_SESSION[data4]', '$_SESSION[data5]', '$_SESSION[data6]', '$_SESSION[data7]', '$_SESSION[date]')";
  $result=mysql_query($dotaz,$link);
      
  ends()
?>











