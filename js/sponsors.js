a=[];
a=$(".row");
gsap.registerPlugin(ScrollTrigger);
for (var i = 0; i < a.length; i++) {
  gsap.from("."+a[i].classList[0]+" h2",{scrollTrigger:"."+a[i].classList[0],x:-300, duration: 2,opacity:0.2});
  gsap.from("."+a[i].classList[0]+" .col-sm-12",{scrollTrigger:"."+a[i].classList[0],x:-300, duration: 2,opacity:0.2});

}
