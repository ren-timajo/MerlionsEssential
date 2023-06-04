<?php 
    include 'function.php';

?>

<!doctype html>
<html> 
 <head> 
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet"> 
  <link rel="stylesheet" href="style2.css">
  <title>Checkout Form</title> 
 </head> 
    <body> 
        <div class="wrap">    
            <img src="lugu.png" id="lugu" alt="Lugu">
            <h1 id="title">Order Confirmation</h1>
            <div class="container">
                <h1 id="header">CUSTOMER</h1>
                <form action="process_order.php" method="POST"> 
                    <label for="customer_name">Customer Name: <?php echo $_SESSION['name']; ?></label>
                    <label for="email">Email: <?php echo $_SESSION['email']; ?></label>
                    <label for="address">Address: <?php echo $_SESSION['address']; ?></label>
                    <label for="customer_number">Customer Number: <?php echo $_SESSION['custNumber']; ?></label>
                    <a href='order.php?quan="<?php echo $_SESSION['quan']; ?>"&name="<?php echo $_SESSION['name']; ?>"&email="<?php echo $_SESSION['email']; ?>"&add="<?php echo $_SESSION['address']; ?>"&num="<?php echo $_SESSION['custNumber']; ?>"'>Edit</a> 
                </form>
            </div>
            <div class="container2">
                <h1 id="header">PAYMENT</h1> 
                <label for="payment_method">Payment Method: <?php echo $_SESSION['payment']; ?></label>
                <label for="payment_proof">Paid: <?php echo $_SESSION['paid']; ?></label> 
            </div>   
            <div class="container3">
                <h1 id="header">PRODUCT</h1>
                <label for="product_name">Product Name: <?php echo showProduct($_SESSION['prod']); ?></label>
                <label for="quantity">Quantity: <?php echo $_SESSION['quan']; ?></label>
                <label>Unit Price: <?php echo "P".showUnitPrice().".00";?></label>
                <label>Total: ₱<?php echo getTotal();?>.00 </label>
                
            </div>
            <form method="POST">
                <input type="submit" name="confirm" value="Confirm Order">
                <?php toMessage(); ?>
            </form>
            
        </div>       
        
             
        
    </body>
</html>