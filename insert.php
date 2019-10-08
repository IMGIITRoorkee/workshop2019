<?php
// Include DB connection for executing SQL queries.
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * Save video in database when incoming request is
     * a POST request.
     */
    // Sanitize incoming data.
    $video_genre = htmlspecialchars($_POST['video_genre']);
    $description = htmlspecialchars($_POST['description']);
    $video_link = htmlspecialchars($_POST['video_link']);
    // SQL query to insert into video into DB.
    $sql = "INSERT INTO `xtreme`(genre, description, link) values('" . $video_genre . "','" . $description . "','" . $video_link . "');";

    if ($conn->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Redirect to `category.php` to view posted video.
    header('Location: http://localhost/xtreme/category.php?genre=' . $video_genre);
    $conn->close();
} else {
    echo "Request method not supported";
}
