$(document).ready(function(){
    gsap.registerPlugin(ScrollTrigger);

    // left right fade in
    $('.anim-fade').each(function(index, item) {
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: item,
                start: "top 80%", 
                end: "bottom 20%", 
                markers: true
            }
        });
        tl.to(item, { x: 0 * index, opacity: 1, duration: 0.5 }); 
    });

    // number counter (use class anim-counter)
    gsap.utils.toArray(".anim-counter").forEach(function(counter) {
        var end = parseInt(counter.getAttribute('data-end'));
        var obj = { val: 0 };
    
        if (!isNaN(end)) { // Check if end is a valid number
            gsap.to(obj, {
                scrollTrigger: {
                    trigger: counter,
                    start: "top 90%",
                    // markers: true,
                    onEnter: function() {
                        gsap.to(obj, {
                            duration: 2,
                            val: end,
                            roundProps: "val",
                            onUpdate: function() {
                                counter.textContent = "+" + obj.val + "%";
                            }
                        });
                    }
                }
            });
        } else {
            console.error("Invalid data-end attribute for counter:", counter);
        }
    });
    
});




