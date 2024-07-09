


</div>
<script>
    var asset_base_url = 'index-4.html';

</script>

<script src="{{ asset('public/vendor/global/global.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/svganimation/vivus.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/svganimation/svg.animation.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/pickadate/picker.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/pickadate/picker.time.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/vendor/pickadate/picker.date.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/plugins-init/pickadate-init.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/custom.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/dlabnav-init.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/js/demo.js')}}" type="text/javascript"></script>
{{-- <script src="{{ asset('public/js/styleSwitcher.js')}}" type="text/javascript"></script> --}}
<script src="{{ asset('public/vendor/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/js/plugins-init/datatables.init.js')}}" type="text/javascript"></script>
<script>
    jQuery('#addStaffForm').submit(function (e) {
        if (jQuery(this).find('#password').val() !== jQuery(this).find('#confirm_password').val()) {
            e.preventDefault();
            jQuery(this).find('#confirm_password').addClass('is-invalid');
        }
    })
</script>

</body>


</html>
