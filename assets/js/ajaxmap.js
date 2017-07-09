function newAjax() {
			var ajax;
			if (window.XMLHttpRequest) {
				ajax = new XMLHttpRequest();
			}
			return ajax;
}
function LoadMe() {
			var ajaxHandler = newAjax();
			ajaxHandler.onreadystatechange= function(){
				if (ajaxHandler.readyState==4 && ajaxHandler.status==200) {
					document.getElementById("getdoc").innerHTML = ajaxHandler.responseText;
				}
			}
			ajaxHandler.open("GET", "docmaps.html", true);
			ajaxHandler.send();
}
