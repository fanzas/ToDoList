<?php
session_start();
require_once 'functions.php';


?>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h4> Zadania na dziś </h4>
        <table>
            <?php if (count(getTasks())==0){?>
            <p>Dzisiaj nie masz żadnych zadań</p>
            <p>Na kanapie leży leń, nic nie robi cały dzień</p>
            <?php } ?>
            
            <?php foreach (getTasks() as $key=>$task){?>
            <tr>
                <td><?php echo $task ?></td>
                <td><a href="done.php?done=<?php echo $key?>">Zrobione</a></td>
            </tr>
            <?php } ?>
        </table>
        <hr>
        <form method="POST" action="add.php">
            <textarea name="task"></textarea>
            <br>
            <button type="submit">Dodaj zadanie</button>
        </form>
        
    </body>
    
</html>