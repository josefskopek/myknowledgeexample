$('#table1').on('click', function(event) {
  event.preventDefault();        
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dataAresModal").innerHTML = this.responseText;        
      $('#myModal1').modal('show');      
    }
  };    
  xmlhttp.open("GET","ARES_data.php?q="+($('#icoInput').val()),true);
  xmlhttp.send();          
});


function function2() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mark1").innerHTML = this.responseText;
    }
  };    
  xmlhttp.open("GET","data_to_ares_ic.php?q="+($('#icoInput').val()),true);
  xmlhttp.send();    
}


$('#set1').on('click', function(event) {
  event.preventDefault();
  var insertion = "' AND date = '";        
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mark2").innerHTML = this.responseText;        
      $('#myModal2').modal('show');      
    }
  };    
  xmlhttp.open("GET","ares_ic_data.php?q="+($('#ico1').val())+insertion+($('#date1').val()),true);
  xmlhttp.send();          
});

  
$('#set2').on('click', function(event) {
  event.preventDefault();
  var insertion = "' AND date = '";        
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mark2").innerHTML = this.responseText;
      $('#myModal2').modal('show');
    }
  };    
  xmlhttp.open("GET","ares_ic_data.php?q="+($('#ico2').val())+insertion+($('#date2').val()),true);
  xmlhttp.send();          
});

  
$('#set3').on('click', function(event) {
  event.preventDefault();
  var insertion = "' AND date = '";        
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mark2").innerHTML = this.responseText;
      $('#myModal2').modal('show');
    }
  };    
  xmlhttp.open("GET","ares_ic_data.php?q="+($('#ico3').val())+insertion+($('#date3').val()),true);
  xmlhttp.send();          
});