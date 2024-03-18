<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title mb-0">Pending NEFT</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pending NEFT</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body px-4">
                          <div class="row align-items-center">
                            <!-- <div class="col-lg-4">
                                <label for="input-DataList" class="form-label">Search Anything</label> <input class="form-control" list="datalistOptions" id="input-DataList" placeholder="search..."> 
                            </div> -->
                            <div class="col-lg-5">
                                <div class="pending-nft-table-header">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label for="input-DataList" class="form-label">Selected Bill Count</label>  
                                            <div><strong>₹13450.00</strong></div>
                                        </div>
                                        <div class="col-auto border-start ps-4">
                                            <label for="input-DataList" class="form-label">Total for Pending Amount</label>  
                                            <div><strong class="text-success">₹567.50</strong></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg text-end">
                                <div class="btn-list">
                                    <button type="button" class="btn btn-primary btn-wave waves-effect waves-light">Process selected NEFT's</button>
                                    <button type="button" class="btn btn-success label-btn label-end">Download <i class="ri-download-line label-btn-icon ms-2"></i></button>
                                    
                                </div>
                            </div>
                          </div>  
                        </div>
                    </div>
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Responsive DataTable</h3>
                        </div> -->
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>        
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
                                            <div class="hstack gap-2 fs-15">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                    <i class="ri-download-2-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                        <th></th>        
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
                                    </tfoot> -->
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

        
   
