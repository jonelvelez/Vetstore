$(document).ready(function(){

    $('#login').modal({
        backdrop: 'static',
        keyboard: false
    })

 $( function() {
    $( "#datepicker" ).datepicker();
  });
  
});

var closexx = document.querySelector('.closexx');

closexx.addEventListener('click', () => {

  console.log('modal');

});





