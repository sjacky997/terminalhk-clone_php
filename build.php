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
            <li class="breadcrumb-item active text-dark" aria-current="page">自選砌機</li>
        </ol>
    </nav>

    <!-- 砌機主外框 -->
    <div class="row border rounded bg-white" id="builder-section">
        
        <!-- === 左側：組合詳情 (佔 6 欄) === -->
        <div class="col-lg-6 border-end p-4">
            <!-- 標題列 -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0 text-dark fw-normal">組合詳情 <a href="#faq-section" class="text-muted text-decoration-none fs-6 ms-2">常見問題</a></h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="simpleMode">
                    <label class="form-check-label text-muted" for="simpleMode">
                        簡易模式
                    </label>
                </div>
            </div>

            <!-- 零件列表 (正常模式，預設顯示) -->
             <div class="parts-list" id="detailed-parts">
                <?php 
                $parts = ['Windows', 'CPU', '主機板', '顯示卡', 'RAM', '火牛', 'HDD', 'SSD', '機箱', '光碟機', '散熱', '無線上網卡', '顯示器', '鍵盤/滑鼠/遊戲手制', '軟件'];
                foreach ($parts as $part): 
                ?>
                <div class="part-item border-bottom py-3">
                    <div class="text-dark mb-1"><?php echo $part; ?></div>
                    <div class="d-flex align-items-center text-muted search-part">
                        <i class="bi bi-search me-2"></i>
                        <input type="text" class="form-control border-0 shadow-none p-0 bg-transparent" placeholder="搜索/加入<?php echo $part; ?>">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- 簡易模式提示文字 (預設隱藏，加上 d-none) -->
            <div id="simple-mode-content" class="d-none py-5 border-bottom">
                <div class="text-center text-muted py-4">
                    請加入電腦組合或硬件
                </div>
            </div>

            <!-- 左側底部結算區 -->
            <div class="mt-4">
                <div class="d-flex justify-content-end align-items-center mb-2">
                    <span class="text-muted me-2">服務:</span>
                    <select class="form-select form-select-sm w-auto border-secondary rounded-0">
                        <option>上門收機服務 (60日) - $0</option>
                    </select>
                </div>
                <div class="text-end mb-2 text-muted">
                    產品: <span class="text-dark">$0</span>
                </div>
                <div class="text-end mb-3 text-muted">
                    砌機: <span class="text-dark">$199</span> 
                    <div class="form-check d-inline-block ms-2">
                        <!-- 確保這個 input 有 id="checkService" -->
                        <input class="form-check-input" type="checkbox" id="checkService" checked>
                        <label class="form-check-label text-dark" for="checkService">
                            [5年免費自攜機檢查服務]
                        </label>
                    </div>
                </div>
                
                <!-- 修改這裡：給 $199 加上 id="total-price" -->
                <div class="text-end mb-3">
                    <span class="text-muted">總額:</span> <span class="fs-5 text-dark fw-bold" id="total-price">$199</span>
                </div>
                <div class="text-end">
                    <button class="btn btn-add-cart px-4 py-2">加入購物車</button>
                </div>
            </div>
        </div>

        <!-- === 右側：推薦組合 (佔 6 欄) === -->
        <div class="col-lg-6 p-4">
            <!-- 頂部搜尋欄 -->
            <div class="input-group mb-4">
                <button class="btn btn-outline-secondary dropdown-toggle border-end-0" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f8f9fa; color: #4a90e2;">
                    <i class="bi bi-search me-1"></i> 推薦組合
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">推薦組合</a></li>
                </ul>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="搜索產品...">
            </div>

            <!-- 推薦列表 (循環生成) -->
            <div class="recommend-list">
                <?php 
                $recommends = [
                    '$3400 AMD 細機文書組合',
                    '$4100 INTEL 文書組合',
                    '$6700 小遊戲煲劇睇片組合 (RTX 5050)',
                    '$7600 AMD +D5 RAM性價比電競組合 (RX9060XT 8GB)',
                    '$8200 R6 FPS 電競組合 (RTX 5060)',
                    '$8800 Intel 黑白配電競組合 (RTX 5060)',
                    '$8900 散熱通風閃閃閃電競組合 (RTX 5060TI 8G)',
                    '$9300 惡鬼滅殺鬼武者斬鬼組合 (RX 9060XT 16GB)',
                    '$11500 INTEL 海景水冷組合 (RTX 5070)',
                    '$12000 海景黑白機組合 (RTX 5060Ti 16GB)',
                    '$12700 AMD 海景水冷組合 (RX 9070)',
                    '$14350 4K 暢玩性價比組合 (RX 9070 XT)',
                    '$17100 INTEL x ASUS PBA全餐組合 (RTX5070)',
                    '$18100 2K滅鬼電競組合 (RTX 5070 TI)',
                    '$19100 4K 電競組合 (RTX 5070 TI)',
                    '$24650 4K海景電競組合(RTX 5080)',
                    '$28800 打機直播剪片多媒體應用組合 (RTX 5070 TI)',
                    '$46700 ASUS PBA 攻頂黑白配 (RTX 5080)'
                ];
                foreach ($recommends as $item): 
                ?>
                <div class="d-flex align-items-center border-bottom py-3 recommend-item">
                    <a href="#" class="text-dark me-3"><i class="bi bi-arrow-left"></i></a>
                    <div class="flex-grow-1">
                        <div class="text-dark"><?php echo $item; ?></div>
                        <div class="text-end text-muted small mt-1">2026-09-07</div>
                    </div>
                    <a href="#" class="text-muted mx-3"><i class="bi bi-trash"></i></a>
                    <a href="#" class="text-dark ms-1"><i class="bi bi-arrow-right"></i></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- === 底部：常見問題 (FAQ) === -->
    <div id="faq-section" class="mt-5 pt-5 pb-5">
        <h3 class="text-center mb-5 text-dark fw-normal">常見問題</h3>
        <div class="faq-content text-muted" style="font-size: 15px; line-height: 2;">
            <p><strong class="text-dark">Q01:你們有門市嗎？</strong><br>
            A01:香港終端全部產品免費送貨，是一家電子產品網上專門店，未設有門市。</p>
            
            <p><strong class="text-dark">Q02:電腦組合包含Windows嗎？</strong><br>
            A02:因大部分客人自己已有Windows，而Windows價錢又相對較高，全部砌機組合未包含Windows.</p>
            
            <p><strong class="text-dark">Q03:購買Windows會幫我安裝嗎？</strong><br>
            A03:若閣下同時購買Windows及電腦組合，我們將會負責安裝Windows及全部驅動程式。</p>

            <p><strong class="text-dark">Q04:可以分期付款嗎？</strong><br>
            A04:暫時未有分期付款，閣下可通過網上信用卡付款，然後向銀行自行申請。</p>

            <p><strong class="text-dark">Q05:選擇貨到付款需要付定金嗎？</strong><br>
            A05:貨到付款無需支付定金，可在收貨時支付全款。</p>

            <p><strong class="text-dark">Q06:如果我今天訂貨，幾時會送貨？</strong><br>
            A06:香港終端免費送貨為1-5個工作天，只需加$30就可3個工作天內送達，加$150可一個工作天送達。可在 <a href="#" class="text-decoration-none">這裡</a> 了解更多！</p>

            <p><strong class="text-dark">Q07:送貨時 是否會有產品包裝，配件，說明書，保養證明，光碟驅動？</strong><br>
            A07:購買產品後，我們會將全部產品包裝，配件，說明書，保養證明，光碟驅動一起發送.</p>
            
            <p><strong class="text-dark">Q08:產品壞了如何保養？</strong><br>
            A08:香港終端全部產品在享受香港代理保養的同時，亦為客人提供2個月免費上門收機檢查服務，免費線上支援及長達5年自攜機檢查服務，詳情請在 <a href="#" class="text-decoration-none">這裡</a> 了解</p>

            <p><strong class="text-dark">Q09:什麼是砌機服務？</strong><br>
            A09:$199享有砌機服務 包括組裝、首1個月硬件質量問題齊盒可安排換新、首2個月上門收機服務(僅限硬件問題)及五年免費自攜檢查服務。</p>

            <p><strong class="text-dark">Q10:什麼是上門收機服務？</strong><br>
            A10:香港終端所銷售產品均為100%全新香港行貨，電子產品仍會有機會出現問題，在香港終端購買砌機組合用戶可享受60日免費上門收機服務，30日內出現硬件質量問題(非人為，非軟件) 我們可直接上門收回電腦到維修部檢查並維修/更換。閣下可選擇付費延長此服務。</p>

            <p><strong class="text-dark">Q11:我需要購買散熱產品嗎？</strong><br>
            A11:一般砌機組合已包含原廠散熱器/風扇，但在有預算前提下，我們仍推薦高階砌機組合添加獨立CPU散熱/機箱風扇。</p>

            <p><strong class="text-dark">Q12:什麼是推薦組合？</strong><br>
            A12:電腦砌機市場價錢常有浮動並不斷有新版本硬件推出。為方便一般用家購買滿意電腦， 香港終端會根據使用需求，提供最新推薦組合， 方便用家購買。 閣下可在推薦組合基礎上更改自己喜歡的硬件，以滿足不同需求。</p>

            <p><strong class="text-dark">Q13:我可以更換推薦組合的機箱/硬件嗎？</strong><br>
            A13:閣下可在非精簡模式下修改/添加硬件。</p>
        </div>
    </div>
</div>

<!-- 簡易模式切換邏輯 -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // 1. 簡易模式切換邏輯
    // ==========================================
    const simpleModeCheckbox = document.getElementById('simpleMode');
    const detailedParts = document.getElementById('detailed-parts');
    const simpleModeContent = document.getElementById('simple-mode-content');

    if (simpleModeCheckbox) {
        simpleModeCheckbox.addEventListener('change', function() {
            if (this.checked) {
                detailedParts.classList.add('d-none');
                simpleModeContent.classList.remove('d-none');
            } else {
                detailedParts.classList.remove('d-none');
                simpleModeContent.classList.add('d-none');
            }
        });
    }

    // ==========================================
    // 2. 砌機服務打勾金額計算邏輯
    // ==========================================
    const checkService = document.getElementById('checkService');
    const totalPrice = document.getElementById('total-price');

    if (checkService && totalPrice) {
        checkService.addEventListener('change', function() {
            if (this.checked) {
                // 如果打勾，總額為 $199
                totalPrice.textContent = '$199';
            } else {
                // 如果取消打勾，總額為 $0
                totalPrice.textContent = '$0';
            }
        });
    }

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const targetId = 'builder-section';
    const targetElement = document.getElementById(targetId);

    if (!targetElement) return;

    // ==========================================
    // 1. 處理「從其他頁面跳轉過來」的平滑滾動
    // ==========================================
    if (window.location.hash === '#' + targetId) {
        // 先移除網址列的 #，防止瀏覽器之後又瞬間跳轉
        history.replaceState(null, null, window.location.pathname);
        
        // 強制先回到頂部 (避免看到瞬間跳下去的閃爍)
        window.scrollTo(0, 0);

        // 稍微延遲一下，確保頁面渲染完成，然後執行平滑滾動
        setTimeout(() => {
            smoothScrollTo(targetElement);
        }, 1000); 
    }

    // ==========================================
    // 2. 處理「已經在 build.php，點擊導航欄」的平滑滾動
    // ==========================================
    const navLinks = document.querySelectorAll('a');
    navLinks.forEach(link => {
        // 尋找包含 build.php#builder-section 或 #builder-section 的連結
        if (link.getAttribute('href') && link.getAttribute('href').includes('#' + targetId)) {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // 阻止瞬間跳轉
                smoothScrollTo(targetElement);
            });
        }
    });

    // ==========================================
    // 核心平滑滾動動畫函數
    // ==========================================
        // ==========================================
    // 核心平滑滾動動畫函數 (優化結尾滑順度)
    // ==========================================
        // ==========================================
    // 核心平滑滾動動畫函數 (移除強制跳轉)
    // ==========================================
    function smoothScrollTo(element) {
        // 取得元素距離頂部的位置，減去 20px 留一點上邊距
        const targetPosition = element.getBoundingClientRect().top + window.scrollY - 20;
        const startPosition = window.scrollY;
        const distance = targetPosition - startPosition;
        
        // 如果距離太近，直接跳過動畫（比如已經在目標位置了）
        if (Math.abs(distance) < 5) return;

        const duration = 4000; // 1 秒
        let start = null;

        window.requestAnimationFrame(function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            
            // 確保進度不會超過 1
            let t = Math.min(progress / duration, 1);
            
            // easeOutCubic 緩動函數
            const easeOut = 1 - Math.pow(1 - t, 3);
            
            // 計算當前位置，並四捨五入
            const currentPosition = startPosition + (distance * easeOut);
            window.scrollTo(0, Math.round(currentPosition));
            
            // 如果還沒到達時間，且距離目標大於 1 像素，繼續下一幀
            if (progress < duration && Math.abs(targetPosition - window.scrollY) > 1) {
                window.requestAnimationFrame(step);
            }
            // 移除了 else 裡面的強制 window.scrollTo
        });
    }
});
</script>

<?php
// 引入底部
include 'includes/footer.php';
?>