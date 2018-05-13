<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Home</title>
 </head>
 <!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">

<?php require_once  APPPATH.'views/header.php'; ?>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
<?php //echo form_open('vuelos'); ?>
  <img class="w3-image" src="./img/plazaMayorMadrid.jpeg" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%;top: 30%;">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-plane w3-margin-right"></i>Vuelos</button>
      
    </div>

    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <input type="radio" name="idayvuelta" checked="checked" value="IV"><label>Ida y vuelta</label>
      <input type="radio" name="idayvuelta" value="I"><label>Ida</label>
      <br>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
          <label>Desde</label>
          <select class="w3-input w3-border" type="text" placeholder="Origen" id="origen" name="origen">
              <option>Seleccione un origen...</option>
              <option id="mad">Madrid</option>
              <option>Barcelona</option>
              <option>Valencia</option>
              <option>Santiago</option>
          </select>
        </div>
        <div class="w3-half">
          <label>Hacia</label>
          <select class="w3-input w3-border" type="text" placeholder="Destino">
              <option>Seleccione un destino...</option>
              <option>Madrid</option>
              <option>Barcelona</option>
              <option>Valencia</option>
              <option>Santiago</option>
          </select>
        </div>
      </div>
      <br>

      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
          <label>Fecha ida</label>
          <input class="w3-input w3-border" type="date" id="fechaIda">
        </div>
        <div class="w3-half">
          <label>Fecha vuelta</label>
          <input class="w3-input w3-border" type="date" id="fechaIda">
        </div>
      </div>
      <br>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
          <label>Personas</label>
          <select class="w3-input w3-border" type="text" placeholder="Personas">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
          </select>
        </div>
      </div>
      <p><button type="submit" class="w3-button w3-dark-grey">Buscar vuelos</button></p>
    </div>

  
<?php //echo form_close();?>
  
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3>Good Offers Right Now</h3>
    <h6>Up to <strong>50%</strong> discount.</h6>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="/w3images/cinqueterre.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="/w3images/newyork2.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">New York</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">San Francisco</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="/w3images/pisa.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Pisa</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="/w3images/paris.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Paris</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  <div class="w3-container">
    <h3>Explore Nature</h3>
    <p>Travel with us and see nature at its finest.</p>
  </div>
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <img src="/w3images/ocean2.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>West Coast, Norway</h3>
        <p class="w3-opacity">Roundtrip from $79</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="w3-button w3-margin-bottom">Buy Tickets</button>
      </div>
    </div>
    <div class="w3-half w3-margin-bottom">
      <img src="/w3images/mountains2.jpg" alt="Austria" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Mountains, Austria</h3>
        <p class="w3-opacity">One-way from $39</p>
        <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
        <button class="w3-button w3-margin-bottom">Buy Tickets</button>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="w3-container">
    <div class="w3-panel w3-padding-16 w3-black w3-opacity w3-card w3-hover-opacity-off">
      <h2>¡Consigue las mejores ofertas!</h2>
      <p>Únete our newsletter.</p>
      <label>E-mail</label>
      <input class="w3-input w3-border" type="text" placeholder="Email: ">
      <button type="button" class="w3-button w3-red w3-margin-top">Suscribirse</button>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container">
    <h2>Contacto</h2>
    <i class="fa fa-map-marker" style="width:30px"></i> Madrid, ES<br>
    <i class="fa fa-phone" style="width:30px"></i> Teléfono: +34 666 777 888<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: jonapweb@gmail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nombre" required name="Nombre"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mensaje" required name="Mensaje"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">Enviar</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<?php require_once APPPATH.'views/footer.php'; ?>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>

</html>