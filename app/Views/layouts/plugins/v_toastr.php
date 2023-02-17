<!-- Error Toast -->
<?php
$error = session()->getFlashdata('error');
if (!empty($error)) { ?>
    <ul>
        <div id="toast-container" class="toast-top-right">
            <?php ?>
            <script>
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "3000",
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.error("<b><?= esc($error); ?></b>");
            </script>

            <?php ?>
        </div>
    </ul>
<?php } ?>

<!-- Errors Toast -->
<?php
$errors = session()->getFlashdata('errors');
if (!empty($errors)) { ?>
    <ul>
        <div id="toast-container" class="toast-top-right">
            <?php foreach ($errors as $error) : ?>
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "showDuration": "300",
                        "hideDuration": "3000",
                        "timeOut": "3000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    toastr.error("<b><?= esc($errors); ?></b>");
                </script>

            <?php endforeach; ?>
        </div>
    </ul>
<?php } ?>

<!-- Success Toast -->
<?php
$message = session()->getFlashdata('message');
if (!empty($message)) { ?>
    <ul>
        <div id="toast-container" class="toast-top-right">
            <?php ?>
            <script>
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "3000",
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.success("<b><?= ($message); ?></b>");
            </script>
            <?php ?>
        </div>
    </ul>
<?php } ?>

<!-- Info Toast -->
<?php
$info = session()->getFlashdata('info');
if (!empty($info)) { ?>
    <ul>
        <div id="toast-container" class="toast-top-right">
            <?php ?>
            <script>
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "3000",
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.success("<b><?= ($info); ?></b>");
            </script>
            <?php ?>
        </div>
    </ul>
<?php } ?>

<!-- Warning Toast -->
<?php
$warning = session()->getFlashdata('warning');
if (!empty($warning)) { ?>
    <ul>
        <div id="toast-container" class="toast-top-right">
            <?php ?>
            <script>
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "3000",
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.success("<b><?= ($warning); ?></b>");
            </script>
            <?php ?>
        </div>
    </ul>
<?php } ?>