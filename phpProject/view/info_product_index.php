
<?php  

if(isset($_POST["product_id"]))  
 {  
      $output = '';  
       $dbc = mysqli_connect('127.0.0.1', 'root', '', 'php_project') or die("Unable to connect to database.");
    //$product_id = $_GET['id'];
    // age = mysqli_fetch_array($result);
    $query = "SELECT * FROM product WHERE id = '".$_POST['product_id']."' " ;
    $result = mysqli_query($dbc, $query); 
   
      while ($row = mysqli_fetch_array($result)) {
          $output .= '
            
                 <div class="row">
                    <div class="col-md-8"><img src="images/'.$row['img'].'"  style="width: 55%; height: 300px;">
                    </div>
                    <div class="col-md-4">
                        <h3>'.$row['item_name'].'</h3>
                        <p>'.$row['product_description'].'</p><br>
                        <h4>'.$row['item_category'].'</h4>
                        <h3> $'.$row['price'].'</h3>
                        <form>
                          <label>QTY:</label>
                          <input type="number" name="numer" value="1" min= "1" max = "20"><br><br>
                          <input class="btn btn-warning btn-block" type="submit" name="submit" value="Add to Cart">
                        </form>

                    </div>
                  </div>
            
            

      ';
      }

      echo $output;  
 } 
 ?>