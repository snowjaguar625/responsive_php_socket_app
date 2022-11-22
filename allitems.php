<?php $pagenum=2; ?>
<?php include 'layouts/header.php'; ?>
<div class="watch_grid_part">
<?php
    $sql = "SELECT * FROM products WHERE type='item'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
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