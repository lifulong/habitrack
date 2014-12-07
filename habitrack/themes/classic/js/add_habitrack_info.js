function GetJson(method, url, data) {
	var xmlHttp;
	try {
		// Firefox, Opera 8.0+, Safari
		 xmlHttp = new XMLHttpRequest();
	 }
	catch (e) {
		// Internet Explorer
		 try {
			 xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		 }
		 catch (e) {

			 try {
				 xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			 }
			 catch (e) {
				 alert("您的浏览器不支持AJAX！");
				 return false;
			 }
		 }
	 }

	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4) {
			//alert(xmlHttp.responseText);
			var str = xmlHttp.responseText;
			document.getElementById('show').innerHTML +=str;
			//alert(str);
			var obj = eval('('+ xmlHttp.responseText +')');
			//var obj = eval(({"id":"123","name":"elar","age":"21"}));
			alert(obj.name);
		}
	}

	xmlHttp.open(method, url, true);
	xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
	xmlHttp.send(data);
}
