<html>
    <head>
        <title>pro 5</title>
        <style>
            #div{
                background-color: skyblue;
                width:35%;
                text-align: center;
                margin-left: 480px;
                padding-top: 20px;
                box-shadow: 5px 5px 5px 5px grey;
                font-size: 20px;
            }
            #div1{
                background-color: skyblue;
                width:35%;
                text-align: center;
                margin-left: 480px;
                box-shadow: 5px 5px 5px 5px grey;
                padding-top: 20px;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        
            <?php
                $ceu=array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Bruseels","Denmark"=>"Copenhagen",
                         "Finland"=>"Helsinki", "Frnace"=>"Paris","Slovakia"=>"Bratislava", "Slovenia"=>"LjuBljana", 
                         "Germany"=>"Berlin","Greece"=>"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam");

                echo  "<div id=div>";
                echo "<h1>Without Sorting</h1><hr>";

                foreach($ceu as $key=>$value)
                {
                    echo "$key  =>  $value";
                    echo "<br><br>";
                }
                echo "</div><br><br>";
                
                echo  "<div id='div1'>";
                echo "<h1>Sorting</h1><hr>";
                
                ksort($ceu);
                foreach($ceu as $key=>$value)
                {
                    echo "$key  =>  $value";
                    echo "<br><br>";
                }
                echo "</div>";
            ?>
        
    </body>
</html>