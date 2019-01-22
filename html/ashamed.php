<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../resources/img/favicon.png"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../JS/vote.js"></script>
    <?php
    include "../PHP/fill_ashamed.php";
    include "../PHP/auth.php";
    $id = $_GET['id'];
    $name = get_name($id);
    $bio = get_bio($id);
    $bio_pic = get_bio_pic($id);
    $meme = get_ashamed_memes($id);
    $video = get_video_url($id);
    console_log($_SESSION);
    console_log($meme[1])
    ?>
    <title><?php echo $name; ?></title>
    <script>
        $(function () {
            $('#navigatorbar').load('../html/nav_bar.php')
        });
    </script>
</head>
<body>
<div id="dota2">
    <a href="../html/dota2.php"><h1>Dota 2</h1></a>
    <div id="navigatorbar">
    </div>
    <div class="col-md-12">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="ashamedname">
                <h3><?php echo $name; ?></h3>
            </div>
            <div class="ashamedbio">
                <img src="<?php echo $bio_pic; ?>" alt="250kg beast">
                <?php echo "<p>" . $bio . "</p>" ?>
            </div>
            <div class="ashamedmemes">
                <h4>RELATED MEMES</h4>

                <div class="memebox">
                    <div class="memename">
                        Name of the meme
                    </div>
                    <div class="meme">
                    <?php echo $video; ?>
                    </div>
                    <div class="memebuttons">
                        <img src="../resources/img/hearticon.png"
                             alt="Preserved heart of an extinct monster, it bolsters the bearer's fortitude. ">
                    </div>
                </div>
                <div class="memebox">
                    <div class="memename">
                        Name of the meme
                    </div>
                    <div class="meme">
                        <img src="<?php echo $meme[0]; ?>"
                             alt="Kappa pride">
                    </div>
                    <div class="memebuttons">
                        <input type="image" class="like" title="Like this meme" id='Like'
                        src="../resources/img/hearticon.png" alt="Preserved heart of an extinct monster, it bolsters the bearer's fortitude." value="<?php echo $meme[1]?>">
                        <input type="image" class="dislike" title="Dislike this meme" id='Dislike'
                        src="../resources/img/doom.png" alt="You are doooooooooooooooooooooomed!">                         
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>

</div>
</body>
</html>