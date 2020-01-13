var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-60px";
  }
  prevScrollpos = currentScrollPos;
}

const left = document.querySelector('.left');
const right = document.querySelector('.right');
const container = document.querySelector('.container_split');

left.addEventListener('mouseenter', () => {
	container.classList.add('hover-left');
});

left.addEventListener('mouseleave', () => {
	container.classList.remove('hover-left');
});


right.addEventListener('mouseenter', () => {
	container.classList.add('hover-right');
});

right.addEventListener('mouseleave', () => {
	container.classList.remove('hover-right');
});


