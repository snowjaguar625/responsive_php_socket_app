<?php $pagenum=5; ?>
<?php include 'layouts/header.php'; ?>
<div class="watch_grid_part">
<?php
    $sql = "SELECT * FROM products WHERE pid='4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row['type'] == 'item'){
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
            elseif($row['type'] == 'cat'){
                $sql = "SELECT * FROM products WHERE pid='".$row['id']."'";
                $result_child = $conn->query($sql);
                while($row = $result_child->fetch_assoc()) {
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
            }
        // echo $item;
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
</div>
<?php include 'layouts/footer.php'; ?>