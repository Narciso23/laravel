<div class="slider-container">
  <div class="slides">
    <div class="slide"><img src="{{asset('fontend/images/sl1.jpeg')}}" width="100%" height="50%" alt="Slide 1"></div>
    <div class="slide"><img src="{{asset('fontend/images/sl1.jpeg')}}" width="100%" height="50%" alt="Slide 2"></div>
    <div class="slide"><img src="{{asset('fontend/images/sl1.jpeg')}}" width="100%" height="50%" alt="Slide 3"></div>
    <!-- Add more slides as needed -->
  </div>
  <button class="nav-icon prev" onclick="prevSlide">&#9665;</button>
  <button class="nav-icon next" onclick="nextSlide">&#9655;</button>
</div>

<script>
  const slides = document.querySelector('.slides');
  let slideIndex = 0;

  function showSlides() {
    slides.style.transform = `translateX(${-slideIndex * 100}%)`;
  }

  function nextSlide() {
    slideIndex++;
    if (slideIndex >= slides.children.length) {
      slideIndex = 0;
    }
    showSlides();
  }

  function prevSlide() {
    slideIndex--;
    if (slideIndex < 0) {
      slideIndex = slides.children.length - 1;
    }
    showSlides();
  }

  setInterval(nextSlide, 3000); // Change slide every 3 seconds, adjust as needed
</script>