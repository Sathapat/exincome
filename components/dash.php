<div class="col m-2 shadow-sm">
    <div class="row h-100 bg-danger" >
        <div class="col-4 text-center d-flex align-items-center pl-4">
            <i class="fas fa-dollar-sign fa-4x" style="color:white;"></i>
        </div>
        <div class="col text-center pt-3 text-white">
            <h4>รายจ่ายรวม</h4>
                <?php 
                    $sum_expense = new DB();
                    $sql = $sum_expense->sum_expense();
                    while($row = mysqli_fetch_array($sql)){
                        echo "<h4>".$row['sum_expense'].' '."บาท</4>";
                        }
                ?>
        </div>
    </div>
</div>
<div class="col m-2 shadow-sm">
    <div class="row h-100 bg-success" >
        <div class="col-4 text-center d-flex align-items-center">
            <i class="fas fa-hand-holding-usd fa-4x" style="color:white;"></i>
        </div>
        <div class="col text-center pt-3 text-white">
            <h4>รายรับรวม</h4>
                <?php 
                    $sum_income = new DB();
                    $sql = $sum_income->sum_income();
                    while($row = mysqli_fetch_array($sql)){
                        echo "<h4>".$row['sum_income'].' '."บาท</4>";
                        }
                ?>
        </div>
    </div>
</div>
<div class="col m-2 shadow-sm">
    <div class="row h-100 bg-primary" >
        <div class="col-4 text-center d-flex align-items-center">
            <i class="fas fa-coins fa-4x" style="color:white;"></i>
        </div>
        <div class="col text-center pt-3 text-white">
            <h4>เป้าหมาย</h4>
                <?php 
                    $member_goal = new DB();
                    $sql = $member_goal->member_goal();
                    echo "<h4>*รอแก้ไข</4>";
                ?>
        </div>
    </div>
</div>
<div class="col m-2 shadow-sm">
    <div class="row h-100 bg-warning" >
        <div class="col-4 text-center d-flex align-items-center pl-4">
            <i class="fas fa-file-invoice-dollar fa-4x" style="color:white;"></i>
        </div>
        <div class="col text-center pt-3 text-white">
            <h4>รายจ่ายไม่เกิน</h4>
                <?php 
                    $member_goal = new DB();
                    $sql = $member_goal->member_goal();
                    echo "<h4>*รอแก้ไข</4>";
                ?>
        </div>
    </div>
</div>