//mon code jquery pour les effet active 
$(document).ready(function(){
    $("ul li a").click(function(){
        $("a").removeClass("av");
        $(this).addClass("av");
    });
});