/**
 * Created by sakura on 16/4/5.
 */
$("#make-search").click(function() {
    $(".type, .year, .price").hide();
    $(".make").fadeToggle();
});

$("#type-search").click(function() {
    $(".make, .year, .price").hide();
    $(".type").fadeToggle();
});

$("#year-search").click(function() {
    $(".make, .type, .price").hide();
    $(".year").fadeToggle();
});

$("#price-search").click(function() {
    $(".make, .type, .year").hide();
    $(".price").fadeToggle();
});
//
// $("#make-btn").click(function() {
//     // if ($("#make-collapse"))
//     // $("#make-collapse").toggle();
//     $("#model-collapse, #year-collapse, #price-collapse").collapse('hide');
//     // $("#make-collapse").collapse("toggle");
// });
//
// $("#model-btn").click(function() {
//     // $("#model-collapse").toggle();
//     $("#make-collapse, #year-collapse, #price-collapse").collapse('hide');
//     // $("#model-collapse").collapse("toggle");
// });
//
// $("#year-btn").click(function() {
//     $("#make-collapse, #model-collapse, #price-collapse").collapse('hide');
// });
//
// $("#price-btn").click(function() {
//     $("#make-collapse, #model-collapse, #year-collapse").collapse('hide');
// });