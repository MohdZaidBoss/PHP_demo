<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>PHP DEMO WEBSITE<?php echo $title ?></title>
    </head>
    <body>
        
   <
<div class = "container" >
<h1 class = "text-center text-success">Registration for Attendaces</h1>


<form method = "get" actiom = "success.php">
<div class="form-group">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text" class="form-control" id="firstname" >
 </div>   
 <br>
<div class="form-group">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" class="form-control" id="lastname">
</div>
<br>

<div class="form-group">
    <input type="dob" class="form-check-input" id="dob">
    <label class="text" for="form-control"> Date Of Birth</label>
</div>
<br>

<div class="form-group">
    <input type="speciality" class="form-check-input" id="speciality">
<select class="form-control" aria-label="speciality">
  <option selected>Open this  menu</option>
  <option value="1">Database Admin</option>
  <option value="2">App Developer</option>
  <option value="3">Web Developer</option>
  <option value="4">Full Stack Developer</option>
  <option value="5">other</option>
</select>
</div>
<br>
<div class="form-group">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
  <br>
<div class="form-group">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
</div>
<br>
<div class="form-group">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="phone" >
    <div id="phone" class="form-text">We'll never share your email with anyone else.</div>
</div>

</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>