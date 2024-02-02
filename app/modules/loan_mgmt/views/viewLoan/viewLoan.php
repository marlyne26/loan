<!--   
       CreatedBy: Devkanta
       Created On: 19/02/2024
       Modified On: 
    -->

<link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.css">

<link rel="stylesheet" href="assets/admin/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" id="maincontent">
<h2>Loan Acceptance Form</h2>
  
  <form style="max-width: 400px; margin: 0 auto;">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">

    <label for="loanAmount">Loan Amount:</label>
    <input type="number" id="loanAmount" name="loanAmount" required style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">

    <label for="loanType">Loan Type:</label>
    <select id="loanType" name="loanType" required style="width: 100%; padding: 10px; box-sizing: border-box; margin-bottom: 10px;">
      <option value="personal">Personal Loan</option>
      <option value="home">Home Loan</option>
      <option value="auto">Auto Loan</option>
    </select>

    <button type="submit" style="padding: 10px; background-color: #4caf50; color: #fff; border: none; cursor: pointer;">Accept Loan</button>
  </form>
</div>

<script src="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script src="assets/admin/plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
