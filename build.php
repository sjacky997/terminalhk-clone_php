<?php
/**
 * Group: 5
 * Members: Jacky (23577648), James (25530933), Tsoi Kit (25525116)
 * Date: 2026-11-22
 * Assignment: Final Project Part II - TerminalHK
 *
 * Custom PC builder page: parts search, recommended builds and price summary.
 */
/**
 * Recommended builds, read from data/builds.xml.
 *
 * data/builds.xml : one <build> per row of the right-hand list.
 *                   <build id="n"> holds <name>, <price> and a <parts> block.
 *                   Each <part field="n"> fills one cell of the left-hand table,
 *                   where n is the index of $parts below (0 Windows ... 14 Software).
 *
 * load_xml() comes from includes/xml.php and returns null when the file is
 * missing or malformed, so the page can fall back to the static titles below.
 */
require_once __DIR__ . '/includes/xml.php';

$buildCatalog = [];
$buildsRoot = load_xml(__DIR__ . '/data/builds.xml');

if ($buildsRoot !== null) {
    foreach ($buildsRoot->build as $buildNode) {
        $buildId = (int) $buildNode['id'];
        $parts = [];
        $partPrices = [];

        foreach ($buildNode->parts->part as $partNode) {
            $field = (int) $partNode['field'];
            $parts[$field] = (string) $partNode;

            if ((string) $partNode['price'] !== '') {
                $partPrices[$field] = (int) $partNode['price'];
            }
        }

        $entry = [
            'name' => (string) $buildNode->name,
            'price' => (int) $buildNode->price,
            'parts' => $parts,
        ];

        if ($partPrices) {
            $entry['partPrices'] = $partPrices;
        }

        $buildCatalog[$buildId] = $entry;
    }

    ksort($buildCatalog);
}


// Include header
include 'includes/header.php';
?>

<!-- Main content -->
<div class="container my-4">
    
    <!-- Breadcrumb navigation -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">首頁</a></li>
            <li class="breadcrumb-item active text-dark" aria-current="page">自選砌機</li>
        </ol>
    </nav>

    <!-- Custom build wrapper -->
    <div class="row border rounded bg-white" id="builder-section">
        
        <!-- === Left: build details (6 columns) === -->
        <div class="col-lg-6 border-end p-4">
            <!-- Title row -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0 text-dark fw-normal">組合詳情 <a href="#faq-section" class="text-muted text-decoration-none fs-6 ms-2">常見問題</a></h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="simpleMode">
                    <label class="form-check-label text-muted" for="simpleMode">
                        簡易模式
                    </label>
                </div>
            </div>

            <!-- Parts list (normal mode, shown by default) -->
             <div class="parts-list" id="detailed-parts">
                <?php 
                $parts = ['Windows', 'CPU', '主機板', '顯示卡', 'RAM', '火牛', 'HDD', 'SSD', '機箱', '光碟機', '散熱', '無線上網卡', '顯示器', '鍵盤/滑鼠/遊戲手制', '軟件'];
                foreach ($parts as $partIndex => $part):
                ?>
                <div class="part-item border-bottom py-3">
                    <div class="text-dark mb-1"><?php echo $part; ?></div>
                    <div class="d-flex align-items-center text-muted search-part">
                        <?php echo icon_svg('search', 'me-2'); ?>

                        <input type="text" class="form-control border-0 shadow-none p-0 bg-transparent" data-part="<?php echo $partIndex; ?>" placeholder="搜索/加入<?php echo $part; ?>">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Simple-mode content: placeholder or compact part list -->
            <div id="simple-mode-content" class="d-none py-4 border-bottom">
                <div id="simple-placeholder" class="text-center text-muted py-4">
                    請加入電腦組合或硬件
                </div>
                <div id="simple-build" class="d-none">
                    <div id="simple-build-rows"></div>
                    <div class="text-end text-muted small mt-3">產品: <span class="text-dark" id="simple-build-price"></span></div>
                </div>
            </div>
            <span id="trash-icon-source" class="d-none"><?php echo icon_svg('trash'); ?></span>


            <!-- Left-side summary -->
            <div class="mt-4">
                <div class="d-flex justify-content-end align-items-center mb-2">
                    <span class="text-muted me-2">服務:</span>
                    <select class="form-select form-select-sm w-auto border-secondary rounded-0">
                        <option>上門收機服務 (60日) - $0</option>
                    </select>
                </div>
                <div class="text-end mb-2 text-muted">
                    產品: <span class="text-dark" id="parts-price">$0</span>
                </div>
                <div class="text-end mb-3 text-muted">
                    砌機: <span class="text-dark">$199</span> 
                    <div class="form-check d-inline-block ms-2">
                        <!-- Make sure this input has id="checkService" -->
                        <input class="form-check-input" type="checkbox" id="checkService" checked>
                        <label class="form-check-label text-dark" for="checkService">
                            [5年免費自攜機檢查服務]
                        </label>
                    </div>
                </div>
                
                <!-- Add id="total-price" to the $199 total here -->
                <div class="text-end mb-3">
                    <span class="text-muted">總額:</span> <span class="fs-5 text-dark fw-bold" id="total-price">$199</span>
                </div>
                <div class="text-end">
                    <button class="btn btn-add-cart px-4 py-2">加入購物車</button>
                </div>
            </div>
        </div>

        <!-- === Right: recommended builds (6 columns) === -->
        <div class="col-lg-6 p-4">
            <!-- Search bar at the top -->
            <div class="input-group mb-4">
                <button class="btn btn-outline-secondary dropdown-toggle border-end-0" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: var(--color-surface-alt); color: var(--color-primary-strong);">
                    <?php echo icon_svg('search', 'me-1'); ?> 推薦組合
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">推薦組合</a></li>
                </ul>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="搜索產品...">
            </div>

            <!-- Recommended list (generated in a loop) -->
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
                // Fallback: if data/builds.xml is missing, keep the list usable
                // by rebuilding it from the static titles above.
                if (!$buildCatalog) {
                    foreach ($recommends as $fallbackIndex => $fallbackTitle) {
                        $buildCatalog[$fallbackIndex] = [
                            'name' => $fallbackTitle,
                            'price' => 0,
                            'parts' => [],
                        ];
                    }
                }

                foreach ($buildCatalog as $buildIndex => $build):

                ?>
                <div class="d-flex align-items-center border-bottom py-3 recommend-item">
                    <a href="#" class="text-dark me-3 apply-build" data-build="<?php echo $buildIndex; ?>" title="加入左邊表格"><?php echo icon_svg('arrow-left'); ?></a>
                    <div class="flex-grow-1">
                        <div class="text-dark apply-build" data-build="<?php echo $buildIndex; ?>" style="cursor: pointer;"><?php echo e($build['name']); ?></div>

                        <div class="text-end text-muted small mt-1">2026-09-07</div>
                    </div>
                    <a href="#" class="text-muted mx-3"><?php echo icon_svg('trash'); ?></a>
                    <a href="#" class="text-dark ms-1"><?php echo icon_svg('arrow-right'); ?></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- === Bottom: FAQ === -->
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

<!-- Simple-mode toggle logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // 1. Simple-mode toggle
    // ==========================================
    const simpleModeCheckbox = document.getElementById('simpleMode');
    const detailedParts = document.getElementById('detailed-parts');
    const simpleModeContent = document.getElementById('simple-mode-content');
    const simplePlaceholder = document.getElementById('simple-placeholder');
    const simpleBuild = document.getElementById('simple-build');
    const simpleBuildRows = document.getElementById('simple-build-rows');
    const simpleBuildPrice = document.getElementById('simple-build-price');
    const trashIcon = document.getElementById('trash-icon-source').innerHTML;
    const partLabels = Array.from(document.querySelectorAll('#detailed-parts .part-item > .text-dark'))
        .map(function (label) { return label.textContent.trim(); });
    const buildInputs = document.querySelectorAll('#detailed-parts input[data-part]');
    let selectedPrice = 0;
    let currentBuild = null;

    // Escape text before inserting it into HTML so a product name cannot break the markup.
    // Input: text (string). Output: HTML-safe string.
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // Draw the simple-mode part list from currentBuild and its optional unit prices.
    // Input: none (reads currentBuild, selectedPrice). Output: none (updates the DOM).
    function renderSimpleMode() {
        if (!currentBuild) {
            if (simplePlaceholder) simplePlaceholder.classList.remove('d-none');
            if (simpleBuild) simpleBuild.classList.add('d-none');
            return;
        }
        if (simplePlaceholder) simplePlaceholder.classList.add('d-none');
        if (simpleBuild) simpleBuild.classList.remove('d-none');

        const rows = [];
        partLabels.forEach(function (label, index) {
            const value = currentBuild.parts && currentBuild.parts[index];
            if (value) {
                rows.push('<div class="d-flex justify-content-between align-items-center border-bottom py-2">'
                    + '<div class="flex-grow-1">'
                    + '<div class="text-dark small">' + escapeHtml(label) + '</div>'
                    + '<div class="text-primary small">' + escapeHtml(value) + '</div>'
                    + '</div>'
                    + (currentBuild.partPrices && currentBuild.partPrices[index]
                        ? '<span class="text-muted small me-3">' + money(currentBuild.partPrices[index]) + '</span>'
                        : '')
                    + '<a href="#" class="text-muted ms-3 remove-simple-part" data-index="' + index + '">'
                    + trashIcon + '</a></div>');
            } else if (index === 0) {
                rows.push('<div class="border-bottom py-2">'
                    + '<div class="text-dark small">Windows</div>'
                    + '<div class="text-muted small">搜尋/加入Windows</div></div>');
            }
        });
        if (simpleBuildRows) simpleBuildRows.innerHTML = rows.join('');
        if (simpleBuildPrice) simpleBuildPrice.textContent = money(selectedPrice);
    }

    // Remove one part from both modes.
    document.addEventListener('click', function (event) {
        const removeButton = event.target.closest('.remove-simple-part');
        if (!removeButton) return;
        event.preventDefault();
        const index = Number(removeButton.dataset.index);
        if (buildInputs[index]) buildInputs[index].value = '';
        if (currentBuild && currentBuild.parts) delete currentBuild.parts[index];
        renderSimpleMode();
    });

    if (simpleModeCheckbox) {
        simpleModeCheckbox.addEventListener('change', function() {
            if (this.checked) {
                detailedParts.classList.add('d-none');
                simpleModeContent.classList.remove('d-none');
            } else {
                detailedParts.classList.remove('d-none');
                simpleModeContent.classList.add('d-none');
            }
            renderSimpleMode();
        });
    }

    // ==========================================
    // 2. Total calculation + 3. Apply recommended build
    // ==========================================
    const checkService = document.getElementById('checkService');
    const totalPrice = document.getElementById('total-price');
    const partsPrice = document.getElementById('parts-price');
    const buildCatalog = <?php echo json_encode($buildCatalog, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;

    // Format a number as a dollar amount, e.g. 3463 -> "$3,463".
    // Input: value (number). Output: formatted string.
    function money(value) {
        return '$' + Number(value).toLocaleString('en-US');
    }
    
    // Recalculate the grand total = parts price + $199 build service when ticked.
    // Input: none (reads selectedPrice and checkService). Output: none (updates #total-price).
    function updateTotal() {
        const service = (checkService && checkService.checked) ? 199 : 0;
        if (totalPrice) {
            totalPrice.textContent = money(selectedPrice + service);
        }
    }

    if (checkService) {
        checkService.addEventListener('change', updateTotal);
    }

    // Click the left arrow or the build name to fill the left-hand table.
    document.querySelectorAll('.apply-build').forEach(function(target) {
        target.addEventListener('click', function(event) {
            event.preventDefault();

            const build = buildCatalog[this.dataset.build];
            if (!build) {
                return;
            }

            // Keep both modes in sync: remember the chosen build for the simple view.
            currentBuild = {
                parts: Object.assign({}, build.parts),
                partPrices: build.partPrices ? Object.assign({}, build.partPrices) : null
            };

            buildInputs.forEach(function(input, index) {
                input.value = (build.parts && build.parts[index] !== undefined)
                    ? build.parts[index]
                    : '';
            });

            selectedPrice = Number(build.price) || 0;
            if (partsPrice) {
                partsPrice.textContent = money(selectedPrice);
            }
            updateTotal();
            renderSimpleMode();

            // Highlight the chosen row only.
            document.querySelectorAll('.recommend-item').forEach(function(row) {
                row.classList.remove('bg-light');
            });
            const chosenRow = this.closest('.recommend-item');
            if (chosenRow) {
                chosenRow.classList.add('bg-light');
            }
        });
    });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const targetId = 'builder-section';
    const targetElement = document.getElementById(targetId);

    if (!targetElement) return;

    // ==========================================
    // 1. Smooth scroll when arriving from another page
    // ==========================================
    if (window.location.hash === '#' + targetId) {
        // Remove the # from the URL first so the browser does not jump again
        history.replaceState(null, null, window.location.pathname);
        
        // Force the page to the top first to avoid a visible jump
        window.scrollTo(0, 0);

        // Wait briefly for rendering, then start the smooth scroll
        setTimeout(() => {
            smoothScrollTo(targetElement);
        }, 1000); 
    }

    // ==========================================
    // 2. Smooth scroll when a navigation link is clicked while already on build.php
    // ==========================================
    const navLinks = document.querySelectorAll('a');
    navLinks.forEach(link => {
        // Find links containing build.php#builder-section or #builder-section
        if (link.getAttribute('href') && link.getAttribute('href').includes('#' + targetId)) {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the instant jump
                smoothScrollTo(targetElement);
            });
        }
    });

    // ==========================================
    // Core smooth-scroll animation
    // ==========================================
        // ==========================================
    // Core smooth-scroll animation (smoother ending)
    // ==========================================
        // ==========================================
    // Core smooth-scroll animation (no forced jump)
    // ==========================================
    function smoothScrollTo(element) {
        // Get the element position and subtract 20px for top spacing
        const targetPosition = element.getBoundingClientRect().top + window.scrollY - 20;
        const startPosition = window.scrollY;
        const distance = targetPosition - startPosition;
        
        // Skip the animation when the distance is too small (already at the target)
        if (Math.abs(distance) < 5) return;

        const duration = 4000; // 4 seconds (4000 ms)
        let start = null;

        window.requestAnimationFrame(function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            
            // Keep progress within 1
            let t = Math.min(progress / duration, 1);
            
            // easeOutCubic easing function
            const easeOut = 1 - Math.pow(1 - t, 3);
            
            // Calculate and round the current position
            const currentPosition = startPosition + (distance * easeOut);
            window.scrollTo(0, Math.round(currentPosition));
            
            // Continue to the next frame until the duration ends and the target is within 1px
            if (progress < duration && Math.abs(targetPosition - window.scrollY) > 1) {
                window.requestAnimationFrame(step);
            }
            // Removed the forced window.scrollTo from the else branch
        });
    }
});
</script>

<?php
// Include footer
include 'includes/footer.php';
?>