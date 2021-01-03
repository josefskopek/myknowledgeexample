<?php
  function head() {
?>
    <!DOCTYPE html>
    <html lang="cs">
    <head>
      <title>Data z ARES za IČO</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
  }

  function ends() {
?>
    </body>
    </html>              
<?php
  }

  function modal_ares_ic() {
?>
<!-- The Modal with ares_ic_data-->
    <div class="modal" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">
   
<!-- Modal Header -->
          <div class="modal-header">          
            <h4 colspan="2" class="modal-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Údaje v ARES k zadanému IČO</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

              
<!-- Modal body -->
          <div class="modal-body" id="mark2">
          </div>
        
<!-- Modal footer -->
          <div class="justify-content-center">
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  }

  function heading_navbar() {        
    if (basename($_SERVER['PHP_SELF']) == 'index.php') {
      $name1='nav-link disabled';
    } else {
      $name1='nav-link';
    }
    if (basename($_SERVER['PHP_SELF']) == 'database_statement.php') {
      $name2='nav-link disabled';
    } else {
      $name2='nav-link';
    }
?>          
    <div class="container">
      <br /><br />
      <div class="text-center">              
        <h1>Data z ARES za IČO</h1>
      </div>
      <br /><br />                
      <nav class="navbar navbar-expand-sm bg-primary navbar-light" style="border-bottom:1px solid #000; border-top:1px solid #000">      
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="<?php echo $name1;?>" href="index.php">Výpis dat z ARES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>          
          </li>
          <li class="nav-item">
            <a class="<?php echo $name2;?>" href="database_statement.php">Výpis dat z databáze</a>          
          </li>
        </ul>        
      </nav>          
    </div>    
<?php
  }
?>