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
    <?php
    include "../PHP/fill_ashamed.php";
    $id = $_GET['id'];
    $name = get_name($id);
    $bio = get_bio($id);
    ?>

    <title><?php echo $name; ?></title>
    <script>
        $(function () {
            $('#navigatorbar').load('../html/nav_bar.html')
        });
    </script>
</head>
<body>
<div id="dota2">
    <a href="../html/dota2.html"><h1>Dota 2</h1></a>
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
                <?php echo $bio; ?>
            </div>
            <div class="ashamedmemes">
                <h4>RELATED MEMES</h4>

                <div class="memebox">
                    <div class="memename">
                        Name of the meme
                    </div>
                    <div class="meme">
                        Content of the meme
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
                        Content of the meme
                    </div>
                    <div class="memebuttons">
                        <img src="../resources/img/hearticon.png"
                             alt="Preserved heart of an extinct monster, it bolsters the bearer's fortitude. ">
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