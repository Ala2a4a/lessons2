<?php
// إنشاء مصفوفة
$array = array(1, 2, 3, 4, 5);

// إضافة عنصر إلى نهاية المصفوفة
array_push($array, 6);
echo "بعد إضافة 6: ";
print_r($array); // [1, 2, 3, 4, 5, 6]

// إزالة آخر عنصر من المصفوفة
$last = array_pop($array);
echo "بعد إزالة آخر عنصر ($last): ";
print_r($array); // [1, 2, 3, 4, 5]

// تصفية المصفوفة للحصول على العناصر الأكبر من 2
$filtered = array_filter($array, function($value) {
    return $value > 2;
});
echo "العناصر الأكبر من 2: ";
print_r($filtered); // [3, 4, 5]

// دمج مصفوفتين
$array2 = array(7, 8, 9);
$merged = array_merge($array, $array2);
echo "المصفوفة المدمجة: ";
print_r($merged); // [1, 2, 3, 4, 5, 7, 8, 9]

// فرز المصفوفة تصاعدياً
sort($array);
echo "المصفوفة بعد الفرز: ";
print_r($array); // [1, 2, 3, 4, 5]

// الحصول على عدد العناصر في المصفوفة
$count = count($array);
echo "عدد العناصر في المصفوفة: $count"; // 5
?>