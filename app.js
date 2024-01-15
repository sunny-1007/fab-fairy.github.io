window.addEventListener('scroll', e => {
  document.body.style.cssText += `--scrollTop: ${this.scrollY}px`
})
gsap.registerPlugin(ScroolTrigger, ScroolSmoother)
ScroolSmother.create({
  wrapper: '.wrapper',
  content: '.content'
})

const goTopBth = document.querySelector(".go-top");

goTopBth.addEventListener("click", goTop);

function goTop() {
  if (window.pageYOffset > 0) {
    window.scrollBy(0, -75);
    setTimeout(goTop, 0);
  }
}
