<?php
// 預期傳入變數 $products 陣列
if (empty($products)) return;
?>
<div class="product-grid">
    <?php foreach ($products as $product): ?>
        <?php include __DIR__ . '/product-card.php'; ?>
    <?php endforeach; ?>
</div>