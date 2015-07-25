<!DOCTYPE html>
<head>
    <title>Restaurants</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <link href="./custom.css" rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="container">
<h1>
Lunch with randoms
</h1>
<form role="form">
  <div class="form-group">
    <label for="name">Full Name:</label>
    <input type="name" class="form-control" id="name">
  </div>
  <div class="checkbox">
    <div class="checkbox">
      <label><input type="checkbox" value="peanuts" id="peanuts">Peanut allergy?</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="gluten-free" id="gluten-free">Gluten free?</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="vegan" id="vegan">Vegan?</label>
    </div>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
