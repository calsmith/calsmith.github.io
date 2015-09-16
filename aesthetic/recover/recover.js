(function() {
	var app = angular.module('aestheticApp', []);
	var params = parseParams();
	var cloud = "http://aesthetic-prod.appspot.com/";
	
	app.controller('MainController', ['$http', function($http) {
		$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
		var main = this;
		this.email;
		this.error;
		this.showSuccess = false;
		
		this.sendRecovery = function() {
			if (this.email == null) {
				return alert("Please enter a valid email");
			}
			
			// Ping server.
			$http({
				method: 'POST',
				url: cloud + 'user/account/recover',
				data: 'email=' + this.email
			}).
			then(function(r) {
				if (r.data.success != true) {
					main.error = r.data.error;
					if (!main.error) {
						main.error = "Invalid server response.";
					}
					console.log(r);
				} else {
					main.showSuccess = true;
				}
			}, function(r) {
				console.log(r);
				main.error = "There was a network error, please reload and try again.";
			});
		};
	}]);
	
	app.controller('ResetController', ['$http', function($http) {
		$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
		var con = this;
		this.token = params["token"];
		this.password;
		this.passVerify;
		this.error;
		this.showSuccess = false;
		
		this.savePass = function() {
			if (this.password == null || this.password.length < 5) {
				return alert("Please enter a valid password.");
			} else if (this.password != this.passVerify) {
				return alert("Passwords do not match!");
			}
			
			// Ping server.
			$http({
				method: 'POST',
				url: cloud + 'user/account/reset',
				data: 'password=' + this.password + '&token=' + this.token
			}).
			then(function(r) {
				if (r.data.success != true) {
					con.error = r.data.error;
					if (r.data.expiredToken == true) {
						con.token = null;
					} else if (!con.error) {
						con.error = "Invalid server response.";
					}
				} else {
					con.showSuccess = true;
				}
			}, function(r) {
				console.log(r);
				con.error = "There was a network error, please reload and try again.";
			});
		};
	}]);
	
	function parseParams() {
		var str = window.location.search;
		var objURL = {};
		str.replace(
		new RegExp("([^?=&]+)(=([^&]*))?", "g"), function($0, $1, $2, $3) {
			objURL[$1] = $3;
		});
		return objURL;
	};
	
})();