<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.css">
<link rel="stylesheet"
  href="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css">
<link rel="stylesheet" href="assets/admin/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css">
<style>
  .content-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
</style>
<div class="content-wrapper" style="min-height: 662.4px;">

  <div class="container">
    <section class="content-header">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bank Statement</h1>
        </div>
      </div>
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Bank Statement Details</h3>
        </div>
        <form>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Bank</label>
              <input type="text" class="form-control" id="BankName" placeholder="Enter Bank Name"
                fdprocessedid="wuoysi">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Branch</label>
              <input type="text" class="form-control" id="BranchName" placeholder="Enter Branch Location"
                fdprocessedid="1mtnxf">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Date</label>
              <input type="date" class="form-control" id="Date" placeholder="Password" fdprocessedid="1mtnxf">
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">20240206_170452.heic</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div> -->
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" fdprocessedid="lt72qw">Submit</button>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
<script>

  function submitFormToDatabase() {
    // Get form input values
    var bankName = document.getElementById("BankName").value;
    var branchName = document.getElementById("BranchName").value;
    var date = document.getElementById("Date").value;

    // Create an object to hold the form data
    var formData = {
      bankName: bankName,
      branchName: branchName,
      date: date
    };

    // Send the form data to the server using AJAX
    $.ajax({
      url: 'your_backend_endpoint.php', // Replace with your backend endpoint URL
      type: 'POST',
      data: formData,
      success: function (response) {
        // Handle success response
      console.log('Data submitted successfully:', response);
        // Optionally, you can display a success message or perform any other action
      },
      error: function (xhr, status, error) {
        // Handle error response
        console.error('Error submitting data:', error);
        // Optionally, you can display an error message or perform any other action
      }
    });
  }