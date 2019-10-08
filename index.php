<html>

<head>
    <title>IMG Workshop '19</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

<nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="https://github.com/IMGIITRoorkee/workshop2019">
            <h3>Workshop '19</h3>
        </a>
        <a href="add_video.html"><h3>Create</h3></a>
</nav>

<?php
include 'connection.php';
$sql = 'SELECT `genre`, count(*) as `count_videos` FROM xtreme GROUP BY `genre` order by `count_videos` DESC;';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="container col-sm-8">
            <div class="card">
                <div class="card-body category-card">
                    <div>
                        <a class="genre-header" href="./category.php?genre=' . $row['genre'] . '">
                            <h4>' . $row['genre'] . '</h4>
                        </a>
                    </div>
                    <div class="video-count"><i> Number of videos: ' . $row['count_videos'] . '</i>
                    </div>
                </div>
            </div>
        </div>';
    }
}
?>

</body>

</html>