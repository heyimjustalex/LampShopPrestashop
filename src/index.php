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
            $servername = "db";
            $username = "root";
            $password = "root";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password);
            
            echo "<div id='info-div'>";
            
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            echo "</div>";
        ?>

    </main>  

</body>
</html>