	//FUNCIONES
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

	function serializeFormJSON(form) {
	        var o = {};
	        var a = form.serializeArray();
		$.each(a, function () {
			if (o[this.name]) {
				if (!o[this.name].push) 
					o[this.name] = [o[this.name]];
				o[this.name].push(this.value || '');
			} 
			else 
				o[this.name] = this.value || '';
		});	
		return o;
	}

	function loaderIn() {
		$('body').append("<div class='loader'></div>");
	}

	//FIN FUNCIONES

	//NG-APP
	var app = angular.module('loginApp', []);

	app.controller('loginController', function($scope, $http) {

		$('#btn-login').click( function() {
			var resultado = login($scope.email, $scope.password, $http);
		});

	});	

	//Login
	function login(email,password, $http) {
		var data = {
			email: email,
			pass: password,
		}

		var config = {
			headers : {
				'Content-Type': 'application/json'
			}
		}

		$http.post("https://puntoslash.com.ar/desarrollo/complejos/login.php", data, config)
		.then(function(data,status) {
			console.log(data['data']);
			if ( data['data']['estado'] == 1 )
				alert("Logueado satisfactoriamente");
			else
				alert(data['data']['mensaje']);
		},
		function(data,status) {
			console.log(data);
		});
	}
