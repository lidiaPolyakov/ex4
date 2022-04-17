<!DOCTYPE html>
<html>
    <head>
      <title>Ex4 - Forms</title>
    </head>

    <body>
        <section>
            <?php
                $un = htmlentities($_GET["name"]);
                $pw = htmlentities($_GET["pass"]);
                $question = htmlentities($_GET["question"]);

                if($question != 11){
                    echo "Wrong answer!";
                }
                elseif($question == 11){
                    echo"<h1>welcome " .$un."!</h1>";
                }
                ?>
        </section>
    </body>
</html>