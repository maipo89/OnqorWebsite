$(document).ready(function(){
    gsap.registerPlugin(ScrollTrigger);

    // left right shift anim
    $('.anim-horizontal').each(function(index, item) {
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: item,
                start: "top 80%", 
                end: "bottom 20%", 
                markers: false
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
                markers: false
            }
        });
        tl.to(fade, { opacity: 1, duration: 0.5 }); 
    });

    // stripe-pulse smooth animation
        gsap.fromTo('.stripe-pulse__item', 
        { height: '0%', opacity: 0 },  // Start state
        { 
            opacity: 1,  
            ease: 'power2.out',  
            duration: 2,
            stagger: 0.5,  // Stagger between each item
            height: (index) => {
            // Set different heights based on the index of each element
            return ['100%', '80%', '60%'][index];
            }
        }
        );

    
    // parallax
    gsap.to('.parallax-container > img', {
        yPercent: 160,
        ease: 'none',
        scrollTrigger: {
            trigger: '.parallax-container',
            scrub: true
        }
    });

    // stagegr fade
    $('.anim-fadeinstagger').each(function(index, item) {
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: item,
                start: "top 90%", 
                end: "bottom 20%", 
                markers: false
            }
        });
        tl.from(item, { opacity: 0, duration: 0.5, batch: 0.9 }); // Use batch instead of stagger
    });
    
    
    // number counter (use class anim-counter)
    gsap.utils.toArray(".anim-counter").forEach(function(counter) {
        var end = parseFloat(counter.getAttribute('data-end'));
        var obj = { val: 0 };
        var hasCounted = false;
    
        if (!isNaN(end)) { // Check if end is a valid number
            var integerPart = Math.floor(end);
            var decimalPart = end % 1;
            gsap.to(obj, {
                scrollTrigger: {
                    trigger: counter,
                    start: "top 90%",
                    onEnter: function() {
                        gsap.to(obj, {
                            duration: 2,
                            val: integerPart,
                            roundProps: "val",
                            onUpdate: function() {
                                if (!hasCounted) {
                                    counter.textContent = "" + obj.val;
                                }
                            },
                            onComplete: function() {
                                if (decimalPart > 0) {
                                    var formattedDecimal = decimalPart.toFixed(2).substring(1);

                                    formattedDecimal = formattedDecimal.replace(/0+$/, '');

                                    counter.textContent = obj.val + formattedDecimal;
                                }
                                hasCounted = true;
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

    words[1] = '<span>' + words[1] + '</span>';
    words[3] = '<span>' + words[3] + '</span>';

    var newContent = words.join(' ');
    document.getElementById('dynamicTitle').innerHTML = newContent;
    
});




