<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculate</title>
</head>
<body>

    <div class="container w-50 d-flex justify-content-center">
        <!-- the suitable request method for this app is GET method -->
   <form action= "handelCalculate.php"  method ="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">X</label>
    <input type="number" class="form-control" name="x" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Y</label>
    <input type="number" class="form-control" name="y" id="exampleInputPassword1">
  </div>
  <select name="op">
    <option value="sum">sum</option>
    <option value="sub">sub</option>
    <option value="multi">multi</option>
    <option value="div">div</option>
  </select>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <div >
  <?php
if ( ! empty( $_GET['result'] ) ) {
  $result = $_GET['result'];
  echo "The Result : $result";
}
 ?> 
  </div>
</form>
</body>
</html>