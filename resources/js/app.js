require('./bootstrap');

$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

// SVG HEART ANIMATION USING d3 and GSAP
var paper = d3.select("#canvas");
var wsvg = $("#canvas").width();
var hsvg = $("#canvas").height();

var d =Math.ceil((Math.floor(Math.random() * 700) + 100)/10)*10;
var count = 0;

function rNumTime(){
  d = Math.ceil((Math.floor(Math.random() * 600) + 100)/10)*10;
}

setInterval(function(){
  count++;
  var x = Math.floor(Math.random() * (wsvg-100)) + 50;
  var y = Math.floor(Math.random() * (hsvg-100)) + 50;
  var b = paper.append("use").attr("xlink:href", "#heart").attr("id", "h"+count).attr("transform", "translate("+x+", "+y+")");
  setTimeLine();
  rNumTime();
}, d);

function setTimeLine(){
  var s = (Math.random() * (0.7 - 0.2) + 0.5).toFixed(1);
  var heart = $("#h"+count);
  
  var tl = new TimelineMax({repeat:1, yoyo:true});
  
  tl.from(heart, 0.7, {scale: 0, transformOrigin:"50% 50%"})
    .to(heart, 0.7, {scale: s, transformOrigin:"50% 50%"})
    .to(heart, 0.3, {scale: 1, transformOrigin:"50% 50%", opacity: 0});
  // Tried an onComplete here but it wasn't working properly, this was just the easier know-how
  setTimeout(function(){
    remove(heart);
  }, 1700);
}

function remove(h){
  h.remove();
}

$(window).on("resize", function(){
  wsvg = $("#canvas").width();
  hsvg = $("#canvas").height();
});


$('.heart').click(function(){
    $(this).parent().fadeOut();
    $('.heart-form').fadeIn();
});

$('.send-valentine-btn').click(function(){
    $(this).addClass('animation');
    $('#valentine-form').delay( 4000 ).submit();
});

$('.random-whishes').click(function(e){
  e.preventDefault();
  $.ajax({
    method: 'get',
    url: '/get_whishes',
    dataType: 'json',
  }).always(function(res){
    $('#content').val(res.content);
  });
});

$('#copy-url').click(function(e){
  e.preventDefault();
  var url = document.getElementById('url');
  url.select();
  url.focus();
  url.setSelectionRange(0, 99999); /* For mobile devices */
  navigator.clipboard.writeText(url.value);
});

$('#share-url').click(function(e){
  e.preventDefault();
  if (navigator.share) {
    navigator.share({
      title: 'Valentine',
      url: $('#url').val()
    }).then(() => {
      console.log('Thanks for sharing!');
    })
    .catch(console.error);
  } else {
    // fallback
  }
});