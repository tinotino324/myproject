

// nav

const hamburger = document.getElementById('hamburger');

  const navLinks = document.getElementById('navLinks');



  hamburger.addEventListener('click', () => {

    navLinks.classList.toggle('show');

  });



  // header

  const navbar = document.getElementById('navbar');



window.addEventListener('scroll', () => {

    if (window.scrollY > 50) { // Adjust this value based on when you want the color to change

        navbar.classList.add('scrolled');

    } else {

        navbar.classList.remove('scrolled');

    }

});

// slide

let currentSlide = 0;

const slides = document.querySelectorAll('.slide');

const dots = document.querySelectorAll('.dot');

let slideInterval = setInterval(nextSlide, 5000); // Auto-slide every 5 seconds



function changeSlide(index) {

  slides.forEach((slide, i) => {

    slide.classList.remove('active');

    if (dots[i]) dots[i].classList.remove('active'); 

  });



  slides[index].classList.add('active');

  dots[index].classList.add('active');

  currentSlide = index;

}



function nextSlide() {

  currentSlide = (currentSlide + 1) % slides.length;

  changeSlide(currentSlide);

}



dots.forEach((dot, index) => {

  dot.addEventListener('click', () => {

    changeSlide(index);

    resetInterval();

  });

});



function resetInterval() {

  clearInterval(slideInterval);

  slideInterval = setInterval(nextSlide, 5000);

}

// services



  {/* count */}



  const stats = document.querySelectorAll('.stat-number');

  const speed = 1000; // Lower = faster



  stats.forEach(stat => {

    const animate = () => {

      const target = +stat.getAttribute('data-target');

      const current = +stat.innerText.replace(/[^\d]/g, '');

      const increment = target / speed;



      if (current < target) {

        stat.innerText = Math.ceil(current + increment);

        setTimeout(animate, 1);

      } else {

        stat.innerText = target;

      }

    };

    animate();

  });



  {/* review */}

  document.addEventListener("DOMContentLoaded", function () {

    const clientSlider = document.getElementById('client-slider');

    const nextBtn = document.getElementById('nextBtn');

    const prevBtn = document.getElementById('prevBtn');

  

    const cardWidth = clientSlider.querySelector('.client-card').offsetWidth + 20;

  

    // Auto Slide

    function autoSlide() {

      if (clientSlider.scrollLeft + clientSlider.offsetWidth >= clientSlider.scrollWidth) {

        clientSlider.scrollTo({ left: 0, behavior: 'smooth' });

      } else {

        clientSlider.scrollBy({ left: cardWidth, behavior: 'smooth' });

      }

    }

  

    let autoSlideInterval = setInterval(autoSlide, 3000);

  

    // Pause auto slide on hover

    clientSlider.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));

    clientSlider.addEventListener('mouseleave', () => {

      autoSlideInterval = setInterval(autoSlide, 3000);

    });

  

    // Manual Slide

    nextBtn.addEventListener('click', () => {

      clientSlider.scrollBy({ left: cardWidth, behavior: 'smooth' });

    });

  

    prevBtn.addEventListener('click', () => {

      clientSlider.scrollBy({ left: -cardWidth, behavior: 'smooth' });

    });

  });

  

  // light box

  document.querySelectorAll('.popup-img').forEach(img => {

    img.addEventListener('click', function () {

      const modalImg = document.getElementById('modalImage');

      modalImg.src = this.src;



      // Reinitialize Panzoom on every open

      setTimeout(() => {

        const panzoom = Panzoom(modalImg, { maxScale: 5, contain: 'outside' });

        modalImg.parentElement.addEventListener('wheel', panzoom.zoomWithWheel);

      }, 200);

    });

  });