//jshint esversion:6
a=[];
a=$(".container-fluid");
gsap.registerPlugin(ScrollTrigger);
for (var i = 0; i < a.length-1; i++) {
  gsap.from("."+a[i].classList[0]+" h1",{scrollTrigger:"."+a[i].classList[0],x:-300, duration: 2,opacity:0.2});
  gsap.from("."+a[i].classList[0]+" .l-card", {scrollTrigger:{trigger:"."+a[i].classList[0]},x:-300,y:100, duration: 2,opacity:0.2});
  gsap.from("."+a[i].classList[0]+" .r-card", {scrollTrigger:{trigger:"."+a[i].classList[0]},x:300,y:100, duration: 2,opacity:0.2});
}
gsap.from(".dt h1",{scrollTrigger:".dt",x:-300, duration: 2,opacity:0.2});
gsap.from(".dt .l-card",{scrollTrigger:".dt",x:-700,delay:0.75, duration: 2,opacity:0.2});
gsap.from(".dt .m-card",{scrollTrigger:".dt",x:-700,delay:0.25, duration: 2,opacity:0.2});
gsap.from(".dt .r-card",{scrollTrigger:".dt",x:-700, duration: 2,opacity:0.2});
