<?php
  include "functions.php";
  session_start();
  head();
?>
  </head>
  <body class="bg-primary">

<?php
  heading_navbar();   

  //kontaktní parametry pro připojení k databázovému serveru a k databázi  
  $dbhost="uvdb50.active24.cz";
  $dbusr="zelnakyccz_1";
  $dbpassw="d7qNSiQ6FT";
  $dbname="zelnakyccz_1";
?>
  <div class="text-warning">
<?php
    //připojení k databázovému serveru
    if(!(@$link=mysql_connect($dbhost,$dbusr,$dbpassw))) 
      die("<p>Server není připojen!!!</p>"); 
       
    //připojení k databázi
    if(!(@$db=mysql_select_db($dbname,$link))) 
      die("<p>Databáze nebyla nalezena!!!</p>"); 
?>
  </div>
<?php      
  //zjištění počtu záznamů
  $query = "SELECT * FROM ares_ic";
  $result=mysql_query($query,$link);
  $_SESSION[number] = mysql_num_rows($result);
?>  
   
  <br /><br />
  <br /><br />

  <!-- formulář pro výběr způsobu řazení položek pro jejich výpis z databáze a filtr na název firmy v databázi -->
  <div class="row justify-content-center">
    <div class="rounded" style="background-color:white;">
      <form action="pagination.php" method="get"> 
        <table class="table-borderless table-sm" style="height:160px">
          <tbody>      
            <tr>
              <td>
                <p>Počet záznamů v databázi:</p>
              </td>
              <td>
                <p><?php echo $_SESSION[number]; ?></p>
              </td>
            </tr>       
            <tr>
              <td width="180px">
                Způsob řazení záznamů ve výstupu z databáze (výběr ze seznamu)<br />
              </td>
              <td width="100"  class="hidden">
                <select name="ordering">
                  <option value="bez razeni">(bez řazení)</option>
                  <option value="podle nazvu firmy vzestupne">Řazení záznamů podle názvu firmy vzestupně</option>
                  <option value="podle nazvu firmy sestupne">Řazení záznamů podle názvu firmy sestupně</option>
                  <option value="podle datumu vyhledani vzestupne">Řazení záznamů podle datumu vyhledání vzestupně</option>
                  <option value="podle datumu vyhledani sestupne">Řazení záznamů podle datumu vyhledání sestupně</option>
                </select>           
              </td>
            </tr>
            <tr>
              <td width="180px">
                Filtrování záznamů ve výstupu z databáze podle názvu firmy ((vícenásobný) výběr ze seznamu)<br />
              </td>
              <td width="100"  class="hidden">
                <select multiple name="filter[]">
<?php
                  $query_2 = "SELECT DISTINCT name_of_company FROM ares_ic ORDER by name_of_company";
                  $result_2=mysql_query($query_2,$link);
                  while($item_2=mysql_fetch_array($result_2)):                           
?>                  
                    <option value="<?php echo $item_2[name_of_company]; ?>"><?php echo $item_2[name_of_company]; ?></option>
<?php
                  endwhile;
?>               
                </select>           
              </td>
            </tr>        
            <tr>
              <td></td>
              <td>
                <button type="submit" class="btn btn-dark">Odeslat formulář</button>                 
              </td>
            </tr>
          </tbody>              
        </table>                                   
      </form>
    </div>
  </div>

  <br /><br />
  <br /><br />

<?php
  ends();
?>