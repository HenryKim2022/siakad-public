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




<!-- <script src="?= base_url() ?>adminLTE/custom-plugins/responsive-flip-countdown/jquery.slim.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<!-- <script src="jquery.flipper-responsive.js"></script> -->
<script src="<?= base_url() ?>/adminLTE/custom-plugins/rpfl_v1/jquery.flipper-responsive.js"></script>
<script>
    jQuery(function($) {
        $('#myFlipper').flipper('init');
        $('#modalFlipper').flipper('init');
    });
</script>





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
    // var flipperFields = document.querySelector('myFlipper');
    var flipperFields = document.getElementById("myFlipper");

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

            if (flipperFields.classList.contains('flipper-light')) {
                flipperFields.classList.add('flipper-dark');
                flipperFields.classList.remove('flipper-light');
            }
            if (flipperFields.classList.contains('flipper-light-labels')) {
                flipperFields.classList.add('flipper-dark-labels');
                flipperFields.classList.remove('flipper-light-labels');
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


            if (flipperFields.classList.contains('flipper-dark')) {
                flipperFields.classList.add('flipper-light');
                flipperFields.classList.remove('flipper-dark');
            }
            if (flipperFields.classList.contains('flipper-dark-labels')) {
                flipperFields.classList.add('flipper-light-labels');
                flipperFields.classList.remove('flipper-dark-labels');
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

            if (flipperFields.classList.contains('flipper-light')) {
                flipperFields.classList.add('flipper-dark');
                flipperFields.classList.remove('flipper-light');
            }
            if (flipperFields.classList.contains('flipper-light-labels')) {
                flipperFields.classList.add('flipper-dark-labels');
                flipperFields.classList.remove('flipper-light-labels');
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

            if (flipperFields.classList.contains('flipper-dark')) {
                flipperFields.classList.add('flipper-light');
                flipperFields.classList.remove('flipper-dark');
            }
            if (flipperFields.classList.contains('flipper-dark-labels')) {
                flipperFields.classList.add('flipper-light-labels');
                flipperFields.classList.remove('flipper-dark-labels');
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



<script>
    var labels = ['weeks', 'days', 'hours', 'minutes', 'seconds'],
        TimerCount = (new Date().getFullYear() + 1) + '/01/01',
        template = _.template(jQuery('#main-example-template').html()),
        currDate = '00:00:00:00:00',
        nextDate = '00:00:00:00:00',
        parser = /([0-9]{2})/gi,
        $example = jQuery('#main-example');

    if ($example.data("timer").length) {
        TimerCount = $example.data("timer");
    }

    // Parse countdown string to an object
    function strfobj(str) {
        var parsed = str.match(parser),
            obj = {};
        labels.forEach(function(label, i) {
            obj[label] = parsed[i]
        });
        return obj;
    }
    // Return the time components that diffs
    function diff(obj1, obj2) {
        var diff = [];
        labels.forEach(function(key) {
            if (obj1[key] !== obj2[key]) {
                diff.push(key);
            }
        });
        return diff;
    }
    // Build the layout
    var initData = strfobj(currDate);
    labels.forEach(function(label, i) {
        $example.append(template({
            curr: initData[label],
            next: initData[label],
            label: label
        }));
    });
    // Starts the countdown
    $example.countdown(TimerCount, function(event) {
        var newDate = event.strftime('%w:%d:%H:%M:%S'),
            data;

        if (newDate !== nextDate) {
            currDate = nextDate;
            nextDate = newDate;
            // Setup the data
            data = {
                'curr': strfobj(currDate),
                'next': strfobj(nextDate)
            };
            // Apply the new values to each node that changed
            diff(data.curr, data.next).forEach(function(label) {
                var selector = '.%s'.replace(/%s/, label),
                    $node = $example.find(selector);
                // Update the node
                $node.removeClass('flip');
                $node.find('.curr').text(data.curr[label]);
                $node.find('.next').text(data.next[label]);
                // Wait for a repaint to then flip
                $example.delay(function($node) {
                    $node.addClass('flip');
                }, 50, $node);
            });
        }
    });
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