
// hide every link //

$("nav ul li").click(function(){
    $("aside section").hide();
});
// show side links based of nav selecetion //
$("nav ul li:nth-of-type(1)").click(function(){
    $(".biografia-links").show();
});
$("nav ul li:nth-of-type(2)").click(function(){
    $(".photo-links").show();
});
$("nav ul li:nth-of-type(3)").click(function(){
    $(".ergo-links").show();
});
$("nav ul li:nth-of-type(4)").click(function(){
    $(".links").show();
});
$("nav ul li").click(function(){
    $("main section").hide();
});


//main//
// first show nothing then show main based of side selection //
$("aside ul li").click(function(){
    $("main section").hide();
});
//biografia-links//
$("aside .biografia-links ul li:nth-of-type(1)").click(function(){
    $(".biografia-info1").show();
});
$("aside .biografia-links ul li:nth-of-type(2)").click(function(){
    $(".biografia-info2").show();
});
$("aside .biografia-links ul li:nth-of-type(3)").click(function(){
    $(".biografia-info3").show();
});
$("aside .biografia-links ul li:nth-of-type(4)").click(function(){
    $(".biografia-info4").show();
});
//photo-links//
$("aside .photo-links ul li:nth-of-type(1)").click(function(){
    $(".photos1").show();
});
$("aside .photo-links ul li:nth-of-type(2)").click(function(){
    $(".photos2").show();
});

//ergo-links//
$("aside .ergo-links ul li:nth-of-type(1)").click(function(){
    $(".ergo-info1").show();
});
$("aside .ergo-links ul li:nth-of-type(2)").click(function(){
    $(".ergo-info2").show();
});
$("aside .ergo-links ul li:nth-of-type(3)").click(function(){
    $(".ergo-info3").show();
});

//links//
$("aside .links ul li:nth-of-type(1)").click(function(){
    $(".links1").show();
});
$("aside .links ul li:nth-of-type(2)").click(function(){
    $(".links2").show();
});
$("aside .links ul li:nth-of-type(3)").click(function(){
    $(".links3").show();
});