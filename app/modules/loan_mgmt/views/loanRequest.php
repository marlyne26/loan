<style>
  .modal-button {
    background-color: #007bff;
    /* Blue */
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
  }

  .modal-button:hover {
    background-color: #0056b3;
    /* Darker blue */
  }

  /* Styling for the overlay */
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
    transition: background 0.3s ease;
  }

  /* Styling for the modal */
  .modal {
    display: none;
    background: whitesmoke;
    width: 60%;
    max-width: 500px;
    border-radius: 10px;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: transform 0.3s ease;
    padding-top: 80px;
    overflow-y: auto;
    max-height: 70vh;
    /* Set maximum height */
    padding-left: 20px;
    display: flex;
    flex-direction: column;
    font-size: 18px;
    gap: 10px;
  }

  /* Styling for the close button */
  .close-btn {
    cursor: pointer;
    background: none;
    border: none;
    font-size: 24px;
    position: absolute;
    top: 10px;
    right: 10px;
    color: #555;
  }

  .column-names {
    font-weight: bold;
    min-width: 150px;
  }

  /* Styling for action buttons */
  .action-buttons {
    display: flex;
    justify-content: space-around;
    margin-top: 40px;
  }

  .accept-btn,
  .reject-btn,
  .close-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease;
  }

  .accept-btn {
    background-color: #4CAF50;
    color: white;
  }

  .reject-btn {
    background-color: #FF5733;
    color: white;
  }

  .close-btn {
    background-color: #ddd;
  }

  .accept-btn:hover,
  .reject-btn:hover,
  .close-btn:hover {
    background-color: #555;
    color: white;
  }
</style>
<div class="content-wrapper" style="min-height: 662.4px;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Loan Requests</h3>
            </div>
            
            <div class="modal fade" id="modal-addnewBorrower">
              <div class="modal-dialog modal-lg">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Borrower Details</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                              <input type="text" id="BorrowerName" class="form-control" placeholder="Borrower Name"
                                autocomplete="off" required>
                            </div>

                          </div>
                        </div>



                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="LoanType">Loan Type</label>
                              <select id="LoanType" class="form-control" autocomplete="off" required>
                                <option value="SelectLoanType">Select Loan Type</option>
                                <option value="Housing Loan">Housing Loan</option>
                                <option value="Education Loan">Education Loan</option>
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
                              <input type="number" id="Duration" class="form-control" autocomplete="off" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="amount">Amount</label>
                              <input type="number" id="amount" class="form-control" autocomplete="off" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="btn-addBorrower">Save</button>
                    </div>
                  </div>
                </div>

                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            <div class="card-body">
              <table id="loadAllLoanRequestTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">Loan Type</th>
                    <th scope="col">Borrower ID</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Interest</th>
                    <th scope="col">Status</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
<div class="overlay" id="overlay">
  <div class="modal" id="modal">
    <button class="close-btn" onclick="closeModal">&times;</button>
    <!-- Display column names and row content dynamically here -->
    <div id="modal-content"></div>
    <!-- Action buttons -->
    <div class="action-buttons">
      <button class="accept-btn">Accept Loan</button>
      <button class="reject-btn">Reject Loan</button>
    </div>
  </div>
</div>
<script>
  $(function () {
    getAllLoanRequest();
  });

  function getAllLoanRequest() {
    debugger;
    var obj = new Object();
    obj.Module = "Loan";
    obj.Page_key = "getAllLoanRequest";
    var json = new Object();
    obj.JSON = json;
    TransportCall(obj);
  }

  function onSuccess(rc) {
    if (rc.return_code) {
      switch (rc.Page_key) {

        case "getAllLoanRequest":
          //  console.log(rc.return_data);
          loaddata(rc.return_data);
          // notify("success",rc.return_data);
          break;
      }
    }
  }

  function loaddata(data) {
    debugger;
    var table = $("#loadAllLoanRequestTable");

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
        text += '<td> ' + data[i].LoanTypeID + '</td>';
        text += '<td>' + data[i].BorrowerID + '</td>';
        text += '<td> ' + data[i].Durations + '</td>';
        text += '<td> ' + data[i].Interest + '</td>';
        text += '<td> ' + data[i].Status + '</td>';
        text += '<td> ' + data[i].Amount + '</td>';
        text += '<td> <button class="buttonCheck" data-toggle="modal" data-target="#modal-addnewBorrower">Check</button></td>';
        // text += '<td class="btn-group btn-group-sm">';
        // text += '   <a  onclick="onLoadDepartment(' + data[i].GrievanceCategoryID +
        //     ')"> <i class="fas fa-building"> </i> </a>';
        // text += '   <a  onclick="onAssign(' + data[i].GrievanceCategoryID +
        //     ')"> <button class="btn btn-primary btn-xs ml-3">Assign</button></a>';
        // text += '</td>';
        text += '</tr >';
      }
    }

    $("#loadAllLoanRequestTable tbody").html("");
    $("#loadAllLoanRequestTable tbody").append(text);

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
  //   function openModal(button) {
  //   // Show the overlay and modal
  //   document.getElementById('overlay').style.display = 'flex';
  //   document.getElementById('modal').style.display = 'block';

  //   // Get the corresponding row of the clicked button
  //   var row = button.closest('tr');

  //   // Create a table to display column names and row content
  //   var content = '';
  //   for (var i = 0; i < row.cells.length - 1; i++) { // Exclude the last cell with the button
  //     content += '<div class="column-names">' + row.closest('table').rows[0].cells[i].textContent + ':</div>';
  //     content += '<div>' + row.cells[i].textContent + '</div>';
  //   }

  //   // Display the content in the modal
  //   document.getElementById('modal-content').innerHTML = content;

  //   // Add event listener to the close button
  //   var closeButton = document.querySelector('.close-btn');
  //   closeButton.addEventListener('click', closeModal);
  // }

  //   function closeModal() {
  //     // Hide the overlay and modal
  //     document.getElementById('overlay').style.display = 'none';
  //     document.getElementById('modal').style.display = 'none';
  //   }
</script>