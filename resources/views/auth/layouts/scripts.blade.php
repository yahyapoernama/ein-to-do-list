@stack('scripts')
<script src="{{ asset('vendor/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('vendor/qash/js/scripts.js') }}"></script>
<script src="{{ asset('js/custom-scripts.js') }}"></script>
<script>
    function btnSubmitSpinner() {
        $('#btn_submit').html('<i class="fa-solid fa-circle-notch fa-spin"></i>');
    }
</script>
@stack('custom-scripts')