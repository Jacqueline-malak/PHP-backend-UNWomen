<?php
/*

$num=array(
    array(2,8,10),
    array(22,20,10),
    array(30,80,50),
    array(90,60,100)
);



echo $num[3][2]."<br>";

echo $num[0][1]."<br>";

for($i=0;$i<count($num);$i++){
    for($y=0;$y<count($num[$i]);$y++){
        echo $num[$i][$y];
    }
}
*/

/*<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <label for="user_name">user name</label>
     <input type="text" name="user_name" id="user_name">
     <br>
     <br>
     <label for="email">email</label>
     <input type="email" name="email" id="email">
     <br>
     <br>
     <label for="password">password</label>
     <input type="password" name="password" id="password">
     <br>
     <br>
     <input type="submit" value="continue">

    </form>
</body>
</html>
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>NEW ACCOUNT</h2>
  <form class="form-horizontal" method="post" action="./Welcome session 8.php">
  <div class="form-group">
      <label class="control-label col-sm-2" for="user_name">user_name:</label>
      <div class="col-sm-10">
        <input type="user_name" class="form-control" id="user_name" placeholder="Enter user_name" name="user_name">
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>