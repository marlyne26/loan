<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Statement</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css">
  <link rel="stylesheet" href="assets/admin/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css">
  <style>
    .content-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
  </style>
</head>
<body>
  <div class="content-wrapper">
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
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name" fdprocessedid="wuoysi">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Branch</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Branch Location" fdprocessedid="1mtnxf">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Date</label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password" fdprocessedid="1mtnxf">
              </div>
              <div class="form-group">
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
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" fdprocessedid="lt72qw">Submit</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
