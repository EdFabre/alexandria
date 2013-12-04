//XTEC - ALEXANDRIA ************ FITXER AFEGIT
//2010.09.01
//2013.10.31 Marc Espinosa Zamora <marc.espinosa.zamora@upcnet.es>
function show_preview_button(url,popup){
	if (url!='') {
		if (popup) {
			document.writeln('<div id="previewButton"><img src="http://alexandria.xtec.cat/pix/i/hide.gif" alt="Previsualitza" title="Previsualitza" id="previewImg"/> <a id="show" name="presentacio" href="#presentacio" onclick="window.open( \''+url+'\')">Previsualitza el recurs</a></div>');
		} else {
			document.writeln('<div id="previewButton"><img src="http://alexandria.xtec.cat/pix/i/hide.gif" alt="Previsualitza" title="Previsualitza" id="previewImg"/> <a id="show" name="presentacio" href="#presentacio" onclick="document.getElementById(\'image\').style.display = \'block\'; document.getElementById(\'previewButton\').style.display = \'none\';">Previsualitza el recurs</a></div>');
		} 
	} else {
		document.writeln('<b>Previsualització no disponible</b>');
	}
}


function create_iframe_scorm_preview(url) {
	if (document.getElementById('scorm_iframe_preview')) return;
		var ifrm = document.createElement('IFRAME');
                ifrm.setAttribute('src', url);
                ifrm.setAttribute('id','scorm_iframe_preview');
                ifrm.style.width = '100%';
                ifrm.style.height = '500px';
                var node = document.getElementById('image');
                node.insertBefore(ifrm,node.firstChild);
}

function increase_counter(fieldid, recordid){
	 var xhReq = new XMLHttpRequest();
	 xhReq.open("GET", M.cfg.wwwroot + "/mod/data/counter.php?fieldid="+fieldid+"&recordid="+recordid, false);
	 xhReq.send(null);
	 var serverResponse = xhReq.responseText;
	 document.getElementById('downloads').innerHTML=serverResponse;
	 var now = new Date();
	 document.getElementById('lastdownload').innerHTML=now.format('d/m/Y, H:i');
}

//Simulates PHP's date function
Date.prototype.format=function(format){var returnStr='';var replace=Date.replaceChars;for(var i=0;i<format.length;i++){var curChar=format.charAt(i);if(replace[curChar]){returnStr+=replace[curChar].call(this);}else{returnStr+=curChar;}}return returnStr;};Date.replaceChars={shortMonths:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],longMonths:['January','February','March','April','May','June','July','August','September','October','November','December'],shortDays:['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],longDays:['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],d:function(){return(this.getDate()<10?'0':'')+this.getDate();},D:function(){return Date.replaceChars.shortDays[this.getDay()];},j:function(){return this.getDate();},l:function(){return Date.replaceChars.longDays[this.getDay()];},N:function(){return this.getDay()+1;},S:function(){return(this.getDate()%10==1&&this.getDate()!=11?'st':(this.getDate()%10==2&&this.getDate()!=12?'nd':(this.getDate()%10==3&&this.getDate()!=13?'rd':'th')));},w:function(){return this.getDay();},z:function(){return"Not Yet Supported";},W:function(){return"Not Yet Supported";},F:function(){return Date.replaceChars.longMonths[this.getMonth()];},m:function(){return(this.getMonth()<9?'0':'')+(this.getMonth()+1);},M:function(){return Date.replaceChars.shortMonths[this.getMonth()];},n:function(){return this.getMonth()+1;},t:function(){return"Not Yet Supported";},L:function(){return(((this.getFullYear()%4==0)&&(this.getFullYear()%100!=0))||(this.getFullYear()%400==0))?'1':'0';},o:function(){return"Not Supported";},Y:function(){return this.getFullYear();},y:function(){return(''+this.getFullYear()).substr(2);},a:function(){return this.getHours()<12?'am':'pm';},A:function(){return this.getHours()<12?'AM':'PM';},B:function(){return"Not Yet Supported";},g:function(){return this.getHours()%12||12;},G:function(){return this.getHours();},h:function(){return((this.getHours()%12||12)<10?'0':'')+(this.getHours()%12||12);},H:function(){return(this.getHours()<10?'0':'')+this.getHours();},i:function(){return(this.getMinutes()<10?'0':'')+this.getMinutes();},s:function(){return(this.getSeconds()<10?'0':'')+this.getSeconds();},e:function(){return"Not Yet Supported";},I:function(){return"Not Supported";},O:function(){return(-this.getTimezoneOffset()<0?'-':'+')+(Math.abs(this.getTimezoneOffset()/60)<10?'0':'')+(Math.abs(this.getTimezoneOffset()/60))+'00';},P:function(){return(-this.getTimezoneOffset()<0?'-':'+')+(Math.abs(this.getTimezoneOffset()/60)<10?'0':'')+(Math.abs(this.getTimezoneOffset()/60))+':'+(Math.abs(this.getTimezoneOffset()%60)<10?'0':'')+(Math.abs(this.getTimezoneOffset()%60));},T:function(){var m=this.getMonth();this.setMonth(0);var result=this.toTimeString().replace(/^.+ \(?([^\)]+)\)?$/,'$1');this.setMonth(m);return result;},Z:function(){return-this.getTimezoneOffset()*60;},c:function(){return this.format("Y-m-d")+"T"+this.format("H:i:sP");},r:function(){return this.toString();},U:function(){return this.getTime()/1000;}};