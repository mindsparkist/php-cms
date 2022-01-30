// loader

 // $(window).on("load", function () {
 //   $(".loader-container").fadeOut(5000);
 // });

//slider
$(".slider").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000, //2000ms = 2s;
    autoplayHoverPause: true,
  });
  // Accordian
  let toggles = document.getElementsByClassName("toggle-accordian");
  let contentDiv = document.getElementsByClassName("content-accordian");
  let icons = document.getElementsByClassName("icon");
  
  for (let i = 0; i < toggles.length; i++) {
    toggles[i].addEventListener("click", () => {
      if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
        contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
        toggles[i].style.color = "#fff";
        icons[i].classList.remove("fa-plus");
        icons[i].classList.add("fa-minus");
      } else {
        contentDiv[i].style.height = "0px";
        toggles[i].style.color = "#fff";
        icons[i].classList.remove("fa-minus");
        icons[i].classList.add("fa-plus");
      }
  
      for (let j = 0; j < contentDiv.length; j++) {
        if (j !== i) {
          contentDiv[j].style.height = "0px";
          toggles[j].style.color = "#fff";
          icons[j].classList.remove("fa-minus");
          icons[j].classList.add("fa-plus");
        }
      }
    });
  }
  
// map
var mapDiv = document.getElementById("map-canvas");
mapDiv.style.display = "none";

var typed = new Typed("#typed", {
  stringsElement: "#typed-strings",
  backSpeed: 50,
  typeSpeed: 50,
  loop: true,
});
// google Map Conf
const map = new google.maps.Map(document.getElementById("map-canvas"), {
  center: {
    lat: 24.175903,
    lng: 88.280182,
  },
  zoom: 15,
});

const marker = new google.maps.Marker({
  position: {
    lat: 24.175903,
    lng: 88.280182,
  },
  map: map,
});
// btn click
$("button").click(function (e) {
  e.preventDefault();
  mapDiv.style.display = "block";
  var lat = $(this).data("lat");
  var lng = $(this).data("lng");
  var location = new google.maps.LatLng(lat, lng);
  map.setCenter(location);
  marker.setPosition(location);
});
// video js
