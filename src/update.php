<?php 
    if (isset($_GET['id'])){
        $id = $_GET['id']; 
    }
    $conn = mysqli_connect('localhost','root','','tb_exams');
   
    $sql = "SELECT * FROM exams WHERE  id ='$id'";
    $result = mysqli_query($conn,$sql);
            $row_current = mysqli_fetch_array($result)
        
?>

<main class="container">
    <div class="bg-gray-light ">
        <h4 class="px-5 mx-4 fw-bolder d-flex justify-content-center ">
            HỆ THỐNG QUẢN LÝ THI TRẮC NGHIỆM TRỰC TUYẾN
        </h4>
    </div>
    <form action="process-add.php" method="post">
    <div class="form-group row">
            <label for="bdname" class="col-sm-2 col-form-label">Id:</label>
            <div class="col-sm-10">
                <input readonly type="text" class="form-control" id="bdid" name="txtId" value="<?php echo $row_current['id'];?> ">
            </div>
        </div>
        <div class="form-group row">
            <label for="bdname" class="col-sm-2 col-form-label"> title: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="bdname" name="txtTitle" value="<?php echo $row_current['exam_title'];?> ">
            </div>
        </div>
        <div class="form-group row">
            <label for="bdsex" class="col-sm-2 col-form-label">txtDate: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="bdsex" name="txtDate" value="<?php echo $row_current['exam_datetime'];?> ">
            </div>
        </div>
        <div class="form-group row">
            <label for="bdage" class="col-sm-2 col-form-label">txtDuration: </label>
            <div class="col-sm-10">
                <input type="bdage" class="form-control" id="bdage" name="txtDuration" value="<?php echo $row_current['duration'];?> ">
            </div>
        </div>
        <div class="form-group row">
            <label for="bdbgroup" class="col-sm-2 col-form-label">txtQuestion</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="bdbgroup" name="txtQuestion" value="<?php echo $row_current['total_question'];?> ">
            </div>
            <div class="form-group row">
                <label for="bdreg_date" class="col-sm-2 col-form-label">txtMarks:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="bdreg_date" name="txtMarks" value="<?php echo $row_current['marks_per_right_answer'];?> ">
                </div>
            </div>
            <div class="form-group row">
                <label for="bdphno" class="col-sm-2 col-form-label">txtCreated:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="bdphno" name="txtCreated" value="<?php echo $row_current['created_on'];?> ">
                </div>created_on
            </div>
            <div class="form-group row">
<label for="" class="col-sm-2 col-form-label">txtStatus:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="" name="txtStatus" value="<?php echo $row_current['status'];?> ">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">txtExam:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="" name="txtExam" value="<?php echo $row_current['exam_code'];?> ">
                </div>
            </div>
            <div class="mt-4 pt-2 text-center">
                <input class="btn btn-primary btn-lg" type="submit" value="lưu lại" name="btnSave">
            </div>
        </div>
    </form>
</main>