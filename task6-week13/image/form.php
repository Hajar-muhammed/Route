<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
              <div>
                  <label>Image: </label>
                    <input type="file" name="img" class="form-control p_input">
                  </div>
                  <div>
                  <label>Name: </label>
                    <input type="txt" name="name" class="form-control p_input">
                  </div>
                  <button type="submit" name="submit">Send</button>
    </form>
    
</body>
</html>