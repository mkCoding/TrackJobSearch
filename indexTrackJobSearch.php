<!DOCTYPE html>
<html>
<head>
	<title>Insert Data into MySQL DB</title>
	<!--Javascript-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

	 <!--Css Style Sheet-->
	 <link rel="stylesheet" href="./css/style.css">
	 <link rel="stylesheet" href="./css/jobInfoStyle.css">
</head>

<body>

<!--Button to toggle Job Form-->
<button id="button">Run Effect</button>


<!-- The Job Form-->
<section class="jobInsertForm">
    <div class="titulo">Add a Job</div>
        <form action="insert.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="insertSection">
            <input type="text" name = 'jobId' required placeholder="Job Id" data-icon="U">
            <input type="text" name = 'company' required placeholder="Company" data-icon="x">
            <input type="text" name = 'position' placeholder="Position" data-icon="U">
            <input type="text" name = 'description' placeholder="Description" data-icon="x">
            <input type="text" name = 'status' placeholder="Status" data-icon="U">
            <input type="text" name = 'location' placeholder="Location" data-icon="x">
            <input type="text" name = 'recruiterCompany' placeholder="Recruiter/Staffing Agency" data-icon="x">

    <div id="buttonDiv">
        <button id ="mySave" class="myButton">Save</button>
        <button id ="myClear" type ="button" class="myButton" >Clear</button>
    </div>
</div>
    </form>
</section>


<!--The job opportunity table-->
<div id="tableDiv">
<!--Table-->
<table id="myTable" cellspacing='0'> 
    <!-- Table Header -->
    <div class="tableHeader">Your Job Opportunities</div>

    <!-- PHP is pushing data into #myTable for table construction and population -->
</table>
</div>
<input id="test" type ="button" value="testRefresh"/>


<script>
//Auto Refresh table
$(document).ready(function(){

  //auto load the table from the DB
  $("#myTable").load("autoTableRefresh.php"); 

//this will reload the table when data is added
    $("#mySave").click(function(){
        $("#myTable").load("autoTableRefresh.php"); 
        //return false;
    }); 

});


//clear all contents of the job form
$("#myClear").click(function(){
    $(".insertSection input[type='text']").val(""); 
});


function invalidJobIdFunct(x){
    if(x.value == '')
        x.setCustomValidity('Please enter a Job Id');
}
function invalidCompanyFunct(x){
    if(x.value=='')
        x.setCustomValidity('Please enter company name');
}

//toggle the Job Form 
 $("#button").click(function(){
        $(".jobInsertForm").toggle();
   });

</script>

</body>
</html>