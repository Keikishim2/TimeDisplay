<!DOCTYPE html>
<html>
<head>
    <title>Time</title>
</head>
<style>
    body{
        background-image: url('assets/images/4.jpg');
        background-size: cover;
        text-align: center;
        align-items: center;
        margin-top: 220px;
        color: gradient 
        
    }
    h1{
        border: 2px solid gold;
        width: 180px;
        padding: 10px;
        margin: auto;
        border-top-right-radius: 30px;
        background: rgb(90,99,112);
        background: linear-gradient(78deg, rgba(90,99,112,1) 1%, rgba(226,206,77,1) 68%);
    }
    h2{
        border: 2px solid gold;
        width: 180px;
        padding: 10px;
        margin: 20px auto;
        border-bottom-left-radius: 30px;
        background: rgb(90,99,112);
background: linear-gradient(89deg, rgba(90,99,112,1) 1%, rgba(200,200,77,1) 68%);
    }
    img{
        height: 200px;
        width: 200px;
    }

</style>
<body>
    <h1>Current Time is:</h1>
    <h2><?= $td; ?></h2>
    <img src='assets/images/1.gif' alt='clock'>
</body>
</html>