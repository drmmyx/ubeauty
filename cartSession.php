<?php


class Product
{
    /**
     * db
     */
    public $product_ID;
    public $product_Name;
    public $product_Description;
    public $product_Image;
    public $product_Price;
    public $product_Qty;
    public $category_ID;
    public $product_Brand;
    public $product_Package;
    /**
     * self
     */
    public $quantity;

    /**
     * if future
     */
    // public $subtotal;
}


session_start();
?>

<?php
$_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
// function fixObject(&$object)
// {
//     if (!is_object($object) && gettype($object) == 'object')
//         return ($object = unserialize(serialize($object)));
//     return $object;
// }
// foreach ($_SESSION['cart'] as $test) {
//     fixObject($test);
// }


function addItemToCart($product, $quantity)
{
    $newItem = new Product();
    $newItem->product_ID = $product['product_ID'];
    $newItem->product_Name = $product['product_Name'];
    $newItem->product_Description = $product['product_Description'];
    $newItem->product_Image = $product['product_Image'];
    $newItem->product_Price = $product['product_Price'];
    $newItem->product_Qty = $product['product_Qty'];
    $newItem->category_ID = $product['category_ID'];
    $newItem->product_Brand = $product['product_Brand'];
    $newItem->product_Package = $product['product_Package'];
    $newItem->quantity = $quantity;

    array_push($_SESSION['cart'], $newItem);
}


function deleteItemFromCart($index)
{
    // unset($_SESSION['cart'][$index]);
    \array_splice($_SESSION['cart'], $index, 1);
}

function changeQuantity($index, $value)
{
    $_SESSION['cart'][$index]->quantity = $value;
}

function clearSession()
{
    $_SESSION['cart'] =  array();
}
function getCartItem()
{
    echo "<pre>";
    //print_r($_SESSION['cart']);
    echo "</pre>";
}
?>