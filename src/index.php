<!DOCTYPE html>
<html>
<head>
    <title>Docker Works...</title>
    <style>
        main {
            border-radius: 10px;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            height: 500px;
            text-align: center;
            color: black;
        }

        #info-div {
            color: gray;
            font-size: 300%;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <main>
        <div id="info-div">
            It Works!
        </div>

        <?php
            echo "<div id='info-div'>";
            echo "php confirmed :D";
            echo "</div>";
        ?>

        <?php
            $host = "db";
            $port = "5432";
            $user = "root";
            $pass = "root";
            $dbname = "test";
            $db = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass);

            echo "<div id='info-div'>";

            if($db)
                echo "Database connected";
            else
                echo "Database connection failed";

            echo "</div>";
        ?>

    </main>  

</body>
</html>