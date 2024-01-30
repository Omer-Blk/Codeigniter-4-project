<footer class="w3l-footer-22 py-5">
    <div class="container py-md-5 py-4">
        <div class="row sub-columns">
            <div class="col-lg-4 col-sm-6 sub-one-left">
                <h6>About </h6>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                <div class="columns-2">
                    <ul class="social">
                        <li><a href="#facebook" title="facebook"><span class="fab fa-facebook-f"
                                                                       aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#linkedin" title="linkedin"><span class="fab fa-linkedin-in"
                                                                       aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#twitter" title="twitter"><span class="fab fa-twitter"
                                                                     aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#google" title="google"><span class="fab fa-google-plus-g"
                                                                   aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#instagram" title="instagram"><span class="fab fa-instagram"
                                                                         aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-4 pt-sm-0 pt-3">
                <h6 class="footer-title-29">Contact Info </h6>
                <ul class="lists-para-two">
                    <li class="para-footer-li">
                        <span class="fas fa-angle-right mr-2"></span>
                        <p> Food, 10001, 5th
                            Avenue, #06 lane street, NY - 62617.</p>
                    </li>
                    <li> <a href="tel:+1(21) 234 4567"><span class="fas fa-angle-right mr-2"></span>+1(21) 234
                            4567</a></li>
                    <li> <a href="mailto:info@example.com"><span
                                class="fas fa-angle-right mr-2"></span>info@example.com</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6 sub-two-right mt-lg-0 mt-4">
                <h6>Quick links</h6>
                <ul>
                    <li><a href="<?= base_url() ?>"><span class="fas fa-angle-right mr-2"></span>Ana Sayfa</a></li>
                    <li><a href="<?= base_url('#hakkında') ?>"><span class="fas fa-angle-right mr-2"></span>Daha Fazla</a>
                    </li>
                    <li><a href="<?= base_url('#mutfak') ?>"><span class="fas fa-angle-right mr-2"></span>Mutfaklar</a>
                    </li>
                    <li><a href="<?= base_url('login') ?>"><span class="fas fa-angle-right mr-2"></span>Panel</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- copyright -->
    <div class="copyright-footer text-center mt-4">
        <div class="container">
            <div class="columns">
                <p>&copy; 2024 Hatice Sena Taşkıran. All rights reserved. Design by
                    <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                </p>
            </div>
        </div>
    </div>
    <!-- //copyright -->
</footer>
<!-- //footer -->

<!-- Js scripts -->
<!-- move top -->
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
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery plugin -->

<!-- owl carousel -->
<script src="<?= base_url() ?>assets/js/owl.carousel.js"></script>
<!-- script for tesimonials carousel slider -->
<script>
    $(document).ready(function () {
        $("#owl-demo2").owlCarousel({
            loop: true,
            nav: false,
            margin: 50,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                },
                991: {
                    items: 2,
                    margin: 30,
                    nav: false
                },
                1080: {
                    items: 2,
                    nav: false
                }
            }
        })
    })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- theme switch js (light and dark)-->
<script src="<?= base_url() ?>assets/js/theme-change.js"></script>
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
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- //bootstrap -->
<!-- //Js scripts -->
</body>

</html>