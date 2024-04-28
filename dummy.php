<!DOCTYPE html>
<html>
<head>
    <title>Parameter Enumeration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Web Application Penetration Testing - Parameter Enumeration</h1>
    <p>Try to find hidden GET and POST parameters.</p>

    <?php
    // Check if GET parameter "get_hack" is set
    if (isset($_GET['get'])) {
        $get_hack = $_GET['get'];
        echo "<p>GET parameter 'get' value: $get_hack</p>";
        echo "<br>";
        echo "<p>Congrats!!</p>";
    }

    // Check if GET parameter "devkey" is set
    if (isset($_GET['devkey'])) {
        $devkey = $_GET['devkey'];
        echo "<p>GET parameter 'devkey' value: $devkey</p>";
        echo "<br>";
        echo "<p>Congrats!!</p>";
    }

    // Check if POST parameter "post_hack" is set
    if (isset($_POST['post'])) {
        $post_hack = $_POST['post'];
        echo "<p>POST parameter 'post' value: $post_hack</p>";
        echo "<br>";
        echo "<p>Congrats!!</p>";
    }

    // Check if POST parameter "post_hack" is set
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        echo "<p>POST parameter 'user_id' value: $user_id</p>";
        echo "<br>";
        echo "<p>Congrats!!</p>";
    }
?>

</div>

</body>
</html>