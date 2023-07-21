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
})