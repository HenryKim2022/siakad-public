</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer text-sm" style="overflow: hidden;">
    <div class="container">
        <div class="float-right d-none d-sm-inline-block">
            <b>Teknik Informatika | Version</b> 3.2.0
        </div>
        <strong><a href=""></a>.</strong>
        <div id="copyright" class="float-left hidden-xs"></div>
        <script>
            let since = '2022';
            let now = new Date().getFullYear();

            const paragraph1 = `<p style='margin:0'>
                <i><strong>Copyright &copy; ${now} <a href="<?= base_url(); ?>">Henry .K</a>.</strong> All rights reserved</i>  
            </p>`;

            const paragraph2 = `<p style='margin:0'>
                <i>
                    <strong>
                        Copyright &copy; ${since}-${now} <a href="<?= base_url(); ?>">Henry .K</a>.
                    </strong> 
                        All rights reserved
                </i>  
            </p>`;

            if (since == now) {
                document.getElementById('copyright').innerHTML = paragraph1;
            } else {
                document.getElementById('copyright').innerHTML = paragraph2;
            }
        </script>
    </div>

</footer>
<!-- ./wrapper -->





<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url() ?>/adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Popper Cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url() ?>/adminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/adminLTE/dist/js/adminlte.js"></script>

<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


<!-- Dark/Light Slider -->
<script>
    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    var currentTheme = localStorage.getItem('theme');
    var mainHeader = document.querySelector('.main-header');
    var inputFields = document.querySelector('input');

    if (currentTheme) {
        if (currentTheme === 'dark') {
            if (!document.body.classList.contains('dark-mode')) {
                document.body.classList.add("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-light')) {
                mainHeader.classList.add('navbar-dark');
                mainHeader.classList.remove('navbar-light');
            }
            if (inputFields.classList.contains('navbar-light')) {
                inputFields.classList.add('navbar-dark');
                inputFields.classList.remove('navbar-light');
            }
            toggleSwitch.checked = true;


            var myspan = document.getElementById('darklight-mode-lbl');
            if (myspan.innerText) {
                myspan.innerText = "Dark Mode";
            } else
            if (myspan.textContent) {
                myspan.textContent = "Dark Mode";
            }
        } else {
            localStorage.setItem('theme', 'light');

            var myspan = document.getElementById('darklight-mode-lbl');
            if (myspan.innerText) {
                myspan.innerText = "Light Mode";
            } else
            if (myspan.textContent) {
                myspan.textContent = "Light Mode";
            }
        }

    }

    function switchTheme(e) {
        if (e.target.checked) {
            if (!document.body.classList.contains('dark-mode')) {
                document.body.classList.add("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-light')) {
                mainHeader.classList.add('navbar-dark');
                mainHeader.classList.remove('navbar-light');
            }
            if (inputFields.classList.contains('navbar-light')) {
                inputFields.classList.add('navbar-dark');
                inputFields.classList.remove('navbar-light');
            }

            localStorage.setItem('theme', 'dark');

            var myspan = document.getElementById('darklight-mode-lbl');
            if (myspan.innerText) {
                myspan.innerText = "Dark Mode";
            } else
            if (myspan.textContent) {
                myspan.textContent = "Dark Mode";
            }
        } else {
            if (document.body.classList.contains('dark-mode')) {
                document.body.classList.remove("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-dark')) {
                mainHeader.classList.add('navbar-light');
                mainHeader.classList.remove('navbar-dark');
            }
            if (inputFields.classList.contains('navbar-dark')) {
                inputFields.classList.add('navbar-light');
                inputFields.classList.remove('navbar-dark');
            }
            localStorage.setItem('theme', 'light');

            var myspan = document.getElementById('darklight-mode-lbl');
            if (myspan.innerText) {
                myspan.innerText = "Light Mode";
            } else
            if (myspan.textContent) {
                myspan.textContent = "Light Mode";
            }
        }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);
</script>




<!-- Carousel Animation -->
<script>
    (function($) {
        //Function to animate slider captions
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = "webkitAnimationEnd animationend";

            elems.each(function() {
                var $this = $(this),
                    $animationType = $this.data("animation");
                $this.addClass($animationType).one(animEndEv, function() {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $("#carouselid"),
            $firstAnimatingElems = $myCarousel
            .find(".carousel-item:first")
            .find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Other slides to be animated on carousel slide event
        $myCarousel.on("slide.bs.carousel", function(e) {
            var $animatingElems = $(e.relatedTarget).find(
                "[data-animation ^= 'animated']"
            );
            doAnimations($animatingElems);
        });
    })(jQuery);
</script>





<!-- Sidebar Active
<script>
    /** add active class and stay opened when selected */
    var url = window.location;
    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
        return this.href == url;
    }).addClass('active');
    // for treeview
    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script> -->
</body>

</html>