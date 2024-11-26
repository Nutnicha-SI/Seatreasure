<?php session_start(); ?>
<html>
<head>
    <style>
    body {
            font-family: 'Arial';
        }

        .headerhome ul {
            text-align: center;
            padding: 30px 0 30px 0;
            background-color: #00163A; /* เปลี่ยนสีเป็นสีดำโปร่งแสง */
            border-radius: 0px; /* ลบโค้งงอ */
            font-family: 'Arial';
        }

        .headerhome ul li {
            text-align: center;
            list-style: none;
            display: inline;
            text-decoration: none;
        }

        .headerhome ul li a {
            text-align: center;
            text-decoration: none;
            padding: 10px 30px 10px 30px;
            font-size: 20px;
            font-weight: bolder;
            font-family: 'Inter', sans-serif; /* แก้ไขการเรียกใช้ฟอนต์ */
            color: #C7BEA5;
            letter-spacing: 0.5px;
            position: relative;
            padding: 0 10px;
            text-shadow: none; /* ลบเงาข้อความ */
        }

        .headerhome ul li a::after {
            content: "";
            position: absolute;
            background-color: #fafcf1;
            height: 3px;
            width: 0%;
            left: 0;
            bottom: -10px;
            transition: 0.3s;
        }

        .headerhome ul li a:hover:after {
            width: 100%;
        }

        .banner {
            padding: 0 auto 0 auto;
        }

        .beforecontent {
            background-color: #15094e;
        }

        .beforecontent h1 {
            background-color: #15094e;
            color: #fbfbfb;
            font-weight: bolder;
            text-shadow: none; /* ลบเงาข้อความ */
        }

        .beforecontent h3 a {
            color: #fbfbfb;
            font-weight: bolder;
            text-shadow: none; /* ลบเงาข้อความ */
        }
        .user-desc {
            color:white;
        }
    </style>
</head>
<body>
<div class="headerhome">
    <ul>
    <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li>
            <?php
            function level() {
                $Level = 0 ;
                $userlevel = $_SESSION['level'];
                if ($userlevel == 1) {
                    return $Level='Normal';
                } elseif ($userlevel == 3) {
                    return $Level="VIP";
                } else {
                    return $Level="Admin"; // You might want to handle other levels accordingly
                }
                return $Level;
            }
            if (isset($_SESSION['username'])) {
                $userLevel =level();
                echo '<li><a href="logout.php">Logout -</a>';
                echo "<span class='user-desc'>&nbsp;[";
                echo $_SESSION['firstname']
                    ." ".$_SESSION['lastname']
                    ." : ". $userLevel  ;
                echo "]</span></li>";
                
            } else {
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
        </li>
    </ul>
</div>
</br>

</div>
</body>
</html>