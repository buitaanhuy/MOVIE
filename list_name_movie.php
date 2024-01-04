<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE</title>
    <style>


    </style>
</head>
<body>
    <?php
        require_once "config.php";
        $sql = "SELECT * FROM MOVIE LIMIT 0,10";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='list_movie'>";
            $stt = 1;
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="movie">
        <a href="movie_infor.php?id=<?php echo $row['id'];?>" target = "blank"><b><?php echo $stt++. ". " . $row['movie_name']; ?></b></a> <br>
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