<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Students' Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;      
            background-image: url('autum.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .container {
            backdrop-filter: blur(4px);
            background-color: rgba(255, 255, 255, 0.4);
            border: 2px ;
            border-radius: 5px;
            border-radius: 8px;
            padding: 20px;
            width: 550px;
        }
        h1 {
            text-align: center;
            color: 973131;
        }
        .record {
            margin-top: 20px;
        }
        .record div {
            margin-bottom: 10px;
        }
    
    </style>
</head>
<body>

<div  class="container">
<font color="973131"><h1>Students' Record</h1><br></font>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $initial = $_POST['initial'];
        switch ($initial) {
            case '1':
                $a = "นาย";
                break;
            case '2':
                $a = 'นาง';
                break;
            case '3':
                $a = 'นางสาว';
                break;
            default:
                $a = '';
        }

        $name = htmlspecialchars($_POST['name']);
        $sex = $_POST['sex'];
        switch ($sex) {
            case '1':
                $s = "ชาย";
                break;
            case '2':
                $s = 'หญิง';
                break;
            case '3':
                $s = 'อื่นๆ';
                break;
            default:
                $s = '';
        }

        $tool = htmlspecialchars($_POST['tool']);
        $email = htmlspecialchars($_POST['email']);
        $Username = htmlspecialchars($_POST['Username']);
        $Password = htmlspecialchars($_POST['Password']);

        echo "<div class='record'>";
        echo "<div>ชื่อ: $a $name</div>";
        echo "<div>เพศ: $s</div>";
        echo "<div>อุปกรณ์ที่ใช้: $tool</div>";
        echo "<div>Email: $email</div>";
        echo "<div>Username: $Username</div>";
        echo "<div>Password: $Password</div>";
        echo "<div>Confirm password: $Password</div>";
        echo "</div>";
    } else {
        echo "<div>No data submitted.</div>";
    }
    ?>
</div>

</body>
</html>