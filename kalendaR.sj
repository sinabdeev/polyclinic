function kalendaR(evt,trg,tgw) {
	var tg,d,e,w,myd
	tg=trg
	if (evt) tg=(evt.target) ? evt.target : evt.srcElement
	d=getdokK(tg),e,w,myd
	if (!d) return
	e=GK("_kalendaR",d)
	if (!e) {
		if (!evt) {
			trg.innerHTML="<iframe id='_kalendaR' style='width:100px;height:100px' marginHeight=0 marginWidth=0 scrolling='no' frameBorder=0></iframe>"
			e=GK("_kalendaR",d)
		} else {
			e=d.createElement("iframe")
			e.scrolling="no"
			e.style.position="absolute"
			e.id="_kalendaR"
		}
		e.marginHeight=0
		e.marginWidth=0
		e.frameBorder=0
		e.style.zIndex=7000
		if (evt) d.body.appendChild(e)
		w=e.contentWindow
		myd=((w.contentWindow) ? w.contentWindow.document : ((w.contentDocument) ? w.contentDocument : w.document))
		myd.write(KHTM)
		myd.close()
		GK("_bodi",myd).innerHTML=_kalbb()
		e.style.width=GK("_kalendarr",myd).offsetWidth
		e.style.height=GK("_kalendarr",myd).offsetHeight
	}
	w=e.contentWindow
	w.papaR=window
	if (evt) {
		w.tg=tg
		w.im=e
		w.imw=w
		var t=klikkoo(evt,d).t,
		l=klikkoo(evt,d).l
		e.style.top=t
		e.style.left=l
		if (l+e.offsetWidth>d.body.offsetWidth) e.style.left=l-e.offsetWidth
		if (t+e.offsetHeight>d.body.offsetHeight) e.style.top=t-e.offsetHeight
	}
	w.tgw=(tgw) ? tgw : d.parentWindow
	e.style.visibility="visible"
}
function getdokK(tg) {
	while (tg.parentNode) {
		if (tg.parentNode.nodeName.toLowerCase().indexOf("document")>-1) return tg.parentNode
		tg=tg.parentNode
	}
	return null
}
function _kalbb(dts) {
	var mn=new Array("Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"),
	md=new Array(31,28,31,30,31,30,31,31,30,31,30,31),dn=new Array("Пн","Вт","Ср","Чт","Пт","Сб","Вс"),
	sedni=new Date()
	if (dts) sedni=papaR.trans_dtR(dts)
	var sedniDat=sedni.getDate(),sedniMes=sedni.getMonth(),sedniGod=sedni.getFullYear(),
	i,j,ret,v,sedniDen,kols,vals,dt,tst,rd=0
	if (((sedniGod % 4 == 0) && !(sedniGod % 100 == 0)) || (sedniGod % 400 == 0)) md[1]++
	sedniDen=papaR.trans_dtR("1."+(sedniMes+1)+"."+sedniGod)
	sedniDen=sedniDen.getDay()
	sedniDen=((sedniDen==0) ? 7 : sedniDen)-1
	kols=sedniDen+md[sedniMes]
	i=kols % 7
	i=(i==0) ? 7 : i
	kols=kols+(7-i)
	vals=new Array(kols)
	for (i=sedniDen; i<md[sedniMes]+sedniDen; i++) {vals[i]=i-sedniDen+1}
	kols=kols/7
	ret="<table id='_kalendarr' border=0 cellSpacing=0 celPadding=0 class='k_'>"
	ret+="<tr class='k_sz'><td nowrap colspan="+(kols+1)+"><div style='width:100%' id='k_zag' formov='_kalbodi'><nobr>"
	ret+="&nbsp;&nbsp;<select id='k_god' class='k_gm' onChange='papaR.k_newmg(document)'>"
	for (i=sedniGod-4; i<sedniGod+5; i++) {
		ret+="<OPTION value="+i+((i==sedniGod) ? " selected" : "")+">"+i+"</OPTION>"
	}
	ret+="</select>";
	ret+="&nbsp;<select id='k_mes' class='k_gm' onChange='papaR.k_newmg(document)'>"
	for (i=0; i<12; i++) {
		ret+="<OPTION class='o_gm'"+((i==sedniMes) ? " selected" : "")+" value="+(i+1)+">"+mn[i]+"</OPTION>"
	}
	ret+="</select>";
	ret+="</nobr></div></td></tr>"
	sedni=new Date()
	tst=(sedniMes==sedni.getMonth() && sedniGod==sedni.getFullYear())
	rd=sedni.getDate()
	for (i=0; i<7; i++) {
		ret+="<tr class='"+((i>4) ? "k_rp" : "k_ro")+"'>"
		ret+="<td class='k_dn'>"+dn[i]+"</td>"
		for (j=0; j<kols; j++) {
			v=vals[i+j*7]
			dt=(v) ? v+"."+(parseInt(sedniMes,10)+1)+"."+sedniGod : ""
			ret+="<td dt='"+dt+"' class='k_1d'"
			if (v && tst && v==rd) ret+=" style='background-color:#006;color:#ff0'";
			if (!v) ret+=" style='cursor:default'";
			ret+=" onclick='papaR.operatorR(this.dt,tg,im,tgw)'";
			v=(v) ? v : "&nbsp;&nbsp;"
			ret+=">"+v+"</td>"
		}
		ret+="</tr>"
	}
	return ret+"</table>"
}
function operatorR(d,tg,e,w) {
	if (e) e.style.visibility="hidden"
	if (tg && d) {
		var t=d.split("."),f=false
		if (t[0].length<2) t[0]="0"+t[0]
		if (t[1].length<2) t[1]="0"+t[1]
		d=t[0]+"."+t[1]+"."+t[2]
		if (tg.nodeName.toLowerCase()=="input") {f=(tg.value!=d);tg.value=d}
		else {f=(tg.innerHTML!=d);tg.innerHTML=d}
		t=tg.getAttribute("onchanger")
		if (t && w && f) eval("(w)."+t+"(tg)")
	}
}
function k_newmg(d) {
	GK("_bodi",d).innerHTML=_kalbb("01."+GK("k_mes",d).value+"."+GK("k_god",d).value,1)
}
function trans_dtR(ds) {
	if (typeof ds!="string") return ds.getDate().toString()+"."+(ds.getMonth()+1).toString()+"."+ds.getFullYear().toString()+((l) ? " "+ds.getHours().toString()+":"+ds.getMinutes().toString()+":"+ds.getSeconds().toString() : "")
	var c,m,g,s=ds.replace(" ",".")
	s=s.replace(":",".").replace(":",".").replace(":",".").split(".")
	c=(s.length<4) ? "0" : s[3];m=(s.length<5) ? "0" : s[4];g=(s.length<6) ? "0" : s[5]
	return new Date(parseInt(s[2],10),parseInt(s[1],10)-1,parseInt(s[0],10),parseInt(c,10),parseInt(m,10),parseInt(g,10))
}
function GK(id,d) {d=(d) ? d : document;return d.getElementById(id)}
function klikkoo(evt,d) {
	var ret={t:0,l:0}
	if (evt.pageX) {
		ret.l=evt.pageX
		ret.t=evt.pageY
	} else if (evt.clientX) {
		ret.l=evt.clientX+d.body.scrollLeft-d.body.clientLeft
		ret.t=evt.clientY+d.body.scrollTop-d.body.clientTop
		if (d.body.parentElement && d.body.parentElement.clientLeft) {
			var bodpar=d.body.parentElement
			ret.l=bodpar.scrollLeft-bodpar.clientLeft
			ret.t=bodpar.scrollTop-bodpar.clientTop
		}
	}
	return ret
}
var papaR=window,
KHTM='<HTML><head><META http-equiv="Content-Type" content="text/html; charset=windows-1251">'
KHTM+='<style>\n'
KHTM+='td {text-align:center;width:17px}\n'
KHTM+='.k_ {font-weight:bold;font-size:9px;border:outset 1px;border-color:#efefef #505050 #505050 #efefef}\n'
KHTM+='.k_sz {background-color:#eee}\n'
KHTM+='select {font-weight:bold;height:17px;font-size:10px;cursor:pointer}\n'
KHTM+='.k_ro {background-color:#fff;color:#003}\n'
KHTM+='.k_rp {background-color:#efe;color:#f00}\n'
KHTM+='.k_dn {border:outset 1px;background-color:#eee;color:#000}\n'
KHTM+='.k_1d {cursor:pointer;border:inset 1px}\n'
KHTM+='</style>\n<script>var papaR,tg,im,imw,tgw</script>\n'
KHTM+='</head><body style="cursor:default;margin:0 0 0 0;font-family:Tahoma"><div id="_bodi" style="overflow:hidden"></div></body>\n'
KHTM+='</HTML>'
