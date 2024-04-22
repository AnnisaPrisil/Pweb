const mediaQuery = window.matchMedia('(max-width: 768px)');
const header = document.querySelector('header');
const toggler = document.getElementById('toggler');
const navbar = document.querySelector('.navbar');
const homeContent = document.querySelector('.home .content');
const iconsContainer = document.querySelector('.icons-container');

function handleMediaQuery(mediaQuery) {
  if (mediaQuery.matches) {
    header.querySelector('.fa-bars').style.display = 'block';
    navbar.style.position = 'absolute';
    navbar.style.top = '100%';
    navbar.style.left = '0';
    navbar.style.right = '0';
    navbar.style.background = '#eee';
    navbar.style.borderTop = '.1rem solid rgba(0,0,0,.1)';
    navbar.style.clipPath = 'polygon(0 0,100% 0,100% 0,0 0)';

    toggler.addEventListener('change', function() {
      if (this.checked) {
        navbar.style.clipPath = 'polygon(0 0,100% 0,100% 100%,0% 100%)';
      } else {
        navbar.style.clipPath = 'polygon(0 0,100% 0,100% 0,0 0)';
      }
    });

    navbar.querySelectorAll('a').forEach(function(link) {
      link.style.margin = '1.5rem';
      link.style.padding = '1.5rem';
      link.style.background = '#fff';
      link.style.border = '1rem solid rgba(0,0,0,.1)';
      link.style.display = 'block';
    });

    homeContent.querySelector('h3').style.fontSize = '5rem';
    homeContent.querySelector('span').style.fontSize = '2.5rem';

    iconsContainer.querySelectorAll('.icons').forEach(function(icon) {
      icon.querySelector('h3').style.fontSize = '2rem';
      icon.querySelector('span').style.fontSize = '1.7rem';
    });
  } else {
    header.querySelector('.fa-bars').style.display = 'none';
    navbar.style.position = '';
    navbar.style.top = '';
    navbar.style.left = '';
    navbar.style.right = '';
    navbar.style.background = '';
    navbar.style.borderTop = '';
    navbar.style.clipPath = '';

    toggler.removeEventListener('change', function() {});

    navbar.querySelectorAll('a').forEach(function(link) {
      link.style.margin = '';
      link.style.padding = '';
      link.style.background = '';
      link.style.border = '';
      link.style.display = '';
    });

    homeContent.querySelector('h3').style.fontSize = '';
    homeContent.querySelector('span').style.fontSize = '';

    iconsContainer.querySelectorAll('.icons').forEach(function(icon) {
      icon.querySelector('h3').style.fontSize = '';
      icon.querySelector('span').style.fontSize = '';
    });
  }
}

handleMediaQuery(mediaQuery);
mediaQuery.addListener(handleMediaQuery);