<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
        <link rel="stylesheet" href="./conten/cssadmin.css">
    <style>
    td {
        padding: 0 17px;
        text-align: center;
    }
    </style>
</head>

<body>
<div class="wrap_c">
        <div class="form_container">
            <form class="form" method="post" enctype="multipart/form-data" action="">
                <!-- muon lay file hinh anh phai them enctype -->
                <ul class="wrapper">

                    <li style="--i:4;"><input class="input" type="text" placeholder="Name Products" required="" name="p_ten" value="<?=$data1['ten']?>">

                    </li>
                    <li style="--i:3;"><input class="input" placeholder="Price product" required="" name="p_gia" value="<?=$data1['gia']?>" >
                    </li>
                    <li style="--i:2;"><input class="input" type="number" placeholder="Quantity" required="" name="p_soluong"value="<?=$data1['soluong']?>">
                    </li>
                    <li style="--i:1;"><input class="input" placeholder="upload img"  name="" value="<?=$data1['hinh']?>">
                        <input accept=".jpg, .jpeg, .png, .gif, .pdf" class="inpdddut" name="p_hinh" id="arquivo" type="file">

                    </li>



                    <input style="--i:0;" class="sub" type="submit" name="submit" value="submit">
                </ul>
            </form>
        </div>

   
    </div>

</body>

</html>