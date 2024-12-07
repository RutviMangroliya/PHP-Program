<html>

<head>
    <title></title>
    <style>
        div {
            font-size: 25px;
            margin-left: 600px;
            margin-top: 100px;
            padding-left: 25px;
            width: 15%;
            background-color: skyblue;
            box-shadow: 3px 3px 3px 3px grey;
        }
    </style>
</head>

<body>
    <div>
        <?php

        date_default_timezone_set("Asia/Kolkata");

        $t = date("h:i:s");
        echo $t;
    
        if ($t > 12) {

            echo "GOOD MORNING <br> $t";

        } elseif ($t == 12) {

            echo "GOOD AFTERNOON <br> $t";

        } elseif ($t >= 4) {
            
            echo "GOOD EVENING <br> $t";
        }

        ?>
    </div>
</body>

</html>