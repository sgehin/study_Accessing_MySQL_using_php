
<!-- preventing Hacking Attempts

function mysql_fix_string($conn,$string) = in connection.php
DB= go 
tabel = username

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <script>      
        function toFormInlog() {
        document.location ='inlog_form.php';
        }
        
    </script>
    </head>
    <body>
            <button class="knop" onclick="toFormInlog()">INLOG</button>

        <?php
        require_once 'connection.php';
        $conn=connectDB();
        
        $user = mysql_fix_string($conn, $_POST['user']);
        $password = mysql_fix_string($conn, $_POST['pass']);
        $sql = "SELECT * FROM username WHERE username = '$user' AND password = '$password'";
    
        
        
        
        
        
        ?>
    </body>
    <!-- resultaat:
    
   
    -->
    
</html>
