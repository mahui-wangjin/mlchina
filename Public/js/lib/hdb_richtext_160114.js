var _HdbToolbar = {
    /*_colorObj:{"#aa56c5":"violet","#0e6ac1":"blue","#7ebc01":"green","#fe620f":"orange","#f03442":"red","#000000":"black"},*/
	/*_bold: function() {
		$(".bqgnK_li03 a").attr("class", "thisOver");
	},
	_unbold: function() {
		$(".bqgnK_li03 a").removeClass("thisOver");
	},*/
    /*_colorFont:function(K,doc){
        K(doc).click(function(e){
            editor.clickToolbar("forecolor");
            editor.clickToolbar("fontsize");
        });
    },
    _color:function(color){
        $(".bqgnK_li04 a").attr("class",_HdbToolbar._colorObj[color]);
    },
    _font:function(font,flag){
        if(flag){
            if(font=="18px"){
                $(".bqgnK_li05 a").addClass("thisOver");
            }else{
                $(".bqgnK_li05 a").removeClass("thisOver");
            }
        }

    },*/
    _hdbImg:function(html){
        return html.replace(/<img[^>]*?src=['"](?!http:\/\/img[12]\.hudongba\.com)([^'"]+)['"][^>]*\/?>/ig,"")
        .replace(/(<img[^>]*?src=['"])(http:\/\/img2\.hudongba\.com)([^'"]+['"])([^>]*\/?>)/ig,"$1$2$3  class=\"post_pic\" $4");
    },
    _text:"",
    _img:false
};
function wenB() {
	/*表情*/
    /*$(".bqgnK_li01").click(function() {
        _richText._showEmo();
    });*/
	/*加粗*/
	/*$(".bqgnK_li03 a").click(function() {
        editor.clickToolbar("bold");
	});*/
	/*颜色*/
	/*$(".bqgnK_li04 a").click(function() {
		$(".color_set_bg").show();
        editor.clickToolbar("forecolor");
	});

    $("#color_set dl dd a").click(function() {
    	_richText._setNull();
		$(".bqgnK_li04 a").attr("class", $(this).attr("class"));
		$(".color_set_bg").hide();
        var color = $(this).css("background-color");
        editor.exec("forecolor", color);
	});*/
	/*字号*/
	/*$(".bqgnK_li05 a").click(function() {
        editor.clickToolbar("fontsize");

		if ($(".bqgnK_li05 a").attr("class") != "thisOver") {
			$(this).addClass("thisOver");
            editor.exec("fontsize", "18px");
		} else {
			$(this).removeClass("thisOver");
            editor.exec("fontsize", "16px");
		}
        _richText._setNull();
	});*/
    $("span[class='ke-outline']:last").hide();
}

function appTxt(_result) {
	
	_richText._setNull();
    var ehtm = editor.html();
    var _hdbText = editor.text();
	$("#f").html("");
    //1.给所有标签间的文本内容包上span标签
    var _img =  /<img[^>]*\/>/.exec(_hdbText);
    if(_img!=null){_HdbToolbar._img=true;}
    if(ehtm.indexOf("embed")>-1){_HdbToolbar._img=true;}
    _HdbToolbar._text = _hdbText.replace(/<img[^>]*\/>/g,"").replace(/\s*/g, "");
    if(ehtm==""){return "";};
    ehtm = new String(ehtm);
    ehtm = ehtm.replace(/<p>\s*<br\s*\/>\s*<\/p>/g,"<p></p>");
    ehtm = ehtm.replace(/<p>/g, '<span>'); //转换p标签
    ehtm = ehtm.replace(/<\/p>/g, '</span><br>');
    ehtm = ehtm.replace(/<div>/g, '<span>'); //转换div标签
    ehtm = ehtm.replace(/<\/div>/g, '</span><br>');
    ehtm = ehtm.replace(/<strong>/g, '<span style="font-weight:bold;">'); //转换strong标签
    ehtm = ehtm.replace(/<\/strong>/g, '</span>');
    ehtm = ehtm.replace(/<u>/g, '<span style="text-decoration:underline;">'); //转换u标签
    ehtm = ehtm.replace(/<\/u>/g, '</span>');
    ehtm = ehtm.replace(/<br \/>/g, '<br>');
    ehtm = ehtm.replace(/\[/g, '［');
    ehtm = ehtm.replace(/]/g, '］');
    ehtm = ("<span>" + ehtm + "</span>"); //在内容最外层加上span标签
    ehtm = ehtm.replace(/</g, 'mmmmmmmdsgfdrfg<'); //给所有标签间的内容包上span标签
    ehtm = ehtm.replace(/>/g, '>nnnnnnnnaewwaaa');
    ehtm = ehtm.replace(/nnnnnnnnaewwaaa/g, '<span>');
    ehtm = ehtm.replace(/mmmmmmmdsgfdrfg/g, '</span>');
    ehtm = ehtm.replace(/<span><\/span>/g, ''); //去除空标签
    ehtm = ehtm.substring(7, ehtm.length - 6); //去除首尾多余标签
    //2.获取所有标签的属性值.
    $("#f").append(ehtm);
    $("#f span").each(function() {
        var newW = $(this).css("font-weight");
        var newZ = $(this).css("font-size");
        var newC = $(this).css("color");
        var newU = $(this).css("text-decoration");
        $(this).css({
            "font-weight": newW,
            "font-size": newZ,
            "color": newC,
            "text-decoration": newU
        });
    });
    $("#f span").each(function(){
    	if($(this).css("text-decoration")=="underline"){
    		$(this).find("span").css("text-decoration","underline");
    	}
    });
    var ehtm2 = $("#f").html();
    //3.将所有br、img、及文本内容标签分离出来
    $("#f").empty();
    ehtm2 = new String(ehtm2);
    var sum = (ehtm2.split('>')).length - 1;
    var leFt = 0;
    var cenTer = 0;
    for (var i = 1; i < sum; i++) {
        leFt = ehtm2.indexOf("<", cenTer);
        cenTer = ehtm2.indexOf(">", leFt);
        riGht = ehtm2.indexOf("<", cenTer);
        var ifBr = ehtm2.substring(leFt, leFt + 4); //截取标签前4个字符用于判断<br>及<img
        var okImg = ehtm2.substring(leFt, cenTer + 1); //前半标签
        var tag_start = ehtm2.substring(cenTer + 1, riGht); //标签间的文本内容
        if (ifBr == '<br>' || ifBr == '<BR>') { //是换行符
            $("#f").append("<br>");
        } else if (ifBr == '<img' || ifBr == '<IMG') { //是图片
            $("#f").append("[HDB_0_16_#000000_0]" + okImg + "[\/HDB]");
        } else {
            okImg2 = new String(okImg);
            tag_start2 = new String(tag_start);
            tag_start2 = _._trim(tag_start2);
            span2 = new String("</span>");
            newNr = okImg2 + tag_start2 + span2;
            $("#f").append(newNr);
        }
    }
    //4.清除尾部br、整理属性 转换打印自定义代码
    $("#f span").each(function(){
        if($(this).html()==''){
            $(this).remove();
        }
    });
    $("br").eq(-1).remove();
    var ehtm3 = $("#f").html();
    ehtm3 = new String(ehtm3);
    //5.
    ehtm3 = ehtm3.replace(/<br>/g, '[HDB_0_16_#000000_0]<br>[\/HDB]');
    ehtm3 = ehtm3.replace(/<BR>/g, '[HDB_0_16_#000000_0]<br>[\/HDB]');
    $("#f").empty();
    $("#f").append(ehtm3);
    var ehtm4 = "";
    if($("#f span").length>0){
        $("#f span").each(function() {
            var tNr = $(this).html();
            if ($(this).html() == '') {
                $(this).remove();
            } else {
                var tW = $(this).css("font-weight");
                if (tW == "400" || tW == "normal") {
                    tW = 0;
                } else {
                    tW = 1;
                }
                var tU = $(this).css("text-decoration");
                if (tU == "underline") {
                    tU = 1;
                } else {
                    tU = 0;
                }
                var tF = $(this).css("font-size");
                tF = tF.replace(/px/g, '');
                tF = tF.replace(/12/g, '16');
                if(tF!=18 && tF!=14){
                    tF=16;
                }
                var tC = $(this).css("color");
                if(tC=="#000"){
                	tC="#000000";
                }
                tC = KindEditor.toHex(tC);
                $(this).after("[HDB_" + tW + "_" + tF + "_" + tC + "_" + tU + "]" + tNr + "[/HDB]");
                $(this).remove();
            }
            $(".dt_content_pic").each(function() {
                var CtsImg = $(this).html();
                CtsImg2 = new String(CtsImg);
                if (CtsImg2.indexOf("/images/emo/") > 0) {//判断是否为表情
                    $(this).children("img").addClass("dt_emo");
                    CtsImg3 = $(this).html();
                    $(this).after(CtsImg3);
                    $(this).remove();
                }
            });
            ehtm4 = $("#f").html();
            ehtm4 = new String(ehtm4);
            ehtm4 = ehtm4.replace(/<\/span>/gi, '');
            ehtm4 = ehtm4.replace(/<BR>/g, '<br>');
            ehtm4 = ehtm4.replace(/<IMG/g, '<img');
            ehtm4 = ehtm4.replace(/<DIV/g, '<div');
            ehtm4 = ehtm4.replace(/<\/DIV>/g, '<\/div>');
            ehtm4 = ehtm4.replace(/#666666/g, '#000000');
            ehtm4 = ehtm4.replace(/#000;/g, '#000000;');
            ehtm4 = ehtm4.replace(/#0000;/g, '#000000;');
            ehtm4 = ehtm4.replace(/#00000;/g, '#000000;');
            ehtm4 = ehtm4.replace(/#666/g, '#000000');
            ehtm4 = ehtm4.replace(/_black/gi, '_#000000');
        });
    }else{
        ehtm4 = ehtm3;
    }
    $("#f").html(ehtm4);
    $("#f embed").each(function(){
        var video = $(this).attr("id");
    	var img = $(this).attr("imgsrc");
    	var swf = $(this).attr("src");
    	$(this).before("[HDB_0_16_#000000_0][MOVIE pic_src='"+img+"' media_src='"+video+"' swf_src='"+swf+"'][\/MOVIE][/HDB]");
    	$(this).remove();
    });
    ehtm4 = $("#f").html();
    if(_imgCdn.indexOf("hudongba.com")==-1){
        ehtm4 =  ehtm4.replace(/(<img[^>]*src=['"])(http:\/\/img1\.hudongba\.com)([^'"]+['"][^>]*\/?>)/ig,"$1"+_imgCdn+"$3");
        ehtm4 =  ehtm4.replace(/(<img[^>]*src=['"])(http:\/\/img2\.hudongba\.com)([^'"]+['"])([^>]*\/?>)/ig,"$1"+_imgCdn+"$3 $4");
    }
    ehtm4 = ehtm4.replace(/(\[\/HDB\])[^\[]+/gi,"$1");
    _result= ehtm4;
    return _result;
}

