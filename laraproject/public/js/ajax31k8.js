
$(function(){
var arrt=[];
arrt=JSON.parse('<?php echo $jsonTest; ?>');
  var mh=0;	var mh1=0;	var mh2=0;	var mh3=0;
  var countk=arrt.length;
  var bz=0;
  var timer1,timer2;
  var testTimer;
  function startTimer(){		testTimer=setInterval(function(){		bz =1;		mmk();		} , 2000);	}
  startTimer();
  function stopTimer(){	clearInterval(testTimer);		}
  $('.image').hover(function(){ stopTimer(); },function(){ startTimer(); });
	$('.imgc1').hover(function(){ stopTimer(); },function(){ startTimer(); });
	var v=0;
$("#button1").click(function(){ alert(111);	mmk(); 	});
$("#button2").click(function(){ 	mmk(); v=3;		});
	var t=0;
function mmk(){
if(v>0){t -=1;		}else{	t +=1;	}
if(t<0){t=10;}
if(t>10){t=0;}
$('.image').children('img').attr('src', '../storage/home_top/'+arrt[t]+'');
}

});
