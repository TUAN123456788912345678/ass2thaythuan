<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Chi tiết bài hát</title>
    <style type="text/css">
        .images-detail img {
        margin-top: 5%;
        width: 100%;
        align-items: center;
        border-radius: 100%;
        margin-bottom: 30px;
        animation: app-logo-spin infinite 20s linear
        }
        @keyframes app-logo-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

    </style>
</head>
<body>
    <nav class="white">
        </style>

        <a href="index.php"><img src="https://pbs.twimg.com/media/EiOLaYbX0AA5S6S.jpg" width="100" height="100" /></a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" . data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="test1.php"><span class="glyphicon glyphicon-home"></span> Homepage</a></li>
                <li><a href="">
                        <sanp class="glyphicon glyphicon-earphone"></span>Contact
                    </a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Registration</a></li>
                <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
            </ul>
            </ul>
        </div>
        </div>


<div class="container">
    <div class="row">
        <?php
        session_start();
        $connect = mysqli_connect("3.132.234.157","tuan01","123@123a","tuan01");
        $id = $_GET["id"];
        $sql = "SELECT * FROM user,product WHERE product_id= {$id}";     
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
            $id = $row['Songid'];
            ?>
            <div class="col-md-6" style="text-align: left;">
                <h2> Name of Music: <?php echo $row['product_name'];?> </h2>
                <p>Price: <?php echo $row['product_price'];?> </p>
             
                            }
                        }
                       </script>
            </div>  
            <div class="images-detail">
            <div class="col-md-6">
                <img src="IMG/<?php echo $row[' product_img'] ?>" style = "width: 500px;height: 500px;">
            </div> 
        </div>
            <?php
        }

    ?>
    </div>
</div>
</body>
</html>