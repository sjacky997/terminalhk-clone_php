document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll("#bannerSlides img");
    const dots = document.querySelectorAll("#sliderDots span");
    let currentSlide = 0;
    const totalSlides = slides.length;

    // 切換到指定圖片的函數
    function goToSlide(index) {
        // 移除所有 active class
        slides.forEach(slide => slide.classList.remove("active"));
        dots.forEach(dot => dot.classList.remove("active"));

        // 加上 active class 到當前圖片和圓點
        slides[index].classList.add("active");
        dots[index].classList.add("active");
        currentSlide = index;
    }

    // 自動輪播 (每 4 秒切換一次)
    let slideInterval = setInterval(() => {
        let nextSlide = (currentSlide + 1) % totalSlides;
        goToSlide(nextSlide);
    }, 4000);

    // 點擊圓點切換
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            clearInterval(slideInterval); // 點擊時重置計時器
            goToSlide(index);
            // 重新開始自動輪播
            slideInterval = setInterval(() => {
                let nextSlide = (currentSlide + 1) % totalSlides;
                goToSlide(nextSlide);
            }, 4000);
        });
    });
});