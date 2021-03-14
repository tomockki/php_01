$(".gu").on("click", function(){
    let aite = Math.floor( Math.random() *3);
    console.log(aite);
    $(".te").html('<img src = "img/janken_gu.png" height="300" width= "300">');
    if(aite === 0){
        $(".kekka").html('<img src = "img/janken_gu.png" height="300" width= "300">');
        $(".kekkatext").html("あいこ！").fadeIn(1000).fadeOut(1000);
    }else if(aite === 1){
        $(".kekka").html('<img src = "img/janken_choki.png" height="300" width= "300">');
        $(".kekkatext").html("あなたの勝ち！").fadeIn(1000).fadeOut(1000);
    }else if(aite === 2) {
        $(".kekka").html('<img src = "img/janken_pa.png" height="300" width= "300">');
        $(".kekkatext").html("相手の勝ち！").fadeIn(1000).fadeOut(1000);
    }
});
$(".choki").on("click", function(){
    let aite = Math.floor( Math.random() *3);
    console.log(aite);
    $(".te").html('<img src = "img/janken_choki.png" height="300" width= "300">');
    if(aite === 0){
        $(".kekka").html('<img src = "img/janken_gu.png" height="300" width= "300">');
        $(".kekkatext").html("相手の勝ち！").fadeIn(1000).fadeOut(1000);
    }else if(aite === 1){
        $(".kekka").html('<img src = "img/janken_choki.png" height="300" width= "300">');
        $(".kekkatext").html("あいこ！").fadeIn(1000).fadeOut(1000);
    }else if(aite === 2) {
        $(".kekka").html('<img src = "img/janken_pa.png" height="300" width= "300">');
        $(".kekkatext").html("あなたの勝ち！").fadeIn(1000).fadeOut(1000);
    }
});
$(".pa").on("click", function(){
    let aite = Math.floor( Math.random() *3);
    console.log(aite);
    $(".te").html('<img src = "img/janken_pa.png" height="300" width= "300">');
    if(aite === 0){
        $(".kekka").html('<img src = "img/janken_gu.png" height="300" width= "300">');
        $(".kekkatext").html("あなたの勝ち！").fadeIn(1000).fadeOut(1000);
    }else if(aite === 1){
        $(".kekka").html('<img src = "img/janken_choki.png" height="300" width= "300">');
        $(".kekkatext").html("相手の勝ち！").fadeIn(1000).fadeOut(1000);
    }else if(aite === 2) {
        $(".kekka").html('<img src = "img/janken_pa.png" height="300" width= "300">');
        $(".kekkatext").html("あいこ！").fadeIn(1000).fadeOut(1000);
    }
});