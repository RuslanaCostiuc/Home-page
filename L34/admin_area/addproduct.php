<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2> General Data </h2>
    <style> 
form.form-example {
    display: table;
}

div.form-example {
    display: table-row;
}

label,
input {
    display: table-cell;
    margin-bottom: 10px;
}

label {
    padding-right: 10px;

}
body {background-color: coral;}
</style>
<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name"> Name: </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <label for="email">Price: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-example">
    <label for="email">Description: </label>
    <input type="email" placeholder="Name" >
  </div>
  
  <div class="form-example">
    <input type="submit" value="Subscribe!">
  </div>
</form>

    
</body>
</html>