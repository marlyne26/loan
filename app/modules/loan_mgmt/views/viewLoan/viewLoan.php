<!--   
       CreatedBy: Marlyne
       Created On: 01/01/2024
       Modified On: 
    -->

<link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css">

<link rel="stylesheet" href="assets/admin/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="maincontent">
  <h2>Loan Acceptance Form</h2>

  <p>Select a predefined loan:</p>
  <select id="predefinedLoan" name="predefinedLoan" required style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">
    <option value="50000">₹50,000 Loan</option>
    <option value="100000">₹100,000 Loan</option>
    <option value="200000">₹200,000 Loan</option>
  </select>

  <form style="max-width: 400px; margin: 0 auto;">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">

    

    <button type="button" onclick="acceptLoan()" style="padding: 10px; background-color: #4caf50; color: #fff; border: none; cursor: pointer;">Accept Loan</button>
  </form>
</div>


<!--   
       CreatedBy: Marlyne
       Created On: 01/01/2024
       Modified On: 
    -->
<script>
  function acceptLoan() {
    const selectedLoan = document.getElementById('predefinedLoan').value;
    document.getElementById('acceptedLoanAmount').value = `₹${selectedLoan}`;
  }
</script>
<script src="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script src="assets/admin/plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
