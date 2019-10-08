<html>

<head>
    <title>IMG Workshop '19</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>

<nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="https://github.com/IMGIITRoorkee/workshop2019">
            <h3>Workshop '19</h3>
        </a>
        <a href="index.php"><h3>Home</h3></a>
</nav>

<?php
include 'connection.php';

$genre = $_GET['genre'];

echo '<div class="container col-sm-5">
<h2 class="category-header">' . $genre . '</h2></div>';

$sql = 'SELECT * FROM xtreme WHERE `genre`="' . $genre . '" order by `id` DESC;';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="container col-sm-5">
            <div class="card video-card">
                <div class="card-body">
                    <div>
                        <iframe
                        width="100%"
                        height="315"
                        src="https://www.youtube.com/embed/' . $row['link'] . '"
                        frameborder="0"
                        allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-description">
                        <span>' . $row['description'] . '</span>
                    </div>
                </div>
            </div>
        </div>';
    }
}
?>

</body>

</html>