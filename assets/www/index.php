<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <title>Exchange</title>
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
        <script src="cordova.js"></script>
        <script src="cordova_plugins.js"></script>
        <script src="index.js"></script>
        <script type="text/javascript">
        	app.initialize();
        	
        	function ajaxFunction(){
        		var fullname = document.getElementById("name").value;
        		var emailaddress = document.getElementById("email").value;
        		var num = document.getElementById("number").value;
        		var ajaxRequest;
        		
        try{
                // Opera 8.0+, Firefox, Safari
                ajaxRequest = new XMLHttpRequest();
        } catch (e){
                // Internet Explorer Browsers
                try{
                        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                        try{
                                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e){
                                // Something went wrong
                                alert("Your browser broke!");
                                return false;
                        }
                }
        }
        
        ajaxRequest.onreadystatechange = function(){
        	if(ajaxRequest.readyState == 4){
        		document.signupForm.result.value = ajaxRequest.responseTest;
        	}
        }
        ajaxRequest.open("GET", "http://students.engr.scu.edu/~ahsu/test.php?var1=" + fullname + "&var2=" + emailaddress + "&var3=" + num, true);
        ajaxRequest.send(null);
 }
        	
        </script>
    </head>
    <body>
		
				<div id="form-div">
								<h1>Sign Up</h1><br />
				
                <form name="signupForm">	
              		<input name="name" type="text" class="signup-input" placeholder="Name" id="name" /><br />
              		<input name="email" type="text" class="signup-input" placeholder="Email Address" id="email" /><br />
              		<input name="number" type="text" onChange="ajaxFunction();" class="signup-input" placeholder="Phone Number" id="number" /><br />
      				Server Ping: <input type="text" name="result" /><br />
      				<input type="submit" class="signup-input" value="Register" id="button"/>
      				</form>
      			</div>
      			
    </body>
</html>
