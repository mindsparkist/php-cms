// loader
 $(window).on("load", function () {
   $(".loader-container").fadeOut(5000);
 });
//video
const toggle_video = () => {
  const covid19_video = document.querySelector(".covid19_video");
  const video = document.querySelector("video");
  covid19_video.classList.toggle("active");
  video.pause();
  video.currentTime = 0;
};
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
  let icons = document.getElementsByClassName("icon-accordian");
  
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
 
  // darkmode
  const options = {
    bottom: "64px", // default: '32px'
    right: "unset", // default: '32px'
    left: "32px", // default: 'unset'
    time: "0.5s", // default: '0.3s'
    mixColor: "#fff", // default: '#fff'
    backgroundColor: "#fff", // default: '#fff'
    buttonColorDark: "#100f2c", // default: '#100f2c'
    buttonColorLight: "#fff", // default: '#fff'
    saveInCookies: true, // default: true,
    label: "🌓", // default: ''
    autoMatchOsTheme: true, // default: true
  };

  const darkmode = new Darkmode(options);
  darkmode.showWidget();