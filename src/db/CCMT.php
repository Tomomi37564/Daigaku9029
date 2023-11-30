<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
        require_once 'conexao.php';
        date_default_timezone_set('America/Los_Angeles');

        function getIPAddress() {  
            //whether ip is from the share internet  
             if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                        $ip = $_SERVER['HTTP_CLIENT_IP'];  
                }  
            //whether ip is from the proxy  
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
             }  
        //whether ip is from the remote address  
            else{  
                     $ip = $_SERVER['REMOTE_ADDR'];  
             }  
             return $ip;  
        }  
        $ip = getIPAddress();  
        $date = date('m/d/Y h:i:s a', time());
        $site = "Charlie Chaplin Modern Times";
            $sql = "insert into historico values (default, '$ip', '$date', '$site');";



            $conexao -> close();
        
    ?>
</body>
</html>