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
                                <button class="btn btn-success" data-toggle="modal" data-target="#modal-lg"> <i
                                        class="fa fa-circle-thin"> <i class="fa fa-plus"></i></i>New Borrower</button>
                            </span>
                            <div class="modal fade" id="modal-lg">
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
                                                                <label for="BorrowerID">Borrower ID</label>
                                                                <input type="text" id="BorrowerID" class="form-control"
                                                                    placeholder="Borrower ID" autocomplete="off"
                                                                    required>

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="BorrowerName">Name</label>
                                                                <input type="text" id="BorrowerName" class="form-control"
                                                                    placeholder="Borrower Name" autocomplete="off"
                                                                    required>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="row" id="subcategory">

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="LoanType">Loan Type</label>
                                                                <input type="number" id="LoanType" class="form-control"
                                                                    autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="Duration">Duration</label>
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
                            <table id="table" class="table table-bordered table-striped">
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


                        <div class="modal fade" id="showdepartment-list">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"> Department List </h4>
                                        <span class="float-right">
                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#add-department"> <i class="fa fa-circle-thin"> <i
                                                        class="fa fa-plus"></i> </i>Add Department</button>
                                        </span>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="card-body">
                                                    <table id="departmenttable"
                                                        class="table table-bordered table-striped" style="width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Department Name</th>
                                                                <th scope="col">Employee Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="card-body text-center">
                                            </div>
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                        </div>
                        <!-- Assign Category Grievances to Department -->
                        <div class="modal fade" id="getdepartment-list">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Assign Grievance Category</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="getdepartmentlist">Select Department</label>
                                                        <select id="getdepartmentlist"
                                                            class="form-control js-example-basic-multiple" name="">
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- inputField -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="getstaffs">Select Staff</label>
                                                        <select id="getstaffs"
                                                            class="form-control js-example-basic-multiple" multiple>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"
                                            onclick="AssignGrievanceCategory()">Assign </button>
                                    </div>
                                </div>
                            </div>
                            <!-- add department form -->
                            <div class="modal fade" id="add-department">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add New Department </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body text-center">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="server_name">Department Code:</label>
                                                            <input type="text" id="deptCode" class="form-control"
                                                                placeholder="Department Code.." autocomplete="off"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="ip_address">Department Name:</label>
                                                            <input type="text" id="deptName" class="form-control"
                                                                placeholder="Department Name.." autocomplete="off"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body text-center">

                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"
                                                    id="btnAddDept">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.modal-content -->
                            </div>
                            <!-- Assign Category Grievances to Department ends here -->
                        </div>
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
        getAllBorrower();
    });

    function getAllBorrower() {
        debugger;
        var obj = new Object();
        obj.Module = "Loan";
        obj.Page_key = "getAllBorrower";
        var json = new Object();
        obj.JSON = json;
        // TransportCall(obj);
    }
    function onSuccess(rc) {
        if (rc.return_code) {
            switch (rc.Page_key) {

                case "addNewBorrower":
                    notify("success", rc.return_data);
                    getAllBorrower();
                    $("#modal-addnewBorrower").modal("hide");
                    break;

                case "getAllBorrower":
                    //  console.log(rc.return_data);
                    loaddata(rc.return_data);
                    // notify("success",rc.return_data);
                    break;


               
            }
        }
    }



    $("#btn-addBorrower").click(
        function () {
            debugger;
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
            if (  $("#BorrowerName").val() == '') {

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