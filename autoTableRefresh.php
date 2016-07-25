<?php
$server = mysql_connect("localhost","root", "test");
$db =  mysql_select_db("test");
$query = mysql_query("select * from job_opportunities");

 echo " <thead>
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
    </thead><tbody>\n";

    while($row = mysql_fetch_array($query)){
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

echo "</tbody>\n";
?>