<?php
if (isset($_POST['btnSave'])){
    $title = $_POST['txtTitle'];
    $date = $_POST['txtDate'];
    $duration = $_POST['txtDuration'];
    $question = $_POST['txtQuestion'];
    $marks = $_POST['txtMarks'];
    $created = $_POST['txtCreated'];
    $status = $_POST['txtStatus'];
    $exam = $_POST['txtExam'];
}
    $conn = mysqli_connect('localhost', 'root', '', 'db_tracnghiem');
    if (!$conn) {
        die('Không thể kết nối');
    }
$sql = "INSERT INTO exams( exam_title, exam_datetime, duration, total_question, marks_per_right_answer, created_on, status, exam_code)
 VALUES ('$title','$date','$duration','$question','$marks','$created','$status','$exam')";

echo $sql;
$result = mysqli_query($conn, $sql);


if ($result == true) {
    header("Location:index.php");
} else {
    echo ("Location:error.php");
}

mysqli_close($conn);


?>