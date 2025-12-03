<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];

    echo "
    <html>
    <head>
        <title>Submitted Details</title>
        <style>
            body { font-family: Arial; background:#eef2ff; padding:40px; }
            .box {
                background:white; padding:30px; width:400px; margin:auto;
                border-radius:10px; box-shadow:0 0 10px gray;
            }
            h2 { text-align:center; }
            p { font-size:18px; }
        </style>
    </head>
    <body>

    <div class='box'>
        <h2>Registration Details</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Selected Course:</strong> $course</p>
    </div>

    </body>
    </html>
    ";
}
?>
