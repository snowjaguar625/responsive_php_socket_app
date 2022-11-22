<?php $pagenum=1; ?>
<?php include 'layouts/header.php'; ?>
<div class="banner">
    <!-- <img src="" alt=""> -->
</div>
<div class='text_one_part'>
    <p class="very_small_title">Experience a Rolex</p>
    <p class="large_title">ROLEX WATCHES</p>
    <p class="main_text">Rolex watches are crafted from the finest raw materials and assembled with scrupulous attention to detail. Every component is designed, developed and produced to the most exacting standards.</p>
</div>
<div class="watch_grid_part">
    <?php
        $sql = "SELECT * FROM products WHERE type='item'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            $item = '
            <a href="./item.php?id='. $row['id'] .'">
            <div>
                <div>
                    <img src="./assets/img/Product Images/'. $row["model_number"] .'.png" />
                </div>
                <p class="subtitle">Rolex</p>
                <p class="small_title">'. $row['small_title'] .'</p>
                <p class="small_description">'. $row['description']. ' ' . $row['dial']. ' ' . $row['price'] .' $</p>
            </div>
            </a>';
            echo $item;
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
</div>
<?php include 'layouts/footer.php'; ?>
