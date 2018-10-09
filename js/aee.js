$(document).ready(function(){
	var headers = { 'Content-Type': 'application/json' };


        function AjaxCall(url, data, callBack){
                $.ajax({
                        url : url,
                        type : 'POST',
                        data : JSON.stringify(data),
                        contentType : 'application/json utf-8',
                        dataType : 'json',
                        success : function(data, textStatus, jqxhr){
                                callBack(data);
                        },
                        error : function (jqxhr, textStatus, errorMessage){
                                console.log(errorMessage);
                        }
                })
        }

	//Login
	function login(email,password) {
		var data = {
			email: email,
			password: password,
		}

		$http.post("https://puntoslash.com.ar/puntoslash/desarrollo/complejos/login.php",data,headers)
		.success(function(data,status) {
			return data;
		})
		.error(function(data,status) {
			console.log(status);
		})
	}
}
