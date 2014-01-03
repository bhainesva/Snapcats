<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>submit.php</title>
</head>
<body>
    <?php
        //$my_folder = "./uploads/"; 
        //copy($_FILES["file"]["tmp_name"],$my_folder.$_FILES["file"]["name"]);
        echo "File uploaded."; 

        require_once("../src/snapchat.php");
        //Store values from the form into variables
        //$user = $_REQUEST["user"];
        $user = "snapmecatz";
        //$password = $_REQUEST["pass"];
        $password = "fuckyoni";
        $friend = $_REQUEST["friendUser"];
        if($_FILES["file"]["tmp_name"]){
          $filename = $_FILES["file"]["tmp_name"];
          echo($filename);
        }
        else{
          $filename = "./snapcat.png.png";
          echo($filename);
        }

        // Log in:
        $snapchat = new Snapchat($user, $password);

        //Add target as friend
        $snapchat->addFriend($friend);

        // Upload a snap and send it to target for 8 seconds:
        $id = $snapchat->upload(
            Snapchat::MEDIA_IMAGE,
            file_get_contents($filename)
        );
        $snapchat->send($id, array($friend), 8);



        
    ?>
    
    <center><h1>
        Hello <?php echo($user); ?><br />
        A snapchat was sent to <?php echo($friend); ?><br />
    </h1></center>
</body>
</html>
