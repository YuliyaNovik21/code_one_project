
// $('.menu-button').click(function() {
//     $('.nav').slideToggle();
// });

$('.my-button').click(function() {
  
    let styleAttr = $('.nav').attr('style'); 


    if ( styleAttr == undefined) {
        $('.nav').css('right', '0%');
        $('.nav').css('transition', '0.5s');
        $('.stick2').css('display', 'none');
        $('.stick1').css('transform','rotate(-45deg)');
        $('.stick1').css('top','-6px');
        $('.stick3').css('transform','rotate(45deg)');

    }else{
        $('.nav').removeAttr('style');
        $('.stick1').removeAttr('style');
        $('.stick2').removeAttr('style');
        $('.stick3').removeAttr('style');


    }



});

