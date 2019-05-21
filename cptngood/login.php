 <?php require_once('includes/config.php');
require_once('includes/user.php');
require_once('includes/protect.php');
?>
<?php
if( $user->is_logged_in() ){ redirect_to('index.php'); }

if(isset($_POST['action_login'])){
	$identification = protect($_POST['login']);
	$password = protect($_POST['password']);
	if($identification == "" || $password == ""){
		$msg[] =  "Please enter your username and password !";
	}else{
		if($user->login($identification,$password)){ 
			//logged in return to index page			
            redirect_to("index.php");
			
		
		} else {
			$msg[] = "<b>Wrong username or password</b>";
		}
	}
}
?>
<head>
    <link rel="stylesheet"href="style/login.css"/>
</head>
<body>
    <div class="container">
	<section id="content">
            <form method="post" autocomplete="off">
			<h1>Admin Login</h1>
			<div>
                            <input type="text" placeholder="Username"name="login" required="" id="username" />
			</div>
			<div>
                            <input type="password" placeholder="Password" name="password"required="" id="password" />
			</div>
                        
			<div>
                            <input type="submit" name="action_login"value="Log in" />
				<a href="#">Request access to login</a>
				
			</div>
		</form><!-- form -->
		<div class="button">
                 <?php
      if(isset($msg)){
          foreach ($msg as $msg){
        echo "<h2>{$msg}</h2>";
          }
      }
      ?> 
                        
		</div><!-- button -->
	</section><!-- content -->
</div><!-- content --> 
</body>