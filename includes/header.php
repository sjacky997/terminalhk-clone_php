<!DOCTYPE html>
<html lang="zh-HK">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>香港終端 Terminal HK</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- 自訂 CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <!-- 頂部資訊欄 -->
    <div class="top-bar">
        <div class="container d-flex justify-content-end align-items-center gap-4">
            <a href="contact.php" class="d-flex align-items-center text-decoration-none text-muted">
                <i class="bi bi-geo-alt-fill icon-green"></i> 客服部地址
            </a>
            <span class="d-flex align-items-center">
                <i class="bi bi-telephone-fill icon-green"></i> 37047358
            </span>
            <span class="d-flex align-items-center">
                <i class="bi bi-whatsapp icon-green"></i> 64066698
            </span>
            <a href="#">訂單</a>
            <a href="#">幫助</a>
            <a href="#">聯絡</a>
            <a href="#">關於</a>
            <!-- 登錄/註冊下拉選單 -->
<div class="dropdown">
    <!-- 觸發按鈕 -->
    <a href="#" class="text-muted text-decoration-none dropdown-toggle" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        登錄 / 註冊
    </a>
    
    <!-- 下拉選單內容 -->
    <div class="dropdown-menu dropdown-menu-end login-dropdown shadow-sm" aria-labelledby="loginDropdown">
        <form class="px-3 py-2">
            <!-- 郵箱輸入 -->
            <div class="mb-3">
                <label for="loginEmail" class="form-label text-dark small mb-1">用戶郵箱</label>
                <input type="email" class="form-control" id="loginEmail" placeholder="用戶郵箱">
            </div>
            
            <!-- 密碼輸入 -->
            <div class="mb-4">
                <label for="loginPassword" class="form-label text-dark small mb-1">密碼</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="密碼">
            </div>
            
            <!-- 按鈕區 -->
            <div class="d-flex align-items-center gap-2">
                <button type="submit" class="btn btn-login px-3">登錄</button>
                <button type="button" class="btn btn-login px-3">註冊</button>
                <div class="ms-auto d-flex gap-2">
                    <a href="#" class="text-dark text-decoration-none small text-nowrap">更改密碼</a>
                    <a href="#" class="text-dark text-decoration-none small text-nowrap">忘記密碼</a>
                </div>
            </div>
        </form>
    </div>
</div>
        </div>
    </div>

    <!-- 主頭部 -->
    <header class="header-main">
        <div class="container">
            <div class="row">
                
                <!-- 左側：Logo 區塊 (佔用 2 欄) -->
                <div class="col-lg-2 mb-3 mb-lg-0">
                    <div class="logo-wrapper">
                        <a href="index.php">
                            <!-- 你的 T 圖標 -->
                            <img src="assets/images/logo/logo.png" alt="Logo">
                        </a>
                        <!-- 下方的文字。如果你的 logo.png 已經包含文字，請把這行 div 刪除 -->
                        <div class="logo-text">
                            <span class="text-gray">香港</span><span class="highlight">終端</span>
                        </div>
                    </div>
                </div>

                <!-- 右側：導航與搜尋 (佔用 10 欄) -->
                <div class="col-lg-10 d-flex flex-column justify-content-between">
                    
                    <!-- 導航欄 -->
                    <?php 
// 取得當前運行的檔案名稱 (例如 index.php, products.php)
$current_page = basename($_SERVER['PHP_SELF']); 
// 如果直接輸入 localhost:3000/terminalhk_project/ 沒寫 index.php，則手動設定為 index.php
if ($current_page == '' || $current_page == 'terminalhk_project') {
    $current_page = 'index.php';
}
?>
<div class="nav-container">
    <ul class="nav nav-menu mb-0">
        <!-- 首頁 -->
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">首頁</a>
        </li>
        
        <!-- GameBox -->
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'gamebox.php') ? 'active' : ''; ?>" href="gamebox.php">GameBox</a>
        </li>
        
        <!-- 產品目錄 -->
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'products.php') ? 'active' : ''; ?>" href="products.php">產品目錄</a>
        </li>
        
        <!-- 砌機組合 (假設檔案為 build.php) -->
         <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'build.php') ? 'active' : ''; ?>" href="build.php#builder-section">砌機組合</a>
        </li>
        
        <!-- 常見問題 (假設檔案為 faq.php) -->
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?>" href="#">常見問題</a>
        </li>
        
        <!-- 聯絡我們 (假設檔案為 contact.php) -->
        <li class="nav-item">
            <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">聯絡我們</a>
        </li>
    </ul>
</div>

                    <!-- 搜尋框與購物車 -->
                    <div class="search-section d-flex align-items-center">
                        <form class="d-flex flex-grow-1" role="search">
                            <input class="form-control search-input" type="search" placeholder="搜索..." aria-label="Search">
                            <button class="btn btn-search" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                        <a href="#" class="btn btn-cart d-flex align-items-center justify-content-center">
                            購物車(0)
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </header>