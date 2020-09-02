<?php
// ambil data username dan password kemudian mengkonversi menjadi html special characters
$uname = htmlspecialchars($_POST['uname']);
$pass = htmlspecialchars($_POST['pass']);

//jika $username = admin DAN $password = 4dm1n-t3st maka nilai $result = ✅ SUCCESS, selain itu $result = ❎ WRONG USERNAME OR PASSWORD
if($uname == "admin" && $pass == "4dm1n-t3st"){
    $result = "✅ LOGIN SUCCESS";
} else $result = "❎ WRONG USERNAME OR PASSWORD";
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style/bulma.css">
    <title>Login</title>
</head>
<body>
    <section class="hero is-primary is-bold is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-three-fifths">
                        <div class="box has-text-centered">
                            <div class="column">
                                <!-- MENCETAK ISI VARIABLE $result -->
                                <h1 class="is-size-2"><?php echo $result;?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://kit.fontawesome.com/b5b638f7ba.js" crossorigin="anonymous"></script>
</body>
</html>