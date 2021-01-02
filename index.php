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

    <!-- formulář pro zadávání IČO -->  
    <div class="row justify-content-center">
      <div class="table-sm">
        <table class="table table-borderless rounded bg-white">
          <form action="index.php" method="get">
            <tbody>
              <tr>
                <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zadejte IČO:</strong></td>
                <td><input id="icoInput" type="text" name="ic" size="14" class="text_pole" placeholder="&nbsp;&nbsp;IČO" /></td>
              </tr>
              <tr>
                <td><button type="reset" class="btn btn-outline-dark">Vymazat formulář</button></td>
                <!-- tlačítko na otevření modalu -->
                <td><button id="table1" type="reset" class="btn btn-dark">Odeslat formulář</button></td>        
              </tr>
            </tbody>
          </form>
        </table>
      </div>
    </div>

    <!-- místo pro chybovou hlášku v případě problémů s připojením s databází "zelnakyccz_1" -->
    <div class="row justify-content-center">
      <div class="text-warning" id="mark1"></div>
    </div>

    <!-- modal -->
    <div class="modal" id="myModal1">
      <div class="modal-dialog">
        <div class="modal-content">
   
          <!-- záhlaví modalu -->
          <div class="modal-header">          
            <h4 colspan="2" class="modal-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Údaje v ARES k zadanému IČO</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- tělo modalu -->
          <div class="modal-body" id="dataAresModal">
          </div>
        
          <!-- zápatí modalu -->
          <div class="justify-content-center">
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zavřít&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
              <button type="button" onclick="function2()" class="btn btn-dark" data-dismiss="modal">Vložit do databáze</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
        
  <script src="functions.js"></script>
    
<?php
  ends()
?>