

gsap.from("#header-mobile", { scrollTrigger: "#header-mobile", opacity: 0, duration: 1.5, ease: "power2.in", y: 200, delay:1 });
gsap.from("#second-section-mobile-img", {
    scrollTrigger: '#second-section-mobile-img',
    delay:1.4,
    opacity: 0,
    duration: 1,
    ease:"power1.in",
    x:-100
})

gsap.from('.second-second-anim', {scrollTrigger: ".second-second-anim", opacity:0, duration:1, y:-50, stagger:0.6})

gsap.from('.third-second-anim', {scrollTrigger: ".third-second-anim", opacity:0, duration:2,  stagger:0.6})



gsap.from(".fourth-section-first-card-anim", {
    scrollTrigger: '.fourth-section-first-card-anim',
    opacity: 0,
    delay:0.5,
    duration: 1,
    ease:"power1.in",
    x:-100
})

gsap.from(".fourth-section-second-card-anim", {
    scrollTrigger: '.fourth-section-second-card-anim',
    opacity: 0,
    delay:0.5,
    duration: 1,
    ease:"power1.in",
    y:100
})

gsap.from(".fourth-section-third-card-anim", {
    scrollTrigger: '.fourth-section-third-card-anim',
    opacity: 0,
    delay:0.5,
    duration: 1,
    ease:"power1.in",
    x:100
})

gsap.from('.fifth-section-anim', {scrollTrigger: ".fifth-section-anim", opacity:0, duration:2,y:500,  stagger:0.6})


gsap.from(".sixth-section-first-col", {
    scrollTrigger: '.sixth-section-first-col',
    opacity: 0,
    delay:0.5,
    duration: 1,
    ease:"sine.out",
    x:-500
})
gsap.from(".sixth-section-second-col", {
    scrollTrigger: '.sixth-section-second-col',
    opacity: 0,
    delay:0.5,
    duration: 1,
    ease:"power1.in",
   
})
gsap.from(".sixth-section-third-col", {
    scrollTrigger: '.sixth-section-third-col',
    opacity: 0,
    delay:0.5,
    duration: 1,
    ease:"sine.out",
    x:500
})

gsap.from(".seveth-section-anim", {
    scrollTrigger: '.seveth-section-anim',
    opacity: 0,
    delay:0.5,
    duration: 1,
    ease:"sine.out",
    y:50
})







