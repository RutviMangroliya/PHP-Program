<html>
    <head>
        <title>pro 3</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            function val(){

                var emp =document.getElementById('number').value;

                if(emp == ''){
                    alert('please enter the string value');
                    return false;
                }
            }
        </script>
        <script>
            $(document).ready(function(){
                $("#number").keyup(function(){
                    this.value=this.value.replace(/[^A-Z a-z\.]/g,'');
                });
            });
         </script>
        <style>
           
            table{
                background-color: skyblue;
                box-shadow: 5px 5px 5px 5px grey;
            }
            tr,td{padding: 20px;}
        
            input[type=text]{
                height: 35px;
                border-color: dodgerblue;
            }

            #td{
                font-size: 25px;
            }
            td{
                text-align: center;
            }
            .btn{
                background-color:dodgerblue;
				color:white;
                border:none;
                box-shadow: 3px 3px 3px 3px grey;
				width:100px;
                height:40px;
            }
            /*php css*/ 
            #div{
                background-color: skyblue;
                box-shadow: 5px 5px 5px 5px grey;
                width: 35%;
                margin-left: 32%;   
            }
            #h1{
                background-color: grey;
                color: lightgrey;
                text-align: center;
            }
            #div{font-size: 30px;}
            
        </style>
    </head>

    <body>
        <form method="POST" onsubmit="return val();">
            <table align="center">
                <tr>
                    <td id="td">Enter String : </td><td><input type="text" id="number" name="name"/></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn" name="submit" /></td>
                    <td><input type="reset" class="btn" name="reset" /></td>
                </tr>
                
            </table>
        </form>   
        <div id="div">
            
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $string=$_POST["name"];

                    echo "<h1 id=h1>String</h1><div class=div>";
                    echo "Length : ".strlen($string)."<br><br>";
                    echo "Reverse  : ".strrev($string)."<br><br>";
                    echo "Upper Case  : ".strtoupper($string)."<br><br>";
                    echo "Lower Case  : ".strtolower($string)."<br><br>";
                    echo "Title Case  : ".ucwords($string)."</div>"; 
                }
            ?>
        </div>
    </body>
</html>
