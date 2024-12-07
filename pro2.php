<html>
    <head>
        <title>pro 2</title>
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
        <script>

		    function form(){

                var pat = /^\d+$/;
                var num = pat.test(document.getElementById('number').value);

                if(num == false){
                    alert("only valid a digits!");
                    return false;
                }
		    }

           function myFunction() {

                var x = document.getElementById("div");

                if (x.style.display === "none") {
                     x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

	    </script>
        <!--<script>
            $(document).ready(function(){
                $("#number").keyup(function(){
                this.value=this.value.replace(/[^0-9\.]/g,'');
                });

            }); 
        </script>-->

        <style>
            
            #tbl{
                margin-top: 100px;
                background-color: skyblue;
                width: 400px;
                box-shadow: 5px 5px 5px 5px grey;
            }

            table{
                margin-top: 50px;
                border-collapse: collapse;
                height: 100px; 
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

            #div{
                background-color: skyblue;
                width: 35%;
                margin-left: 32%;
                text-align:center;
                box-shadow: 5px 5px 5px 5px grey;
            }  

        </style>
    </head>

    <body>
        <form method="POST" onsubmit="return form();">
            <table align="center" id="tbl">
                <tr>
                    <td id="td">Enter Value : </td><td><input type="text" id="number" name="number" /></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn" name="submit" >submit</button></td>
                    <td><button type="reset" class="btn" name="reset" onclick="myFunction();">reset</button></td>
                </tr>
                
            </table>
        </form>

        <div id="div" > 
            <?php

                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    $mult=(int)$_POST["number"];

                    echo "<h1 id=q>TABLE</h1>";

                    for($i=1;$i<=10;$i++){
                        $answer=$mult * $i;
                        echo  $mult."  *  ".$i."  =  ".$answer."<br>";
                    }
                }
            ?>
        </div>
    </body>
</html>
