<?php
include 'header.php';
?>

<main>
<div class="bg-gray-light ">
        <h4 class="px-5 mx-4 fw-bolder d-flex justify-content-center ">
            HỆ THỐNG QUẢN LÝ THI TRẮC NGHIỆM TRỰC TUYẾN
        </h4>
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i>Thêm thông tin</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">exam_title</th>
                <th scope="col">exam_datetime</th>
                <th scope="col">duration</th>
                <th scope="col">total_question</th>
                <th scope="col">marks_per_right_answe</th>
                <th scope="col">created_on</th>
                <th scope="col">status</th>
                <th scope="col">exam_code</th>
                <th scope="col">bd_update</th>
                <th scope="col">bd_delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'tb_exams');
            if (!$conn) {
                die('Không thể kết nối');
            }
            ?>
            <?php
            $sql = "SELECT id, exam_title, exam_datetime, duration, total_question,
            marks_per_right_answer, created_on, status, exam_code FROM exams";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td>' . $row['exam_title'] . '</td>';
                    echo '<td>' . $row['exam_datetime'] . '</td>';
                    echo '<td>' . $row['duration'] . '</td>';
                    echo '<td>' . $row['total_question'] . '</td>';
                    echo '<td>' . $row['marks_per_right_answer'] . '</td>';
                    echo '<td>' . $row['created_on'] . '</td>';
                    echo '<td>' . $row['status'] . '</td>';
                    echo '<td>' . $row['exam_code'] . '</td>';
                    echo '<td><a href="update.php?id='.$row['id'].'"><i class="fas fa-user-edit"></i></a></td>';
                    echo '<td><a href="delete.php?id='.$row['id'].'"><i class="fas fa-user-times"></i></a></td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>

<?php include 'footer.php';