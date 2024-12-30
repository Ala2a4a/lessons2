
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أساسيات البرمجة</title>
</head>
<body>
    <h1>تطبيق الأساسيات في JavaScript</h1>
    <div id="output"></div>
    <script>
        // المتغيرات
        let x = 10;
        let y = 20;
        let output = '';

        // عمليات الطباعة
        output += 'قيمة x: ' + x + '<br>';
        output += 'قيمة y: ' + y + '<br>';

        // if
        if (x > y) {
            output += 'x أكبر من y<br>';
        } else {
            output += 'x ليس أكبر من y<br>';
        }

        // for
        output += 'الأعداد من 1 إلى 5:<br>';
        for (let i = 1; i <= 5; i++) {
            output += i + '<br>';
        }

        // switch
        let day = 3;
        switch (day) {
            case 1:
                output += 'اليوم هو الأحد<br>';
                break;
            case 2:
                output += 'اليوم هو الإثنين<br>';
                break;
            case 3:
                output += 'اليوم هو الثلاثاء<br>';
                break;
            default:
                output += 'يوم غير معروف<br>';
        }

        // while
        let count = 0;
        output += 'القيم من 0 إلى 4 باستخدام while:<br>';
        while (count < 5) {
            output += count + '<br>';
            count++;
        }

        // do while
        let number = 0;
        output += 'القيم من 0 إلى 4 باستخدام do while:<br>';
        do {
            output += number + '<br>';
            number++;
        } while (number < 5);

        // معاملات المقارنة
        output += 'نتيجة 10 == 10: ' + (10 == 10) + '<br>';
        output += 'نتيجة 10 === "10": ' + (10 === "10") + '<br>';

        // العمليات الحسابية
        let sum = x + y;
        output += 'مجموع x و y: ' + sum + '<br>';

        // عرض النتائج
        document.getElementById('output').innerHTML = output;
    </script>
</body>
</html>