<html>
<head>
<table> Интерволга </table>
</head>
<body>
    <div>Создать PHP-страницу upload.php с формой загрузки CSV-файла
         <p>В CSV-файле должны быть 2 столбца: название файла, содержимое
         <p>Рядом с файлом upload.php требуется создать папку /upload/  
         <p>и создать в ней файлы, прочитав CSV-файл.</p></div>
    <div>
        <p>Решение:</p> 
        <p>Создание файла CSV:</p>
            <form action="create.php" method="post">
                <p><input name="_1col_0str" value="Название файла">
                <input name="_2col_0str" value="Содержимое"></p>
                <p><input name="_1col_1str" value="aaa.txt">
                <input name="_2col_1str" value="Привет"></p>
                <p><input name="_1col_2str" value="bbb.log">
                <input name="_2col_2str" value="Тест"></p>
                <p><input name="_1col_3str" value="ccc.html">
                <input name="_2col_3str" value="<h1>Заголовок</h1>"></p>
                <button>Create</button>
            </form>
        <p>Загрузка и обработка данных из файла CSV</p>
            <form action="data_processing.php" method="post">
                <button>Load</button>
            </form>   
    </div>
</body>
</html>