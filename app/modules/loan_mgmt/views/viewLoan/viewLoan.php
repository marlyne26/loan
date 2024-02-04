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
<<<<<<< HEAD


<!--   
       CreatedBy: Marlyne
       Created On: 01/01/2024
       Modified On: 
    -->
=======
<<<<<<< HEAD
<div class="container-fluid">

<div class="card card-default">
<div class="card-header">
<h3 class="card-title">Select2 (Default Theme)</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" fdprocessedid="9ajax5">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" fdprocessedid="raw0cd">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Minimal</label>
<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="3">Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-idzf-container"><span class="select2-selection__rendered" id="select2-idzf-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

<div class="form-group">
<label>Disabled</label>
<select class="form-control select2 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="6">Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-15ss-container"><span class="select2-selection__rendered" id="select2-15ss-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

</div>

<div class="col-md-6">
<div class="form-group">
<label>Multiple</label>
<select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
<option>Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 578px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

<div class="form-group">
<label>Disabled Result</label>
<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="11">Alabama</option>
<option>Alaska</option>
<option disabled="disabled">California (disabled)</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="10" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-s3e1-container"><span class="select2-selection__rendered" id="select2-s3e1-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

</div>

</div>

<h5>Custom Color Variants</h5>
<div class="row">
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Minimal (.select2-danger)</label>
<select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="14">Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-uzq5-container"><span class="select2-selection__rendered" id="select2-uzq5-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>Multiple (.select2-purple)</label>
<div class="select2-purple">
<select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
<option>Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="16" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 578px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>
</div>

</div>

</div>

</div>

<div class="card-footer">
Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
the plugin.
</div>
</div>


<div class="card card-default">
<div class="card-header">
<h3 class="card-title">Select2 (Bootstrap4 Theme)</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" fdprocessedid="66rsme">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" fdprocessedid="r0uk8l">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Minimal</label>
<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="19">Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="18" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pjdu-container"><span class="select2-selection__rendered" id="select2-pjdu-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

<div class="form-group">
<label>Disabled</label>
<select class="form-control select2bs4 select2-hidden-accessible" disabled="" style="width: 100%;" data-select2-id="20" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="22">Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--bootstrap4 select2-container--disabled" dir="ltr" data-select2-id="21" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-wwue-container"><span class="select2-selection__rendered" id="select2-wwue-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

</div>

<div class="col-md-6">
<div class="form-group">
<label>Multiple</label>
<select class="select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">
<option>Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="24" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 578px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

<div class="form-group">
<label>Disabled Result</label>
<select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="25" tabindex="-1" aria-hidden="true">
<option selected="selected" data-select2-id="27">Alabama</option>
<option>Alaska</option>
<option disabled="disabled">California (disabled)</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select><span class="select2 select2-container select2-container--bootstrap4" dir="ltr" data-select2-id="26" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ef14-container"><span class="select2-selection__rendered" id="select2-ef14-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

</div>

</div>

</div>

<div class="card-footer">
Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
the plugin.
</div>
</div>

<div class="card card-default">
<div class="card-header">
<h3 class="card-title">Bootstrap Duallistbox</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" fdprocessedid="93z2tl">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" fdprocessedid="9w4gkw">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">
<div class="row">
<div class="col-12">
<div class="form-group">
<label>Multiple</label>
<div class="bootstrap-duallistbox-container row moveonselect moveondoubleclick"> <div class="box1 col-md-6">   <label for="bootstrap-duallistbox-nonselected-list_" style="display: none;"></label>   <span class="info-container">     <span class="info">Showing all 6</span>     <button type="button" class="btn btn-sm clear1" style="float:right!important;">show all</button>   </span>   <input class="form-control filter" type="text" placeholder="Filter" fdprocessedid="lw42wl">   <div class="btn-group buttons">     <button type="button" class="btn moveall btn-outline-secondary" title="Move all" fdprocessedid="5izgf">&gt;&gt;</button>        </div>   <select multiple="multiple" id="bootstrap-duallistbox-nonselected-list_" name="_helper1" fdprocessedid="zn8ih" style="height: 101.6px;"><option>Alaska</option><option>California</option><option>Delaware</option><option>Tennessee</option><option>Texas</option><option>Washington</option></select> </div> <div class="box2 col-md-6">   <label for="bootstrap-duallistbox-selected-list_" style="display: none;"></label>   <span class="info-container">     <span class="info">Showing all 1</span>     <button type="button" class="btn btn-sm clear2" style="float:right!important;">show all</button>   </span>   <input class="form-control filter" type="text" placeholder="Filter" fdprocessedid="gms2ua">   <div class="btn-group buttons">          <button type="button" class="btn removeall btn-outline-secondary" title="Remove all" fdprocessedid="uw9p7o">&lt;&lt;</button>   </div>   <select multiple="multiple" id="bootstrap-duallistbox-selected-list_" name="_helper2" fdprocessedid="cj0zq" style="height: 101.6px;"><option selected="">Alabama</option></select> </div></div><select class="duallistbox" multiple="multiple" style="display: none;">
<option selected="">Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select>
</div>

</div>

</div>

</div>

<div class="card-footer">
Visit <a href="https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox#readme">Bootstrap Duallistbox</a> for more examples and information about
the plugin.
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="card card-danger">
<div class="card-header">
<h3 class="card-title">Input masks</h3>
</div>
<div class="card-body">

<div class="form-group">
<label>Date masks:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
</div>
<input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" fdprocessedid="w10pe">
</div>

</div>


<div class="form-group">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
</div>
<input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric" fdprocessedid="hoqb96">
</div>

</div>


<div class="form-group">
<label>US phone mask:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-phone"></i></span>
</div>
<input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text" fdprocessedid="bbm78o">
</div>

</div>


<div class="form-group">
<label>Intl US phone mask:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-phone"></i></span>
</div>
<input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="" inputmode="text" fdprocessedid="cglbiu">
</div>

</div>


<div class="form-group">
<label>IP mask:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-laptop"></i></span>
</div>
<input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask="" inputmode="decimal" fdprocessedid="yfzee9">
</div>

</div>

</div>

</div>

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Color &amp; Time Picker</h3>
</div>
<div class="card-body">

<div class="form-group">
<label>Color picker:</label>
<input type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="" fdprocessedid="462t3l">
</div>


<div class="form-group">
<label>Color picker with addon:</label>
<div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
<input type="text" class="form-control" data-original-title="" title="" fdprocessedid="1w4jua">
<div class="input-group-append">
<span class="input-group-text"><i class="fas fa-square"></i></span>
</div>
</div>

</div>


<div class="bootstrap-timepicker">
<div class="form-group">
<label>Time picker:</label>
<div class="input-group date" id="timepicker" data-target-input="nearest">
<input type="text" class="form-control datetimepicker-input" data-target="#timepicker" fdprocessedid="n8wn3a">
<div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
<div class="input-group-text"><i class="far fa-clock"></i></div>
</div>
</div>

</div>

</div>
</div>

</div>

</div>

<div class="col-md-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Date picker</h3>
</div>
<div class="card-body">

<div class="form-group">
<label>Date:</label>
<div class="input-group date" id="reservationdate" data-target-input="nearest">
<input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" fdprocessedid="e997p">
<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div>
</div>
</div>

<div class="form-group">
<label>Date and time:</label>
<div class="input-group date" id="reservationdatetime" data-target-input="nearest">
<input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" fdprocessedid="rf1pqsq">
<div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
<div class="input-group-text"><i class="fa fa-calendar"></i></div>
</div>
</div>
</div>


<div class="form-group">
<label>Date range:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<i class="far fa-calendar-alt"></i>
</span>
</div>
<input type="text" class="form-control float-right" id="reservation" fdprocessedid="cmx05g">
</div>

</div>


<div class="form-group">
<label>Date and time range:</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="far fa-clock"></i></span>
</div>
<input type="text" class="form-control float-right" id="reservationtime" fdprocessedid="34wnd">
</div>

</div>


<div class="form-group">
<label>Date range button:</label>
<div class="input-group">
<button type="button" class="btn btn-default float-right" id="daterange-btn" fdprocessedid="d8qkda">
<i class="far fa-calendar-alt"></i> Date range picker
<i class="fas fa-caret-down"></i>
</button>
</div>
</div>

</div>
<div class="card-footer">
Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
the plugin.
</div>

</div>


<div class="card card-success">
<div class="card-header">
<h3 class="card-title">iCheck Bootstrap - Checkbox &amp; Radio Inputs</h3>
</div>
<div class="card-body">

<div class="row">
<div class="col-sm-6">

<div class="form-group clearfix">
<div class="icheck-primary d-inline">
<input type="checkbox" id="checkboxPrimary1" checked="">
<label for="checkboxPrimary1">
</label>
</div>
<div class="icheck-primary d-inline">
<input type="checkbox" id="checkboxPrimary2">
<label for="checkboxPrimary2">
</label>
</div>
<div class="icheck-primary d-inline">
<input type="checkbox" id="checkboxPrimary3" disabled="">
<label for="checkboxPrimary3">
Primary checkbox
</label>
</div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group clearfix">
<div class="icheck-primary d-inline">
<input type="radio" id="radioPrimary1" name="r1" checked="">
<label for="radioPrimary1">
</label>
</div>
<div class="icheck-primary d-inline">
<input type="radio" id="radioPrimary2" name="r1">
<label for="radioPrimary2">
</label>
</div>
<div class="icheck-primary d-inline">
<input type="radio" id="radioPrimary3" name="r1" disabled="">
<label for="radioPrimary3">
Primary radio
</label>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">

<div class="form-group clearfix">
<div class="icheck-danger d-inline">
<input type="checkbox" checked="" id="checkboxDanger1">
<label for="checkboxDanger1">
</label>
</div>
<div class="icheck-danger d-inline">
<input type="checkbox" id="checkboxDanger2">
<label for="checkboxDanger2">
</label>
</div>
<div class="icheck-danger d-inline">
<input type="checkbox" disabled="" id="checkboxDanger3">
<label for="checkboxDanger3">
Danger checkbox
</label>
</div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group clearfix">
<div class="icheck-danger d-inline">
<input type="radio" name="r2" checked="" id="radioDanger1">
<label for="radioDanger1">
</label>
</div>
<div class="icheck-danger d-inline">
<input type="radio" name="r2" id="radioDanger2">
<label for="radioDanger2">
</label>
</div>
<div class="icheck-danger d-inline">
<input type="radio" name="r2" disabled="" id="radioDanger3">
<label for="radioDanger3">
Danger radio
</label>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">

<div class="form-group clearfix">
<div class="icheck-success d-inline">
<input type="checkbox" checked="" id="checkboxSuccess1">
<label for="checkboxSuccess1">
</label>
</div>
<div class="icheck-success d-inline">
<input type="checkbox" id="checkboxSuccess2">
<label for="checkboxSuccess2">
</label>
</div>
<div class="icheck-success d-inline">
<input type="checkbox" disabled="" id="checkboxSuccess3">
<label for="checkboxSuccess3">
Success checkbox
</label>
</div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group clearfix">
<div class="icheck-success d-inline">
<input type="radio" name="r3" checked="" id="radioSuccess1">
<label for="radioSuccess1">
</label>
</div>
<div class="icheck-success d-inline">
<input type="radio" name="r3" id="radioSuccess2">
<label for="radioSuccess2">
</label>
</div>
<div class="icheck-success d-inline">
<input type="radio" name="r3" disabled="" id="radioSuccess3">
<label for="radioSuccess3">
Success radio
</label>
</div>
</div>
</div>
</div>
</div>

<div class="card-footer">
Many more skins available. <a href="https://bantikyan.github.io/icheck-bootstrap/">Documentation</a>
</div>
</div>


<div class="card card-secondary">
<div class="card-header">
<h3 class="card-title">Bootstrap Switch</h3>
</div>
<div class="card-body">
<div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 85.6px;"><div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-primary" style="width: 42px;">ON</span><span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-default" style="width: 42px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch=""></div></div>
<div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate" style="width: 85.6px;"><div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 42px;">ON</span><span class="bootstrap-switch-label" style="width: 42px;">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 42px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="" data-off-color="danger" data-on-color="success"></div></div>
</div>
</div>

</div>

</div>

<div class="row">
<div class="col-md-12">
<div class="card card-default">
<div class="card-header">
<h3 class="card-title">bs-stepper</h3>
</div>
<div class="card-body p-0">
<div class="bs-stepper linear">
<div class="bs-stepper-header" role="tablist">

<div class="step active" data-target="#logins-part">
<button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger" aria-selected="true" fdprocessedid="cv6kj8">
<span class="bs-stepper-circle">1</span>
<span class="bs-stepper-label">Logins</span>
</button>
</div>
<div class="line"></div>
<div class="step" data-target="#information-part">
<button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger" aria-selected="false" disabled="disabled">
<span class="bs-stepper-circle">2</span>
<span class="bs-stepper-label">Various information</span>
</button>
</div>
</div>
<div class="bs-stepper-content">

<div id="logins-part" class="content active dstepper-block" role="tabpanel" aria-labelledby="logins-part-trigger">
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" fdprocessedid="amqre">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" fdprocessedid="fxmhzu">
</div>
<button class="btn btn-primary" onclick="stepper.next()" fdprocessedid="4df5jq">Next</button>
</div>
<div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
<div class="form-group">
<label for="exampleInputFile">File input</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
<span class="input-group-text">Upload</span>
</div>
</div>
</div>
<button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div>

<div class="card-footer">
Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
</div>
</div>

</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card card-default">
<div class="card-header">
<h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
</div>
<div class="card-body">
<div id="actions" class="row">
<div class="col-lg-6">
<div class="btn-group w-100">
<span class="btn btn-success col fileinput-button dz-clickable">
<i class="fas fa-plus"></i>
<span>Add files</span>
</span>
<button type="submit" class="btn btn-primary col start" fdprocessedid="jdmi3i">
<i class="fas fa-upload"></i>
<span>Start upload</span>
</button>
<button type="reset" class="btn btn-warning col cancel" fdprocessedid="u2lwy">
<i class="fas fa-times-circle"></i>
<span>Cancel upload</span>
</button>
</div>
</div>
<div class="col-lg-6 d-flex align-items-center">
<div class="fileupload-process w-100">
<div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>
</div>
</div>
</div>
</div>
<div class="table table-striped files" id="previews">

</div>
</div>

<div class="card-footer">
Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
</div>
</div>

</div>
</div>

</div>
=======
>>>>>>> ff7773281d3c837b9908a4b3b03f83059df79c28
<script>
  function acceptLoan() {
    const selectedLoan = document.getElementById('predefinedLoan').value;
    document.getElementById('acceptedLoanAmount').value = `₹${selectedLoan}`;
  }
</script>
>>>>>>> 604efdee8cf0c2cd11695655277126b4e1b04855
<script src="assets/admin/plugins/multi-select-dropdown-list-with-checkbox-jquery/jquery.multiselect.js"></script>
<script src="assets/admin/plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
