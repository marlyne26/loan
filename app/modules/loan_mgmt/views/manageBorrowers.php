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
                                BORROWER LIST
                            </div>
                            <span class="float-right">
                                <button class="btn btn-success" data-toggle="modal" data-target="#modal-addnewBorrower">
                                    <i class="fa fa-circle-thin"> <i class="fa fa-plus"></i></i>New Borrower</button>
                            </span>
                            <div class="modal fade" id="modal-addnewBorrower">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Borrower Details</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">

                                                        </div>

                                                        <!-- inputField -->
                                                        <div class="col-md-10">

                                                            <div class="form-group">
                                                                <label for="BorrowerName">Name</label>
                                                                <input type="text" id="BorrowerName"
                                                                    class="form-control" placeholder="Borrower Name"
                                                                    autocomplete="off" required>
                                                            </div>

                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="LoanType">Loan Type</label>
                                                                <select id="LoanType" class="form-control"
                                                                    autocomplete="off" required>
                                                                    <option value="SelectLoanType">Select Loan Type
                                                                    </option>
                                                                    <option value="Housing Loan">Housing Loan</option>
                                                                    <option value="Education Loan">Education Loan
                                                                    </option>
                                                                    <option value="Land Loan">Land Loan</option>
                                                                    <option value="Car Loan">Car Loan</option>
                                                                    <option value="Personal Loan">Personal Loan</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="Duration">Duration(Months)</label>
                                                                <input type="number" id="Duration" class="form-control"
                                                                    autocomplete="off" required>
                                                            </div>
                                                        </div>
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
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"
                                                    id="btn-addBorrower">Save</button>
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
                            <table id="loadAllBorrowersTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID </th>
                                        <th scope="col">Name </th>
                                        <th scope="col">Loan Type</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->




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
        getAllBorrower();
    });

    function getAllBorrower() {
        debugger;
        var obj = new Object();
        obj.Module = "Loan";
        obj.Page_key = "getAllBorrower";
        var json = new Object();
        obj.JSON = json;
        TransportCall(obj);
    }
    function onSuccess(rc) {
        debugger;
        if (rc.return_code) {
            switch (rc.Page_key) {

                case "addBorrower":
                    debugger;
                    notify("success", rc.return_data);
                    getAllBorrower();
                    $("#modal-addnewBorrower").modal("hide");
                    break;

                case "getAllBorrower":
                    //  console.log(rc.return_data);
                    loaddata(rc.return_data);
                    // notify("success",rc.return_data);
                    break;

                default:
                notify("error", rc.Page_key)


            }
        }
    }



    $("#btn-addBorrower").click(
        function () {

            let obj = {};
            obj.Module = "Loan";
            obj.Page_key = "addBorrower";
            let json = {};
            json.BorrowerID = $("#BorrowerID").val();
            json.BorrowerName = $("#BorrowerName").val();
            json.LoanType = $("#LoanType").val();
            json.Duration = $("#Duration").val();
            json.amount = $("#amount").val();
            obj.JSON = json;
            console.log(JSON.stringify(obj));
            if ($("#BorrowerName").val() == '') {

                // alert('All fields are compulsory. Please fill in all the areas.');
                notify("error", "Please fill all fields.");
            }
            else {
                TransportCall(obj);
            }
        }
    );

    function loaddata(data) {
        debugger;
        var table = $("#loadAllBorrowersTable");

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
                text += '<td> ' + data[i].BorrowerID + '</td>';
                text += '<td>' + data[i].Name + '</td>';
                text += '<td> ' + data[i].LoanType + '</td>';
                text += '<td> ' + data[i].Duration + '</td>';
                text += '<td> ' + data[i].Amount + '</td>';
                // text += '<td class="btn-group btn-group-sm">';
                // text += '   <a  onclick="onLoadDepartment(' + data[i].GrievanceCategoryID +
                //     ')"> <i class="fas fa-building"> </i> </a>';
                // text += '   <a  onclick="onAssign(' + data[i].GrievanceCategoryID +
                //     ')"> <button class="btn btn-primary btn-xs ml-3">Assign</button></a>';
                // text += '</td>';
                text += '</tr >';
            }
        }

        $("#loadAllBorrowersTable tbody").html("");
        $("#loadAllBorrowersTable tbody").append(text);

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