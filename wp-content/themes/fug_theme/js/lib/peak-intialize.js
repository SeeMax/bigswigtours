(function(config) {
window._peekConfig = config || {};
var idPrefix = 'peek-book-button';
var id = idPrefix+'-js'; if (document.getElementById(id)) return;
var head = document.getElementsByTagName('head')[0];
var el = document.createElement('script'); el.id = id;
var date = new Date; var stamp = date.getMonth()+"-"+date.getDate();
var basePath = "https://js.peek.com";
el.src = basePath + "/widget_button.js?ts="+stamp;
head.appendChild(el); id = idPrefix+'-css'; el = document.createElement('link'); el.id = id;
el.href = basePath + "/widget_button.css?ts="+stamp;
el.rel="stylesheet"; el.type="text/css"; head.appendChild(el);
})({key: '4c03cec7-b79f-44f8-a4d9-28916c8cb6df'});