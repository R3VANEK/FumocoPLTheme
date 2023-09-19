import $ from "jquery";

$('button.top-nav__switcher').on("click", function(){

    const visibility:boolean = $('ul#main-nav').attr("aria-expanded") === "true";
    let switchedVisibility = (!visibility).toString();

    $('ul#main-nav').attr("aria-expanded", switchedVisibility)
    $(this).attr("aria-expanded", switchedVisibility)

    if(visibility === true){
        $(this).attr("data-hamburger-color", "black")
    }
    else{
        $(this).attr("data-hamburger-color", "white")
    }
});

$("#main-nav li").on("click", function(){
    
    const hamburgerElement = $("button.top-nav__switcher").eq(0);
    const hamburgerVisible:boolean = hamburgerElement.attr("aria-expanded") === "true";
    
    if(hamburgerVisible){
        $('ul#main-nav').attr("aria-expanded", 'false')
        hamburgerElement.attr("aria-expanded", 'false')
        hamburgerElement.attr("data-hamburger-color", "black")
    }

});