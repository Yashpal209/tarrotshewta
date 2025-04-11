<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

include 'helper.php';

if (isset($_POST['contactus'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $messages = $_POST['message'];

    $emailSubject = 'Tarrot with Shweta - Contact form';
    $message = "<html><body>
                <p>Name:  $name</p>
                <p>Email:  $email</p>
                <p>Subject:  $subject</p>
                <p>Message:  $messages</p>
                </body></html>";

    $to = "tarrotwithshweta@gmail.com";

    $mail = sendmail($to, $emailSubject, $message);
    if ($mail == true) {
        echo "<script>
            alert('Your message has been sent successfully!');
            window.location.href = 'contact.php';
        </script>";
    } else {
        echo "<script>
            alert('Mail not sent. Please try again later.');
            window.location.href = 'contact.php';
        </script>";
    }
}


if (isset($_POST['booking'])) {
    // echo "<pre>";
    // print_r($_POST);die;
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $sessionType = $_POST['sessionType'];
    $preferredDate = $_POST['preferredDate'];
    $preferredTime = $_POST['preferredTime'];
    $alternateDate = $_POST['alternateDate'];
    $questions = $_POST['questions'];
    $hearAbout = $_POST['hearAbout'];
    unset($_POST['booking']);

    // Email details
    $subject = "Tarrot with Shweta - Booking  from $firstName $lastName";
    $message = "
    <html>
        <body>
            <p><strong>Name:</strong> $firstName $lastName</p>
            <p><strong>email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Service:</strong> $service</p>
            <p><strong>Session Type:</strong> $sessionType</p>
            <p><strong>Preferred Date & Time :</strong> $preferredDate, $preferredTime</p>
            <p><strong>Alternate Date:</strong> $alternateDate</p>
            <p><strong>Questions:</strong> $questions</p>
            <p><strong>Hear About:</strong> $hearAbout</p>
        </body>
    </html>";

    $to = "tarrotwithshweta@gmail.com";
    $mail = sendmail($to, $subject, $message);

    if ($mail === true) {
        // // Insert enquiry into the database
        // $sql = "INSERT INTO `tbl_enquiry` (`pick`, `drop`, `bookdatein`, `bookdateend`, `name`, `phone`) 
        //         VALUES ('$pick', '$drop', '$bookdatein', '$bookdateend', '$name', '$phone')";

        // if (mysqli_query($conn, $sql)) {
        //     echo "<script>
        //         alert('Your enquiry has been saved successfully!');
        //         window.location.href = 'index.php';
        //     </script>";
        // } else {
        //     echo "<script>
        //         alert('Error: " . mysqli_error($conn) . "');
        //         window.location.href = 'index.php';
        //     </script>";
        // }

        // // Close the database connection
        // mysqli_close($conn);

        echo "<script>
            alert('Your Booking has been sent successfully!');
            window.location.href = 'index.php';
        </script>";
    } else {
        // Failure alert
        echo "<script>
            alert('Booking not sent. Please try again later.');
            window.location.href = 'index.php';
        </script>";
    }
}
