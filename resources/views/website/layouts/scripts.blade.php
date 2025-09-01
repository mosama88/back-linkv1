<!-- javascript -->
<!-- JAVASCRIPT -->
<script src="{{ asset('website') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('website') }}/assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="{{ asset('website') }}/assets/libs/tobii/js/tobii.min.js"></script>
<!-- simplebar -->
<script src="{{ asset('website') }}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('website') }}/assets/js/fontawesome.min.js"></script>

<!-- Main Js -->
<script src="{{ asset('website') }}/assets/libs/feather-icons/feather.min.js"></script>
<script src="{{ asset('website') }}/assets/js/plugins.init.js"></script>
<!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="{{ asset('website') }}/assets/js/app.js"></script>
<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->


<script>
    setTimeout(function() {
        let msg = document.getElementById('success-message');
        if (msg) {
            msg.style.transition = "opacity 1s ease";
            msg.style.opacity = "0";
            setTimeout(() => msg.remove(), 1000); // إزالة العنصر بعد اختفاءه
        }
    }, 5000); // 5 ثواني
</script>


@stack('js')
