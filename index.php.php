<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE</title>
    <style>
        .movie_img{
            width: 100%;
        }

        .movie{
            text-align: center;
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            overflow: hidden;
        }

        .list_movie{
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(5, 19%);
        }

    </style>
</head>
<body>
    <?php
        require_once "config.php";
        $sql = "SELECT * FROM MOVIE LIMIT 0,10";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='list_movie'>";
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="movie">
        <img class="movie_img" src="image/<?php echo $row['image'];?>" alt="hình ảnh"> <br>
        <b><?php echo $row['movie_name']; ?></b> <br>
        <?php echo $row['release_date']; ?>
    </div>  
    <?php
        }
        }
        else {
        echo "0 results";
        }
        mysqli_close($conn);
        echo"</div>";
    ?>
</body>
</html>