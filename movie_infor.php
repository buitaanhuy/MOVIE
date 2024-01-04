<?php
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
        require_once "config.php";
        $sql = "SELECT * FROM MOVIE WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='list_movie'>";
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="movie">
        <img class="movie_img" src="image/<?php echo $row['image'];?>" alt="hình ảnh" style = "width: 200px;"> <br>
        <b><?php echo $row['movie_name']; ?></b> <br>
        <?php echo $row['release_date']; ?> <br>
        <?php echo $row['overview'];?>
    </div>  
    <?php
        }
        }
        else {
        echo "0 results";
        }
        mysqli_close($conn);
        echo"</div>";
    }
    ?>