<?php
// تعريف سلسلة نصية
$string = "  Hello, PHP World!  ";

// 1. طول السلسلة
$length = strlen($string);
echo "طول السلسلة: $length\n"; // 17

// 2. تقطيع السلسلة
$substring = substr($string, 2, 7);
echo "جزء من السلسلة: '$substring'\n"; // "Hello, "

// 3. البحث عن النص
$position = strpos($string, "PHP");
echo "موقع 'PHP': $position\n"; // 8

// 4. استبدال نص
$replaced = str_replace("World", "Everyone", $string);
echo "بعد الاستبدال: '$replaced'\n"; // "  Hello, PHP Everyone!  "

// 5. تحويل الأحرف
$lowercase = strtolower($string);
echo "السلسلة بأحرف صغيرة: '$lowercase'\n"; // "  hello, php world!  "

$uppercase = strtoupper($string);
echo "السلسلة بأحرف كبيرة: '$uppercase'\n"; // "  HELLO, PHP WORLD!  "

// 6. إزالة المسافات
$trimmed = trim($string);
echo "السلسلة بعد إزالة المسافات: '$trimmed'\n"; // "Hello, PHP World!"

// 7. تقسيم السلسلة إلى مصفوفة
$array = explode(", ", $trimmed);
echo "المصفوفة الناتجة: ";
print_r($array); // Array ( [0] => Hello [1] => PHP World! )

// 8. دمج مصفوفة إلى سلسلة
$joined = implode(" - ", $array);
echo "السلسلة المدمجة: '$joined'\n"; // "Hello - PHP World!"

// 9. التحقق من وجود نص
$contains = str_contains($string, "PHP");
echo "هل تحتوي السلسلة على 'PHP'؟ " . ($contains ? "نعم" : "لا") . "\n"; // نعم

// 10. تحويل أول حرف إلى حرف كبير
$capitalized = ucfirst(trim($string));
echo "السلسلة بعد تحويل أول حرف إلى كبير: '$capitalized'\n"; // "Hello, PHP World!"
?>