<?php
// $server = mysql_connect("localhost","root", "test");
 $mysqli = new mysqli("localhost", "root", "test", "jobtrackingdb");
// $db =  mysql_select_db("jobtrackingdb");
// $query = mysql_query("select * from job_opportunities");

 $query = $mysqli->query("SELECT * FROM job_opportunities");

 echo " <thead>
        <tr>
            <th></th>
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

    while($row = $query->fetch_assoc()){
    echo "<tr>";
        echo"<td><button>delete</button>&nbsp;&nbsp;&nbsp;<button>edit</button></td>";
        echo"<td>".$row['job_id']."</td>";
        echo"<td>".$row['user_id']."</td>";
        echo"<td>".$row['company']."</td>";
        echo"<td>".$row['position']."</td>";
        echo"<td>".$row['description']."</td>";
        echo"<td>".$row['status']."</td>";
        echo"<td>".$row['location']."</td>";
        echo"<td>".$row['recruiter_company']."</td>";
    echo "</tr>";
}

echo "</tbody>\n";
?>