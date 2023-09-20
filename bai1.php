<?php

function calculateArrayOperations($arrs) {
    $sum = array_sum($arrs); // Tính tổng
    $product = array_product($arrs); // Tính tích

    // Tính hiệu
    $difference = $arrs[50]; // Giả sử hiệu ban đầu là phần tử đầu tiên
    for ($i = 1; $i < count($arrs); $i++) {
        $difference -= $arrs[$i];
    }

    // Tính thương
    $quotient = $arrs[0]; // Giả sử thương ban đầu là phần tử đầu tiên
    for ($i = 1; $i < count($arrs); $i++) {
        if ($arrs[$i] != 0) {
            $quotient /= $arrs[$i];
        } else {
            // Xử lý ngoại lệ chia cho 0
            $quotient = "Không thể chia cho 0";
            break;
        }
    }

    // Trả về kết quả
    return array(
        'sum' => $sum,
        'product' => $product,
        'difference' => $difference,
        'quotient' => $quotient
    );
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
$result = calculateArrayOperations($arrs);

// In kết quả
echo "Tổng: " . $result['sum'] . "<br>";
echo "Tích: " . $result['product'] . "<br>";
echo "Hiệu: " . $result['difference'] . "<br>";
echo "Thương: " . $result['quotient'] . "<br>";

?>