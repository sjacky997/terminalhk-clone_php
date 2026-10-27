<?php
// 這裡模擬從資料庫抓取資料。真實專案中，這裡會是呼叫 Model 類別的方法。
return [
    'recommend_products' => [
        [
            'title' => '【ROG潮競白2.0】AMD 9800X3D + ROG RTX5080 16GB 全塔式全景電競組合',
            'price' => 36599,
            'original_price' => 39371,
            'img' => 'https://placehold.co/400x300/333/fff?text=ROG+RTX5080+Combo',
            'is_sale' => true
        ],
        // ... (為節省篇幅，請將上一輪的陣列資料完整貼入這裡)
    ],
    'new_products' => [
        [
            'title' => 'Seagate 4TB One Touch with Password USB-C - 白色',
            'price' => 1499,
            'img' => 'https://placehold.co/200x250/e0e0e0/888?text=Seagate+4TB+White'
        ],
        // ...
    ],
    'hot_products' => [
        [
            'title' => '【現貨】INNO3D GeForce RTX™ 5070 TWIN X2 12GB GDDR7',
            'price' => 7599,
            'img' => 'https://placehold.co/250x200/2b2b2b/7cb342?text=RTX+5070'
        ],
        // ...
    ]
];
?>