<!-- 
/*    
       CreatedBy: Devkanta
       Created On:
       Modified On: 
        

*/ -->

<link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.css">
<link rel="stylesheet"
    href="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css">
<style>
    .customtext {
        height: 40%;
        position: absolute;
        top: 50%;
        right: 35px;
        font-size: 12px;
    }
</style>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" id="maincontent">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                PAYMENT LIST
                            </div>
                            <span class="float-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modal-addnewpayment">
                                    <i class="fa fa-circle-thin"> <i class="fa fa-plus"></i></i>New Payment</button>
                            </span>
                            <div class="modal fade" id="modal-addnewpayment">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Payment Form</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="row">




                                                    <!-- inputField -->
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="CategoryLevels">Reference Number</label>
                                                            <select class="form-control js-example-basic-multiple"
                                                                id="referenceNumber" required>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="productModule">Payee</label>
                                                            <input type="text" id="payeeName" class="form-control"
                                                                placeholder="Payee Name" autocomplete="off" required>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="row" id="subcategory">
 
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="amount">Amount</label>
                                                        <input type="number" id="amount" class="form-control"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="btn-addPayment">Save</button>
                                    </div>
                                    </div>

                                </div>
                            </div>

                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="loadAllPaymentsTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Payment ID</th>
                                <th scope="col">Payee Name </th>
                                <th scope="col">Amount</th>
                                <th scope="col">RefNo</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->



                <!-- Assign Category Grievances to Department -->


            </div>


            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Summernote -->

<script src="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script src="assets/admin/plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript">
</script>
<script>
    $(function () {
        getAllPayment();
    });

    function getAllPayment() {
        debugger;
        var obj = new Object();
        obj.Module = "Loan";
        obj.Page_key = "getAllPayment";
        var json = new Object();
        obj.JSON = json;
        TransportCall(obj);
    }



    function onSuccess(rc) {
        if (rc.return_code) {
            switch (rc.Page_key) {

                case "addNewPayment":
                    notify("success", rc.return_data);
                    getAllPayment();
                    $("#modal-addnewpayment").modal("hide");
                    break;

                case "getAllPayment":
                    //  console.log(rc.return_data);
                    loaddata(rc.return_data);
                    // notify("success",rc.return_data);
                    break;


                default:
                    notify("error", rc.Page_key);
            }
        }
    }



    $("#btn-addPayment").click(
        function () {
            debugger;
            let obj = {};
            obj.Module = "Loan";
            obj.Page_key = "addNewPayment";
            let json = {};
            // json.PaymentID = $("#PaymentID").val();
            json.referenceNumber = $("#referenceNumber").val();
            json.payeeName = $("#payeeName").val();
            json.amount = $("#amount").val();
            obj.JSON = json;
            console.log(JSON.stringify(obj));
            if (amount === '' || payeeName === '') {

                // alert('All fields are compulsory. Please fill in all the areas.');
                notify("error", "Please fill all fields.");
            }
            else {
                TransportCall(obj);
            }
        }
    );


    function clearform() {
        $('#GrievanceCategory').val('');
        $('#CategoryLevels').val('');
        $('#UnderCategoryIds').val('');
        $('#ResolutionLevel1').val('');
        $('#ResolutionLevel2').val('');
        $('#ResolutionLevel3').val('');
    }




    var staffid_var = 0;

    function onUserDelete(StaffID) //added by dev on 11/12/23
    {
        if (confirm("Are you sure you want to delete")) {
            staffid_var = StaffID;
            let obj = {};
            obj.Module = "Settings";
            let json = {};
            obj.Page_key = "onUserDelete";
            json.StaffID = StaffID;
            console.log(StaffID);
            obj.JSON = json;
            TransportCall(obj);
        }
    }


    // function loaddata(data) {

    //     var table = $("#table");

    //     try {
    //         if ($.fn.DataTable.isDataTable($(table))) {
    //             $(table).DataTable().destroy();
    //         }
    //     } catch (ex) {}

    //     var text = ""

    //     if (data.length == 0) {
    //         text += "No Data Found";
    //     } else {

    //         for (let i = 0; i < data.length; i++) {
    //             text += '<tr> ';

    //             // text += '<td> ' + (i+1) + '</td>';
    //             text += '<th> ' + data[i].Main + '</th>';
    //             text += '<th> ' + data[i].SubCategory + '</th>';
    //             text += '<td> ' + data[i].ResolutionLevel1 + ' days</td>';
    //             text += '<td>' + data[i].ResolutionLevel2 + ' days</td>';
    //             text += '<td> ' + data[i].ResolutionLevel3 + ' days</td>';
    //             text += '<td class="btn-group btn-group-sm">';
    //             text += '   <a  onclick="onLoadDepartment(' + data[i].GrievanceCategoryID +
    //                 ')"> <i class="fas fa-building"> </i> </a>';
    //             text += '   <a  onclick="onAssign(' + data[i].GrievanceCategoryID +
    //                 ')"> <button class="btn btn-primary btn-xs ml-3">Assign</button></a>';
    //             text += '</td>';
    //             text += '</tr >';
    //         }
    //     }

    //     $("#table tbody").html("");
    //     $("#table tbody").append(text);

    //     $(table).DataTable({
    //         responsive: true,
    //         "order": [],
    //         dom: 'Bfrtip',
    //         "bInfo": true,
    //         exportOptions: {
    //             columns: ':not(.hidden-col)'
    //         },
    //         "deferRender": true,
    //         "pageLength": 10,
    //         buttons: [{
    //                 exportOptions: {
    //                     columns: ':not(.hidden-col)'
    //                 },
    //                 extend: 'excel',
    //                 orientation: 'landscape',
    //                 pageSize: 'A4'
    //             },
    //             {
    //                 exportOptions: {
    //                     columns: ':not(.hidden-col)'
    //                 },
    //                 extend: 'pdfHtml5',
    //                 orientation: 'landscape',
    //                 pageSize: 'A4'
    //             },
    //             {
    //                 exportOptions: {
    //                     columns: ':not(.hidden-col)'
    //                 },
    //                 extend: 'print',
    //                 orientation: 'landscape',
    //                 pageSize: 'A4'
    //             }
    //         ]
    //     });
    // }

    function loaddata(data) {
        debugger;
        var table = $("#loadAllPaymentsTable");

        try {
            if ($.fn.DataTable.isDataTable($(table))) {
                $(table).DataTable().destroy();
            }
        } catch (ex) { }

        var text = "";

        if (data.length == 0) {
            text += "No Data Found";
        } else {
            for (let i = 0; i < data.length; i++) {
                text += '<tr> ';

                // if (data[i].SubCategory == null) {
                //     text += '<td> <span class=" badge badge-success">No Sub Category </span></td>';
                // } else {
                //     text += '<th> ' + data[i].SubCategory + '</th>';
                // }
                text += '<td>' + data[i].PaymentID + '</td>';
                text += '<td>' + data[i].Payee + '</td>';
                text += '<td>' + data[i].Amount + '</td>';
                if (data[i].RefNum == null) {
                    text += '<td> <span class=" badge badge-danger">No  Data Found</span></td>';
                } else {
                    text += '<th> ' + data[i].RefNum + '</th>';
                }
                // text += '<td class="btn-group btn-group-sm">';
                // text += '   <a  onclick="onLoadDepartment(' + data[i].GrievanceCategoryID +
                //     ')"> <i class="fas fa-building"> </i> </a>';
                // text += '   <a  onclick="onAssign(' + data[i].GrievanceCategoryID +
                //     ')"> <button class="btn btn-primary btn-xs ml-3">Assign</button></a>';
                // text += '</td>';
                text += '</tr >';
            }
        }

        $("#loadAllPaymentsTable tbody").html("");
        $("#loadAllPaymentsTable tbody").append(text);

        $(table).DataTable({
            responsive: true,
            "order": [],
            dom: 'Bfrtip',
            "bInfo": true,
            exportOptions: {
                columns: ':not(.hidden-col)'
            },
            "deferRender": true,
            "pageLength": 10,
            buttons: [{
                exportOptions: {
                    columns: ':not(.hidden-col)'
                },
                extend: 'excel',
                orientation: 'landscape',
                pageSize: 'A4'
            },
            {
                exportOptions: {
                    columns: ':not(.hidden-col)'
                },
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4'
            },
            {
                exportOptions: {
                    columns: ':not(.hidden-col)'
                },
                extend: 'print',
                orientation: 'landscape',
                pageSize: 'A4'
            }
            ]
        });
    }





</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>