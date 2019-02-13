var children=document.getElementById("side-bar").children;
var url=location.href;
for (var i = 0; i < children.length; i++) {  
   if(children[i].tagName=="A")
   {
	 if(children[i].href==url)
	 {
		 children[i].style.backgroundColor = "rgba(0,0,0,0.3)";
		break;
	}
	}
}  