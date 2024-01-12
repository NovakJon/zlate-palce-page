<!DOCTYPE html>
<html>
<head>
	<title>Zlate palce</title>
	<meta charset="UTF-8">
	<meta name="description" content="zlate palce">
	<meta name="keywords" content="html, značke, tag">
	<meta name="author" content="Jon Novak in Lovro Basar">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="Style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav>
    <div class="navbar">
        <a href="index.html"><button class="btn home"><i class="fa fa-home"></i> Zlate Palice</button></a>
    <div class="dropdown">
            <button class="btn menu"><i class="fa fa-bars"></i></button>
        <div class="dropdown-content">
          <a href="opis.html" class="zgori">Opis</a>
          <a href="navodila.html">Navodila</a>
          <a href="teorija.html">Teorija igre</a>
          <a href="zahvala.html" class="spodi">Zahvala</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="naslov">
    <p>
        <h2>ZLATE PALICE</h2>
    </p>
  </div>
 
  <div class="skatla1">
    <div class="racunalnik">
      <p><h4>Igraj Zlate palice proti računalniku.</h4></p>
    </div>
    <div class="slika">
      <img src="palca.png" height="200px" width="200px">
    </div>
  </div>
    <div class="pythonkoda">
     <?php 
      $output = shell_exec("python3 hello.py");

      echo $output;
     ?>
   </div>
  <div class="multi">
    <h4>Tekmuj v Zlatih palicah proti drugim igralcem (še v teku izdelave).</h4>
  </div>
  
</body>