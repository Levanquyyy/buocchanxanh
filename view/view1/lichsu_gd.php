<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <script type="text/javascript">
    emailjs.init('hlF3QHN-uRCXJzVgl')
    </script>
    <link rel="stylesheet" href="/conten/lsgd.css">

    <title>Document</title>
    <style>
    /* lsgd.css */
    .container {
        max-width: 350px;
        background: #f8f9fd;
        background: linear-gradient(0deg,
                rgb(255, 255, 255) 0%,
                rgb(244, 247, 251) 100%);
        border-radius: 40px;
        padding: 25px 35px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
        margin: 20px;
    }

    .container- {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    textarea {
        border-radius: 8px;
        height: 100px;
        width: 100%;
        resize: none;
        outline: 0;
        padding: 8px 14px;
        border: 1px solid rgb(219, 213, 213);
    }

    .heading {
        text-align: center;
        font-weight: 900;
        font-size: 30px;
        color: rgb(16, 137, 211);
    }

    .form {
        margin-top: 20px;
    }

    .form .input {
        width: 100%;
        background: white;
        border: none;
        padding: 15px 20px;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: #cff0ff 0px 10px 10px -5px;
        border-inline: 2px solid transparent;
        color: black;
    }

    .form .input::-moz-placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input::placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input:focus {
        outline: none;
        color: black;
        border-inline: 2px solid #12b1d1;
    }

    .form .forgot-password {
        display: block;
        margin-top: 10px;
        margin-left: 10px;
    }

    .form .forgot-password a {
        font-size: 11px;
        color: #0099ff;
        text-decoration: none;
    }

    .form .login-button {
        display: block;
        width: 100%;
        font-weight: bold;
        background: linear-gradient(45deg,
                rgb(16, 137, 211) 0%,
                rgb(18, 177, 209) 100%);
        color: white;
        padding-block: 15px;
        margin: 20px auto;
        border-radius: 20px;
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
        border: none;
        transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
        transform: scale(1.03);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
    }

    .form .login-button:active {
        transform: scale(0.95);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
    }

    .social-account-container {
        margin-top: 25px;
    }

    .social-account-container .title {
        display: block;
        text-align: center;
        font-size: 10px;
        color: rgb(170, 170, 170);
    }

    .social-account-container .social-accounts {
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 5px;
    }

    .social-account-container .social-accounts .social-button {
        background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
        border: 5px solid white;
        padding: 5px;
        border-radius: 50%;
        width: 40px;
        aspect-ratio: 1;
        display: grid;
        place-content: center;
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 12px 10px -8px;
        transition: all 0.2s ease-in-out;
    }

    .social-account-container .social-accounts .social-button .svg {
        fill: white;
        margin: auto;
    }

    .social-account-container .social-accounts .social-button:hover {
        transform: scale(1.2);
    }

    .social-account-container .social-accounts .social-button:active {
        transform: scale(0.9);
    }

    .agreement {
        display: block;
        text-align: center;
        margin-top: 15px;
    }

    .agreement a {
        text-decoration: none;
        color: #0099ff;
        font-size: 9px;
    }
    </style>
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Ngày Giao Dịch</th>
                <th scope="col">Giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['ten']) & isset($_SESSION['pass'])) {
                foreach ($data as $value) {
                    if ($value['ten_kh'] == $_SESSION['ten']) {
            ?>
            <tr>
                <th scope="row"><?= $value['id'] ?></th>
                <td><?= $value['ten'] ?></td>
                <td><?= $value['date'] ?></td>
                <td><?= $value['total'] ?>$</td>
            </tr>
            <?php
                    }
                }
            }
            ?>
        </tbody>
    </table>

    <div class="container-">
        <div class="container">
            <div class="heading">Sign In</div>
            <form action="" class="form" id="form">
                <input required="" class="input" type="text" name="from_name" id="email from_name"
                    placeholder="Tên của bạn">
                <input required="" class="input" type="email email_id" name="password" id="password  email_id"
                    placeholder="Email">

                <textarea placeholder="Điền Id đơn hàng của bạn và cho biết bạn cần gì?" name="message"
                    id="message"></textarea>
                <input class="login-button" type="submit" value="Send Email 📨" id="button" value="Send Email">

            </form>
            <div class="social-account-container">
                <span class="title">Or Sign in with</span>

            </div>
            <span class="agreement"><a href="#">Learn user licence agreement</a></span>
        </div>
    </div>


    <script src="/conten/js/email.js"></script>
</body>

</html>