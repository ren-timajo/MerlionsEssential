<?php
    session_start();
    session_unset();
?>

<!doctype html>
<html>
<head>
<title>MERLIONS ESSENTIALS</title>

<link rel="stylesheet" href="slider.css">
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/bjqs-1.3.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"/>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        
    }
    body {
        height: 195vh;
        width: 100%;
        background: linear-gradient(45deg, #006a25, #a7951d, #a8e063);
        background-size: 300% 300%;
        animation: color 25s ease-in-out infinite;
    }
    @keyframes color {
        0%{
        background-position: 0 50%;
        }
        50%{
        background-position: 100% 50%;
        }
        100%{
        background-position: 0 50%;
        }
    }
    img {
        border-radius: 20px;
        width: 250px;
        height: 250px;
        margin: 10px;
    }

    .slogan {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
    }

    #lugu {
        width: 355px;
        height: 290px;
    }
    
    #title {
        color: #434b02;
    }

    .rotate img{
        transition: 1s ease;
    }

    .rotate img:hover{
        -webkit-transform: rotateZ(-10deg);
        -ms-transform: rotateZ(-10deg);
        transform: rotateZ(-10deg);
        transition: 1s ease;
    }

    .top, .bottom {
        margin: 20px;
    }

    #add {
        color: rgb(70, 77, 2);
    }

    a {
        color: white;
        text-decoration: none;
    }

    #button {
        margin: 0 10px;
    }

</style>
</head>
<body bgcolor="cyan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<div id="container">

<marquee direction="left">
<font face="Comic Sans" size="6">
    <h2 id="title">
        <center>
            M E R L I O N S &nbsp &nbsp &nbsp E S S E N T I A L &nbsp &nbsp &nbsp S T A T I O N A R Y &nbsp &nbsp &nbsp S T O R E
        </center>
    </h2>
</marquee>
</font>

<center>
    <div class="company">
        <img src="lugu.png" title="My Company" id="lugu">
    </div>   
<div class="slogan">
    <i>"Equipping students for success, one supply at a time!"</i>
</div>

<div id="banner-fade">
<center>
<div class="rotate top">
    <img src="Ballpen.jpg" title="Ballpen - Price Php 10.00">
    <img src="BondPaper.jpg" title="Bond Paper - Price Php 2.00">
    <img src="ColoredPaper.jpg" title="Colored Paper - Php 2.00">
    <img src="Eraser.jpg" title="Eraser - Php 10.00">
    <img src="Pencil.jpg" title="Pencil - Php 7.00">
</div>

<div class="rotate bottom">
    <img src="WhiteGlue.jpg" title="White Glue - Price Php 17.00">
    <img src="YellowPad.jpg" title="Yellow Pad - Price Php 35.00">
    <img src="Ruler.jpg" title="Ruler - Php 15.00">
    <img src="Sharpener.jpg" title="Sharpener - Php 17.00">
    <img src="WhiteboardMarker.jpg" title="Whiteboard Marker - Php 49.00">    
</div>

</center>

<script class="secret-source"> jQuery(document).ready(function($) {
$('#banner-fade').bjqs({
height :320,
width :620,
responsive :true
}); });
</script>
</div>

<h1><center ><font face="Verdana" size="2" color="#434b02">______________________________________________________________________________________</center></h1>
<center>
    <A HREF="product1.php">Ballpen</A> | 
    <A HREF="product2.php">BondPaper</A> | 
    <A HREF="product3.php">ColoredPaper</A> | 
    <A HREF="product4.php">Eraser</A> | 
    <A HREF="product5.php">Pencil</A> |
    <A HREF="company.html">MERLIONS ESSENTIALS</A> |
    <A HREF="product6.php">WhiteGlue</A> | 
    <A HREF="product7.php">YellowPad</A> | 
    <A HREF="product8.php">Ruler</A> | 
    <A HREF="product9.php">Sharpener</A> | 
    <A HREF="product10.php">Marker</A>
</center>
<p>
<p>
<center>
<font id="add">659-A Cecilia Munoz St, Ermita, Manila, 1000 Metro Manila Cell Number 09085986382
<font face="Verdana" size="2" color="#666666">
<p>
Copyright©2023 All rights reserved.
</font>
</center
<ul>
</body>
</html>

<!-- ******** slide *********** -->

<SCRIPT LANGUAGE="JavaScript">

var num=1
img1 = new Image ()
img1.src = "Ballpen.jpg"
img2 = new Image ()
img2.src = "BondPaper.jpg"
img3 = new Image ()
img3.src = "ColoredPaper.jpg"
img4 = new Image ()
img4.src = "Eraser.jpg"
img5 = new Image ()
img5.src = "Pencil.jpg"
img6 = new Image ()
img6.src = "WhiteGlue.jpg"
img7 = new Image ()
img7.src = "YellowPad.jpg"
img8 = new Image ()
img8.src = "Ruler.jpg"
img9 = new Image ()
img9.src = "Sharpener.jpg"
img10 = new Image ()
img10.src = "WhiteboardMarker.jpg"

text1 = "Ballpen.jpg"
text2 = "BondPaper.jpg"
text3 = "ColoredPaper.jpg"
text4 = "Eraser.jpg"
text5 = "Pencil.jpg"
text6 = "WhiteGlue.jpg"
text7 = "YellowPad.jpg"
text8 = "Ruler.jpg"
text9 = "Sharpener.jpg"
text10 = "WhiteboardMarker.jpg" 

function slideshowUp()
{
num=num+1
if (num==11)
{num=1}
document.mypic.src=eval("img"+num+".src")
document.joe.burns.value=eval("text"+num)
}

function slideshowBack()
{
num=num-1
if (num==0)
{num=10}
document.mypic.src=eval("img"+num+".src")
document.joe.burns.value=eval("text"+num)
}

</SCRIPT>

<!-- The Image and Form Codes are Below -->

<CENTER>
<IMG SRC="lugu.png" NAME="mypic" BORDER=0 HEIGHT="300" WIDTH="300">
<p>


<A id="button" HREF="JavaScript:slideshowBack()"> Back</A>
<A id="button" HREF="JavaScript:slideshowUp()"> Next</A>