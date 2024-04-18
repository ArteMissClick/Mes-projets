document.addEventListener("DOMContentLoaded", function() {

// Apparition des titres
const observerTitle = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('title-appearance');
      return;
    }
  });
});

const titlesApp = document.querySelectorAll('.titles-page');

titlesApp.forEach((element) => observerTitle.observe(element));


// Apparition des sections
const observerSection = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('section-appearance');
      return;
    }
  });
});

const sectionsApp = document.querySelectorAll('.section-gen');

sectionsApp.forEach((element) => observerSection.observe(element));

// Skrollr

let s = skrollr.init()


// Vitesse fleurs au scroll


const selectorFlower = document.querySelectorAll('.rotate-1, .rotate-2');
document.addEventListener("scroll", () => {
  selectorFlower.forEach((flower) => {
    flower.style.setProperty('--rotateAfterFlower', 'rotating 5s linear infinite');
  });
});

document.addEventListener("scrollend", (event) => {
  selectorFlower.forEach((flower) => {
    flower.style.setProperty('--rotateAfterFlower', 'rotating 20s linear infinite');
  });
});

// Burger Menu

let siteNav = document.getElementById("all-header");
let openBtn = document.getElementById("openBtn");
let closeBtn = document.getElementById("closeBtn");
let siteTitle = document.getElementById("i-site-title");
let siteLogo = document.getElementById("logo-kou-burg");
let anchorTitles = document.querySelectorAll(".nav-anchor");
let noUl = document.getElementById("ul-nav");
let imgBurg = document.getElementById("i-img-burg");
let fadeTitles1 = document.querySelector(".a-active-1");
let fadeTitles2 = document.querySelector(".a-active-2");
let fadeTitles3 = document.querySelector(".a-active-3");
let fadeTitles4 = document.querySelector(".a-active-4");
let noScroll = document.getElementById("body-all");
let noFlower = document.getElementById("studio");
let noSwiper = document.getElementById("characters");


openBtn.onclick = openNav;
closeBtn.onclick = closeNav;
anchorTitles.forEach(function (anchor) {
  anchor.onclick = closeNav;
});


function openNav() {
  siteNav.classList.add("active-nav");
  siteNav.classList.remove("no-active-nav");
  closeBtn.classList.add("open-close");
  openBtn.classList.add("close-open");
  openBtn.classList.remove("open-open");
  noUl.classList.remove("no-active-ul");
  siteTitle.classList.add("site-title-active");
  siteLogo.classList.add("logo-koukaki-burg-active");
  imgBurg.classList.add("img-burg-active");
  fadeTitles1.classList.add("a-appearance-1");
  fadeTitles2.classList.add("a-appearance-2");
  fadeTitles3.classList.add("a-appearance-3");
  fadeTitles4.classList.add("a-appearance-4");
  noScroll.classList.add("no-scroll");
  noFlower.classList.add("opacity-nav");
  noSwiper.classList.add("opacity-nav");


}


function closeNav() {
  siteNav.classList.remove("active-nav");
  siteNav.classList.add("no-active-nav");
  closeBtn.classList.remove("open-close");
  openBtn.classList.remove("close-open");
  openBtn.classList.add("open-open");
  noUl.classList.add("no-active-ul");
  siteTitle.classList.remove("site-title-active");
  siteLogo.classList.remove("logo-koukaki-burg-active");
  imgBurg.classList.remove("img-burg-active");
  fadeTitles1.classList.remove("a-appearance-1");
  fadeTitles2.classList.remove("a-appearance-2");
  fadeTitles3.classList.remove("a-appearance-3");
  fadeTitles4.classList.remove("a-appearance-4");
  noScroll.classList.remove("no-scroll");
  noFlower.classList.remove("opacity-nav");
  noSwiper.classList.remove("opacity-nav");
}

// Parallax logo

setTimeout(() => {
  const title = document.querySelector('.logo-koukaki');
  const heightLogo = title.offsetHeight;

  console.log(title)
  console.log(heightLogo);

  window.addEventListener('scroll', function () {
    const scrollPosition = window.scrollY;
    if (scrollPosition < ((heightLogo / 3.5))) {
      title.style.transform = `translateY(${scrollPosition}px)`;
    };
  });
}, 1501);




});

