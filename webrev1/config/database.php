<?PHP
	class dash{
		function __construct($host,$username,$password,$name){
			#$this->name =$name;
			$this->con = new mysqli($host,$username,$password,$name) or die($this->con->error());
		}

		function __destruct(){
			$this->con->close();
		}

		public function login($username='', $password=''){
			$pass = $password;
			$u = $username;
			$filter = "WHERE username= '{$u}' AND password='{$pass}'";
			$data = "SELECT * FROM user {$filter}";
			
			$this->result = $this->con->query($data);
			
			if($this->result->num_rows > 0){
				$array = @mysqli_fetch_array($this->result);
				// session_save_path('../session');
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['level'] = $array['level'];
				$this->result = $this->con->query($data);
				return true;
			}
			
			return false;
		}
		function UPDATE($table, $value, $key_id, $id){
			$fild = "";
			$val = "";
			$i = 0;
			foreach($value as $key => $value){
				if ($i < 1){
					$koma = "";
				} else {
					$koma = ", ";
				}
				$fild .= $koma . $key . " = '".$this->con->real_escape_string($value)."'";
				$i++;
			}
			$field = ("UPDATE {$table} SET {$fild} WHERE {$key_id} = '{$id}'");
			$this->result = $this->con->query($field);

			return $this->result;
		}
		function query($q){
			$this->result = $this->con->query($q);
			
			return $this->result;
		}
	}
	$objek = new dash('localhost', 'root', '', 'perpustakaan');
?>