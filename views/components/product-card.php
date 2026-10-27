<div class="card h-100 border-light shadow-sm text-decoration-none">
    <!-- 圖片容器 (固定高度並居中) -->
    <div class="d-flex align-items-center justify-content-center p-3" style="height: 180px;">
        <img src="<?= htmlspecialchars($product['img']) ?>" class="img-fluid" alt="<?= htmlspecialchars($product['title']) ?>" style="max-height: 100%; object-fit: contain;">
    </div>
    
    <div class="card-body d-flex flex-column p-3">
        <!-- 標題：使用 line-clamp 截斷過長文字 -->
        <h6 class="card-title text-dark" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; font-size: 14px; min-height: 42px;">
            <?= htmlspecialchars($product['title']) ?>
        </h6>
        
        <!-- 價格區塊 (推到底部) -->
        <div class="mt-auto d-flex align-items-center gap-2">
            <?php if (isset($product['is_sale']) && $product['is_sale']): ?>
                <span class="badge bg-danger rounded-1">SALES</span>
            <?php endif; ?>
            
            <span class="fs-5 fw-bold text-danger"><?= formatPrice($product['price']) ?></span>
            
            <?php if (isset($product['original_price'])): ?>
                <small class="text-muted text-decoration-line-through"><?= formatPrice($product['original_price']) ?></small>
            <?php endif; ?>
        </div>
    </div>
</div>