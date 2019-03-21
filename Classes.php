<?php

class Person {
    var $name;
    var $age;
    var $gender;
}


$ligitas = new Person();

$ligitas->name='Ligitas';
$ligitas->age=24;
$ligitas->gender='Male';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OOP-Classes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">OOP-Classes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">blank <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">blank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">blank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">blank</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container">
    <h2><?php echo $ligitas->name ?></h2>
    <h2><?php echo $ligitas->age ?></h2>
    <h2><?php echo $ligitas->gender ?></h2>
    </div>
</body>
</html>