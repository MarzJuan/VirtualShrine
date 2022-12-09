<style type="text/css" media="print">
        @media print{
            .noprint, .noprint *{
                display: none; !important;
            }
        }
    </style>

        <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap5.min.js"></script>  

        <!-- Calendar -->
        <script src="./js/bootstrap.min.js"></script>
        <script src="./fullcalendar/lib/main.min.js"></script>


        <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
        </script>
        <script src="./js/script.js"></script>

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

    <!-- TAGALOG -->
    <script>
        $(document).ready(function() {
            //$("#summernote").summernote();

            $('.summernote').summernote({
        placeholder: 'Type your Description',
        height: 150
      });
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <!-- //Summernote JS - CDN Link -->


    <script>
        $(document).ready(function(){
            $("#notification").on("click", function(){
                $.ajax({
                    url:"php_sql_connections/readNotification.php",
                    success: function(res){
                        console.log(res);
                    }
                });
            })
        })
    </script>
  

  <!-- FORM TABS -->

  <script>
    function openLanguage(evt, languageType) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(languageType).style.display = "block";
  evt.currentTarget.className += " active";
}
  </script>


</body>
</html>