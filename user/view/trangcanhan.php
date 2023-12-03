
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .profile-container {
            max-width: 600px;
            margin: auto;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .edit-profile-btn {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            text-align: center;
        }
    </style>

<body>

<div class="profile-container">

    <?php
    // Điều chỉnh mã PHP dựa trên cấu trúc và dữ liệu thực của bạn
    $ID_User = $_SESSION['Username']['ID_User']; // ID của người dùng đăng nhập
    $Username = $_SESSION['Username']['Username'];
    $Email = $_SESSION['Username']['Email'];
    $Tel = $_SESSION['Username']['Tel'];
    // Lấy thông tin từ cơ sở dữ liệu hoặc từ biến session
    ?>

    <h2>Trang Cá Nhân - <?php echo $Username; ?></h2>

    <table>
        <tr>
            <th>Thông Tin Tài Khoản</th>
            <th></th>
        </tr>
        <tr>
            <td>Tên Tài Khoản:</td>
            <td><?php echo $Username?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $Email;?></td>
        </tr>
        <tr>
            <td>Số Điện Thoại:</td>
            <td><?php echo $Tel;?></td>
        </tr>
    </table><br><hr>

    <h2>Bài Đăng Của Bạn</h2>

    <table>
        <tr>
            <th>Tiêu Đề</th>
            <th>Nội Dung</th>
            <th>Ngày Đăng</th>
        </tr>
        <?php foreach($dstt as $tt){
        extract($tt); ?>
            <tr>
                <td><?php echo $TieuDeTin; ?></td>
                <td><?php echo $NoiDungTin; ?></td>
                <td><?php echo $NgayDangTin; ?></td>
            </tr>
        <?php } ?>
    </table><br><hr>

    <h2>Lịch Sử Nạp Coins Gần Nhất</h2>

    <table>
        <tr>
            <th>Ngày Nạp</th>
            <th>Số Tiền Nạp</th>
            <th>Coins Nhận Được</th>
            <th>Phương Thức Nạp</th>
        </tr>
        <?php foreach($socoins as $coins){
        extract($coins); ?>
            <tr>
                <td><?php echo $NgayNap; ?></td>
                <td><?php echo $SoTien; ?></td>
                <td><?php echo $Coins; ?></td>
                <td><?php echo $PTTT; ?></td>
            </tr>
        <?php } ?>
    </table><br>

    <button><a href="edit_profile.php">Chỉnh Sửa Thông Tin Cá Nhân</a></button>

</div>
</body><br>
