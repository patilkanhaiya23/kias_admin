<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid fieldstaff-page">

            <!-- PAGE-HEADER -->
            <div class="page-header row">
                <div class="col-xl-auto"><h1 class="page-title mb-0">Fieldstaff Allocation</h1></div>
                <div class="col-xl-auto accordion">
                    <button class="accordion-button collapsed fw-bold fieldstaff-state-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Fieldstaff State </button>
                </div>
                <div class="col ">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fieldstaff</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            
            <!-- Row -->
            <div class="accordion fieldstaff-accordion" id="accordionExample">  
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="card-header py-2 px-0 border-0">
                                            <div class="card-title border-0">States</div>
                                        </div>
                                        <div class="row border">
                                            <div class="col-xl-3 border-end border-inline-end-dashed">
                                                <div class="d-flex justify-content-center align-items-top px-2 py-3 flex-column ">
                                                    <div class=" lh-1">
                                                        <span class="avatar avatar-md avatar-rounded bg-primary shadow-sm"><i class="fe fe-users fs-18"></i></span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <h6 class="fw-semibold mt-2 mb-1">150324-375</h6>
                                                        <p class="text-muted mb-0 fs-12">Allocation</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 border-end border-inline-end-dashed">
                                                <div class="d-flex justify-content-center align-items-top px-2 py-3 flex-column">
                                                    <div class=" lh-1">
                                                        <span class="avatar avatar-md avatar-rounded bg-primary shadow-sm">
                                                        <i class="fe fe-award fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <h6 class="fw-semibold mt-2 mb-1">Nestle </h6>
                                                        <p class="text-muted mb-0 fs-12">Company </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 border-end border-inline-end-dashed">
                                                <div class="d-flex justify-content-center align-items-top px-2 py-3 flex-column">
                                                    <div class=" lh-1">
                                                        <span class="avatar avatar-md avatar-rounded bg-primary shadow-sm">
                                                        <i class="fe fe-user fs-18"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <h6 class="fw-semibold mt-2 mb-1">DL1</h6>
                                                        <p class="text-muted mb-0 fs-12">Employees</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="d-flex justify-content-center align-items-top px-2 py-3 flex-column ">
                                                    <div class=" lh-1">
                                                        <span class="avatar avatar-md avatar-rounded bg-primary shadow-sm">
                                                        <i class="bi bi-signpost-split-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <h6 class="fw-semibold mt-2 mb-1">KHARIBAOLI</h6>
                                                        <p class="text-muted mb-0 fs-12">Route </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap mb-0 table-bordered">
                                                <tbody>
                                                    <tr>
                                                    <th> Particulars </th>
                                                    <th> Total Bills </th>
                                                    <th> FSR </th>
                                                    <th> Resend </th>
                                                    <th> Delivered </th>
                                                    <th colspan="3" rowspan="2" class="text-center">
                                                        <button disabled class="btn btn-xs btn-primary text-center" onclick="window.location.reload(true)">
                                                        <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true"></span> Refresh </button>
                                                    </th>
                                                    </tr>
                                                    <tr>
                                                    <td> No. of Bills </td>
                                                    <td id="billcount_id">1</td>
                                                    <td>0</td>
                                                    <td id="resendcount_id">0</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr class="gray">
                                                    <th> Particulars </th>
                                                    <th> Total Value </th>
                                                    <th> Cash </th>
                                                    <th> Cheque/NEFT </th>
                                                    <th> Other Adj </th>
                                                    <th> SR/FSR </th>
                                                    <th> Credit </th>
                                                    <th> Resend </th>
                                                    </tr>
                                                    <tr>
                                                    <td> Amount </td>
                                                    <td id="net_amt_chk">84,075</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td> 84,075 </td>
                                                    <td id="resend_amt_chk">0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
                      
                
            <div class="row row-sm mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Responsive DataTable</h3>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input class="dt-checkboxes form-check-input" type="checkbox" value="" id="checkall">
                                            </th>        
                                            <th>S.No.</th>
                                            <th>Bill No.</th>
                                            <th>Retailer</th>
                                            <th>Bill Amount</th>
                                            <th>NEFT Amount</th>
                                            <th>Employee</th>
                                            <th>Remark</th>
                                            <th>Entry Date</th>
                                            <th>No. of Days</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        for($i=1;$i<10; $i++){
                                    ?>
                                        <tr role="row" class="even">
                                            <td>
                                                <input type="checkbox" class="form-check-input dt-checkboxes">
                                            </td>
                                            <td><?php echo $i;?></td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>3692</td>
                                            <td>57.97</td>
                                            <td>2009/10/09</td>
                                            <td>RISHABH AGGARWAL</td>
                                            <td>-</td>
                                            <td>09-Oct-2023</td>
                                            <td>18</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn table-action-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></button>
                                                    <ul class="dropdown-menu" style="">
                                                        <li><a class="dropdown-item" href="javascript:void(0);">SR</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Cash</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Cheque</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">NEFT</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Other</a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Resend </a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Bill </a></li>
                                                        <li><a class="dropdown-item" href="javascript:void(0);">FSR</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>        
                                            <th colspan="10" class="text-end">
                                            <button class="btn btn-danger label-btn"> <i class="fe fe-trash-2 label-btn-icon me-2"></i> Delete All </button>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->

        </div>
        <!-- CONTAINER CLOSED -->

    </div>
</div>
<!--app-content closed-->
<?php include('footer.php'); ?>

        
   
<script>
$('#checkall').click(function (e) {
    $('#example tbody :checkbox').prop('checked', $(this).is(':checked'));
    e.stopImmediatePropagation();
});
    
</script>