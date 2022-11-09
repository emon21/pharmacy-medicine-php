 <?php 

    if (isset($_POST['check'])) {
        $price = $_POST['price'];
       $gtotal = 300;
    	
    	if ($price>$gtotal) {
    		echo "go Purches...!!";
    	}
    	else{
    		echo "Not Working...!!";
    	}
    }
     ?>
     <form action="" method="post">
        <input type="text" name="price" placeholder="Enter Your Price">
         <input type="submit" class="shop_btn" name="check" value="Submit">
     </form>