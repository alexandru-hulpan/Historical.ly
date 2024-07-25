<?php
    include('config.php');

        $username = $_POST['username'];
        $parola = $_POST['parola'];
        if(isset($_POST['sub'])){
        $query = mysqli_query($conn, "select * from users where Username = '$username'");
        $no = mysqli_num_rows($query);
        if($no > 0){
            $data = mysqli_fetch_assoc($query);
            if($data['Parola'] == $parola){
             ///  echo "Conectare cu succes!";
               $ok = 1;
            }
            else{
                $ok = 0;
               /// echo "EROARE";
            }
        }
        else{
          $ok = 0;
        }
    }
?>
<!--http://localhost/concurs/index.html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fd77b90805.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <script>
        function check()
        {
            var x = "<?php echo $username ?>";
            var y = <?php echo $ok ?>;
            if(y == 1)
            {
                document.getElementById("form1").innerHTML = "Autentificare cu succes!";
            }  
            else
            {
                document.getElementById("msgerror").innerHTML = "Datele tale sunt incorecte!";
            }
        }
    </script>
    <div class="nav">
        <a href="">Bibliografie</a>
        <a href="">Contact</a>
        <a href="istorie.html">Istorie</a>
        <a href="login.html" style="color: yellowgreen;">Conectare</a>
        <a href="index.html" >Home</a>
   </div>
   <br>
   <br>
   <br>
   <div class="container">
    <center>
    <form action="login.php" method="post" id="form1">
        <h1>Login</h1>
        <br>
        <label>Username</label><br>
        <input type="text" id="username" name="username">
        <br>
        <label>Parola</label><br>
        <input type="password" id="parola" name="parola">
        <br>
        <br>
        <button type="submit" id="sub" name="sub" onclick="check()">Conectare</button>
    </form>
    <p>Nu ai cont? <a href="register.php" style="text-decoration: none;">Inregistreaza-te</a></p>
    <p id="msgerror"></p>
    <br>
    </center>
   </div>
</body>
</html>