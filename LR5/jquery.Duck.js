(function( $ ) {
    var side;
    var ducks=0;
    function startPoint(max) {
        return Math.floor(Math.random() * max);
    }
    $.fn.start = function() {
        $("<img id='back' src='back.jpg' draggable='false' ondragstart='return false'  >").appendTo(".back");
        createDuck();



    };
    $.fn.end = function() {
        $("#back").remove();
        $(".target").remove();
    };
     function createDuck() {
        y =startPoint(530);
        switch (startPoint(2)){
            case 0:
                $("<img id='target' style='transform: scaleX(-1);' draggable='false' ondragstart='return false'  src='target.gif' width='150' height='200' >").appendTo(".duck");
                $("#target").attr('vspace',y);
                $("#target").attr('hspace',1100);
                side = 0;
                break;
            case 1:
                $("<img id='target' draggable='false' ondragstart='return false'  src='target.gif' width='150' height='200' >").appendTo(".duck");
                $("#target").attr('vspace',y);
                side = 1;
                break;
        }
    }
    $.fn.fly = function() {
        switch ($("#difficulty").val()){
            case "easy":
                speed = 2000;
                break;

            case "hard":
                speed = 1000;
                break;
        }
        switch (side){
            case 0:
                $(".duck").animate({left: "-=1100"},  speed, function(){
                    $("#target").remove();
                    createDuck();
                    $(".duck").css('left','0px');
                    $(".back").fly();
                    ducks++;
                });
                break;
            case 1:
                $(".duck").animate({left: "+=1100"},  speed, function(){
                    $("#target").remove();
                    createDuck();
                    $(".duck").css('left','0px');
                    $(".back").fly();
                    ducks++;
                });
                break;
        }
    }
    $.fn.game = function() {
        score = 0;
        $(".back").fly();
        $(".duck").click(function(){
        score++;
        $("#score").html("Счет: "+score);
        $("#target").remove();
        });
        if ($("#time").val()<10){$("#time").val(10)}
        setTimeout(timeOver, $("#time").val()*1000);
        function timeOver() {
           alert('Ваш счет: '+score + ' Всего птиц: ' + ducks);
           location.reload();


        }
    }
})(jQuery);