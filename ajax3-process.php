<?php
//fetch.php
    $conn = mysqli_connect("localhost", "root", "", "test");
    $output = '';
    if(isset($_POST["query"])){
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $result = mysqli_query($conn, "SELECT * FROM student WHERE student_name LIKE '%".$search."%'");
    }else{
        $result = mysqli_query($conn, "SELECT * FROM student ORDER BY id");
    }
    if(mysqli_num_rows($result) > 0){
        $output .= '<div class="table-responsive">
                        <table class="table table bordered">
                            <tr>
                                <th>ID</th>
                                <th>STUDENT NAME</th>
                                <th>SCORE</th>
                            </tr>';
        while($row = mysqli_fetch_array($result)){
            $output .= '<tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["student_name"].'</td>
                            <td>'.$row["student_score"].'</td>
                        </tr>';
        }
        echo $output;
    }else{
        echo 'Data Not Found';
    }

?>