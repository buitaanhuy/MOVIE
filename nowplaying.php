<?php
        include 'main.html';
        require_once "config.php";
        $sql = "SELECT * FROM MOVIE LIMIT 0,10";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='list_movie'>";
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="movie">
        <a class="movie_link" href="movie_infor.php?id=<?php echo $row['id'];?>" target = "blank">
            <img class="movie_img" src="image/<?php echo $row['image'];?>" alt="hình ảnh"> <br>
            <b><?php echo $row['movie_name']; ?></b> <br>
            <?php echo $row['release_date']; ?>
        </a>
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