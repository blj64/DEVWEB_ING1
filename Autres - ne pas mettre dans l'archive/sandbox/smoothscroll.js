// Smooth scrolling
import SmoothScroll from 'smoothscroll-for-websites';

const scroll = new SmoothScroll('a[href*="#"]', {
  speed: 500,
  speedAsDuration: true,
  easing: 'easeInOutQuad'
});