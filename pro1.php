<html>
    <head>
        <title>pro 1</title>
        <script type="text/JavaScript">

		    function form(){
                
			    var pat = /^\d+$/;
                var fvalue = pat.test(document.getElementById("fvalue").value)

			    if(fvalue == false){
				    alert(" First Value is Inavalid value!");
				    return false;
			    }
			    if(pat.test(document.getElementById('svalue').value)==false){
				    alert("Second Value is Inavalid value!");
				    return false;
			    }
                if(pat.test(document.getElementById('tvalue').value)==false){
				    alert("Third Value is Inavalid value!");
				    return false;
			    }
		    }
	    </script>
        <style>
            
            #tbl{
                margin-top: 100px;
                background-color: pink;
                width: 400px;
                box-shadow: 5px 5px 5px 5px blue;
            }

            table{
                border-collapse: collapse;
            }

            input[type=text]{
                height: 30px;
                border-color: green;
            }

            td{
                padding: 10px;
                text-align: left;
            }

            .btn{
                background-color:green;
				color:white;
                border:none;
				width:80px;
                height:30px
            }
             
        </style>
    </head>
    <body>
        <form action="bigvalue.php" method="POST" onsubmit="return form();">
            <table align="center"  id="tbl" >
                <tr>
                    <td>First Value : </td><td class="td"><input type="text" id="fvalue" name="fvalue" /></td>
                </tr>
                <tr>
                    <td>Second Value : </td><td class="td"><input type="text" id="svalue" name="svalue" /></td>
                </tr>
                <tr>
                    <td>Third Value : </td><td class="td"><input type="text" id="tvalue" name="tvalue" /></td>
                </tr>
                <tr>
                    <td><input type="submit" class="btn" qname="submit"/></td>
                    <td><input type="reset" class="btn" name="reset"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>