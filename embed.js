$(document).ready(function (){
    $(".content").hide();
    $(".show_hide").on("click",function(){
        var text = $(".content").is(':visible')
        ? 'Read More' : 'Read Less';
        $(".show_hide").text(txt);
        
        $($this).prev('contnet').slideToggle(200);
    });
});