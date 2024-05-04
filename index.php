<?php
$username = 'root';
$servername = 'localhost';
$password = "";
$dbname = 'contact_form';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed");
} else {
    // echo 'connect';
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // echo $name;
    $sql = "INSERT INTO `contact_form` (full_name, phone, email ,subject, message) VALUES ('$name', '$phone', '$email', '$subject', '$message')";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'data inserted successfully';
    }
    else{
        echo 'data not inserted';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        form div{
            margin: 10px;
    padding: 0 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form">
            <h1>Contact form</h1>
            <form action="" method="post">
                <div>
                    <label for="name"> Name</label>
                    <input type="text" placeholder="full name" required name="name">
                </div>
                <div>
                    <label for="phone">Phone Number</label>
                    <input type="number" placeholder="Phone Number" required name="phone">
                </div>
                <div>
                    <label for="email"> Email</label>
                    <input type="email" placeholder="Email" required name="email">
                </div>
                <div>
                    <label for="subject"> Subject</label>
                    <input type="text" placeholder="Subject" required name="subject">
                </div>
                <div>
                    <label for="message"> Message</label>

                    <input type="text" placeholder="Message" required name="message">
                </div>



                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
</body>

</html>