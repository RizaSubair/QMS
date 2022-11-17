<html>  
<head>  
    <title>PHP login system</title>  
	<style>
    body{   
	
	background-color: #cccccc;
    background-image: url("https://img.freepik.com/free-vector/cool-blue-parchment_53876-86280.jpg?w=996&t=st=1667029408~exp=1667030008~hmac=9b3d925221ac016b13286d1cf2cf04bbac794ac1240a7916896746640300e139")  
	}  
	#frm{  
		border: solid gray 1px;  
		width:25%;  
		border-radius: 2px;  
		margin: 120px auto;  
		background: lightblue;  
		padding: 50px; 
		text-align: center;		
	}  
	#btn{  
		color: #fff;  
		background: #337ab7;  
		padding: 7px;  
		margin-left: 70%;  
	}  
	</style>
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  

<body>  
    <div id = "frm">  
        <h1>Admin Login</h1>  
        <form name="f1" action = "home.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p> 			
        </form>  
    </div>  
    	
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                } 
				else if(id!="admin"&& ps!="1230"){
					alert("Invalid User Name and Password");
					return false;
				}
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  