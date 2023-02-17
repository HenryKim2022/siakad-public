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
</footer>
<!-- ./wrapper -->





<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url() ?>/adminLTE/plugins/jquery/jquery.min.js"></script>
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
<!-- SweetAlert2 -->
<script src="<?= base_url() ?>/adminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url() ?>/adminLTE/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/adminLTE/dist/js/adminlte.js"></script>


<!-- Toastr Plugin Script -->
<?= view('layouts/plugins/v_toastr'); ?>


<!-- Page DataTable script -->
<script>
    $(document).ready(function() {
        var table = $('#example1').DataTable({
            "lengthChange": false,
            "autoWidth": true,
            "buttons": [{
                    extend: 'copy',
                    footer: true,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    footer: false,
                    className: 'hide-for-mobile'
                },
                {
                    extend: 'excelHtml5',
                    footer: false,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdf',
                    footer: false,
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    footer: false,
                    exportOptions: {
                        columns: ':visible'
                    },
                    className: 'hide-for-mobile'
                },

                'colvis'
            ],
            columnDefs: [{
                targets: [5, 6, 9, 10, 11, 12, 13, 14],
                visible: false,
            }],
        });
        $('.dataTables_length').addClass('bs-select');
        table.buttons().container()
            .appendTo('#example1_wrapper .col-md-6:eq(0)');

        //// Give scroolX- without breaking header~body aligment 
        jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');

    });
</script>

<!-- EDITABLE -->
<!-- <script type="text/javascript" src="<?= base_url() ?>/vendor/jquery-tabledit/jquery.tabledit.js"></script>
<script>
    $(document).ready(function() {
        $('#data_table').Tabledit({
            deleteButton: false,
            editButton: false,
            columns: {
                identifier: [0, 2],
                editable: [
                    // [1],
                    [2, "Data"],
                    // [3],
                    // [4],
                    // [5]
                ]
            },
            hideIdentifier: false,
            url: "<?php base_url('/myprofile') ?>",
            onSuccess: function(data, textStatus, jqXHR) {
                alert("OK")
            },
        });
    });
</script> -->






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


<script src="<?= base_url('adminLTE/plugins-bs/daterangpicker-pack-hk/lastest_moment.min.js') ?>"></script>
<script src="<?= base_url('adminLTE/plugins-bs/daterangpicker-pack-hk/daterangepicker.min.js') ?>"></script>

<script>
    $(function() {
        $('input[name="add_birth_date"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                locale: {
                    format: 'YYYY/MM/DD'
                },
                minYear: 1990,
                maxYear: parseInt(moment().format('YYYY'), 10)
            },

            function(start, end, label) {}
        )

    });
</script>


<!-- /Select Active Tab - Student's Settings -->
<?php
$settTab = session()->getFlashdata('currTab');
if (!empty($settTab)) { ?>
    <script>
        function activaTab(tab) {
            $('.nav-pills a[href="#' + tab + '"]').tab('show');
        };

        // activaTab('settings');
        activaTab('<?= ($settTab); ?>');
    </script>
<?php } ?>





</body>

</html>