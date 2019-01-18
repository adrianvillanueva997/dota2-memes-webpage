$(document).ready(function () {
    $("#Like").click(function () {
        
        $.post("../PHP/post_manager.php",
            { 'like': 1,
                'meme_id': $("#Like").val() },
            function(data,status){
                console.log(data);
                console.log(status);
            });

    });
    $("#Dislike").click(function () {
        $.post("../PHP/post_manager.php",
            { 'dislike': 1,
            'meme_id': $("#Like").val() },
            function(data,status){
                console.log(data);
                console.log(status);
            });

    });
});