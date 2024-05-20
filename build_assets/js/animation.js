$(document).ready(function(){
    gsap.registerPlugin(ScrollTrigger);

    // left right shift anim
    $('.anim-horizontal').each(function(index, item) {
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
    
    // fade anim
    $('.anim-fadein').each(function(index, fade) {
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: fade,
                start: "top 80%", 
                end: "bottom 20%", 
                markers: true
            }
        });
        tl.to(fade, { opacity: 1, duration: 0.5 }); 
    });

    
    $('.anim-fadeinstagger').each(function(index, item) {
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: item,
                start: "top 90%", 
                end: "bottom 20%", 
                markers: true
            }
        });
        tl.to(item, { opacity: 1, duration: 0.5, batch: 0.9 }); // Use batch instead of stagger
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

    // add span to second/fourth word
    var oldContent = document.getElementById('dynamicTitle').textContent;
    var words = oldContent.split(' ');

    words[2] = '<span>' + words[2] + '</span>';
    words[4] = '<span>' + words[4] + '</span>';

    var newContent = words.join(' ');
    document.getElementById('dynamicTitle').innerHTML = newContent;
    
});




