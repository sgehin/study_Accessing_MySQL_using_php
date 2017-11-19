
<!-- preventing Hacking Attempts using placeholders
safely acces MySQL and prevent XSS attacks

function mysql_entities_fix_string($conn,$string)
function mysql_fix_string($conn,$string) = in connection.php
DB= go 
tabel = username
ready made method called prepare

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
        
        <form action="index.php" method="POST">
        <input type="text" name="user">
        <input type="text" name="pass">
        <input type="submit" name="SEND">
        <br>
                
        
        
    </form> 
            <button class="knop" onclick="toFormInlog()">INLOG</button>

        <?php
        require_once 'connection.php';
        $conn=connectDB();
        // statement opmaken met ? en vervolgens variabele binden aan ?
        $stmt = $conn->prepare('INSERT INTO username values(?,?,?)');
        $stmt->bind_param('sss',$id,$username,$password);
        // variablelen vullen met een waarde
        $id = '';
        $username= mysql_entities_fix_string($conn,$_POST['user']);
        $password= mysql_entities_fix_string($conn,$_POST['pass']);
        //$username= 'jo';
        //$password= 'jojo';          
       // statement executen            
        $stmt->execute();
        // controle uitvoer statement
        printf("%d Row inserted.\n",$stmt->affected_rows);
        // sluiten statement en sluiten DB connectie
        $stmt->close();
        $conn->close();
        
        
        
        
        
        ?>
    </body>
    <!-- resultaat:
    
   
    -->
    
</html>
