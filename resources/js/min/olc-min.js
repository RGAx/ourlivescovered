function checkOffset(){var e=$("#range_sliders");e.length&&(e.offset().top+e.height()>=$("footer").offset().top-1&&e.css("position","relative"),$(document).scrollTop()+window.innerHeight<$("footer").offset().top&&e.css("position","fixed").css("width","100%").css("bottom","0").css("zIndex","99"))}$(document).ready(function(){$("#open_menu").on("click",function(e){e.preventDefault(),$("ul#top_nav_menu").addClass("open"),$("a#close_menu").addClass("open")}),$("#close_menu").on("click",function(e){e.preventDefault(),$("ul#top_nav_menu").removeClass("open"),$("a#close_menu").removeClass("open")}),$("#heroCarousel").carousel({interval:12e3}),$("#footerCarousel").carousel({interval:1e4});var e;e=1,$(".btn.goforward").click(function(){var a=this.id,n;switch(e){case 2:n=4;break;case 3:n=4;break;case 4:n=5;break;case 5:n=7;break;case 6:n=7;break;case 7:n=8;break;case 8:n=10;break;case 9:n=10}$("#quiz-content-"+e).hide(),$("#quiz-content-"+n).fadeIn(),e=n}),$(".btn.goback").click(function(){var a=this.id,n;switch(e){case 2:n=1;break;case 3:n=1;break;case 4:n=1;break;case 5:n=4;break;case 6:n=4;break;case 7:n=4;break;case 8:n=7;break;case 9:n=7}$("#quiz-content-"+e).hide(),$("#quiz-content-"+n).fadeIn(),e=n}),$(".btn.quiz").click(function(){var a=this.id,n;switch(a){case"btn-single":n=2;break;case"btn-hitched":n=3;break;case"btn-joined":n=3;break;case"btn-kids":n=5;break;case"btn-no-kids":n=6;break;case"btn-mortgage":n=8;break;case"btn-no-mortgage":n=9}$("#quiz-content-"+e).hide(),$("#quiz-content-"+n).fadeIn(),e=n})}),$(document).scroll(function(){checkOffset()});