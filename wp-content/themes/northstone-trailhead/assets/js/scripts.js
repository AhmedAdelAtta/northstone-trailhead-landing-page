document.addEventListener("DOMContentLoaded", () => {
  const mainImage = document.getElementById("active-image");

  const thumbnails = document.querySelectorAll(".thumb");

  const prevBtn = document.querySelector(".gallery-prev");

  const nextBtn = document.querySelector(".gallery-next");

  let currentIndex = 0;

  function showImage(index) {
    const image = thumbnails[index].dataset.image;

    mainImage.src = image;

    thumbnails.forEach((thumb) => thumb.classList.remove("active"));

    thumbnails[index].classList.add("active");

    currentIndex = index;
  }

  thumbnails.forEach((thumb, index) => {
    thumb.addEventListener("click", () => {
      showImage(index);
    });
  });

  nextBtn.addEventListener("click", () => {
    const next = (currentIndex + 1) % thumbnails.length;

    showImage(next);
  });

  prevBtn.addEventListener("click", () => {
    const prev = (currentIndex - 1 + thumbnails.length) % thumbnails.length;

    showImage(prev);
  });

  let startX = 0;

  mainImage.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  mainImage.addEventListener("touchend", (e) => {
    const endX = e.changedTouches[0].clientX;

    const distance = startX - endX;

    if (distance > 50) {
      const next = (currentIndex + 1) % thumbnails.length;

      showImage(next);
    } else if (distance < -50) {
      const prev = (currentIndex - 1 + thumbnails.length) % thumbnails.length;

      showImage(prev);
    }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".testimonial-slide");

  const dotsContainer = document.querySelector(".slider-dots");

  let current = 0;

  slides.forEach((slide, index) => {
    const dot = document.createElement("button");

    dot.classList.add("slider-dot");

    if (index === 0) {
      dot.classList.add("active");
    }

    dot.addEventListener("click", () => {
      showSlide(index);
    });

    dotsContainer.appendChild(dot);
  });

  const dots = document.querySelectorAll(".slider-dot");

  function showSlide(index) {
    slides.forEach((slide) => slide.classList.remove("active"));

    dots.forEach((dot) => dot.classList.remove("active"));

    slides[index].classList.add("active");

    dots[index].classList.add("active");

    current = index;
  }

  setInterval(() => {
    let next = current + 1;

    if (next >= slides.length) {
      next = 0;
    }

    showSlide(next);
  }, 5000);
});
