
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thống kê</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Thống kê</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
       <!-- Nơi bạn muốn hiển thị biểu đồ -->
<div class="col-lg-6">
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Bài Đăng Theo Tháng</h3>
                <!-- Thêm link để xem chi tiết hoặc điều hướng đến trang thống kê -->
                <a href="javascript:void(0);" onclick="viewMonthlyPosts()">Xem chi tiết</a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                    <span class="text-bold text-lg" id="monthly-post-count">0</span>
                    <span>Bài Đăng Trong Tháng</span>
                </p>
            </div>

            <div class="position-relative mb-4">
                <canvas id="monthly-posts-chart" height="200"></canvas>
            </div>

            <div class="d-flex flex-row justify-content-end">
                <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Bài Đăng Tháng Này
                </span>

                <span>
                    <i class="fas fa-square text-gray"></i> Bài Đăng Tháng Trước
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Thêm mã PHP để lấy dữ liệu từ file get_monthly_post_data.php -->


<script>
    // Sử dụng AJAX để gọi API lấy dữ liệu từ máy chủ và cập nhật biểu đồ
    function viewMonthlyPosts() {
        // Dữ liệu đã được lấy từ file get_monthly_post_data.php, không cần gọi lại API
        var data = <?php echo json_encode($monthlyPostData); ?>;
        updateMonthlyPostsChart(data);
    }

    // Hàm updateMonthlyPostsChart không cần thay đổi
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    // Sử dụng AJAX để gọi API lấy dữ liệu từ máy chủ và cập nhật biểu đồ
    function viewMonthlyPosts() {
        // Gọi API hoặc trang xử lý PHP để lấy dữ liệu từ máy chủ
        // Dưới đây là một ví dụ AJAX đơn giản
        fetch('get_monthly_post_data.php')
            .then(response => response.json())
            .then(data => {
                updateMonthlyPostsChart(data);
            })
            .catch(error => console.error('Error:', error));
    }

    function updateMonthlyPostsChart(data) {
        // Cập nhật số lượng bài đăng trong tháng
        document.getElementById('monthly-post-count').innerText = data.monthlyPostCount;

        // Lấy tháng và số lượng bài đăng từ dữ liệu
        const labels = data.labels;
        const thisMonthData = data.thisMonthData;
        const lastMonthData = data.lastMonthData;

        // Tạo biểu đồ
        var ctx = document.getElementById('monthly-posts-chart');
        
        // Lưu ý: Thay đổi dòng dưới đây
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Bài Đăng Tháng Này',
                        data: thisMonthData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    },
                    {
                        label: 'Bài Đăng Tháng Trước',
                        data: lastMonthData,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: false
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        type: 'time',
                        time: {
                            unit: 'month'
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>

</div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

      <!-- Thêm mã PHP để lấy dữ liệu từ hàm thongkebaidang_thang() -->
<!-- Thêm mã PHP để lấy dữ liệu từ hàm thongkebaidang_thang() -->
<?php
// Gọi hàm thongkebaidang_thang() để lấy dữ liệu
$monthlyPostData = thongkebaidang_thang();

// Chuẩn bị dữ liệu cho biểu đồ
$labels = $monthlyPostData['labels'];
$thisMonthData = $monthlyPostData['thisMonthData'];
$lastMonthData = $monthlyPostData['lastMonthData'];
?>


<!-- Tiếp tục với mã HTML và JavaScript -->
<script>
    // Sử dụng AJAX để gọi API lấy dữ liệu từ máy chủ và cập nhật biểu đồ
    function viewMonthlyPosts() {
        // Dữ liệu đã được lấy từ hàm thongkebaidang_thang(), không cần gọi lại API
        var data = <?php echo json_encode($monthlyPostData); ?>;
        updateMonthlyPostsChart(data);
    }

    // Hàm updateMonthlyPostsChart không cần thay đổi
</script>

<!-- Tiếp tục với mã HTML và JavaScript khác -->
