console.clear();

var flkty = new Flickity('.card-wrap', {
  contain: true,
  prevNextButtons: false,
  pageDots: false,
  wrapAround: true,
  adaptiveHeight: true,
  setGallerySize: false,
  selectedAttraction: 0.05,
  freeScrollFriction: .1 });console.clear();


  // button
  var btn = $("#button");

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass("show");
    } else {
      btn.removeClass("show");
    }
  });
  
  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });
  


  