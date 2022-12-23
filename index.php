<html>
<head>
    <title>Student Result Management System</title>
<link rel="stylesheet" href="csss/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">Home</a></li>
                <li><a href="admin/aboutus.php">About</a></li>
                <li><a href="admin/contactus.php">Contact</a></li>
                <li><a href="login.php">Admin login</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <br>
              <h3 class="search">check result!</h3>
             
            <tr>
                <th class="name1">Rollno</th>
                <td class="name2"><input type="text" name="rollno" required class="box1"/></td>
            </tr>
            <tr>
                <th class="standered1">Class</th>
                <td class="standered2"><input type="text" name="std" required class="box2"/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>
