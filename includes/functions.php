<?php
/**
 * 格式化價格輸出
 */
function formatPrice($price) {
    return '$' . number_format($price, 0);
}
?>