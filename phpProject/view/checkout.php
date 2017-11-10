<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PROJECT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container-fluid checkout">
  <h1 class="center">Checkout</h1><hr>
  <div class="row">
    <div class="col-md-6">
    <h2>Billing Address</h2>
    <form>
        <label for="inputFirst" class="col-form-label">First Name:</label>
        <input type="text" class="form-control" id="inputFirst" placeholder="First Name">

        <label for="inputLast" class="col-form-label">Last Name:</label>
        <input type="text" class="form-control" id="inputLast" placeholder="Last Name">

        <label for="inputAddress" class="col-form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">

        <label for="inputAddress2" class="col-form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">

        <label for="inputCity" class="col-form-label">City</label>
        <input type="text" class="form-control" id="inputCity">

        <label for="inputState" class="col-form-label">State</label>
        <select id="inputState" class="form-control">Choose</select>

        <label for="inputZip" class="col-form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">

        <hr>

        
    </form>
    
    <h2>Payment Info</h2>
    <form>
        <label class='control-label'>Name on Card</label>
        <input class='form-control' size='4' type='text'>

        <label class='control-label'>Card Number</label>
        <input autocomplete='off' class='form-control card-number' size='20' type='text'>

        <label class='control-label'>CVC</label>
        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>

        <label class='control-label'>Expiration</label>
        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>

        <label class='control-label'>Year</label>
        <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>

    </form>
    </div>

    <div class="col-md-6">
      <h2>Shipping Address</h2>
    <form>
        <label for="inputFirst" class="col-form-label">First Name:</label>
        <input type="text" class="form-control" id="inputFirst" placeholder="First Name">

        <label for="inputLast" class="col-form-label">Last Name:</label>
        <input type="text" class="form-control" id="inputLast" placeholder="Last Name">

        <label for="inputAddress" class="col-form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">

        <label for="inputAddress2" class="col-form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">

        <label for="inputCity" class="col-form-label">City</label>
        <input type="text" class="form-control" id="inputCity">

        <label for="inputState" class="col-form-label">State</label>
        <select id="inputState" class="form-control">Choose</select>

        <label for="inputZip" class="col-form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">

        <hr>
    </form>
    </div>
  </div>
  <br>
    <button type="submit" class="btn btn-lg btn-info">Place Order</button>
    <a href="cart.php"><button type="submit" class="btn btn-lg btn-danger">Retrun to cart</button></a>
  </div>
</body>
</html>
