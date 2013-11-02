<?

require_once('IUserDataProvider.php');

class MySQLUserProvider implements IUserDataProvider
{
	protected $db;
	protected $authenticated; 
	protected $id;

	public function __construct()
	{
		$this->db = new mysqli("localhost", "hacker", "1337", "hacker");
	}

	function findByUserName($username)
	{

	}

	function authenticate($username, $password)
	{
		$query = "SELECT * FROM User WHERE username='{$username}' AND password='{$password}'";
		$result = $this->db->query($query);

		if(mysqli_num_rows($result) > 0) {
			$userRow = $result->fetch_object();
			$this->id = $userRow->id;
			$this->authenticated = true;
			$this->recordLogin();
			return true;
		}
		return false;
	}

	function loadUserData()
	{
		if($this->authenticated){
			$query = "SELECT * FROM User WHERE id={$this->id}";
			$result = $this->db->query($query);
			return $result->fetch_array();
		}
	}

	function saveUserData($userdata)
	{
		if($this->authenticated){
			$query = "UPDATE User SET
					  username='{$userdata['username']}',
					  password='{$userdata['password']}',
					  email='{$userdata['email']}',
					  updated=now()";
			$this->db->query($query);
		}
	}

	private function recordLogin()
	{
		if($this->authenticated){
			$query = "UPDATE User SET lastlogin=NOW() WHERE id={$this->id}"; 
			return $this->db->query($query);
		}
		return false;
	}
}