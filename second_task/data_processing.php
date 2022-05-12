<html>
<head>
<table> Интерволга </table>
</head>
<body>
    <div>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $res = [];
            if(($file = fopen("data.csv",'r')) !==false){
                while(($data = fgetcsv($file, 1000, ',')) !==false){
                    $res[] = $data;
                }
                fclose($file);
            }
            $dir = "upload";
            if(!is_dir($dir)) {
                mkdir($dir);
            }
            $_1col_1str = $res[1][0];
            $_1col_2str = $res[2][0];
            $_1col_3str = $res[3][0];
            $fp_1col_1str = fopen("upload/$_1col_1str", "a");
               fwrite($fp_1col_1str, $res[1][1]);
            $fp_1col_2str = fopen("upload/$_1col_2str", "a");
                fwrite($fp_1col_2str, $res[2][1]);
            $fp_1col_3str = fopen("upload/$_1col_3str", "a");
                fwrite($fp_1col_3str, $res[3][1]);
        }
        ?>
    </div>
    <div>
        <p>Документы созданы!</p>
            <form action="upload.php" method="POST">
                <button>Back</button>
            </form>   
    </div>
</body>
</html>