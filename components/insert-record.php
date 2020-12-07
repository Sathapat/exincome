<div class="col-3 bg-white border m-2">
    <div class="row border-bottom bg-darkgrey text-white">
        <div class="col p-2 pl-4">
            <h3>บันทึกรายรับรายจ่าย</h3>
        </div>
    </div>
    <form method="post" action="controller/controller.php">
        <div class="row mt-3">
            <div class="col">
                <label class="form-label">วันที่</label>
                <input type="date" class="form-control" name="date-txt">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="form-label">เวลา</label>
                <input type="time" class="form-control" name="time-txt">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label class="form-label">รายรับ</label>
                <input type="text" class="form-control" name="income-txt">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label class="form-label">รายจ่าย</label>
                <input type="text" class="form-control" name="expense-txt">
            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="col">
                <input type="submit" class="btn btn-success" name="insert-btn" value="บันทึก">
            </div>
        </div>
    </form>
</div>

