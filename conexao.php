<?php
$servername = "localhost";
$username = "username";
$password = "usbw";
$dbname = "pwii";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '<a href="index.php"> <h1 class="text-bg-success rounded">';
    echo "Erro ao conectar {$e->getMessage()}";
    echo "</h1> </a> </div> </body> </html>";
    die();
}
