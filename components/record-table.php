<div class="col bg-white shadow-sm mt-2">
    <div class="row w-100 m-0 border-bottom bg-darkgrey text-white pt-2 pb-2 pl-2">
        <div class="col-5">
            <h3 class="">รายรับ รายจ่าย</h3>
        </div>
        <div class="col">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="form-control w-100" type="date" name="search-date">
        </div> 
        <div class="col">
            <input type="submit" name="search-btn" class="btn btn-primary" value="ค้นหา">
        </div> 
        <div class="col">
            <button name="show-btn" class="btn btn-danger">ยกเลิก</button>
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
                if(isset($_POST['search-btn'])){
                    $date = $_POST['search-date'];
                    $search_record = new DB();
                    $sql = $search_record->search_record($date);
                }else if(isset($_POST['show-btn'])){
                    $fetch_record = new DB();
                    $sql = $fetch_record->fetch_record();
                }
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
                    <td>
                        <a href="controller/controller.php?delete-id=<?php echo $row['r_id']; ?>">
                            <button class="btn btn-danger">ลบ</button>
                        </a> 
                    </td>
                </tr>
            </tbody>
                <?php } ?>
    </table>
        </div>
    </div>
</div>

