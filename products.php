<?php
// 引入頭部
include 'includes/header.php';
?>

<!-- 主體內容 -->
<div class="container my-4">
    
    <!-- 麵包屑導航 -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">首頁</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">電腦硬件</li>
        </ol>
    </nav>

    <!-- 產品分類大外框 -->
    <div class="row border rounded bg-white">
        
        <!-- 左側邊欄 (佔 2 欄) -->
        <div class="col-lg-2 border-end py-3">
            <ul class="list-unstyled category-menu mb-0">
                <li><a href="#" class="text-dark text-decoration-none">優惠組合</a></li>
                <li><a href="#" class="text-dark text-decoration-none">中央處理器</a></li>
                <li><a href="#" class="text-dark text-decoration-none">主機板</a></li>
                <li><a href="#" class="text-dark text-decoration-none">顯示卡</a></li>
                <li><a href="#" class="text-dark text-decoration-none">內置硬碟機</a></li>
                <li><a href="#" class="text-dark text-decoration-none">SSD固態硬碟</a></li>
                <li><a href="#" class="text-dark text-decoration-none">外置儲存設備</a></li>
                <li><a href="#" class="text-dark text-decoration-none">記憶體</a></li>
                <li><a href="#" class="text-dark text-decoration-none">機箱</a></li>
                <li><a href="#" class="text-dark text-decoration-none">火牛</a></li>
                <li><a href="#" class="text-dark text-decoration-none">散熱配件</a></li>
                <li><a href="#" class="text-dark text-decoration-none">外置設備</a></li>
                <li><a href="#" class="text-dark text-decoration-none">其他設備</a></li>
                <li><a href="#" class="text-dark text-decoration-none">軟件</a></li>
                <li><a href="#" class="text-dark text-decoration-none">顯示屏</a></li>
                <li><a href="#" class="text-dark text-decoration-none">網絡產品</a></li>
                <li><a href="#" class="text-dark text-decoration-none fw-bold">NAS</a></li>
                <li><a href="#" class="text-dark text-decoration-none">手提電腦</a></li>
                <li><a href="#" class="text-dark text-decoration-none">打印機</a></li>
                <li><a href="#" class="text-dark text-decoration-none fw-bold">Mini PC</a></li>
                <li><a href="#" class="text-dark text-decoration-none">電腦椅</a></li>
                <li><a href="#" class="text-dark text-decoration-none fw-bold">VR產品</a></li>
                <li><a href="#" class="text-dark text-decoration-none">DJI產品</a></li>
                <li><a href="#" class="text-dark text-decoration-none">遊戲主機及配件</a></li>
            </ul>
        </div>

        <!-- 右側網格區 (佔 10 欄) -->
        <div class="col-lg-10 p-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-0">
                
                <!-- 分類卡片 1 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/combo.jpg" class="img-fluid category-img mb-3" alt="優惠組合">
                    <h6 class="text-dark mb-0">優惠組合</h6>
                </div>
                
                <!-- 分類卡片 2 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/cpu.jpg" class="img-fluid category-img mb-3" alt="中央處理器">
                    <h6 class="text-dark mb-0">中央處理器</h6>
                </div>
                
                <!-- 分類卡片 3 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/mb.jpg" class="img-fluid category-img mb-3" alt="主機板">
                    <h6 class="text-dark mb-0">主機板</h6>
                </div>
                
                <!-- 分類卡片 4 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/gpu.jpg" class="img-fluid category-img mb-3" alt="顯示卡">
                    <h6 class="text-dark mb-0">顯示卡</h6>
                </div>

                <!-- 分類卡片 5 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/hdd.jpg" class="img-fluid category-img mb-3" alt="內置硬碟機">
                    <h6 class="text-dark mb-0">內置硬碟機</h6>
                </div>
                
                <!-- 分類卡片 6 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/ssd.jpg" class="img-fluid category-img mb-3" alt="SSD固態硬碟">
                    <h6 class="text-dark mb-0">SSD固態硬碟</h6>
                </div>
                
                <!-- 分類卡片 7 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/ext_storage.jpg" class="img-fluid category-img mb-3" alt="外置儲存設備">
                    <h6 class="text-dark mb-0">外置儲存設備</h6>
                </div>
                
                <!-- 分類卡片 8 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/ram.jpg" class="img-fluid category-img mb-3" alt="記憶體">
                    <h6 class="text-dark mb-0">記憶體</h6>
                </div>
                
                <!-- 分類卡片 9 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/case.jpg" class="img-fluid category-img mb-3" alt="機箱">
                    <h6 class="text-dark mb-0">機箱</h6>
                </div>
                
                <!-- 分類卡片 10 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/psu.jpg" class="img-fluid category-img mb-3" alt="火牛">
                    <h6 class="text-dark mb-0">火牛</h6>
                </div>
                
                <!-- 分類卡片 11 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/cooler.jpg" class="img-fluid category-img mb-3" alt="散熱配件">
                    <h6 class="text-dark mb-0">散熱配件</h6>
                </div>
                
                <!-- 分類卡片 12 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/peripheral.jpg" class="img-fluid category-img mb-3" alt="外置設備">
                    <h6 class="text-dark mb-0">外置設備</h6>
                </div>

                <!-- 分類卡片 13 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/other.jpg" class="img-fluid category-img mb-3" alt="其他設備">
                    <h6 class="text-dark mb-0">其他設備</h6>
                </div>

                <!-- 分類卡片 14 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/software.jpg" class="img-fluid category-img mb-3" alt="軟件">
                    <h6 class="text-dark mb-0">軟件</h6>
                </div>

                <!-- 分類卡片 15 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/monitor.jpg" class="img-fluid category-img mb-3" alt="顯示屏">
                    <h6 class="text-dark mb-0">顯示屏</h6>
                </div>

                <!-- 分類卡片 16 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/network.jpg" class="img-fluid category-img mb-3" alt="網絡產品">
                    <h6 class="text-dark mb-0">網絡產品</h6>
                </div>

                <!-- 分類卡片 17 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/nas.jpg" class="img-fluid category-img mb-3" alt="NAS">
                    <h6 class="text-dark mb-0">NAS</h6>
                </div>

                <!-- 分類卡片 18 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/laptop.jpg" class="img-fluid category-img mb-3" alt="手提電腦">
                    <h6 class="text-dark mb-0">手提電腦</h6>
                </div>

                <!-- 分類卡片 19 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/printer.jpg" class="img-fluid category-img mb-3" alt="打印機">
                    <h6 class="text-dark mb-0">打印機</h6>
                </div>

                <!-- 分類卡片 20 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/minipc.jpg" class="img-fluid category-img mb-3" alt="Mini PC">
                    <h6 class="text-dark mb-0">Mini PC</h6>
                </div>

                <!-- 分類卡片 21 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/chair.jpg" class="img-fluid category-img mb-3" alt="電腦椅">
                    <h6 class="text-dark mb-0">電腦椅</h6>
                </div>

                <!-- 分類卡片 22 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/vr.jpg" class="img-fluid category-img mb-3" alt="VR產品">
                    <h6 class="text-dark mb-0">VR產品</h6>
                </div>

                <!-- 分類卡片 23 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/dji.jpg" class="img-fluid category-img mb-3" alt="DJI產品">
                    <h6 class="text-dark mb-0">DJI產品</h6>
                </div>

                <!-- 分類卡片 24 -->
                <div class="col p-3 text-center grid-item">
                    <img src="assets/images/categories/console.jpg" class="img-fluid category-img mb-3" alt="遊戲主機及配件">
                    <h6 class="text-dark mb-0">遊戲主機及配件</h6>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
// 引入底部
include 'includes/footer.php';
?>