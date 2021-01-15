   <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            {{__('dashboard.made_with_love')}} 🧡
        </div>
        <!-- Default to the left -->
        <div class="text-center">
          <strong>{{__('dashboard.Copyright')}} &copy; 2020 - {{Date('Y')}} <a target="__blink" href="https://www.capconnect.com/">capconnect</a>.</strong> {{__('dashboard.COPY')}}
        </div>
    </footer>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('public/backend/backend-assets/en/js/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('public/backend/backend-assets/en/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/backend-assets/en/js/app.min.js')}}"></script>

<script src="{{ asset('public/js/upload.js') }}"></script>
<script src="{{ asset('public/js/trix.js') }}"></script>
<script src="{{ asset('public/js/atachements.js') }}"></script>
<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>


@yield('script')

<script>
    $('.alert').alert()
</script>

</body>
</html>
