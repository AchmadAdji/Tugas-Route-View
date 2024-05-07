<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes Sign Up-Adji</title>
</head>
<body style="background-color: rgb(211, 211, 241);">
    <h1 style="color: rgb(10, 82, 149);text-align: center;">SELAMAT DATANG!</h1>
    <h2 style="color: rgb(10, 82, 149);text-align: center;">Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama!</h2>

    Nama: <?php echo $_GET["fname"];?>
    <?php echo $_GET["lname"];?><br>
    Jenis Kelamin: <?php echo $_GET["gender"];?><br>
    Negara: <?php echo $_GET["national"];?><br>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
        if (isset($_GET['bahasa'])) {
       
        $selected_languages = $_GET['bahasa'];
        
        
        echo "Bahasa yang dipilih: ";
        foreach ($selected_languages as $language) {
            echo $language . ", ";
        }
    } else {
        echo "Mohon pilih setidaknya satu bahasa.";
    }
}
?><br>

    Bio: <?php echo $_GET["Bio"];?>
</body>
</html>