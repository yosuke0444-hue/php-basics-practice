<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;//変数の定義

$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

echo "商品名：" . $product_name ."<br> ";
echo "単価：" . $price . "円<br>";
echo "<p>数量：$quantity</P>";
echo "<p>小計；$subtotal</p>";
echo "<p>消費税(10％)：$tax_amount</p>";
echo "<p>合計金額：$total</p>";
?>