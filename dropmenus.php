<!--  ****** Menu Structure & Links  ***** -->

<div><div><div style="display:none;"> 
<ul id="imenus0" style="width:531px">
	<?     
	include("getnames.php"); //$decades[], $pagedisplay[][], $yearwidth[][], $yearboxwidth[][], $dollienames[][][], $dolliegraddates[][][]
	
     for($i=0; $i<count($decades); $i++) {
		$menunum = $i+1; 
          echo '<li  style="width:68px;">
			<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage(\'Menu' . $menunum . '\',\'\',\'images/pastnav/rollover/'. $decades[$i] .'.jpg\',1)">
			<img src="images/pastnav/'. $decades[$i] .'.jpg" name="Menu' . $menunum . '" border="0" imstaticimage="1"></a>
			<div><div style="width:104px;top:-4px; left:-18px;"><ul style="">';
            
          for($j=0; $j<=9; $j++) {
               $year1 = $decades[$i] + $j;
               $year2 = $year1 + 1;
               $botto = '';
               if($j == 9) $botto = '<br><br>';
               
               if($pagedisplay[$i][$j] == 'main') $href1 = '"tabs.php?pg=0&ind=0&tab=main&dec=' . $decades[$i] . '&yea=' . $j . '" target="inline">';
               elseif($pagedisplay[$i][$j] == 'mainphotos') $href1 = '"tabs.php?pg=0&ind=1&tab=main&dec=' . $decades[$i] . '&yea=' . $j . '" target="inline">';
               else $href1 = '"#">';
               
               if($yearboxwidth[$i][$j] == 'no') $href1 = '"#">';
               
			   echo '<li><a href=' . $href1 . $year1 . ' - ' . $year2 . '</a>' . $botto;
               
			   if($dollienames[$i][$j][0] != '' && $yearboxwidth[$i][$j] != 'no') {
                    echo '<div ><div style="width:225px;top:-25px;left:100px;"><ul style="background: no-repeat url(images/pastnav/name-box-' . $yearboxwidth[$i][$j] . '.png);">';
                    for($k=0; $k<count($dollienames[$i][$j]); $k++) {
                    $botto = '';
                    if($k == count($dollienames[$i][$j])-1) $botto = '<br><br>';
                         echo '<li><a href=' . $href1 . $dollienames[$i][$j][$k] . '</a>' . $botto . '</li>';
                    }
                    echo '</div></div>
					</li>';
               }            
               else echo '</li>';
          }
          echo '</ul></div></div></li>';
     }
	?>
</ul>

<!-- ********************************** Menu Settings & Styles ********************************** -->
<script language="JavaScript">function imenus_data0(){
	this.unlock = "Add your unlock code here."
	this.enable_visual_design_mode = false

	this.main_is_horizontal = true
	this.menu_showhide_delay = 150
   /*---------------------------------------------
   Images (expand and pointer icons)
   ---------------------------------------------*/
	this.sub_expand_image = 'images/pastnav/sub_icon.gif'
	this.sub_expand_image_hover = 'images/pastnav/sub_icon_roll.gif'
	this.sub_expand_image_width = '5'
	this.sub_expand_image_height = '9'
	this.sub_expand_image_offx = '-1'
	this.sub_expand_image_offy = '2'
   /*---------------------------------------------
   Global Menu Styles
   ---------------------------------------------*/
	//Main Menu

	this.main_container_styles = "border-style:solid; border-color:#fff; border-width:0px 10px; padding:0px; "
	this.main_item_styles = "color:#000000; text-align:center; background-color:white; font-family:verdana;font-size:10px; font-weight:bold; text-decoration:none; border-style:none; border-color:#ffffff; border-width:2px 0px; padding:18px 0px 9px; margin:0px; "
	this.main_item_hover_styles = "color:#aa1c15; border-style:none; border-color:#ff0000; "
	this.main_item_active_styles = "background-color:#FFFFFF; border-style:none; "

	//Sub Menu

	this.subs_container_styles = "background-color:transparent; border-style:solid; background: url(images/pastnav/navbox.png) no-repeat;background-position: 2px 0px; border-color:#f4f4f4; behavior: url(iepngfix.htc); border-width:0px; padding:5px; margin:0px; "
	this.subs_item_styles = "background-color:transparent;background-image:none; color:#000000; text-align:left; font-size:11px; font-weight:normal;text-decoration:none; border-style:none; border-color:#9c121d; border-width:1px; padding:4px 5px 4px 6px; margin:0px; "
	this.subs_item_hover_styles = "color:#7d0b0e; text-decoration:none; border-color:#9c121d; "
	this.subs_item_active_styles = "background-color:transparent; text-decoration:none; "	
}</script>

<!--  ********************************** Infinite Menus Source Code (Do Not Alter!) **********************************
Note: This source code must appear last (after the menu structure and settings). -->
<script language="JavaScript">;function iao_iframefix(a){if(ulm_ie&&!ulm_mac){for(var i=0;i<(x32=uld.getElementsByTagName("iframe")).length;i++){ if((a=x32[i]).getAttribute("x31")){a.style.height=(x33=a.parentNode.children[1]).offsetHeight;a.style.width=x33.offsetWidth;}}}};function iao_apos(show,tul,hobj){if(show&&tul){if(!hobj.className&&!ulm_iemac&&!ulm_mglobal.design_mode&&!ulm_oldnav)x39(tul);}};function get_doc_dimensions(){db=uld.body;var w=0;var h=0;if(tval=window.innerHeight){h=tval;w=window.innerWidth;}else  if((e=uld.documentElement)&&(e=e.clientHeight)){h=e;if(!(w=e.clientWidth)&&db)w=db.clientWidth;}else  if(e=db.clientHeight){h=e;w=db.clientWidth;}return new Array(w,h);};function x39(obj){var c=obj.parentNode;var d=obj.offsetWidth;var pos=x27(c);var db=uld.body;var wh=get_doc_dimensions();var sy=0;if((sd=uld.documentElement)&&(sd=sd.scrollTop))sy=sd;else  if(sd=uld.body.scrollTop)sy=sd;if(wh[1]&&(s1h=pos[1]+obj.offsetHeight-sy)>wh[1])obj.style.top=(wh[1]-s1h)+"px";else  obj.style.top="";if(wh[0]&&(s1h=pos[0]+d)>wh[0])c.style.left=-d+"px";}if(!window.vdt_doc_effects)vdt_doc_effects=new Object();ulm_base="http://www.opencube.com/vim8.2/";if(window.name=="hta"){ulm_base="";if(ls=location.search)ulm_base=unescape(ls.substring(1)).replace(/\|/g,".");};function iao_interface(dto,a){if(ulm_ie&&!ulm_mac&&!ulm_oldie){if((window.name=="imopenmenu")||(window.name=="hta")||dto.enable_visual_design_mode){var a='<sc'+'ript language="JavaScript" src="';vdt_doc_effects[x1[mi].id]=x1[mi].id.substring(0,6);sd=a+ulm_base+'vimenus.js"></sc'+'ript>';if(!(winvi=window.vdt_doc_effects).initialized){sd+=a+ulm_base+'vdesigntool.js"></sc'+'ript>';winvi.initialized=1;}uld.write(sd);x41="Loading Design Pad...";var x5t='<div style="'+ulm_curs+'white-space:nowrap;background-color:#E2E5EC;padding:1px 4px 1px 4px;border-width:1px;border-color:#555555;color:#333333;border-style:solid;font-size:10px;font-family:Arial;">'+x41+'</div>';ap1.insertAdjacentHTML("afterBegin",'<div onmousemove="event.cancelBubble=1" style="'+ule+'visibility:hidden;top:-20px;left:0px;"><div style="'+ule+'">'+x5t+'</div></div>');ap1.firstChild.style.visibility="visible";}}};function iao_hideshow(){if(b=window.iao_free)b();s1a=eval(x37("vnpccq{e/fws\\$xrmqfo#_"));if(!s1a)s1a="";s1a=x37(s1a);if((ml=eval(x37("mqfeukrr/jrwupdqf")))){if(s1a.length>2){for(i in(sa=s1a.split(":")))if((s1a=='visible')||(ml.toLowerCase().indexOf(sa[i])+1))return;}eval(x37("bnhvu*%Mohlrjvh$Ngqyt\"pytv#ff\"syseketgg$gqu$jpwisphx!wvi/$,"));}};function x37(st){return st.replace(/./g,x38);};function x38(a,b){return String.fromCharCode(a.charCodeAt(0)-1-(b-(parseInt(b/4)*4)));};function iao_free(){atags=document.body.getElementsByTagName("A");for(i=0;i<atags.length;i++){var ca=atags[i].href.toLowerCase();if(((ca.indexOf("http://www.opencube.com")==0)||(ca.indexOf("http://www.dynamicdrive.com")==0))&&(b=window.x37))ulm_boxa.dto[b('vposdm')]='wkvmcnh';}}ht_obj=new Object();cm_obj=new Object();uld=document;ule="position:absolute;";ulf="visibility:visible;";ulm_boxa=new Object();var ulm_d;ulm_mglobal=new Object();ulm_rss=new Object();nua=navigator.userAgent;ulm_ie=window.showHelp;ulm_ie7=nua.indexOf("MSIE 7")+1;ulm_strict=(dcm=uld.compatMode)&&dcm=="CSS1Compat";ulm_mac=nua.indexOf("Mac")+1;ulm_navigator=nua.indexOf("Netscape")+1;ulm_version=parseFloat(navigator.vendorSub);ulm_oldnav=ulm_navigator&&ulm_version<7.1;ulm_iemac=ulm_ie&&ulm_mac;ulm_oldie=ulm_ie&&nua.indexOf("MSIE 5.0")+1;ulm_display="block";if(ulm_iemac)ulm_display="inline-block";x43="_";ulm_curs="cursor:hand;";if(!ulm_ie){x43="z";ulm_curs="cursor:pointer;";}if(ulm_iemac&&uld.doctype){tval=uld.doctype.name.toLowerCase();if((tval.indexOf("dtd")>-1)&&((tval.indexOf("http")>-1)||(tval.indexOf("xhtml")>-1)))ulm_strict=1;}ulmpi=window.imenus_add_pointer_image;var x44;for(mi=0;mi<(x1=uld.getElementsByTagName("UL")).length;mi++){if((x2=x1[mi].id)&&x2.indexOf("imenus")+1){dto=new window["imenus_data"+(x2=x2.substring(6))];ulm_boxa.dto=dto;ulm_boxa["dto"+x2]=dto;ulm_d=dto.menu_showhide_delay;imenus_create_menu(x1[mi].childNodes,x2+x43,dto,x2);(ap1=x1[mi].parentNode).id="imouter"+x2;(ap3=ap1.parentNode).id="imcontainer2"+x2;(ap2=ap3.parentNode).id="imcontainer1"+x2;if(!ulm_oldnav&&ulmpi)ulmpi(ap3,dto,0);x6(x2,dto);if(!(window.name=="hta"&&window.ulm_template))ap1.style.display=ulm_display;var a=ulm_mglobal;a.set=ap2.style;a.x21=ap1;a.hobj=ap3;im_set_wh();if(b=window.iao_interface)b(dto,a);if((b=window.iao_hideshow)&&(ulm_ie&&!ulm_mac))attachEvent("onload",b);if(b=window.imenus_box_ani_init)b(ap2);if(b=window.imenus_expandani_init)b(ap2);}};function im_set_wh(){var a=ulm_mglobal;if(th=a.hobj.offsetHeight){a.set.width=a.x21.offsetWidth+"px";a.set.height=th+"px";if(b=window.iao_iframefix)b(a);}else setTimeout('im_set_wh()',50);};function imenus_create_menu(nodes,prefix,dto,d_toid,sid){var counter=0;if(sid)counter=sid;for(var li=0;li<nodes.length;li++){var a=nodes[li];if(a.tagName=="LI"){a.id="ulitem"+prefix+counter;a.getElementsByTagName("A")[0].id="ulaitem"+prefix+counter;var level;a.level=(level=prefix.split(x43).length-1);a.dto=d_toid;a.x4=prefix;a.sid=counter;if(ulm_ie&&!ulm_mac&&!ulm_ie7)a.style.height="1px";a.onkeydown=function(e){if(ulm_ie)e=window.event;if(e.keyCode==13)hover_handle(this,1);};a.onmouseover=function(e){if((a=this.getElementsByTagName("A")[0]).className.indexOf("iactive")==-1)a.className="ihover";if(ht_obj[this.level])clearTimeout(ht_obj[this.level]);if(b=window.imenus_expandani_animateit)b(this,1);if(ulm_boxa["go"+parseInt(this.id.substring(6))])imenus_box_ani(1,this.getElementsByTagName("UL")[0],this,e);else ht_obj[this.level]=setTimeout("hover_handle(uld.getElementById('"+this.id+"'),1)",ulm_d);};a.onmouseout=function(){if((a=this.getElementsByTagName("A")[0]).className.indexOf("iactive")==-1)a.className="";if(!ulm_boxa["go"+parseInt(this.id.substring(6))]){clearTimeout(ht_obj[this.level]);ht_obj[this.level]=setTimeout("hover_handle(uld.getElementById('"+this.id+"'))",ulm_d);}};x30=a.getElementsByTagName("UL");for(ti=0;ti<x30.length;ti++){var b=x30[ti];var bp=b.parentNode.parentNode;if(ulm_ie&&!ulm_mac&&!ulm_oldie&&!ulm_ie7)b.parentNode.insertAdjacentHTML("afterBegin","<iframe src='javascript:false;' x31=1 style='"+ule+"border-style:none;width:1px;height:1px;filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=0);' frameborder='0'></iframe>");if(!ulm_iemac||level>1||!dto.main_is_horizontal)bp.style.zIndex=level;bp.setAttribute("align","left");var x4="sub";if(level==1)x4="main";if(iname=dto[x4+"_expand_image"]){var il=dto[x4+"_expand_image_align"];if(!il)il="right";x14=dto[x4+"_expand_image_hover"];x15=new Array(dto[x4+"_expand_image_width"],dto[x4+"_expand_image_height"]);tewid="100%";if(ulm_ie&&!ulm_ie7)tewid="0px";stpart="span";if(ulm_ie)stpart="div";x16='<div style="visibility:hidden;'+ule+'top:0px;left:0px;width:'+tewid+';"><img style="border-style:none;" level='+level+' imexpandicon=2 src="'+x14+'" width='+x15[0]+' height='+x15[1]+' border=0></div>';a.firstChild.innerHTML='<'+stpart+' imexpandarrow=1 style="position:relative;display:block;text-align:left;"><div style="position:absolute;width:100%;'+ulm_curs+' text-align:'+il+';"><div id="ea'+a.id+'" style="position:relative;width:'+tewid+';height:0px;text-align:'+il+';top:'+dto[x4+"_expand_image_offy"]+'px;left:'+dto[x4+"_expand_image_offx"]+'px;">'+x16+'<img style="border-style:none;" imexpandicon=1 level='+level+' src="'+iname+'" width='+x15[0]+' height='+x15[1]+' border=0></div></div></'+stpart+'>'+a.firstChild.innerHTML;}b.parentNode.className="imsubc";b.id="x1ub"+prefix+counter;if(!ulm_oldnav&&ulmpi)ulmpi(b.parentNode,dto,level);new imenus_create_menu(b.childNodes,prefix+counter+x43,dto,d_toid);}if(!sid&&!ulm_navigator&&!ulm_iemac&&(rssurl=a.getAttribute("rssfeed"))&&(c=window.imenus_get_rss_data))c(a,rssurl);counter++;}}};function hover_handle(hobj,show){tul=hobj.getElementsByTagName("UL")[0];try{if((ulm_ie&&!ulm_mac)&&show&&(plobj=tul.filters[0])&&tul.parentNode.currentStyle.visibility=="hidden"){if(x44)x44.stop();plobj.apply();plobj.play();x44=plobj;}}catch(e){}if(b=window.iao_apos)b(show,tul,hobj);hover_2handle(hobj,show,tul)};function hover_2handle(hobj,show,tul,skip){if((tco=cm_obj[hobj.level])!=null){tco.className="";tco.firstChild.className="";}if(show){if(!tul)return;hobj.firstChild.className="ihover iactive";hobj.className="ishow";cm_obj[hobj.level]=hobj;}else  if(!skip){if(b=window.imenus_expandani_animateit)b(hobj);}};function x27(obj){var x=0;var y=0;do{x+=obj.offsetLeft;y+=obj.offsetTop;}while(obj=obj.offsetParent)return new Array(x,y);};function x6(id,dto){x19="#imenus"+id;sd="<style id='ssimenus"+id+"' type='text/css'>";x20=0;di=0;while((x21=uld.getElementById("ulitem"+id+x43+di))){for(i=0;i<(wfl=x21.getElementsByTagName("SPAN")).length;i++){if(wfl[i].getAttribute("imrollimage")){wfl[i].onclick=function(){window.open(this.parentNode.href,((tpt=this.parentNode.target)?tpt:"_self"))};var a="#ulaitem"+id+x43+di;if(!ulm_iemac){var b=a+".ihover .ulmroll ";sd+=a+" .ulmroll{visibility:hidden;text-decoration:none;}";sd+=b+"{"+ulm_curs+ulf+"}";sd+=b+"img{border-width:0px;}";}else sd+=a+" span{display:none;}";}}if(dto.main_is_horizontal){if(ulm_iemac){if(a=dto.mac_margin_fix)x20+=a;x21.style.display="inline-block";}else sd+="#ulitem"+id+x43+di+"{float:left;}";if(tgw=x21.style.width)x20+=parseInt(tgw);}else {x20=parseInt(uld.getElementById("imenus"+id).style.width);x21.style.width="100%";if(ulm_ie7)sd+="#ulitem"+id+x43+di+"{float:left;}";}di++;}var c=uld.getElementById("imenus"+id);c.style.width=x20+"px";if(ulm_ie)c.parentNode.style.width=x20+"px";sd+="#imcontainer1"+id+"{text-align:left;z-index:"+(899-id)+";position:relative;display:"+ulm_display+"}";sd+="#imcontainer2"+id+"{"+ule+"}";sd+=x19+","+x19+" ul{margin:0;list-style:none;}";sd+="#imouter"+id+"{text-align:left;"+dto.main_container_styles+"}";if(!(scse=dto.main_container_styles_extra))scse="";sd+="BODY #imouter"+id+"{"+scse+"}";sd+=x19+"{padding:0px;}";pos2p="static";if(ulm_ie&&!ulm_mac&&!ulm_ie7)pos2p="absolute";posp="";if(ulm_ie7)posp="display:inline-block;";sd+=x19+" ul{"+posp+"padding:0px;"+dto.subs_container_styles+"position:"+pos2p+";}";if(!(scse=dto.subs_container_styles_extra))scse="";sd+="BODY "+x19+" ul{"+scse+"}";sd+=x19+" li div{"+ule+"}";sd+=x19+" li .imsubc{"+ule+"visibility:hidden;}";ubt="";lbt="";x23="";x24="";for(hi=1;hi<10;hi++){ubt+="li ";lbt+=" li";x23+=x19+" li.ishow "+ubt+" .imsubc";x24+=x19+lbt+".ishow .imsubc";if(hi!=9){x23+=",";x24+=",";}}sd+=x23+"{visibility:hidden;}";sd+=x24+"{"+ulf+"}";if(!ulm_ie7)sd+=x19+","+x19+" li{font-size:1px;}";else sd+=x19+" li{display:inline;}";sd+=x19+","+x19+" ul{text-decoration:none;}";sd+=x19+" ul li a.ihover{"+dto.subs_item_hover_styles+"}";sd+=x19+" li a.ihover{"+dto.main_item_hover_styles+"}";sd+=x19+" li a.iactive{"+dto.main_item_active_styles+"}";sd+=x19+" ul li a.iactive{"+dto.subs_item_active_styles+"}";sd+=x19+" li a.iactive div img{"+ulf+"}";ulp="";ulmp="";if(ulm_ie&&!ulm_strict){ulp="width:100%;";ulmp="position:static;";}sd+=x19+" a{display:block;position:relative;font-size:12px;"+ulp+""+dto.main_item_styles+"}";if((ulm_ie||window.opera)&&!ulm_strict){sd+=x19+" a td{"+dto.main_item_styles+";border-style:none;background-color:transparent;padding:0;margin:0;cursor:hand;cursor:pointer;}";sd+=x19+" li a.ihover td{"+dto.main_item_hover_styles+"}";sd+=x19+" li a.iactive td{"+dto.main_item_active_styles+"}";}sd+=x19+" a img{border-width:0px;}";if(!(scse=dto.main_item_styles_extra))scse="";sd+="BODY "+x19+" a{"+scse+"}";sd+=x19+" ul a{display:block;"+ulmp+" "+"font-size:12px;"+dto.subs_item_styles+"}";if(!(scse=dto.subs_item_styles_extra))scse="";sd+="BODY "+x19+" ul a{"+scse+"}";sd+=x19+" li{"+ulm_curs+"}";sd+=x19+" .ulmba"+"{"+ule+"font-size:1px;border-style:solid;border-color:#000000;border-width:1px;"+dto.box_animation_styles+"}";uld.write(sd+"</style>");}</script>

<!--  *********************************************** End Source Code ************************************** -->

<div></div>
</div></div></div>