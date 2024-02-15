<style>
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
  }

  /* Styling for the modal */
  .modal {
    display: none;
    background: white;
    width: 500px;
    height: 500px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  /* Styling for the close button */
  .close-btn {
    cursor: pointer;
    padding: 10px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
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

            <div class="card-body">
              <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                      <thead>
                        <tr>
                          <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Loan Name</th>
                          <th class="sorting" tabindex="0" aria-controls="example2" colspan="1" aria-label="Browser: activate to sort column ascending">Duration(Years)</th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Branch</th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Interest(%)</th>
                          <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Limitation Period</th>
                          <!-- New column with the "Check" button -->
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="odd">
                          <td class="dtr-control sorting_1" tabindex="0">Housing</td>
                          <td>3</td>
                          <td>Shillong</td>
                          <td>1.7</td>
                          <td>20</td>
                          <!-- New button in the "Action" column -->
                          <td><button onclick="openModal()">Check</button></td>
                        </tr>
                        <tr class="even">
                          <td class="dtr-control sorting_1" tabindex="0">Education</td>
                          <td>4</td>
                          <td>Shillong</td>
                          <td>1.8</td>
                          <td>20</td>
                          <!-- New button in the "Action" column -->
                          <td><button onclick="openModal()">Check</button></td>
                        </tr>
                        <tr class="odd">
                          <td class="dtr-control sorting_1" tabindex="0">Land</td>
                          <td>5</td>
                          <td>Shillong</td>
                          <td>1.8</td>
                          <td>20</td>
                          <!-- New button in the "Action" column -->
                          <td><button onclick="openModal()">Check</button</td>
                        </tr>
                        <!-- Add more records as needed -->
                        <tr class="even">
                          <td class="dtr-control sorting_1" tabindex="0">Car</td>
                          <td>3</td>
                          <td>Shillong</td>
                          <td>1.9</td>
                          <td>20</td>
                          <!-- New button in the "Action" column -->
                          <td><button onclick="openModal()">Check</button></td>
                        </tr>
                        <tr class="odd">
                          <td class="sorting_1 dtr-control">Personal</td>
                          <td>2</td>
                          <td>Shillong</td>
                          <td>1.8</td>
                          <td>20</td>
                          <!-- New button in the "Action" column -->
                          <td><button onclick="openModal()">Check</button</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"></div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <!-- Add more pagination buttons as needed -->
                        <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay" id="overlay">
    <div class="modal" id="modal">
      <button class="close-btn" onclick="closeModal()">Close</button>
      <!-- Add your content inside the modal here -->
      <p>This is your modal content.</p>
    </div>
  </div>
  </section>
</div>
<script>
  function openModal() {
    // Show the overlay and modal
    document.getElementById('overlay').style.display = 'flex';
    document.getElementById('modal').style.display = 'block';
  }

  function closeModal() {
    // Hide the overlay and modal
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('modal').style.display = 'none';
  }
</script>