<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }

	private function get_user_hash($username){

		try {
			$stmt = $this->_db->prepare('SELECT * FROM users WHERE (username = :username) ');
			$stmt->execute(array('username' => $username));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}

	public function login($username,$password){

		$row = $this->get_user_hash($username);

		if(($row['password']) == $password){
                     
		    $_SESSION['loggedin'] = true;
		    $_SESSION['username'] = $row['username'];
		    $_SESSION['name'] = $row['name'];
                    $_SESSION['adminLevel'] =$row['admin_level'];
                   
		    return true;
		}
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    session_regenerate_id();
                  
			return true;
		}
	}
        
         public function get_Members($memberID){
    		try {
			$member = $this->_db->prepare('SELECT * FROM users WHERE user_id= :id ');
			$member->execute(array('id' => $memberID));

			return $member->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
    	}
         
}

$user = new User($db);
?>
