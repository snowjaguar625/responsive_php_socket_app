<?php include 'layouts/header.php'; ?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id='". $id ."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $item = '<div class="item_view">
                    <div class="space"></div>
                    <div class="item_title">
                        <p class="section_title">'. $row['small_title'] .'</p>
                        <p class="description">'. $row['description']. ' ' . $row['dial']. ' ' . $row['price'] .'$</p>
                    </div>
                    <div class="space"></div>
                    <div class="item_img">
                        <img src="./assets/img/Product Images/'. $row["model_number"] .'.png" />
                    </div>
                </div>';
        echo $item;
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
    
<?php include 'layouts/footer.php'; ?>


<?php 
$host    = "127.0.0.1";
$port    = "443";
$message = "Hello Server";
echo "Message To server :".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// connect to server
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n"); 
// Send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
// Get server response
$result = socket_read ($socket, 1024) or die("Could not read server response\n");
echo "Reply From Server :".$result;
// Close socket
socket_close($socket);

?>