
<?php
$hostname = "localhost";
$username = "root";
$password = "test";
$databaseName ="test";

// $connect = mysql_connect($hostname,$username,$password,$databaseName);
// $query ="Select * from job_opportunities";
// $result1 = mysql_query($query,$connect);

$server = mysql_connect("localhost","root", "test");
$db =  mysql_select_db("test",$server);
$query = mysql_query("select * from job_opportunities");

?>

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
        <form action="#" method="post" enctype="application/x-www-form-urlencoded">
            <div class="insertSection">
            <input type="text" oninvalid="invalidJobIdFunct(this);" required title="Job Id required" placeholder="Job Id" data-icon="U">
            <input type="text" oninvalid="invalidCompanyFunct(this);" required title="Company required" placeholder="Company" data-icon="x">
            <input type="text" placeholder="Position" data-icon="U">
            <input type="text" placeholder="Description" data-icon="x">
            <input type="text" placeholder="Status" data-icon="U">
            <input type="text" placeholder="Recruiter/Staffing Agency" data-icon="x">

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
    <thead>
        <tr>
            <th>Job Id</th>
            <th>Account Id</th>
            <th>Company</th>
            <th>Position</th>
            <th>Description</th>
            <th>Status</th>
            <th>Location</th>
            <th>Recruiter/Staffing Agency</th>
        </tr>
    </thead>
    <!-- Table Header -->

    <!-- Table Body -->
    <tbody>

        <?php while($row = mysql_fetch_array($query)){
    echo "<tr>";
        echo"<td>".$row['job_id']."</td>";
        echo"<td>".$row['account_id']."</td>";
        echo"<td>".$row['company_name']."</td>";
        echo"<td>".$row['position']."</td>";
        echo"<td>".$row['description']."</td>";
        echo"<td>".$row['status']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['recruiter_staffing']."</td>";
    echo "</tr>";
}
?>
    </tbody>
</table>
</div>
<script>

$("#myClear").click(function(){
    $(".insertSection input[type='text']").val(""); 
});

function invalidJobIdFunct(x){
x.setCustomValidity('Please enter a Job Id');
}
function invalidCompanyFunct(x){
x.setCustomValidity('Please enter company name');
}

 $("#button").click(function(){
        $(".jobInsertForm").toggle();
   });




</script>

</body>
</html>