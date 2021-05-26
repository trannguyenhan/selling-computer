	var menuItems = document.getElementById('menuitem');
	menuItems.style.maxHeight = "0px";
	// var nav_bar = document.getElementById
	function menuToggle() {
		if (menuItems.style.maxHeight == "0px") {
			menuItems.style.maxHeight = "220px";
			document.getElementById("nav").style.zIndex = "2";
		}
		else {
			menuItems.style.maxHeight = "0px";
		}
	}