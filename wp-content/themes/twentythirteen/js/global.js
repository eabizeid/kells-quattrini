function popup(url,name,width,height,resize,scroll) {
var dialogWin = new Object();
dialogWin.width = width;
dialogWin.height = height;
now = new Date();
var millis=now.getTime();
var mstr=""+millis;
if (navigator.appName == "Netscape") {
dialogWin.left = window.screenX + ((window.outerWidth - dialogWin.width) / 2);
dialogWin.top = window.screenY + ((window.outerHeight - dialogWin.height) / 2);
var attr = 'screenX=' + dialogWin.left + ',screenY=' + dialogWin.top + ',resizable=' + resize + ',width=' + dialogWin.width + ',height=' + dialogWin.height + ',scrollbars=' + scroll + ',menubar=no,location=no,toolbar=no,status=no,directories=no';
} else if (document.all) {
dialogWin.left = (screen.width - dialogWin.width) / 2;
dialogWin.top = (screen.height - dialogWin.height) / 2;
var attr = 'left=' + dialogWin.left + ',top=' + dialogWin.top + ',resizable=' + resize + ',width=' + dialogWin.width + ',height=' + dialogWin.height + ',scrollbars=' + scroll + ',menubar=no,location=no,toolbar=no,status=no,directories=no';
}
tienesp=false;
for (i=0; i<url.length; i++)
if (url.charAt(i)=='?')
tienesp=true;
if (tienesp)
nocach='&nocache='+mstr;
else
nocach='?nocache='+mstr;
window.open(url + nocach ,name,attr);
}

function AC_AddExtension(src, ext)
{
  if (src.indexOf('?') != -1)
    return src.replace(/\?/, ext+'?'); 
  else
    return src + ext;
}

function AC_Generateobj(objAttrs, params, embedAttrs) 
{ 
  var str = '<object ';
  for (var i in objAttrs)
    str += i + '="' + objAttrs[i] + '" ';
  str += '>';
  for (var i in params)
    str += '<param name="' + i + '" value="' + params[i] + '" /> ';
  str += '<embed ';
  for (var i in embedAttrs)
    str += i + '="' + embedAttrs[i] + '" ';
  str += ' ></embed></object>';

  document.write(str);
}

function AC_FL_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".swf", "movie", "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
     , "application/x-shockwave-flash"
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}

function AC_SW_RunContent(){
  var ret = 
    AC_GetArgs
    (  arguments, ".dcr", "src", "clsid:166B1BCA-3F9C-11CF-8075-444553540000"
     , null
    );
  AC_Generateobj(ret.objAttrs, ret.params, ret.embedAttrs);
}

function AC_GetArgs(args, ext, srcParamName, classid, mimeType){
  var ret = new Object();
  ret.embedAttrs = new Object();
  ret.params = new Object();
  ret.objAttrs = new Object();
  for (var i=0; i < args.length; i=i+2){
    var currArg = args[i].toLowerCase();    

    switch (currArg){	
      case "classid":
        break;
      case "pluginspage":
        ret.embedAttrs[args[i]] = args[i+1];
        break;
      case "src":
      case "movie":	
        args[i+1] = AC_AddExtension(args[i+1], ext);
        ret.embedAttrs["src"] = args[i+1];
        ret.params[srcParamName] = args[i+1];
        break;
      case "onafterupdate":
      case "onbeforeupdate":
      case "onblur":
      case "oncellchange":
      case "onclick":
      case "ondblClick":
      case "ondrag":
      case "ondragend":
      case "ondragenter":
      case "ondragleave":
      case "ondragover":
      case "ondrop":
      case "onfinish":
      case "onfocus":
      case "onhelp":
      case "onmousedown":
      case "onmouseup":
      case "onmouseover":
      case "onmousemove":
      case "onmouseout":
      case "onkeypress":
      case "onkeydown":
      case "onkeyup":
      case "onload":
      case "onlosecapture":
      case "onpropertychange":
      case "onreadystatechange":
      case "onrowsdelete":
      case "onrowenter":
      case "onrowexit":
      case "onrowsinserted":
      case "onstart":
      case "onscroll":
      case "onbeforeeditfocus":
      case "onactivate":
      case "onbeforedeactivate":
      case "ondeactivate":
      case "type":
      case "codebase":
        ret.objAttrs[args[i]] = args[i+1];
        break;
      case "width":
      case "height":
      case "align":
      case "vspace": 
      case "hspace":
      case "class":
      case "title":
      case "accesskey":
      case "name":
      case "id":
      case "tabindex":
        ret.embedAttrs[args[i]] = ret.objAttrs[args[i]] = args[i+1];
        break;
      default:
        ret.embedAttrs[args[i]] = ret.params[args[i]] = args[i+1];
    }
  }
  ret.objAttrs["classid"] = classid;
  if (mimeType) ret.embedAttrs["type"] = mimeType;
  return ret;
}

var is_regexp = (window.RegExp) ? true : false;

function fetch_object(idname)
{
	if (document.getElementById)
	{
		return document.getElementById(idname);
	}
	else if (document.all)
	{
		return document.all[idname];
	}
	else if (document.layers)
	{
		return document.layers[idname];
	}
	else
	{
		return null;
	}
}

function colexp(objid,action)
{
	obj = fetch_object(objid);
	cel = fetch_object(objid);
	img = fetch_object(objid);
	
	
	switch (action)
	{
		case 'expand':
			obj.style.display = '';
			break;
			
		case 'colapse':
			obj.style.display = 'none';
			break;
		
		case '':
			if (obj.style.display == 'none')
			{
				
				obj.style.display = '';
			}
			else
			{
				obj.style.display = 'none';
			}		
			break;
		
	}
	return false;
}