@stack('scripts')
<script src="{{ asset('vendor/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('vendor/qash/js/scripts.js') }}"></script>
<script src="{{ asset('js/custom-scripts.js') }}"></script>
<script>
    $('#change-theme').click(function() {
        var theme = 'dark-theme';
        if ($('body').hasClass('dark-theme')) {
            theme = 'light-theme';
        }
        if (theme == 'dark-theme') {
            $('body').addClass('dark-theme');
            $('#change-theme-dark').slideUp();
            $('#change-theme-light').slideDown();
        } else {
            $('body').removeClass('dark-theme');
            $('#change-theme-dark').slideDown();
            $('#change-theme-light').slideUp();
        }
        $.ajax({
            url: '{{ route("general.change_theme") }}',
            type: 'POST',
            data: {
                theme: theme,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    function btnSubmitSpinner() {
        $('#btn_submit').html('<i class="fa-solid fa-circle-notch fa-spin"></i>');
    }
</script>
@stack('custom-scripts')