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
            <li class="breadcrumb-item active text-dark" aria-current="page">聯絡我們</li>
        </ol>
    </nav>

    <!-- 聯絡我們主外框 -->
    <div class="row border rounded bg-white">
        
        <!-- === 左側選單 (佔 3 欄) === -->
        <div class="col-lg-3 border-end py-4">
            <ul class="list-unstyled contact-menu mb-0">
                <li><a href="#" class="active text-decoration-none">客戶服務</a></li>
                <li><a href="#" class="text-decoration-none">商業資訊</a></li>
                <li><a href="#" class="text-decoration-none">問題回饋</a></li>
            </ul>
        </div>

        <!-- === 右側內容區 (佔 9 欄) === -->
        <div class="col-lg-9 p-4 p-md-5">
            
            <!-- 區塊 1：客戶服務 -->
            <div class="mb-5">
                <h4 class="mb-4 text-dark">客戶服務</h4>
                <p class="text-dark mb-2">如果你有任何問題，歡迎隨時聯絡我們，我們會盡力以最短時間回覆。</p>
                <p class="text-dark mb-3">在聯絡前，我們建議閣下瀏覽 <a href="faq.php" class="text-decoration-none">常見問題</a> 來獲取最快速解決方案。</p>
                <ul class="text-dark mb-4" style="line-height: 1.8;">
                    <li>送貨服務</li>
                    <li>付款說明</li>
                    <li>支援保養</li>
                    <li>產品退換</li>
                    <li>購物流程</li>
                </ul>
            </div>

            <hr class="my-5">

            <!-- 區塊 2：WhatsApp 聯絡 -->
            <div class="mb-5">
                <h5 class="mb-3 text-dark">以 WhatsApp 聯絡我們</h5>
                <div class="d-flex align-items-center mb-3">
                    <!-- WhatsApp 綠色圖標 -->
                    <i class="bi bi-whatsapp text-success" style="font-size: 2.5rem; margin-right: 10px;"></i>
                    <span class="fs-3 text-dark fw-bold">64066698</span>
                    <span class="text-danger ms-2">(只限WhatsApp)</span>
                </div>
                <p class="text-dark mb-0">*服務時間為星期一 至 星期六 10：30 - 19：00 （星期日及公眾假期休息）</p>
            </div>

            <hr class="my-5">

            <!-- 區塊 3：公司地址 -->
            <div class="mb-5">
                <h4 class="mb-4 text-dark">公司地址</h4>
                <!-- Google Maps 佔位圖 (請替換為你自己的地圖截圖) -->
                <div class="mb-4 text-center">
                    <img src="assets/images/contact/map.png" alt="Google Maps" class="img-fluid border rounded" style="width: 100%; max-height: 400px; object-fit: cover;">
                    <!-- 如果你想用真實的 Google 地圖，可以把上面換成下面的 iframe：
                    <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    -->
                </div>
                
                <div class="row text-dark">
                    <div class="col-md-6 mb-3">
                        <h6 class="fw-bold mb-3">客戶服務及維修部</h6>
                        <p class="mb-1">九龍長沙灣道742-748號 鴻昌工廠大廈 3/F A室</p>
                        <p class="mb-1">(荔枝角地鐵站B出口)</p>
                        <p class="mb-3">九龍, 香港</p>
                        <p>聯絡電話: 37047358 / 37047359</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h6 class="fw-bold mb-3">辦公時間:</h6>
                        <p class="mb-1">星期一 ~ 星期六 (公眾假期休息)</p>
                        <p>10:30 ~ 19:00</p>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <!-- 區塊 4：郵件客服 -->
            <div class="mb-5">
                <h4 class="mb-4 text-dark">郵件客服</h4>
                <p class="text-dark mb-3">郵件客服可在第一時間通過郵件解答閣下問題。</p>
                <p class="text-dark">請將問題發送郵件到 <a href="mailto:contact@terminalhk.com" class="text-decoration-none">contact@terminalhk.com</a>，工作人員會很快與您取得聯絡</p>
            </div>

            <hr class="my-5">

            <!-- 區塊 5：在線客服 (Facebook) -->
            <div class="mb-5">
                <h4 class="mb-4 text-dark">在線客服</h4>
                <p class="text-dark mb-4">我們在社交網絡設有在線客服，可為閣下以最直接方式解答問題。請訪問我們的社交網站發送信息</p>
                <!-- Facebook 按鈕 (請替換為你的圖片) -->
                <a href="https://www.facebook.com/" target="_blank">
                    <img src="assets/images/contact/find_us_facebook.png" alt="Find us on Facebook" style="height: 60px; object-fit: contain;">
                </a>
            </div>

            <hr class="my-5">

            <!-- 區塊 6：線上提問表單 -->
            <div class="mb-4">
                <h4 class="mb-4 text-dark">線上提問</h4>
                <p class="text-dark mb-4">您可通過下面表格直接提交問題。(請在提交問題前確認所輸入郵箱地址正確，以免造成不必要延誤)</p>
                
                <form action="#" method="POST">
                    <div class="row mb-3 align-items-center">
                        <label for="contactName" class="col-sm-2 col-form-label fw-bold text-dark text-end">聯絡人</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control rounded-0" id="contactName" placeholder="聯絡人">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label for="contactEmail" class="col-sm-2 col-form-label fw-bold text-dark text-end">郵箱</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control rounded-0" id="contactEmail" placeholder="郵箱">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label for="contactSubject" class="col-sm-2 col-form-label fw-bold text-dark text-end">主題</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control rounded-0" id="contactSubject" placeholder="主題">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="contactMessage" class="col-sm-2 col-form-label fw-bold text-dark text-end">內容</label>
                        <div class="col-sm-10">
                            <textarea class="form-control rounded-0" id="contactMessage" rows="6" placeholder="內容"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary rounded-1 px-4">提交</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php
// 引入底部
include 'includes/footer.php';
?>