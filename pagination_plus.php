<?php
  include "functions.php";
  session_start();
  head();
?>
  </head>
  <body class="bg-primary">
 
<?php
  heading_navbar()
?>   
    
  <br /><br />
  <br /><br />

  <div class="container">
<?php
    //kontaktní parametry pro připojení k databázovému serveru a k databázi  
    $dbhost="uvdb50.active24.cz";
    $dbusr="zelnakyccz_1";
    $dbpassw="d7qNSiQ6FT";
    $dbname="zelnakyccz_1";

    //připojení k databázovému serveru
    @$link=mysql_connect($dbhost,$dbusr,$dbpassw); 
       
    //připojení k databázi
    @$db=mysql_select_db($dbname,$link); 

    //dotaz pro databázi "zelnakyccz_1/tabulku ares_ic"
    $_SESSION[page] = $_SESSION[page] + 1;
    $page_limit = ($_SESSION[page] - 1) * 3;
    $limit = "limit $page_limit,3;";
    $_SESSION[query] = $_SESSION[filter]." ".$_SESSION[ordering]." ".$limit;
    $query4 = $_SESSION[query];
    $result4=mysql_query($query4,$link);
    $query5 = $_SESSION[filter]." ".$_SESSION[ordering];
    $result5=mysql_query($query5,$link);
    $_SESSION[found_item_number] = mysql_num_rows($result5);
    if ((fmod($_SESSION[found_item_number], 3)) > 0) {$_SESSION[page_number] = (floor($_SESSION[found_item_number] / 3)) + 1;}
      else {$_SESSION[page_number] = floor($_SESSION[found_item_number] / 3);}    
    $_SESSION[last_page_items_number] = fmod($_SESSION[found_item_number], 3);
?>
    <!-- Tabulka s daty z databáze "zelnakyccz_1/tabulky ares_ic" -->
    <div class="row justify-content-center">
      <table class="table table-bordered" style="width:600px">
        <thead class="thead-dark">
          <tr>
            <th width="200">IČO</th>
            <th width="200">Název firmy</th>               
            <th width="200">Datum záznamu</th>
          </tr>
        </thead> 
        <tbody style="background-color:white">
<?php
          $k = 0;
          while($item=mysql_fetch_array($result4)):
            $k = $k + 1;
?>
            <tr id="<?php echo "set".$k; ?>">      
              <td width="180"><input id="<?php echo "ico".$k; ?>" class="border-0" type="text" value="<?php echo $item[ico]; ?>"></td>
              <td width="180"><input id="<?php echo "name_of_company".$k; ?>" class="border-0" type="text" value="<?php echo $item[name_of_company]; ?>"></td>                     
              <td width="180"><input id="<?php echo "date".$k; ?>" class="border-0" type="text" value="<?php echo $item[date]; ?>"></td>      
            </tr>
<?php
          endwhile;
?>
        </tbody>                   
      </table>
    </div>

<?php
    modal_ares_ic()
?>

    <br /><br />
    <br /><br />

<?php
    //stránkování
    if ($_SESSION[page_number] - $_SESSION[page] == 0) {
?> 
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="pagination_minus.php"><</a></li>
        <li class="page-item disabled"><a class="page-link" href="#"><?php echo $_SESSION[page]."/".$_SESSION[page_number]; ?></a></li>
        <li class="page-item disabled"><a class="page-link" href="pagination_plus.php">></a></li>
      </ul>
<?php
      ;}
      else {
?> 
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="pagination_minus.php"><</a></li>
        <li class="page-item disabled"><a class="page-link" href="#"><?php echo $_SESSION[page]."/".$_SESSION[page_number]; ?></a></li>
        <li class="page-item"><a class="page-link" href="pagination_plus.php">></a></li>
      </ul>
<?php  
      ;} 
?>

  </div>

  <script src="functions.js"></script>
   
<?php
  ends()
?>