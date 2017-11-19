<!DOCTYPE html>
<!-- using insert IDs to make relation between 2 tables-->

<?php include 'connection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conn=connectDB();
        $sql = "INSERT INTO cats value (NULL,'Lynx','Stumpy','5')";
        $result = $conn->query($sql);
        $insertID = $conn-> insert_id;
        
        $sql= "INSERT INTO owners value ($insertID,'Ann','Smith')";
        $result = $conn->query($sql);
        ?>
    </body>
    <!-- resultaat:
    
    ID 3 in tabel cats wordt ook in tabel owners 3 in kolom ID
    
    -->
    
</html>
