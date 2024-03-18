    </div> <!-- page-main -->
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © <span id="year"></span> <a href="javascript:void(0)">Kias</a> |  All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER CLOSED -->
</div><!-- PAGE -->

<!-- BACK-TO-TOP -->
<!-- <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a> -->

<!-- JQUERY JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- BOOTSTRAP JS -->
<!-- <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js" integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- DATA TABLE JS-->
<!-- <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net/2.1.1/jquery.dataTables.min.js" integrity="sha512-CKwcR6t3iAghHw93W7LcmVlSRCoGXiYyjITGKrFyDFqWHt6LIJ3j5f1dSjvL+OJbvG0KvPgP/zBEOikHUIu+3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Check -->
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-buttons/3.0.1/js/dataTables.buttons.min.js" integrity="sha512-MRdyQUpDMsm89Lv64vwMZ9KNGiKdyfV1kSmors1lapx7Fac5Wj3s5njlojPhHukdVwbLD0lX78h+QG75z5Pyrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- SIDE-MENU JS -->
<script src="assets/plugins/sidemenu/sidemenu.js"></script>

<!-- SIDEBAR JS -->
<script src="assets/plugins/sidebar/sidebar.js"></script>


<!-- CUSTOM JS -->
<script>
$(document).ready(function(){
   var table = $('#example').DataTable({
      'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json',
      'columnDefs': [
         {
            'targets': 0,
            'render': function(data, type, row, meta){
               if(type === 'display'){
                  data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
               }

               return data;
            },
            'checkboxes': {
               'selectRow': true,
               'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
            }
         }
      ],
      'select': 'multi',
      'order': [[1, 'asc']]
   });
});
</script>
<script src="assets/js/custom.js"></script>
</body>
</html>