<?php
session_start();
include_once '../database.php';

function func_alert($message)
{
  echo '<script language="javascript">';
  echo 'alert("' . $message . '");';
  echo 'location.href="products.php"';
  echo '</script>';
}

if (isset($_POST["createProductBtn"])) {
  $date = date_create();
  $dbimage = "uploads/" . date_timestamp_get($date) . "-" . basename($_FILES["imageFile"]["name"]);
  $image = "../uploads/" . date_timestamp_get($date) . "-" . basename($_FILES["imageFile"]["name"]);

  if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $image)) {
    $productName = $_POST["txtProductName"];
    $quantity = $_POST["txtQuantity"];
    $price = $_POST["txtUnitPrice"];
    $brandId = $_POST["txtBrandId"];
    $categoryId = $_POST["txtCategoryId"];
    $SubcategoryId = $_POST["txtsubCategoryId"];
    $unit = $_POST["txtunit"];

    $sql = "INSERT INTO `product` (`name`,`image`, `quantity`, `unit_price`, `brand_id`, `category_id`, `subCategory`, `unit`) 
          VALUES ('$productName', '$image', '$quantity', '$unitPrice', '$brandId', '$categoryId', '$SubcategoryId', '$unit');";

    if (!mysqli_query($pdo, $sql)) {
      func_alert("Unable to insert a new product: " . mysqli_error($e));
    } else {
      func_alert("Product Added Successfully!!!");
    }
  } else {
    func_alert("Unable insert a product image: " . mysqli_error($e));
  }
}

if (isset($_POST["editProductBtn"])) {
  $id = $_POST["id"];
  $productName = $_POST["txtProductName"];
  $quantity = $_POST["txtQuantity"];
  $unitPrice = $_POST["txtUnitPrice"];
  $brandId = $_POST["txtBrandId"];
  $categoryId = $_POST["txtCategoryId"];
  $SubcategoryId = $_POST["txtsubCategoryId"];
  $unit = $_POST["txtunit"];

  if (!file_exists($_FILES['imageFile']["tmp_name"]) || !is_uploaded_file($_FILES['imageFile']["tmp_name"])) {
    $image = $_SESSION["image"];
    $dbImage = $_SESSION["dbImage"];
  } else {
    $date = date_create();
    $image = "../uploads/" . date_timestamp_get($date) . "-" . basename($_FILES["imageFile"]["name"]);
    $dbImage = "../uploads/" . date_timestamp_get($date) . "-" . basename($_FILES["imageFile"]["name"]);
    move_uploaded_file($_FILES["imageFile"]["tmp_name"], $image);
  }

  $sql = "UPDATE `product` SET `name` = '$productName', `image` = '$dbImage',
   `quantity` = '$quantity', `unit_price` = '$unitPrice', `brand_id` = '$brandId', `category_id` = '$categoryId', `subCategory` = '$SubcategoryId', `unit` = '$unit' WHERE `product_id` = $id";

  if (!mysqli_query($pdo, $sql)) {
    func_alert("Unable update product: " . mysqli_error($e));
  } else {
    func_alert("Product Updated Successfully!!!");
  }
}

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $sql = "DELETE FROM `product` WHERE `product_id` = $id";

  if (!mysqli_query($pdo, $sql)) {
    func_alert("Unable to delete product: " . mysqli_error($e));
  } else {
    func_alert("Product Deleted Successfully!!!");
  }
}

mysqli_close($pdo);
