<?php
   	

	  
	   $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'lastname'=> $_POST["lastname"],
          'age'=> $_POST["age"],
          'email'=>$_POST["email"],
	      'password'=> $_POST["password"]
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

	 echo "my value: ".$mydata[1]->lastname;
?>