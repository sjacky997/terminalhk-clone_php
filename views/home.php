    <!-- === 主體內容：輪播圖與側邊欄 === -->
    <main class="container my-4">
        <div class="row">
            <!-- 左側輪播圖 (Bootstrap Carousel，佔 9 欄) -->
            <div class="col-lg-9 mb-4">
                <div id="heroCarousel" class="carousel slide banner-area" data-bs-ride="carousel">
                    <!-- 指示點 -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4"></button>
                    </div>
                    
                    <!-- 圖片內容 -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/slide/slide01.png" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/slide/slide02.png" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/slide/slide03.png" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/slide/slide04.png" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/slide/slide05.png" class="d-block w-100" alt="Slide 5">
                        </div>
                    </div>
                    
                    <!-- 左右切換按鈕 -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <!-- 右側邊欄 (佔 3 欄) -->
            <div class="col-lg-3">
                <div class="d-flex flex-column gap-3">
                    <a href="#" class="text-decoration-none">
                        <div class="card side-card text-center py-4">
                            <img src="assets/images/sideimg/rightside01.png" class="card-img-top mx-auto" alt="電腦硬件">
                            <div class="card-body p-0 mt-3">
                                <h5 class="card-title text-dark m-0 fw-normal">電腦硬件</h5>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="text-decoration-none">
                        <div class="card side-card text-center py-4">
                            <img src="assets/images/sideimg/rightside02.png" class="card-img-top mx-auto" alt="自選砌機">
                            <div class="card-body p-0 mt-3">
                                <h5 class="card-title text-dark m-0 fw-normal">自選砌機</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- === 推薦產品區塊 === -->
    <section class="container my-5">
        <h2 class="section-title mb-3">推薦產品</h2>
        
        <div class="row g-0 border-top border-start">
            <!-- 產品 1 -->
            <div class="col-md-3">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-3 text-center">
                        <img src="assets/images/recommend/product1.jpeg" class="img-fluid product-img" alt="產品1">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title">【ROG潮競白2.0】AMD 9800X3D + ROG RTX5080 16GB 全塔式全景電競組合</h5>
                        <div class="mt-auto d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-0 px-2 py-1">SALES</span>
                            <span class="text-danger fs-5 fw-bold">$36599</span>
                            <span class="text-muted text-decoration-line-through small">$39371</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 產品 2 -->
            <div class="col-md-3">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-3 text-center">
                        <img src="assets/images/recommend/product2.jpeg" class="img-fluid product-img" alt="產品2">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title">【再一波送MON】Intel 14400F + RX 9060 XT 16GB 2K電競優惠組合</h5>
                        <div class="mt-auto d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-0 px-2 py-1">SALES</span>
                            <span class="text-danger fs-5 fw-bold">$9299</span>
                            <span class="text-muted text-decoration-line-through small">$12320</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 產品 3 -->
            <div class="col-md-3">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-3 text-center">
                        <img src="assets/images/recommend/product3.jpeg" class="img-fluid product-img" alt="產品3">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title">【限量】【2K電競主題】Intel 14400F + ASUS DUAL 5070 12GB 高性價比神機優惠組合</h5>
                        <div class="mt-auto d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-0 px-2 py-1">SALES</span>
                            <span class="text-danger fs-5 fw-bold">$12999</span>
                            <span class="text-muted text-decoration-line-through small">$14611</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 產品 4 -->
            <div class="col-md-3">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-3 text-center">
                        <img src="assets/images/recommend/product4.jpeg" class="img-fluid product-img" alt="產品4">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title">【經濟實惠之選】Intel 14400F + RTX 3050 6GB 人人有機打優惠組合</h5>
                        <div class="mt-auto d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-0 px-2 py-1">SALES</span>
                            <span class="text-danger fs-5 fw-bold">$6199</span>
                            <span class="text-muted text-decoration-line-through small">$6647</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- === 新品上架區塊 === -->
    <section class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title m-0">新品上架</h2>
            <a href="#" class="text-decoration-none text-muted">顯示更多》</a>
        </div>
        
        <div class="row g-0 border-top border-start">
            <!-- 新品 1 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/new_arrivals/new1.png" class="img-fluid product-img" alt="新品1">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3">
                        <p class="card-text text-dark small">ASUS NUC 13 Pro Slim Mini PC (Intel i5-13420H / Wi-Fi 6E AX211 / 16GB RAM / 512GB)</p>
                    </div>
                </div>
            </div>

            <!-- 新品 2 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/new_arrivals/new2.png" class="img-fluid product-img" alt="新品2">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3">
                        <p class="card-text text-dark small">Okinos AQUA 5 VISTA MATX</p>
                    </div>
                </div>
            </div>

            <!-- 新品 3 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/new_arrivals/new3.png" class="img-fluid product-img" alt="新品3">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3">
                        <p class="card-text text-dark small">Okinos 314 ARGB Compact</p>
                    </div>
                </div>
            </div>

            <!-- 新品 4 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/new_arrivals/new4.jpeg" class="img-fluid product-img" alt="新品4">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3">
                        <p class="card-text text-dark small">Seagate 4TB One Touch with</p>
                    </div>
                </div>
            </div>

            <!-- 新品 5 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/new_arrivals/new5.jpeg" class="img-fluid product-img" alt="新品5">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3">
                        <p class="card-text text-dark small">Seagate 2TB One Touch with</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- === 熱賣產品區塊 === -->
    <section class="container my-5 pb-5">
        <h2 class="section-title mb-3">熱賣產品</h2>
        
        <div class="row g-0 border-top border-start">
            <!-- 熱賣 1 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/hot_sales/hot1.png" class="img-fluid product-img" alt="熱賣1">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title" style="font-size: 14px;">【現貨】INNO3D GeForce RTX™ 5070 TWIN X2 12GB GDDR7</h5>
                        <div class="mt-auto">
                            <span class="text-muted">$7599</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 熱賣 2 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/hot_sales/hot2.png" class="img-fluid product-img" alt="熱賣2">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title" style="font-size: 14px;">ViewSonic VX2758-4K-PRO-2 Dual Mode 4K160Hz/FHD320Hz Fast IPS 10Bits HDR10 Gaming Monitor</h5>
                        <div class="mt-auto d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-0 px-2 py-1">SALES</span>
                            <span class="text-danger fs-5 fw-bold">$2099</span>
                            <span class="text-muted text-decoration-line-through small">$2299</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 熱賣 3 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/hot_sales/hot3.png" class="img-fluid product-img" alt="熱賣3">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title" style="font-size: 14px;">【砌機優惠】ASUS AYW Gaming LC 360 ARGB LCD All-in-one CPU Liquid Cooler - Black</h5>
                        <div class="mt-auto d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-0 px-2 py-1">SALES</span>
                            <span class="text-danger fs-5 fw-bold">$899</span>
                            <span class="text-muted text-decoration-line-through small">$1150</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 熱賣 4 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/hot_sales/hot4.jpeg" class="img-fluid product-img" alt="熱賣4">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title" style="font-size: 14px;">ThermalRight Trofeo Vision LCD 6.86" - White</h5>
                        <div class="mt-auto">
                            <span class="text-muted">$259</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 熱賣 5 -->
            <div class="col">
                <div class="card h-100 border-0 border-end border-bottom rounded-0">
                    <div class="p-4 text-center">
                        <img src="assets/images/hot_sales/hot5.png" class="img-fluid product-img" alt="熱賣5">
                    </div>
                    <div class="card-body pt-0 px-3 pb-3 d-flex flex-column">
                        <h5 class="card-title product-title" style="font-size: 14px;">ASUS NUC 15 Pro Slim Mini PC (Intel® Core™ Ultra 7 255H Processor | Intel Arc Graphics | Wi-Fi 7 BE202 | 16GB DDR5 RAM | 1TB SSD | Wi-Fi7 | Win 11 Home)</h5>
                        <div class="mt-auto d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-0 px-2 py-1">SALES</span>
                            <span class="text-danger fs-5 fw-bold">$6899</span>
                            <span class="text-muted text-decoration-line-through small">$8299</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>