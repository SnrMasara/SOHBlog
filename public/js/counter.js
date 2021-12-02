// $(document).scroll(function() {

//     $('.counter').each(function () {
//     $(this).prop('Counter',0).animate({
//     Counter: $(this).text()
//     }, {
//     duration: 10000,
//     easing: 'swing',
//     step: function (now) {
//     $(this).text(Math.ceil(now));
//     }
//     });
//     });

//     });

var runAlready;
var counting;

function startCounter(a) {
  runAlready = true;
  counting = true;
  $('.counter').each(function() {
    var $this = $(this);
    $this.text(a);
    countTo = $this.attr('data-count');
    $({
      countNum: $this.text()
    }).animate({
      countNum: countTo
    },
    {
      duration: 2000,
      easing: 'swing',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        counting = false;
      }
    });
  })
}

$(window).scroll(function() {
  var oTop = $('#counter').offset().top;
  var a = 0;
  if (!runAlready && $(window).scrollTop() > oTop || !counting && $(window).scrollTop() < oTop) {
    startCounter(a);
  }
});
