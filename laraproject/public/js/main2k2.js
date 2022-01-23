$(function(){
    $("#btn").on('click', function(event){
		var vname = $("#name").val();
		var vname2 = $("#name2").val();
		// $('#name').val('');		 	
		if(vname=='' && vemail==''){alert("Please fill out the form");}		
        event.preventDefault();
        var param = { 
		"text": vname,
		"text2": vname2
		 }; 
        $.ajax({
            type: "GET",
            url: "maindata2.php",
           data: param,
            crossDomain: true,
            dataType : "jsonp",
            scriptCharset: 'utf-8'
        }).done(function(data){
			 $('#d12').append(data.text+':'+data.sex+data.text2+data.text3);
        }).fail(function(XMLHttpRequest, textStatus, errorThrown){
            alert(errorThrown);
        });
		
    });
	
});