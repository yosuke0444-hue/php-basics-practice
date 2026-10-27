<?php
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
echo "<div class='line'>元の価格：{$original_price}</div>";
echo "<div class='line'>割引率：".($discount_rate * 100 )."％</div>";
echo "<div class='line'>最終価格：{$final_price}</div>";
?>