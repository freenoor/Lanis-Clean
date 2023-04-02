<div style="overflow: hidden;" class="top-footer">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M-0.27,116.94 C149.99,150.00 321.95,62.66 500.84,116.94 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #6ecfdc;"></path>
    </svg></div>
<div class="site-footer">

    <div class="container">
        <div class="widgetset-footer">
            <div class="row">
                <div class="col-lg-3 col-md-12 footers" id="footer1">
                    <?php dynamic_sidebar('footer1');?>
                </div>
                <div class="col-lg-3 col-md-4 footers" id="footer2">
                    <?php dynamic_sidebar('footer2');?>
                </div>
                <div class="col-lg-3 col-md-4 footers" id="footer3">
                    <?php dynamic_sidebar('footer3');?>
                </div>
                <div class="col-lg-3 col-md-4 footers" id="footer4">
                    <?php dynamic_sidebar('footer4');?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bottom-footer">
    <div class="container">
        <p>&copy; Copyright <?php echo date('Y');?> All Right Reserved <a href="https://puzzle-ep.com"> PuzzleEnterprise</a></p>
    </div>
</div>
<?php wp_footer();?>




<script>
    AOS.init({
    duration:1200,
    }
    );
    AOS.init({
    disable: function() {
    var maxWidth = 800;
    return window.innerWidth < maxWidth;
    }
    });
</script>

<script>
    jQuery("#wrapper2").click(function() {
        jQuery(".icon").toggleClass("close1");
    });
    jQuery("#wrapper2").click(function() {
        jQuery(".icon").toggleClass("close1");
    });
    jQuery(document).ready(function() {
        jQuery('.svgphone').click(function() {
        jQuery('.phonee').toggleClass('visible');
        jQuery('.maill').removeClass('visible');
        jQuery('.locationn').removeClass('visible');
        });
    });
    jQuery(document).ready(function() {
        jQuery('.svgmail').click(function() {
        jQuery('.maill').toggleClass('visible');
        jQuery('.phonee').removeClass('visible');
        jQuery('.locationn').removeClass('visible');
        });
    });
    jQuery(document).ready(function() {
        jQuery('.svglocation').click(function() {
        jQuery('.locationn').toggleClass('visible');
        jQuery('.phonee').removeClass('visible');
        jQuery('.maill').removeClass('visible');
        });
    });



    jQuery(function() {
        jQuery(".progress").each(function() {
            var value = jQuery(this).attr('data-value');
            var left = jQuery(this).find('.progress-left .progress-bar');
            var right = jQuery(this).find('.progress-right .progress-bar');
            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }
        })
        function percentageToDegrees(percentage) {
            return percentage / 100 * 360
        }
    });



    var Menu = {
          el: {
          ham: jQuery('.menu-m'),
          menuTop: jQuery('.menu-top'),
          menuMiddle: jQuery('.menu-middle'),
          menuBottom: jQuery('.menu-bottom')
          },
          init: function() {
          Menu.bindUIactions();
          },
          bindUIactions: function() {
          Menu.el.ham
          .on(
          'click',
          function(event) {
          Menu.activateMenu(event);
          event.preventDefault();
          }
          );
          },
          activateMenu: function() {
          Menu.el.menuTop.toggleClass('menu-top-click');
          Menu.el.menuMiddle.toggleClass('menu-middle-click');
          Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
          }
          };
          Menu.init();



        var swiper = new Swiper('.swiper-container0', {
        pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
            },
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            767.98: {
            slidesPerView: 2,
            spaceBetween: 20,
            },
            991.98: {
            slidesPerView: 3,
            spaceBetween: 40,
            },
            1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            },
        }
        });



        var swiper = new Swiper('.swiper-container1', {
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        fadeEffect: { crossFade: true 
        },
        virtualTranslate: true,
        autoplay: {
        delay: 2500,
        disableOnInteraction: true,
        },
        speed: 1000, 
        effect: "fade"
        });


        var swiper = new Swiper('.swiper-container22', {
            slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        freeMode: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, 
        },
        breakpoints: {
            767.98: {
            slidesPerView: 3,
            },
            991.98: {
            slidesPerView: 4,
            },
            1024: {
            slidesPerView: 4,
            },
        }
        });



        jQuery("#slider").on("input change", (e)=>{
            const sliderPos = e.target.value;
            // Update the width of the foreground image
            jQuery('.foreground-img').css('width', `${sliderPos}%`)
            // Update the position of the slider button
            jQuery('.slider-button').css('left', `calc(${sliderPos}% - 23px)`)
            });
</script>

</body>
</html>