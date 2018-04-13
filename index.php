<?php
$date = date("F j, Y, g:i a");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Rammetto+One" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Rhodium+Libre" />
    <title>HNG INTERNSHIP</title>
    <style>
    body {
        background: url(back.jpg);
        background-size: cover;
        background-repeat: repeat-x;
    }
    h3  {
        position: absolute;
        font-family: Rammetto One;
        font-style: normal;
        font-weight: normal;
        line-height: normal;
        text-align: left;
        margin-left:80px;
        color: white;
        text-align: center;
        
    }
    .content {
            font-family: Rammetto One;
            font-style: normal;
            font-weight: normal;
            line-height: normal;
            font-size: 50px;
            text-align: center;
            position: absolute;
            color: #FBEBEB;
            position: fixed;
            top: 50%;
            
            margin-top: -50px;
            margin-left: 20%;
    }
    </style>
</head>

<body>
<h3><?php echo $date;?></h3>
<center>
    <div class='content'>
    HOWDY, WELCOME TO HNG </br> <span style='margin-left:100px'>INTERNSHIP 4 </span>
    
       
    </div>
</body>
</html>