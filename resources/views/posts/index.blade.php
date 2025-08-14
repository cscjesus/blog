<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
</head>

<body>
    <h1>Aqui se mostrara el listado de posts</h1>
   @env('local')
<p>en local</p>
   @endenv
   
   @production
   <p>en production</p>
       
   @endproduction

</body>

</html>
