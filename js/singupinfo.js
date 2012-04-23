// JavaScript Document
// Written and coded by Gilles De Mey
// Copyrighted by the GNU GENERAL PUBLIC LICENSE (c)

function Showinfo(message,margin) {
	var info = document.getElementById('signupinfo');
	var text= document.getElementById('signuptext');
	info.style.visibility='visible';
	text.innerHTML=message;
	info.style.marginTop=margin;
	
}
function Hideinfo(){
	document.getElementById('signupinfo').style.visibility='hidden';
}