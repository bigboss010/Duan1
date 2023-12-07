
    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .profile-container {
            max-width: 800px;
            margin: auto;
        }

        h2 {
            color: #333;
            margin-top: 0; 

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
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            text-align: center;
        }
        .shorten-content {
    font-size: 1.4rem;
    font-weight: 400;
    line-height: 1.8rem;
    max-height: 180px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 6;
    grid-area: shorten-content; /* Đặt vị trí cột cho phần nội dung */
}

.tieude {
    font-size: 1.4rem;
    font-weight: 400;
    line-height: 1.8rem;
    overflow: hidden;
    text-overflow: ellipsis;
    grid-area: tieude; /* Đặt vị trí cột cho phần tiêu đề */
}


    </style>

<body>

<div class="profile-container">

    <?php
    $ID_User = $_SESSION['Username']['ID_User']; 
    $Username = $_SESSION['Username']['Username'];
    $Email = $_SESSION['Username']['Email'];
    $Tel = $_SESSION['Username']['Tel'];
    $dstt = loadall_tintuccanhan($ID_User);
    $socoins = loadall_lscoins($ID_User);
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
            <td>Coins:</td>
            <td><?php echo '$'.$Coins;?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $Email;?></td>
        </tr>
        <tr>
            <td>Số Điện Thoại:</td>
            <td><?php echo $Tel;?></td>
        </tr>
    </table><br>
    <button class="btn btn-primary btn-sm"><a href="index.php?act=edit_profile">Chỉnh Sửa Thông Tin Cá Nhân</a></button>
    <button class="btn btn-info btn-sm"><a href="user/login/doimk.php">Đổi Mật Khẩu</a></button>
    <hr>


    <h2>Bài Đăng Của Bạn</h2>

    <table>
        <tr>
            <th>Tiêu Đề</th>
            <th>Nội Dung</th>
            <th>Hình ảnh</th>
            <th>Ngày Đăng</th>
            <th>Trạng Thái</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach($dstt as $tt){
        extract($tt); ?>
            <tr>
                
                <td class="tieude"><?php echo $TieuDeTin; ?></td>
                <td class="shorten-content"><?php echo $NoiDungTin; ?></td>
                <td><?php echo '<img src="upload/'.$HinhAnhTin.'" width="50px" alt="">'; ?></td>
                <td><?php echo $NgayDangTin; ?></td>
                <td><?php echo $TrangThai; ?></td>
                <td><button class="btn btn-info btn-sm"><a href="index.php?act=edit_tintuc&ID_TinTuc=<?php echo $ID_TinTuc;?>">Sửa</a></button><hr>
                <button class="btn btn-danger btn-sm"><a href="index.php?act=xoatintuc&ID_TinTuc=<?php echo $ID_TinTuc;?>">Xóa</a></button></td>
            </tr>
        <?php } ?>
    </table><br>
    <button class="btn btn-primary btn-sm"><a href="index.php?act=goidangtincuatoi">Thêm bài viết</a></button>
    <hr>

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
                <td><?php echo $SoTien.' VND'; ?></td>
                <td><?php echo '$'.$CoinsNhan; ?></td>
                <td><?php echo $PTTT; ?></td>
            </tr>
        <?php } ?>
    </table><br>


</div>
</body><br>

