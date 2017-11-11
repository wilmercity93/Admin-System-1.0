<!-- footer content -->
        <footer>
          <div class="pull-right">
            Admin System - Creado by <a href="http://taowilmercity.ml">Wilmercity</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('/backend/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::asset('/backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::asset('/backend/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ URL::asset('/backend/vendors/nprogress/nprogress.js') }}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('/backend/build/js/custom.min.js ') }}"></script>
    <!-- datatables -->
    <script src="{{ URL::asset('/backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

    <!-- Otros -->
   <script src="{{ URL::asset('/backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
   <script src="{{ URL::asset('/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
   <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
   <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
   <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
   <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
   <script src="{{ URL::asset('/backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
   
    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>

    @yield('scripts')
  </body>
</html>