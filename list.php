<?php 
session_start();
if (empty ($_SESSION['username'])){
    header ('Location: index.php'); 
    exit (0);
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>List</title>
</head>
<body>
    <nav class="nav">
        <div class="nav-container nav-flex">
            <div id="branding"><h1>AZUBI v3</h1></div>
            <div class="profile">
                <a href="logout.php"><span class="padlock">🔒</span> Logout</a>
                
            </div>
        </div>
    </nav>
    <div class="table-container">
    <table>
  <caption>Student List</caption>
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">FUll Names</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Email">kevinrwema@gmail.com</td>
      <td data-label="Full Names"> Kevin Rwema</td>
      <td data-label="Country">Rwanda</td>
    </tr>
    <tr>
      <td data-label="Email">developer.purpose@gmail.com</td>
      <td data-label="FullNames"> Dev Developer</td>
      <td data-label="Country">Rwanda</td>
    </tr>
    <tr>
      <td data-label="Email">yannick@gmail.com</td>
      <td data-label="FullNames"> Yannick kude</td>
      <td data-label="Country">Tanzania</td>
    </tr>
  
  </tbody>
</table>
        
    </div>
</body>
</html>