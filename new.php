<?php
session_start();

if (!(isset($_SESSION['cart']))) {
    $_SESSION['cart'] = array();
} //init cart

if (isset($_GET['clear'])) {
    $_SESSION['cart'] = array();
} //if clear cart

if (isset($_GET['pID'])) {
    $pID = $_GET['pID'];
    $quan = $_GET['quan'];

    if ($quan > 0 && filter_var($quan, FILTER_VALIDATE_INT)) {
        if (isset($_SESSION['cart'][$pID])) {
            $_SESSION['cart'][$pID] += $quan;
        } else {
            $_SESSION['cart'][$pID] = $quan;
        } //if item exists
    } else {
        echo "Come on man";
    } //if trash
} //isset

echo "<pre>";
print_r($_SESSION['cart']);
echo "<pre>";

$conn = mysqli_connect('localhost', 'root', '', 'ubeauty');

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
