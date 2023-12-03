<?php
    function insert_momo($data_momo) {
        try {
            // Kết nối cơ sở dữ liệu
            $conn = pdo_get_connection();
            // Chuẩn bị câu lệnh SQL INSERT
            $sql = "INSERT INTO momo (partnerCode, orderId, requestId, amount, orderInfo, orderType, transId, payType, signature) 
                    VALUES (:partnerCode, :orderId, :requestId, :amount, :orderInfo, :orderType, :transId, :payType, :signature)";
    
            // Kiểm tra và chuyển đổi giá trị sang chuỗi nếu cần thiết
            foreach ($data_momo as &$value) {
                if (!is_string($value)) {
                    $value = strval($value);
                }
            }
            // Kiểm tra số lượng tham số trong câu lệnh SQL và mảng $data_momo
            $numParamsInSQL = substr_count($sql, ':');
            $numParamsInArray = count($data_momo);
    
            if ($numParamsInSQL !== $numParamsInArray) {
                throw new Exception("Số lượng tham số không khớp giữa SQL và mảng data_momo.");
            }
            // Chuẩn bị câu lệnh SQL và bind dữ liệu
            $stmt = $conn->prepare($sql);
            $stmt->execute($data_momo);
        } catch (PDOException $e) {
            echo "Lỗi PDO: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        } finally {
            // Đóng kết nối
            unset($conn);
        }
    }
    
?>