$(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
  
    $('.introduce-bg').css({
      opacity: function() {
        var elementHeight = $(this).height();
        return 1 -(elementHeight - scrollTop) / elementHeight;
      }
    });

    $('.introduce .inbox').css({
      opacity:function(){
        var elementHeight = $(this).height();
        return 1 - (elementHeight - scrollTop) / elementHeight;
      }
    });
    $('.pointing-down').css({
      opacity:function(){
        var elementHeight = $(this).height();
        return (elementHeight - scrollTop) / elementHeight;
      }
    })
  });

$(document).ready(function(){
  $('.service-btn').on('click',function(){
    $('.service-btn').removeClass('show');
    $(this).addClass('show');
    switch($(this).attr('service')) {
      case '1' :
          $('#display-img').attr('src','/images/marketing.jpg');
         break;
      case '2' :
        $('#display-img').attr('src','/images/human-resource.jpg');
         break;
      case '3' :
        $('#display-img').attr('src','/images/human-resource.jpg');
         break;
      } 
    });

    
});

  