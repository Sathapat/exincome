<div class="col bg-white shadow-sm mt-2">
    <div class="row w-100 m-0 border-bottom bg-darkgrey text-white">
        <div class="col">
            <h3 class="p-2">รายรับ รายจ่าย</h3>
        </div>
        <div class="col pt-2 text-right">
            <form action="controller/controller.php" method="post">
                <input class="form-control w-50" type="date" name="search-date">
                <input class="form-control w-50" type="text" name="search-txt">
                <input type="submit" name="search-btn" class="btn btn-primary" value="ค้นหา">
            </form>
        </div> 
    </div>
    <div class="row">
        <div class="col">
        <table class="table table-bordered text-center">                
            <thead>
                <th>วันที่</th>
                <th>เวลา</th>
                <th>รายได้</th>
                <th>รายจ่าย</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </thead>
            <?php 
                $fetch_record = new DB();
                $sql = $fetch_record->fetch_record();
                while($row = mysqli_fetch_array($sql)){
            ?>
            <tbody>
            <div id="result"></div>
                <tr>
                    <td><?php echo $row['r_date']; ?></td>
                    <td><?php echo $row['r_time']; ?></td>
                    <td><?php echo $row['r_income']; ?></td>
                    <?php 
                        if($row['r_expense'] > $row['m_expense']){
                            echo "<td class='text-danger'>".$row['r_expense'];"</td>"; 
                        }else if($row['r_expense'] <= $row['m_expense']){
                            echo "<td class='text-success'>".$row['r_expense'];"</td>"; 
                        }
                    ?>
                    <td><button class="btn btn-warning">แก้ไข</button></td>
                    <td><button class="btn btn-danger">ลบ</button></td>
                </tr>
            </tbody>
                <?php } ?>
    </table>
        </div>
    </div>
</div>

