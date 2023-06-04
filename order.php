<?php
    include 'function.php';
    
    if(isset($_GET['product'])){
        $_SESSION['prod'] = $_GET['product'];
    }

    if(isset($_GET['quan'])){
      $quan = $_GET['quan'];
    }
    
    if(isset($_GET['name'])){
      $name = $_GET['name'];
    }

    if(isset($_GET['email'])){
      $email = $_GET['email'];
    }
    
    if(isset($_GET['add'])){
      $add = str_replace('"', '', $_GET['add']);
    }

    if(isset($_GET['num'])){
      $num = $_GET['num'];
    }
?>

<!doctype html>
<html> 
 <head> 
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet"> 
  <link rel="stylesheet" href="style.css">
  <title>Order Form</title> 
 </head> 
<body> 
    <div class="container"> 
      <h1>Order</h1> 
      <div class="form-section"> 
        <form action="#" method="POST"> 
           <label for="product_name">Product Name:</label> 
           <input type="text" id="product_name" name="product" value="<?php echo showProduct($_SESSION['prod']);?>" required readonly> 

           <label for="quantity">Quantity:</label> 
           <input type="number" id="quantity" name="quantity" min="1" value=<?php echo $quan;?> required> 

           <label for="customer_name">Customer Name:</label> 
           <input type="text" id="customer_name" name="name" value=<?php echo $name;?> required> 

           <label for="email">Email:</label> 
           <input type="email" id="email" name="email" value=<?php echo $email;?> required> 
           
            <label for="address">Address:</label> 
            <textarea id="address" name="address" required><?php echo $add;?></textarea>    
            <h1>Payment</h1> 
            <label for="payment_method">Payment Method:</label>
            <div class="payment">
              <input type="radio" id='gcash' name="payment" value="GCash" required>
              <label for="gcash" id="label">GCash - 09758713880</label>
              <br>
              <input type="radio" id='paymaya' name="payment" value="PayMaya">
              <label for="paymaya" id="label">PayMaya - 09663648181</label>
            </div>

            <div class="proof"> 
                <label for="custNumber">Customer Number:</label> 
                <input type="text" id="custNumber" name="custNumber" value=<?php echo $num;?> required>
                
                <label for="proof">Proof of Payment:</label> 
                <a href='https://www.messenger.com/marketplace/t/100014251718208' id="cess" target="_blank">Send proof here</a>
                <div class="pay">
                  <input type="checkbox" id="paid" name="paid" value="Yes">
                  <label for="paid">Check if you're paid</label>
                </div>
            </div> 
            <input type="submit" name="submit" value="Submit Order"> 
            <?php submit(); ?>
        </form> 
        <div class="return">
            <a href="./">Cancel</a>
        </div>
    </div> 
    <div class="container2">
      <img src="<?php echo showImage();?>" alt="Product" id="lugu"  >
      <h1><?php echo showProduct($_SESSION['prod']); ?></h1>
      <h3><?php echo "P".showUnitPrice().".00";?></h3>
      <div class="desc">
        <p><?php echo showDesc();?></p>
      </div>
    </div>
</body>
</html>