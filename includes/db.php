<?php
$host = 'sql108.byetcluster.com';
$dbname = 'if0_42235723_ecommerce';
$user = 'if0_42235723';
$password = 'fP7iTF6JeS';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>