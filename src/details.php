<?php include 'header.php' ?>

<main>
    <div class="container-fluid">
        <div class="row m-md-5 m-1">
            <div class="col-md-12 text-center">
                <h1>Hệ thống quản lý thi trắc nghiệm trực tuyến</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table">
                    <thead class="table-dark text-white">
                        <tr>
                            <th class="col">
                                Mã bài thi
                            </th>
                            <th class="col">
                                Tên bài thi
                            </th>
                            <th class="col">
                                Ngày thi
                            </th>
                            <th class="col">
                                
                            </th>
                            <th class="col">
                                Thời gian làm bài
                            </th>
                            <th class="col">
                                Số câu hỏi
                            </th>
                            <th class="col">
                                Điểm cho mỗi câu trả lời đúng
                            </th>
                            <th class="col-1">
                                Ngày tạo bài thi
                            </th>
                            <th class="col-1">
                                Trạng thái
                            </th>
                            <th class="col-1">
                                Mã truy cập bài thi
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu thay đổi theo CSDL -->
                        <?php
                        // Quy trình 4 bước:
                        // Bước 1: Kết nối CSDL
                        include 'config.php';
                        $id = $_GET['id'];
                        // Bước 2: Thực hiện TRUY VẤN
                        $sql = "SELECT * FROM `patient` WHERE patientid = '$id'";
                        $result = mysqli_query($conn, $sql);
                        // Bước 3: Phân tích và xử lý kết quả
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['patientid'];
                                echo '<tr>';
                                echo '<th class="col">' . $row['Mã bài thi'] . '</th>';
                                echo '<th class="col">' . $row['exam_title'] . '</th>';
                                echo '<th class="col">' . $row['lastname'] . '</th>';
                                echo '<th class="col">' . $row['dateofbirth'] . '</th>';
                                echo '<th class="col">' . $row['gender'] . '</th>';
                                echo '<th class="col">' . $row['mobile'] . '</th>';
                                echo '<th class="col">' . $row['email'] . '</th>';
                                echo '<th class="col text-center">' . $row['height'] . '</th>';
                                echo '<th class="col text-center">' . $row['weight'] . '</th>';
                                echo '<th class="col text-center">' . $row['blood_type'] . '</th>';
                                echo '<th class="col">' . $row['created_on'] . '</th>';
                                echo '<th class="col">' . $row['modified_on'] . '</th>';
                                echo '<th class="col">'
                                    . '<a href="Update.php?id=' . $id . '"class="btn btn-success p-1 ps-2 pe-2 me-1">Sửa</a>'
                                    . '<a href="delete.php?id=' . $id . '"class="btn btn-success p-1 ps-2 pe-2">Xóa</a>' . ' </th>';
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<?php include 'footer.php' ?>