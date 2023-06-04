<?php
session_start();

function showProduct($product){
    $prods = "";
    if ($product == '"ballpen"'){
      $prods = "Ballpen"; 
    }elseif ($product == '"bond"'){
      $prods = "Bondpaper"; 
    }elseif ($product == '"colored"'){
      $prods = "Colored Paper"; 
    }elseif ($product == '"eraser"'){
      $prods = "Eraser"; 
    }elseif ($product == '"pencil"'){
      $prods = "Pencil"; 
    }elseif ($product == '"whiteglue"'){
      $prods = "White Glue"; 
    }elseif ($product == '"yellow"'){
      $prods = "Yellow Pad"; 
    }elseif ($product == '"ruler"'){
      $prods = "Ruler"; 
    }elseif ($product == '"sharp"'){
      $prods = "Sharpener"; 
    }elseif ($product == '"marker"'){
      $prods = "Whiteboard Marker"; 
    }
  
    return $prods;
}
  
function showUnitPrice(){
  $prods = showProduct($_SESSION['prod']);
  $unitPrice = 0;

  if ($prods == "Ballpen"){
    $unitPrice = 10.00; 
  }elseif ($prods == "Bondpaper"){
    $unitPrice = 2.00; 
  }elseif ($prods == "Colored Paper"){
    $unitPrice = 2.00; 
  }elseif ($prods == "Eraser"){
    $unitPrice = 10.00; 
  }elseif ($prods == "Pencil"){
    $unitPrice = 7.00; 
  }elseif ($prods == "White Glue"){
    $unitPrice = 17.00; 
  }elseif ($prods == "Yellow Pad"){
    $unitPrice = 35.00; 
  }elseif ($prods == "Ruler"){
    $unitPrice = 15.00; 
  }elseif ($prods == "Sharpener"){
    $unitPrice = 17.00; 
  }elseif ($prods == "Whiteboard Marker"){
    $unitPrice = 49.00; 
  }

  return $unitPrice;
}

function showImage(){
  $prods = showProduct($_SESSION['prod']);
  $href = "";
  if ($prods == "Ballpen"){
    $href = "Ballpen.jpg"; 
  }elseif ($prods == "Bondpaper"){
    $href = "Bondpaper.jpg"; 
  }elseif ($prods == "Colored Paper"){
    $href = "ColoredPaper.jpg"; 
  }elseif ($prods == "Eraser"){
    $href = "Eraser.jpg"; 
  }elseif ($prods == "Pencil"){
    $href = "Pencil.jpg"; 
  }elseif ($prods == "White Glue"){
    $href = "WhiteGlue.jpg"; 
  }elseif ($prods == "Yellow Pad"){
    $href = "YellowPad.jpg"; 
  }elseif ($prods == "Ruler"){
    $href = "Ruler.jpg"; 
  }elseif ($prods == "Sharpener"){
    $href = "Sharpener.jpg"; 
  }elseif ($prods == "Whiteboard Marker"){
    $href = "WhiteboardMarker.jpg"; 
  }

  return $href;
}

function showDesc(){
  $prods = showProduct($_SESSION['prod']);
  $desc = "";
  if ($prods == "Ballpen"){
    $desc = "&nbsp &nbsp A ballpoint pen, commonly known as a ballpen, is a writing instrument that uses a small rotating ball made of steel, brass, or tungsten carbide to disperse ink as it is pressed onto paper or other writing surfaces."; 
  }elseif ($prods == "Bondpaper"){
    $desc = "&nbsp &nbsp Bond paper is commonly used in laser and inkjet printers, copiers, and other office machines, and it is also used for writing and drawing by artists and designers. Its high quality and professional appearance make it a popular choice for a variety of applications, including business reports, resumes, legal documents, and official correspondence."; 
  }elseif ($prods == "Colored Paper"){
    $desc = "&nbsp &nbsp Colored paper is popular because it adds visual interest and creativity to printed materials. It can be used as a background for text or images, or as a decorative element in its own right. Different colors are often associated with different moods or emotions, and can be used to convey a specific message or feeling. For example, pastel colors are often associated with softness and sweetness, while bright colors are associated with energy and excitement."; 
  }elseif ($prods == "Eraser"){
    $desc = "&nbsp &nbsp Eraser or simply an eraser, is a small, handheld tool used to remove pencil marks from paper or other surfaces. It is typically made of a soft, pliable material such as synthetic rubber or vinyl, and comes in a variety of shapes and sizes."; 
  }elseif ($prods == "Pencil"){
    $desc = "&nbsp &nbsp A pencil is a writing instrument typically made of wood and graphite, although it can also be made of plastic or other materials. The graphite core is usually encased in a cylindrical wooden or plastic barrel, with a pointed end that is sharpened to create a fine tip for writing or drawing."; 
  }elseif ($prods == "White Glue"){
    $desc = "&nbsp &nbsp Glue is water-based, meaning that it can be easily cleaned up with water if it gets on skin or clothing. It has a relatively slow drying time, which allows for adjustments to be made before it sets. Once it dries, it forms a strong bond that can hold paper, cardboard, and other lightweight materials together."; 
  }elseif ($prods == "Yellow Pad"){
    $desc = "&nbsp &nbsp Yellow paper is commonly used for a variety of purposes, such as writing, printing, and crafting. The shade of yellow can range from a light, pastel yellow to a bright, vibrant yellow."; 
  }elseif ($prods == "Ruler"){
    $desc = "&nbsp &nbsp The ruler is marked with a series of straight lines or graduations, which indicate measurements in inches and, in some cases, centimeters or millimeters. The lines are evenly spaced and numbered, with each inch divided into smaller fractions such as 1/4, 1/8, and 1/16 of an inch, which allows for precise measurements to be taken."; 
  }elseif ($prods == "Sharpener"){
    $desc = "&nbsp &nbsp A sharpener is a tool used for sharpening pencils, crayons, and other pointed drawing or writing instruments. It can be either manual or electric, and it is typically designed to sharpen pencils to a fine point for precision writing or drawing."; 
  }elseif ($prods == "Whiteboard Marker"){
    $desc = "&nbsp &nbsp A whiteboard marker is a writing tool designed for use on whiteboards. It has a round or chisel tip and comes in various colors. The ink is non-permanent and can be easily erased with a dry cloth or eraser. Whiteboard markers are commonly used in classrooms, meetings, and presentations for clear and erasable writing."; 
  }

  return $desc;
}

function submit(){
  if(isset($_POST['submit'])){
    $_SESSION['prodName'] = $_POST['product'];
    $_SESSION['quan'] = $_POST['quantity'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['payment'] = $_POST['payment'];
    $_SESSION['custNumber'] = $_POST['custNumber'];

    if (isset($_POST['paid'])){
      $_SESSION['paid'] = $_POST['paid'];
    }
    else {
      $_SESSION['paid'] = "No";
    }
    
    $_SESSION['paid'];

    header("Location: checkout.php");
    die;
  }
}

function getTotal(){
  $price = showUnitPrice();
  $quantity = $_SESSION['quan'];

  $total = intval($price) * intval($quantity);
  return $total;
}

function toMessage(){
  if(isset($_POST['confirm'])){
    header("Location: message.html");
    die;
  }
}