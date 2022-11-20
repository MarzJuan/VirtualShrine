<style type="text/css" media="print">
        @media print{
            .noprint, .noprint *{
                display: none; !important;
            }
        }
    </style>

        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap5.min.js"></script>  
        <script>
            $(document).ready( function () {
                $('#myDataTable').DataTable();
            } );
        </script>
  
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

          <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            //$("#summernote").summernote();

            $('#summernote').summernote({
        placeholder: 'Type your Description',
        height: 200
      });
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->

  
<script type="text/javascript">
  setInterval(function(){
    call();
  },5000);
  function call(){
    get('pages');
    get('users');
    get('devices');
    get('sources');
    get('countries');
    get('browser');
    get('os');
  }
  call();
  function get(action){
    var view = '<?php echo VIEW;?>';
    $.ajax({
      url:"ajax.php?action="+action+'&view='+view,
      type:'get',
      success:function(res){
        if(action=='pages'){
          $("#result-pages tbody").html(res);
        }
        else if(action=='users'){
          $("#active-users").html(res);
        }
        else if(action=='devices'){
          $("#devices").html(res);
        }
        else if(action=='sources'){
          $("#result-sources tbody").html(res);
        }
        else if(action=='countries'){
          $("#countries-sources tbody").html(res);
        }
        else if(action=='browser'){
          $("#browser-sources tbody").html(res);
        }
        else if(action=='os'){
          $("#os-sources tbody").html(res);
        }
      }
    });
  }
  $(document).on('click','.open-link',function(){
    link = $(this).attr('data-link');
    link = '<?php echo DOMAIN;?>'+link;
    window.open(link, '_blank');
  });
</script>

</body>
</html>