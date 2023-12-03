<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./conten/css.css">
    <title>Document</title>
</head>

<body>
    <div class="container_form">
        <div class="form-box">
            <form class="form" action="" method="post">
                <span class="title">Register</span>
                <span class="subtitle">Create a free account with your email.</span>
                <div class="form-container">
                    <input type="text" class="input" placeholder="Full Name" name="name">
                    <input type="password" class="input" placeholder="Password" name="password">
                </div>
            <select name="user_type" id="">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
                <button type="submit" name="submit">Register</button>
            </form>
            <div class="form-section">
                <p>Have an account? <a href="index.php?action=login">Log in</a> </p>
            </div>
            <?php
            if(isset($_POST['submit'])){
                echo "<p>$a</p>";
              
            }
        ?>
        </div>
     
    </div>
</body>

</html>