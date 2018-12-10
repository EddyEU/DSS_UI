<?php
/**
 * Created by PhpStorm.
 * User: Eddy
 * Date: 3/6/2018
 * Time: 10:27 AM
 */
?>


<!-- Footer -->
<footer class="footer-main">
    &copy; 2018 <strong>SOE</strong> Proyecto Final by <a target="_blank" href="#/">Escalante, Lijeron, Subieta</a>
</footer>
<!-- /footer -->

</div>
<!-- /main content -->

</div>
<!-- /main container -->

</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="js/plugins/blockui-master/jquery-ui.js"></script>
<script src="js/plugins/blockui-master/jquery.blockUI.js"></script>
<script src="js/functions.js"></script>

<script src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="js/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="js/plugins/datatables/jszip.min.js"></script>
<script src="js/plugins/datatables/pdfmake.min.js"></script>
<script src="js/plugins/datatables/vfs_fonts.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/buttons.html5.js"></script>
<script src="js/plugins/datatables/extensions/Buttons/js/buttons.colVis.js"></script>
<script>
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            dom: '<"html5buttons" B>lTfgitp',
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2]
                    }
                },
                'colvis'
            ]
        });
    });
</script>
</body>

<!-- Mirrored from g-axon.com/mouldifi4.3/light/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 06:31:16 GMT -->
</html>

