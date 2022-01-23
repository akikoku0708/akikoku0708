$(function(){

  var mh=0;	var mh1=0;	var mh2=0;	var mh3=0;
  var countk=arrk.length;
  var bz=0;
  var timer1,timer2;
  var testTimer;
  function startTimer(){		testTimer=setInterval(function(){		bz =1;		mmk();		} , 5000);	}
  startTimer();
  function stopTimer(){	clearInterval(testTimer);		}
  $('#za1').hover(function(){  stopTimer();    },function(){   startTimer();      });
  //---------------------------------------------------------------------------------------
     		for (var i = 0; i < 10; i++) {
      		$('#button' + i).click((function(i) {
      		return function() {				mh3=i;  mmk();     }
      		})(i));
  		}


  		//-------------------------------------------------------------------------------------
      $('#za1').html('<table width="600"border="0"align="center" class="tableajax3"height="400"background="../images/picmana/'+arrk[mh]+'">'
      +'<tr><td width="5"><img id="maehe"src="../images/btnl6.png" width="20"height="50"alt=""></td><td width="99%">'
       +'</td><td width="5"><img id="tugihe"src="../images/btnr6.png" width="20"height="50"alt="">'
      +'</td></tr></table>');

  	$('#tugihe').on('click', function(){	mh1 =1;	mmk();		});
  	$('#maehe').on('click', function(){	mh2 =1;	mmk();		});

  	 $('#maehe').css('opacity','0.5');
  	  $('#tugihe').css('opacity','0.5');
  		function mkk(){
  	}

  		function mmk(){

  		if(mh1>0){	mh +=mh1;	bz=0;	}
  		if(mh2>0){	mh -=mh2;	bz=0;	}
  		if(mh3>0){	mh =mh3;	bz=0;	}
  		if(mh3=0){	mh =0;	bz=0;	}
  		if(bz>0){	mh +=bz;		}
  		if(mh==-1){mh=countk-1;}		if(mh==countk){mh=0;	}

      $('#za1').html('<table width="600"border="0"align="center" class="tableajax3"height="400"background="../images/picmana/'+arrk[mh]+'">'
      +'<tr><td width="5"><img id="maehe"src="../images/btnl6.png" width="20"height="50"alt=""></td>'
      +'<td width="99%">'
       +'</td><td width="5"><img id="tugihe"src="../images/btnr6.png" width="20"height="50"alt="">'
      +'</td></tr></table>');

  	mh1=0;	mh2=0;	mh3=0; bz=0;
  		$('#tugihe').on('click', function(){	mh1 =1;	mmk();		});
  	$('#maehe').on('click', function(){	mh2 =1;	mmk();		});

  		 $('#maehe').css('opacity','0.5');
  	  $('#tugihe').css('opacity','0.5');

    //  $('#za2').css("background-image", "url(../images/picmana/"+arrk[mh]+" )");
    //  $('#za2').css("background-size", "600px 400px");
    //  $('#za2').css("border", "none");

  	}

  //----------------------------------------------------------------------------
  read();




/*
  for(var t=0;t<arrk.length;t++){
 $('#za1').html('<table width="600"border="0"align="center" class="tableajax3"height="400"background="../images/picmana/'+arrk[t]+'">'
 +'<tr><td width="5"><img id="maehe"src="../images/btnl6.png" width="20"height="50"alt=""></td><td width="99%">'
  +'</td><td width="5"><img id="maehe"src="../images/btnr6.png" width="20"height="50"alt="">'
 +'</td></tr></table>');
}
*/
});
