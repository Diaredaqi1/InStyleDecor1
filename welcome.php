<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    body{
    position:relative;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('images/room.jpg');
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
    }
    h1{
    position:relative;
    right:27%;
    display:block;
    }
    a{
    position:relative;
    right:25%;
    display: block;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: white;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: brown;
    cursor: pointer;
    transition: .3s;
    text-decoration:none
    }
    a:hover{
    transform: translateY(-5px);
    background: #fffdd0 ;
    color:black;
    }
    </style>
</head>

<body>
    
</body>
</html>
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1> Pershendetje " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>