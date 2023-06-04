<!doctype html>
<html>
<head>
<title>BALLPEN</title>

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
        height: 104vh;
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

    .slogan {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;

    }

    #lugu {
        width: 230px;
        height: 230px;
        border-radius: 500px;
    }
    
    #title {
        color: #434b02;
        
    }

    .desc {
        margin: 30px;
        max-height: 220px;
        padding: 30px 10px;
        width: 410px;
        text-align: justify;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
        overflow-y: auto;
    }

    a {
        text-decoration: none;
        color: azure;
    }

    a:hover {
        text-decoration: underline;
    }

    .link {
        width: 200px;
        height: 50px;
        line-height: 49px;
        margin-bottom: 20px;
        text-align: center;
        font-size: 20px;
        border: none;
        border-radius: 20px;
        background: #1a6f04;;
        color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .link a {
        padding: 10px 45px;
        border-radius: 20px;
    }

    .link:hover {
        background: #34bb12;
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
        <img src="YellowPad.jpg" title="YellowPad" id="lugu">
    </div>     
    <div class="slogan">
        <h1>Yellow Pad - Php 35.00</h1>
    </div>
    <div class="desc">
        <p>&nbsp &nbsp Yellow paper is commonly used for a variety of purposes, such as writing, printing, and crafting. The shade of yellow can range from a light, pastel yellow to a bright, vibrant yellow.</p>
    </div>
    <div class="link">
        <a href='order.php?product="yellow"&quan="0"&name=""&email=""&add=""&num=""'>Order Now</a>
    </div>
    <div class="return">
        <a href="./">Back</a>
    </div>
</body>
</html>