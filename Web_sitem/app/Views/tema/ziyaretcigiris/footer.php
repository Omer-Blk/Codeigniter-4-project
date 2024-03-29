
<footer class="w3l-footer9">
    <div class="footer-inner-main py-5">
        <div class="container pt-lg-5 pt-md-4 pt-2 pb-2">
            <div class="row">
                <div class="col-lg-4 sub-one-left pe-lg-5">
                    <h6>About </h6>
                    <p class="footer-phny">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel.Lorem ipsum dolor sit,l. Lorem ipsum dolor sit,
                        amet elit.</p>
                    <div class="columns-2 mt-lg-5 mt-4">
                        <ul class="social">
                            <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                            </li>
                            <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                            </li>
                            <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                            </li>
                            <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                    <h6>Links</h6>
                    <ul>
                        <li><a href="index.html">Home</a> </li>
                        <li><a href="about.html">About Us</a> </li>
                        <li><a href="classes.html">Classes</a> </li>
                        <li><a href="#blog">Blog Posts</a> </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-6 sub-two-right mt-lg-0 mt-5">
                    <h6>Explore</h6>
                    <ul>
                        <li><a href="#support">Support</a></li>
                        <li><a href="#privacypolicy">Privacy policy</a></li>
                        <li><a href="#offers">Offers</a></li>
                        <li><a href="#support">Support</a></li>
                        <li><a href="#career">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 sub-one-left mt-lg-0 mt-5">
                    <h6>Twitter Feed</h6>
                    <ul>
                        <li class="w3tweet-holder-grids">
                            <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                            <div class="w3tweet-text">
                                <a target="_blank" href="#twitter">@Honynilf</a> Hi <a target="_blank"
                                                                                       href="#twitter">@Honynilf</a> , can you please submit a ticket at <a
                                    target="_blank" href="#twitter">https://v.co/ij123A34J45A</a> <br>
                                1 year ago.
                            </div>
                        </li>
                        <li class="w3tweet-holder-grids">
                            <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                            <div class="w3tweet-text">
                                <a target="_blank" href="#twitter">@Honynilf</a> Hi <a target="_blank"
                                                                                       href="#twitter">@Honynilf</a> , can you please submit a ticket at <a
                                    target="_blank" href="#twitter">https://v.co/ij123A34J45A</a> and one of our
                                support agent… <a target="_blank" href="#twitter">https://v.co/ij123A34J45A</a>
                                2 year ago.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright-footer mt-lg-5 mt-sm-4 mt-2 text-center">
                <p class="copy-text">&copy; 2022 Musical. All rights reserved. Design by <a
                        href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->

<!-- Js scripts -->
<!-- move top -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- //move top -->

<!-- common jquery plugin -->
<script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery plugin -->

<!-- banner slider -->
<script>
    const slides = document.querySelectorAll(".slide");
    const nextButton = document.getElementById("next");
    const prevButton = document.getElementById("prev");
    const auto = true;
    const intervalTime = 5000;
    let slideInterval;

    const nextSlide = () => {
        const current = document.querySelector(".current");
        current.classList.remove("current");
        if (current.nextElementSibling) {
            current.nextElementSibling.classList.add("current");
        } else {
            slides[0].classList.add("current");
        }
    };

    const prevSlide = () => {
        const current = document.querySelector(".current");
        current.classList.remove("current");
        if (current.previousElementSibling) {
            current.previousElementSibling.classList.add("current");
        } else {
            slides[slides.length - 1].classList.add("current");
        }
    };

    nextButton.addEventListener("click", () => {
        nextSlide();
        if (auto) {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, intervalTime);
        }
    });
    prevButton.addEventListener("click", () => {
        prevSlide();
        if (auto) {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, intervalTime);
        }
    });

    if (auto) {
        slideInterval = setInterval(nextSlide, intervalTime);
    }
</script>
<!-- //banner slider -->

<!-- video popup -->
<script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>
<!-- //video popup -->

<!-- theme switch js (light and dark)-->
<script src="<?=base_url()?>assets/js/theme-change.js"></script>
<!-- //theme switch js (light and dark)-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<!-- //bootstrap -->
<!-- //Js scripts -->
</body>

</html>