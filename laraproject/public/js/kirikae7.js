
var movespeed=1000; //move speed;
var waittime=9000; //wating time;

//+++++++++++++++++++++++++++++++++  111  ++++++++++++++++++++++++++++++++++++++++++++

	$(function() {
	//--------------------------------------------------------------------------------

	var hk1=900/kt1;
	var kk1=lengthk1-1;	var sk10=0;	var sk11=1; var sk12=0;	 var rt1;
	//--------------------------------------------------------------
	for(i1=0;i1<lengthk1;i1++){  	$(".box1"+i1).css({position:"absolute",left:'-100%'});    	}
	$(".box11").css({position:"absolute",left:'-100%'});
	$(".box10").css({position:"absolute",left:'0%'});
	$(".box1"+kk1).css({position:"absolute",left:'100%'});
	//------------------------------------------------------------------------
	$("#boxzz1").click(function(){ 	rt1='plus'; 		read1();		});
	$("#boxzz12").click(function(){ 	rt1='minas'; 	    read1();		});
	function read1(){
		if(rt1=='plus'){
		if(sk10==kk1){  sk11=kk1-sk10; sk12=sk10-1;  	$(".box1"+sk11).css({position:"absolute",left:'-100%'});
	 		  }else{  sk11=sk10+1; sk12=sk10+2;		$(".box1"+sk11).css({position:"absolute",left:'-100%'});
        }
		$(".box1"+sk10).animate({left:"100%"},movespeed);
		$(".box1"+sk11).animate({left:"0%"},movespeed);
		if(sk10==kk1){ sk10=-1;	}
		sk10 +=1;
		}
	//---------------------------------------------------------------------------------
		if(rt1=='minas'){
		if(sk10==0){   	$(".box1"+kk1).css({position:"absolute",left:'100%'});
	 			}else{		sk11=sk10+1; sk12=sk10-1;	$(".box1"+sk12).css({position:"absolute",left:'100%'});	}
		$(".box1"+sk10).animate({left:"-100%"},movespeed);
		$(".box1"+sk11).css({position:"absolute",left:'100%'});
		if(sk10==0){ 	$(".box1"+kk1).animate({left:"0%"},movespeed);
							}else{	$(".box1"+sk12).animate({left:"0%"},movespeed);		}
		sk10 -=1;
		if(sk10<0){ sk10=kk1;	}
		}}  //read
		//----------------------------------------------------
		if(kt1>1){	$('.za11').css('height',''+hk1+'px');	$('.za12').css('height',''+hk1+'px');		}else{
			$('.za11').css('width','100%');  $('.za11').css('height','300px');
			}
		//--------------------------------------------------------------------------------
		timek1();  function timek1(){	timer1 = setInterval(function(){	rt1='plus'; read1();  }, waittime);	}
		$('.btn11,.btn12').css("opacity", 0);
  		$(".za11").hover(
    	function() {
      	$('.btn11,.btn12').css("opacity", 0.5);	clearInterval(timer1);
    	},
    	function() {
      	$('.btn11,.btn12').css("opacity", 0);	timek1();
    	}
  		);
    	//-----------------------------------------------------------------------------------------
});
//+++++++++++++++++++++++++++++++++  111  ++++++++++++++++++++++++++++++++++++++++++++




//+++++++++++++++++++++++++++++++++  222   ++++++++++++++++++++++++++++++++++++++++++++

	$(function() {
	//--------------------------------------------------------------------------------
	var hk2=800/kt2;
	var kk2=lengthk2-1;	var sk20=0;	var sk21=1; var sk22=0;	 var rt2;
	//--------------------------------------------------------------
	for(i2=0;i2<lengthk2;i2++){  	$(".box2"+i2).css({position:"absolute",left:'-100%'});    	}
	$(".box21").css({position:"absolute",left:'-100%'});
	$(".box20").css({position:"absolute",left:'0%'});
	$(".box2"+kk2).css({position:"absolute",left:'100%'});
	//------------------------------------------------------------------------
	$("#boxzz2").click(function(){ 	rt2='plus'; 		read2();		});
	$("#boxzz22").click(function(){ 	rt2='minas'; 	    read2();		});
	function read2(){
		if(rt2=='plus'){
		if(sk20==kk2){  sk21=kk2-sk20; sk22=sk20-1;  	$(".box2"+sk21).css({position:"absolute",left:'-100%'});
	 		  }else{  sk21=sk20+1; sk22=sk20+2;		$(".box2"+sk21).css({position:"absolute",left:'-100%'});
        }
		$(".box2"+sk20).animate({left:"100%"},movespeed);
		$(".box2"+sk21).animate({left:"0%"},movespeed);
		if(sk20==kk2){ sk20=-1;	}
		sk20 +=1;
		}
	//---------------------------------------------------------------------------------
		if(rt2=='minas'){
		if(sk20==0){   	$(".box2"+kk2).css({position:"absolute",left:'100%'});
	 			}else{		sk21=sk20+1; sk22=sk20-1;	$(".box2"+sk22).css({position:"absolute",left:'100%'});	}

		$(".box2"+sk20).animate({left:"-100%"},movespeed);
		$(".box2"+sk21).css({position:"absolute",left:'100%'});
		if(sk20==0){ 	$(".box2"+kk2).animate({left:"0%"},movespeed);
					}else{	$(".box2"+sk22).animate({left:"0%"},movespeed);		}
		sk20 -=1;
		if(sk20<0){ sk20=kk2;	}
		}}  //read
		//----------------------------------------------------
		if(kt2>1){	$('.za21').css('height',''+hk2+'px');	$('.za22').css('height',''+hk2+'px');		}else{
			$('.za21').css('width','100%');  $('.za21').css('height','300px');
			}
	//	timek2();  function timek2(){	timer2 = setInterval(function(){	rt2='plus'; read2();  }, waittime);	}
		//--------------------------------------------------------------------------------
		$('.btn21,.btn22').css("opacity", 0);
  		$(".za21").hover(
    	function() {
      	$('.btn21,.btn22').css("opacity", 0.5);clearInterval(timer2);
    	},
    	function() {
      	$('.btn21,.btn22').css("opacity", 0);timek2();
    	}
  		);
    	//-----------------------------------------------------------------------------------------
});
//+++++++++++++++++++++++++++++++++  222  ++++++++++++++++++++++++++++++++++++++++++++



//+++++++++++++++++++++++++++++++++  333   ++++++++++++++++++++++++++++++++++++++++++++

	$(function() {
	//--------------------------------------------------------------------------------
	var hk3=990/kt3;
	var kk3=lengthk3-1;	var sk30=0;	var sk31=1; var sk32=0;	 var rt3;
	//--------------------------------------------------------------
	for(i3=0;i3<lengthk3;i3++){  	$(".box3"+i3).css({position:"absolute",left:'-100%'});    	}
	$(".box31").css({position:"absolute",left:'-100%'});
	$(".box30").css({position:"absolute",left:'0%'});
	$(".box3"+kk3).css({position:"absolute",left:'100%'});
	//------------------------------------------------------------------------
	$("#boxzz3").click(function(){ 	rt3='plus'; 		read3();		});
	$("#boxzz32").click(function(){ 	rt3='minas'; 	    read3();		});
	function read3(){
		if(rt3=='plus'){
		if(sk30==kk3){  sk31=kk3-sk30; sk32=sk30-1;  	$(".box3"+sk31).css({position:"absolute",left:'-100%'});
	 		  }else{  sk31=sk30+1; sk32=sk30+2;		$(".box3"+sk31).css({position:"absolute",left:'-100%'});
        }
		$(".box3"+sk30).animate({left:"100%"},movespeed);
		$(".box3"+sk31).animate({left:"0%"},movespeed);
		if(sk30==kk3){ sk30=-1;	}
		sk30 +=1;
		}
	//---------------------------------------------------------------------------------
		if(rt3=='minas'){
		if(sk30==0){   	$(".box3"+kk3).css({position:"absolute",left:'100%'});
	 			}else{		sk31=sk30+1; sk32=sk30-1;	$(".box3"+sk32).css({position:"absolute",left:'100%'});	}
		$(".box3"+sk30).animate({left:"-100%"},movespeed);
		$(".box3"+sk31).css({position:"absolute",left:'100%'});
		if(sk30==0){ 	$(".box3"+kk3).animate({left:"0%"},movespeed);
					}else{		$(".box3"+sk32).animate({left:"0%"},movespeed);			}
		sk30 -=1;
		if(sk30<0){ sk30=kk3;	}
		}}  //read
		//----------------------------------------------------
		if(kt3>1){	$('.za31').css('height',''+hk3+'px');	$('.za32').css('height',''+hk3+'px');		}else{
			$('.za31').css('width','100%');  $('.za31').css('height','300px');
			}
		//--------------------------------------------------------------------------------
	//	timek3();  function timek3(){	timer3 = setInterval(function(){	rt3='minas'; read3();  }, waittime);	}
		//----------------------------------------------------------------------------------
		$('.btn31,.btn32').css("opacity", 0);
  		$(".za31").hover(
    	function() {
      	$('.btn31,.btn32').css("opacity", 0.5);	clearInterval(timer3);
    	},
    	function() {
      	$('.btn31,.btn32').css("opacity", 0);	timek3();
    	}
  		);
    	//-----------------------------------------------------------------------------------------
});
//+++++++++++++++++++++++++++++++++  333  ++++++++++++++++++++++++++++++++++++++++++++

//+++++++++++++++++++++++++++++++++  444   ++++++++++++++++++++++++++++++++++++++++++++

	$(function() {
	//--------------------------------------------------------------------------------
	var hk4=1090/kt4;
	var kk4=lengthk4-1;	var sk40=0;	var sk41=1; var sk42=0;	 var rt4;
	//--------------------------------------------------------------
	for(i4=0;i4<lengthk4;i4++){  	$(".box4"+i4).css({position:"absolute",left:'-100%'});    	}
	$(".box41").css({position:"absolute",left:'-100%'});
	$(".box40").css({position:"absolute",left:'0%'});
	$(".box4"+kk4).css({position:"absolute",left:'100%'});
	//------------------------------------------------------------------------
	$("#boxzz4").click(function(){ 	rt4='plus'; 		read4();		});
	$("#boxzz42").click(function(){ 	rt4='minas'; 	    read4();		});
	function read4(){
		if(rt4=='plus'){
		if(sk40==kk4){  sk41=kk4-sk40; sk42=sk40-1;  	$(".box4"+sk41).css({position:"absolute",left:'-100%'});
	 		  }else{  sk41=sk40+1; sk42=sk40+2;		$(".box4"+sk41).css({position:"absolute",left:'-100%'});
        }
		$(".box4"+sk40).animate({left:"100%"},movespeed);
		$(".box4"+sk41).animate({left:"0%"},movespeed);
		if(sk40==kk4){ sk40=-1;	}
		sk40 +=1;
		}
	//---------------------------------------------------------------------------------
		if(rt4=='minas'){
		if(sk40==0){   	$(".box4"+kk4).css({position:"absolute",left:'100%'});
	 			}else{		sk41=sk40+1; sk42=sk40-1;	$(".box4"+sk42).css({position:"absolute",left:'100%'});	}
		$(".box4"+sk40).animate({left:"-100%"},movespeed);
		$(".box4"+sk41).css({position:"absolute",left:'100%'});
		if(sk40==0){ 	$(".box4"+kk4).animate({left:"0%"},movespeed);
	      	}else{  	$(".box4"+sk42).animate({left:"0%"},movespeed);   }
		sk40 -=1;
		if(sk40<0){ sk40=kk4;	}
		}}  //read
		//----------------------------------------------------
		if(kt4>1){	$('.za41').css('height',''+hk4+'px');	$('.za42').css('height',''+hk4+'px');		}else{
			$('.za41').css('width','100%');  $('.za41').css('height','300px');
			}
		//-------------------------------------------------------------------------------------
		//timek4();  function timek4(){	timer4 = setInterval(function(){	rt4='minas'; read4();  },waittime);	}
		//--------------------------------------------------------------------------------
		$('.btn41,.btn42').css("opacity", 0);
  		$(".za41").hover(
    	function() {
      	$('.btn41,.btn42').css("opacity", 0.5); clearInterval(timer4);
    	},
    	function() {
      	$('.btn41,.btn42').css("opacity", 0);	timek4();
    	}
  		);
    	//-----------------------------------------------------------------------------------------
});
//+++++++++++++++++++++++++++++++++  444   ++++++++++++++++++++++++++++++++++++++++++++


//+++++++++++++++++++++++++++++++++  555   ++++++++++++++++++++++++++++++++++++++++++++

	$(function() {
	//--------------------------------------------------------------------------------
	var hk5=990/kt5;
	var kk5=lengthk5-1;	var sk50=0;	var sk51=1; var sk52=0;	 var rt5;
	//--------------------------------------------------------------
	for(i5=0;i5<lengthk5;i5++){  	$(".box5"+i5).css({position:"absolute",left:'-100%'});    	}
	$(".box51").css({position:"absolute",left:'-100%'});
	$(".box50").css({position:"absolute",left:'0%'});
	$(".box5"+kk5).css({position:"absolute",left:'100%'});
	//------------------------------------------------------------------------
	$("#boxzz5").click(function(){ 	rt5='plus'; 		read5();		});
	$("#boxzz52").click(function(){ 	rt5='minas'; 	    read5();		});
	function read5(){
		if(rt5=='plus'){
		if(sk50==kk5){  sk51=kk5-sk50; sk52=sk50-1;  	$(".box5"+sk51).css({position:"absolute",left:'-100%'});
	 		  }else{  sk51=sk50+1; sk52=sk50+2;		$(".box5"+sk51).css({position:"absolute",left:'-100%'});
        }
		$(".box5"+sk50).animate({left:"100%"},movespeed);
		$(".box5"+sk51).animate({left:"0%"},movespeed);
		if(sk50==kk5){ sk50=-1;	}
		sk50 +=1;
		}
	//---------------------------------------------------------------------------------
		if(rt5=='minas'){
		if(sk50==0){   	$(".box5"+kk5).css({position:"absolute",left:'100%'});
	 			}else{		sk51=sk50+1; sk52=sk50-1;	$(".box5"+sk52).css({position:"absolute",left:'100%'});	}
		$(".box5"+sk50).animate({left:"-100%"},movespeed);
		$(".box5"+sk51).css({position:"absolute",left:'100%'});
		if(sk50==0){ 	$(".box5"+kk5).animate({left:"0%"},movespeed);
					}else{		$(".box5"+sk52).animate({left:"0%"},movespeed);		}

		sk50 -=1;
		if(sk50<0){ sk50=kk5;	}
		}}  //read
		//----------------------------------------------------
		if(kt5>1){	$('.za51').css('height',''+hk5+'px');	$('.za52').css('height',''+hk5+'px');		}else{
			$('.za51').css('width','100%');  $('.za51').css('height','300px');
			}

		//-------------------------------------------------------------------------------------
		//timek5();  function timek5(){	timer5 = setInterval(function(){	rt5='plus'; read5();  }, waittime);	}
		//--------------------------------------------------------------------------------

		$('.btn51,.btn52').css("opacity", 0);
  		$(".za51").hover(
    	function() {
      	$('.btn51,.btn52').css("opacity", 0.5);
		 clearInterval(timer5);
    	},
    	function() {
      	$('.btn51,.btn52').css("opacity", 0);
		timek5();
    	}
  		);
    	//-----------------------------------------------------------------------------------------
});
//+++++++++++++++++++++++++++++++++  555   ++++++++++++++++++++++++++++++++++++++++++++
