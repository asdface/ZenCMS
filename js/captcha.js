// JavaScript Document

function reloadc() {
var c = this.document.getElementById("captcha");
var now = new Date();
c.src = '?g=1&amp;f=' + now.getTime();
}