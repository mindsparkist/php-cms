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
