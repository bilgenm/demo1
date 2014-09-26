<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $connexion = "host=localhost password=840919 user=bilgen  port=5432";
        $cnx = pg_connect($connexion);
        if ($cnx) {
            print "OK";
        } else {
            print "Echec";
        }
        ?>
    </body>
</html>

