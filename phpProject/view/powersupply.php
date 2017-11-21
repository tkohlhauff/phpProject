<?php include '../header.php' ?>
<?php
 $dbc = mysqli_connect('127.0.0.1', 'root', '', 'php_project') or die("Unable to connect to database.");
    //$product_id = $_GET['id'];
    // age = mysqli_fetch_array($result);
    $query = "SELECT * FROM product where item_category ='Power Supply'" ;
    $result = mysqli_query($dbc, $query);

    //$products =  $dbc->query($query);
    //$pages = $dbc->query($query);
?>


<div class=" col-md-12 product-list">

<div class="row">
  <div class=" side-menu col-md-2">
    <!--   <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="265">
        <li class="active"><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
      </ul>
 -->  
    <div class="list-group">
    <a href="product.php" class="list-group-item">All Products</a>
    <a href="camera.php" class="list-group-item">Camera</a>
    <a href="dvr.php" class="list-group-item">DVR</a>
    <a href="connector.php" class="list-group-item">Connector</a>
    <a href="powersupply.php" class="list-group-item">Power Supply</a>
    <a href="wire.php" class="list-group-item">Wire</a>
  </div>
  </div>
  <div class="product-info col-md-10">
        <br><br>
       
        <center>
        <div id="product-all">
          <h1>POWER SUPPLY</h1>
           <?php  
               while($row = mysqli_fetch_array($result))  
                {  ?>


        <div class="card ">
          <img src="../images/<?php echo $row['img']; ?>" style="width: 100%; height: 290px; padding: 10px;">
        <div>
          <br>
          <center>
          <h5><?php echo $row['item_name']; ?></h5>
          <h4><?php echo $row['price']; ?></h4>
          </center>
            <input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-default btn-block view_data">
  

        </div>
        </div>
           <?php } ?>

        </div>
        </center>
        <br><br>


  </div>
</div>
</div>
<?php include 'footer.php' ?>

<div class="modal fade" id="dataModal" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                <div class="modal-body" id="product_detail">  
                </div>  
                 <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
   </div>

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var product_id = $(this).attr("id");  
           $.ajax({  
                url:"info_product.php",  
                method:"post",  
                data:{product_id:product_id},  
                success:function(data){  
                     $('#product_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>


