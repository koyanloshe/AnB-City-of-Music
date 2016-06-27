
<?php
class Users {
	public $tableName = 'users';
	
	function __construct(){
		//Database configuration
		$dbServer = 'localhost'; //Define database server host
		$dbUsername = 'syed_user'; //Define database username
		$dbPassword = 'syed@2016'; //Define database password
		$dbName = 'codexworld'; //Define database name
		
		//Connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connect = $con;
		}
	}
	
	
	function calcWeightage($answer){
		$pieces = explode(",", $answer);
		$total = 0;
		foreach($pieces as $key => $ans){
			$total = $total + $this->getWeightage(($key+1), $ans);
		}
		return $total;
	}
	function getWeightage($question, $option){
		 $prevQuery = mysqli_query($this->connect,"SELECT * FROM weightage WHERE question = '". $question ."'") or die(mysqli_error($this->connect));
		 if(mysqli_num_rows($prevQuery) > 0){
			 $row = mysqli_fetch_array($prevQuery, MYSQLI_ASSOC);
			 return $row["ans".$option];
		 }
		 return 0;
	}
	function transferData($name, $email, $phone){
		$url = 'http://54.251.37.242:8080/RRDevelopers/Request/query.htm';
		$query = 'n=dXNlclJSRA==&d=cGFzc3dvcmRSUkQ=&k=MTMw&ReqType=Integration&CCONMobileNo='. $phone .'&CCONEmailID='. $email .'&Name='. $name .'&ProspectName='. $name .'&SourceURL=www.apitest.com&ProjectName=City%20of%20Music';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPGET, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$query);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$return = curl_exec ($ch);
		curl_close ($ch);

		return $return;
		
	}
	function saveUser($data){
		$insert = mysqli_query($this->connect,"INSERT INTO $this->tableName SET name = '". $data['name'] ."', email = '". $data['email'] ."', phone = '". $data['phone'] ."', claimfree = '". $data['claimfree'] ."',weightage = ". $data['weightage'] .", ans = '". $data['ans'] ."'") or die(mysqli_error($this->connect));
	}
	
}
?>