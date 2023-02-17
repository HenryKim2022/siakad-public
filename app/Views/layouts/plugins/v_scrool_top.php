<!-- Scroll to Top Button-->
<div class="pull-left pull-down justify-content-center align-items-center">
    <button class="btn btn-danger btn-floating " onclick="" id="scrool2Top" title="Go to top">
        <i class="fas fa-angle-up"></i>
    </button>
</div>


<!-- Scrool2Top -->
<script>
let mybutton = document.getElementById("scrool2Top");
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }

    // if (mybutton.style.display == "block") {
    //     var h = $("footer").height();
    //     $("scrool2Top").css("margin-bottom", h + 25);
    // }
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
    // document.body.scrollTop = 0;
    // document.documentElement.scrollTop = 0;

    $('body,html').animate({
        scrollTop: 0
    }, 400);
    return false;
}
</script>