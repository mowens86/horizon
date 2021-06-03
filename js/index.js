
/**
 * Nav Helpers
 */
const openNav = () => {
  if (screen.width < 900) document.getElementById("mySidebar").style.width = "100%";
  if (screen.width >= 900) document.getElementById("mySidebar").style.width = "20%";
}

const closeNav = () => {
  document.getElementById("mySidebar").style.width = "0";
}

/**
 * Audio file
 */
const music = document.getElementById("audio");
music.volume = 0.2;
window.onload = () => {
  setTimeout(() => {
    music.play();
  }, 5000)
}