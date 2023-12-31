<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="las la-angle-up"></i></span>
</div>
<!-- back to top area end -->

 <!-- footer two -->
<script src="{{ asset('assets/frontend/theme-two/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('assets/frontend/js/chart.js')}}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/slick.js') }}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/frontend/theme-two/js/main.js') }}"></script>
<script src="{{asset('assets/backend/js/sweetalert2.js')}}"></script>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script src="{{asset('assets/common/js/toastr.min.js')}}"></script>
{!! Toastr::message() !!}

@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/{{current(explode('_',\App\Helpers\LanguageHelper::user_lang_slug()))}}.js"></script>
<script>
    /*-----------------
     Select2
    ------------------*/
    $('select').select2({
         language: "{{current(explode('_',\App\Helpers\LanguageHelper::user_lang_slug()))}}"
    });
    document.addEventListener('livewire:load', function () {
        // Your JS here.
        $('select').select2({
            language: "{{current(explode('_',\App\Helpers\LanguageHelper::user_lang_slug()))}}"
        });
    })
</script>
@livewireScripts
 @stack('scripts')
</body>
</html>