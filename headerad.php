
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .header {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 0;
            box-shadow: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            transition: top 0.3s; /* เพิ่มการเปลี่ยนแปลงเรื่อยๆ ของ Navbar */
        }
        .header ul {
            text-align: center;
            padding: 30px 0;
            margin: 0;
            list-style-type: none;
        }
        .header ul li {
            display: inline;
            margin-right: 20px;
        }
        .header ul li:last-child {
            margin-right: 0;
        }
        .header ul li a {
            text-decoration: none;
            padding: 10px 30px;
            font-size: 20px;
            font-weight: bold;
            color: #fafcf1;
            position: relative;
            text-shadow: none;
        }
        .header ul li a::after {
            content: "";
            position: absolute;
            background-color: #fafcf1;
            height: 3px;
            width: 0;
            left: 50%;
            bottom: -10px;
            transition: 0.3s;
            transform: translateX(-50%);
        }
        .header ul li a:hover::after {
            width: 100%;
        }
        /* ป้องกันการป้อนข้อความเหนือ Navbar */
        .content {
            padding-top: 70px;
        }
    </style>
    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.querySelector(".header").style.top = "0"; // แสดง Navbar เมื่อเลื่อนหน้ากระดาษขึ้น
            } else {
                document.querySelector(".header").style.top = "-100px"; // ซ่อน Navbar เมื่อเลื่อนหน้ากระดาษลง
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</head>
<body>
<div class="header">
    <ul>
    <li><a href="index.php">Home</a></li>
        <li><a href="employeemain.php">Register</a></li>
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
            }
            ?>
        </li>
    </ul>
</div>
<div class="content">
    <!-- เนื้อหาของคุณที่นี่ -->
</div>
</body>
</html>
