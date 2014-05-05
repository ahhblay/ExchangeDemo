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
        	
            function callWelcome() {
                window.location = "welcome.html";
            }
        </script>
    </head>
    <body>
	<?php
    	    $number = $_POST['number'];
  	    $name = $_POST['name'];

  	    //connect to database
  	    $connect = mysql_connect("dbserver.engr.scu.edu","nmaulino","FREE2799");
  	    if (!$connect)        
      		die('Error in connection: ' . mysql_error());

  	    mysql_select_db("sdb_nmaulino", $connect);
            
  	    if (isset($name)){      
  	    	if(!mysql_query("INSERT INTO Members (fname, phone) values ('$name','$number')", $connect))
          	     die('Error: ' .mysql_error());
	        else
          	     echo "<center>Your account has been successfully changed.</center>";
  	    }
	?>
		
				<div id="form-div">
								<h1>Settings</h1><br />
				
                <form method="post" action="welcome.html">	
              		<input name="name" type="text" class="signup-input" placeholder="Name" id="name" /><br />
              		<input name="email" type="text" class="signup-input" placeholder="Email Address" id="email" /><br />
              		<input name="number" type="text" class="signup-input" placeholder="Phone Number" id="number" /><br />
      				<br />
      				<input type="submit" class="signup-input" value="Save" id="button"/>
      				</form>
      			</div>
      			
    </body>
</html>
