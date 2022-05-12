<html>
<head>
<table> Интерволга </table>
</head>
<body>
    <div>Вставить $a в индексный (простой) массив целых чисел,
         <p>после всех элементов, в которых есть цифра 2.
         <p>Новый массив создавать нельзя. 
         <p>Использовать функцию array_splice нельзя.</p></div>
    <div>Исходный массив:
        <p><?php
        $array = array(2, 4, 6, 8, 12, 24, 48, 96, 192);
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        ?></p></div>
    <div>Решение:
        <p><?php
            //вводные
            $a = 2;
            $array = array(2, 4, 6, 8, 12, 24, 48, 96, 192);
            //определение длины массива
            $lenght = count($array);
            //прохождение по массиву
            for ($i = 0; $i < $lenght; $i++){
                //определение наличия двойки в строке
                if (strrpos($array[$i],"2") !== false){
                    //сдвиг элементов на единицу 
                    $lenght++;
                    //прохождение по массиву с обратной стороны, 
                    //до текущего элемента
                    for ($j = $lenght - 1; $j > $i; $j--){
                        $array[$j] = $array[$j-1];
                    }
                    //увеличение i, чтобы положение было после элемента с "2"
                    $i++;
                    //присвоени строчке следующей за строкой с "2" значение $a
                    $array[$i] = $a;
                }
            }
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        ?></p></div>
</body>
</html>