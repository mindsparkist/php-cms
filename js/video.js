const toggle_video = () => {
    const covid19_video = document.querySelector('.covid19_video');
    const video = document.querySelector('video');
    covid19_video.classList.toggle('active');
    video.pause();
    video.currentTime = 0;
}