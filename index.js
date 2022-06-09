$(document).ready(function() {
    // Toggle menu on click
    $("#menu-toggler").click(function() {
      toggleBodyClass("menu-active");
    });
  
    function toggleBodyClass(className) {
      document.body.classList.toggle(className);
    }
  
   });
   setTimeout(function(){
    $('.loader_bg').fadeToggle();
}, 1500);

// about js




// index continuation js

let heroCarouselIndicators = select("#hero-carousel-indicators")
    let heroCarouselItems = select('#heroCarousel .carousel-item', true)
  
    heroCarouselItems.forEach((item, index) => {
      (index === 0) ?
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
        heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
    });


// button
