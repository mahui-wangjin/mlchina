<?php if (!defined('THINK_PATH')) exit();?>1.高德地图的API很详细，很容易自定义自己的地图。
<%@ page language="java" import="java.util.*"  contentType="text/html; charset=UTF-8"%>
<%@ taglib prefix="s" uri="/struts-tags"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@ taglib uri="/WEB-INF/paginator.tld" prefix="paginator"%>

<%
String path = request.getContextPath();
String basePath = request.getScheme() + "://"+ request.getServerName() + ":" + request.getServerPort()+ path + "/";
%>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>关键字搜索</title>
    <script language="javascript" src="http://webapi.amap.com/maps?v=1.2&key=22f12599eef8278633af34b22c66b2d0"></script>
    <link href="<%=path %>/css/fence.css" rel="stylesheet" type="text/css"/>
    <script language="javascript">

        var mapObj, toolbar, overview, scale, geo;
        var date, startTime;
        var initx = window.opener.document.getElementById("positionx").value;
        var inity = window.opener.document.getElementById("positiony").value;
        function mapInit() {
        //var opt="";
        //if(initx == ""){
        //	opt = {
          //      level:13, //设置地图缩放级别
                //center:new AMap.LngLat(initx, inity), //设置地图中心点
          //      doubleClickZoom:true, //双击放大地图
          //      scrollWheel:true//鼠标滚轮缩放地图
            //	}
        //}else{
        var opt = {
                level:13, //设置地图缩放级别
                //center:new AMap.LngLat(initx, inity), //设置地图中心点
                doubleClickZoom:false, //双击放大地图
                scrollWheel:true//鼠标滚轮缩放地图
            }
        //}

             var GeocoderOption = {
range: 3000, //范围
crossnum: 2, //道路交叉口数
roadnum: 3, //路线记录数
poinum: 2//POI点数
};

geo = new AMap.Geocoder(GeocoderOption);
            mapObj = new AMap.Map("iCenter", opt);AMap.Conf.network = 1;
            mapObj.plugin(["AMap.ToolBar", "AMap.OverView", "AMap.Scale"], function () {
                toolbar = new AMap.ToolBar();
                toolbar.autoPosition = true; //加载工具条
                mapObj.addControl(toolbar);
                overview = new AMap.OverView(); //加载鹰眼
                mapObj.addControl(overview);
                scale = new AMap.Scale(); //加载比例尺
                mapObj.addControl(scale);
            });

            AMap.event.addListener(mapObj,'complete',completeEventHandler);

        }

        function completeEventHandler() {
        toolbar.doLocation();
        listener1=AMap.event.addListener(mapObj,'dblclick',fn);
        //mapObj.zoomIn();
        }
        var fn = function(e){
        var lng = e.lnglat.getLng();
        var lat = e.lnglat.getLat();
        var lnglatXY = new AMap.LngLat(lng, lat)
geo.regeocode(lnglatXY, poiToAddressSearch_CallBack);

};
var data_temp="";
var  x_temp="";
var  y_temp="";
var address_temp;
function selectPoint2(x, y , i){
x_temp = x;
y_temp = y;
address_temp = data_temp.list[i].address;
//alert(address_temp);
var lnglatXY = new AMap.LngLat( x, y)
geo.regeocode(lnglatXY, poiToAddressSearch_CallBack2);
}
function poiToAddressSearch_CallBack2(data) {
var resultStr = "";
if (data.status == "E0") {
var province, city, district, road, address;
province = data.list[0].province.name;
if (province == "北京市") {
city = province;
}
else {
city = data.list[0].city.name;
}
district = data.list[0].district.name;
road = data.list[0].roadlist[0].name;
address = data.list[0].poilist[0].address;
if(address_temp ==""){
resultStr = province + city+ district + road + address;
}else{
resultStr = province + city+ district + address_temp;
}

//alert(x_temp + "---" + y_temp + "---" + address_temp);
selectPoint(x_temp,y_temp,resultStr);
}
}
function poiToAddressSearch_CallBack(data) {
var resultStr = "";
if (data.status == "E0") {
var province, city, district, road, address;
province = data.list[0].province.name;
if (province == "北京市") {
city = province;
}
else {
city = data.list[0].city.name;
}
district = data.list[0].district.name;
road = data.list[0].roadlist[0].name;
address = data.list[0].poilist[0].address;
resultStr = province + city+ district + road  + address;
//alert(resultStr + data.list[0].poilist[0].x +","+ data.list[0].poilist[0].y);
selectPoint(data.list[0].poilist[0].x,data.list[0].poilist[0].y,resultStr);
}
}
function selectPoint(x, y, address) {
if (address == "" || address == "undefined" || address == null || address == " undefined" || typeof address == "undefined") {
        alert("地址暂无，不能选择！");
    }
window.opener.document.getElementById("fenceAddr").value = address;
window.opener.document.getElementById("positionx").value = x;
window.opener.document.getElementById("positiony").value = y;
window.close();
//window.parent.submitSaveFence.fenceInfoVO.fenceAddr.value = address ;
}
        function keywordSearch() {
    mapObj.clearMap();
            var keywords = document.getElementById("keyword").value;
            var city = document.getElementById("city").value;
            var PoiSearchOption = {
                srctype:"POI", //数据来源
                type:"", //数据类别
                number:10, //每页数量,默认10
                batch:1, //请求页数，默认1
                range:3000, //查询范围，默认3000米
                ext:""//扩展字段
            };
            var MSearch = new AMap.PoiSearch(PoiSearchOption);
            MSearch.byKeywords(keywords, city, keywordSearch_CallBack);
xx++;
            date = new Date();
            startTime = date.getTime();
            //清空本次搜索的marker和windowsArr
            marker=[];
            windowsArr=[];
        }
        var resultCount = 10;
        var marker = new Array();
        var windowsArr = new Array();
var xx=0;
        function addmarker(i, d) {
            var markerOption = {
    map:mapObj,
                icon:"http://api.amap.com/webapi/static/Images/" + (i + 1) + ".png",
                position:new AMap.LngLat(d.x, d.y)
            };
            var mar = new AMap.Marker(markerOption);

            marker.push(new AMap.LngLat(d.x, d.y));
            var infoWindow = new AMap.InfoWindow
                    ({
                        content:"<h3><font color=\"#00a6ac\">&nbsp;&nbsp;" + (i + 1) + ". " + d.name + "</font></h3>" + TipContents(d.type, d.address, d.tel),
                        size:new AMap.Size(300, 0),
                        autoMove:true,  //设置自动调整信息窗口至视野范围
offset:new AMap.Pixel(0,-30)
                    });
            windowsArr.push(infoWindow);

            var aa = function (e) {
                infoWindow.open(mapObj, mar.getPosition());
            };

//AMap.event.addListener(mar, "click", aa);
        }
        function keywordSearch_CallBack(data) {
            var resultStr = "";
            data_temp=data;
            //showTime();
//document.getElementById("textUniqId").value = data.uniqid;
            if (data.status == "E0") {
                resultCount = data.list.length;
                for (var i = 0; i < data.list.length; i++) {
                //alert(data.list[i].x+"--"+data.list[i].y+"***");
                    resultStr += "<div id='divid" + (i + 1) + "' onmouseover='openMarkerTipById1(" + i + ",this)' onmouseout='onmouseout_MarkerStyle(" + (i + 1) + ",this)' style=\"font-size: 12px;cursor:pointer;padding:0px 0 4px 2px; border-bottom:1px solid #C1FFC1;\">" +
                    "<table><tr><td><button onclick='javascript:selectPoint2("+data.list[i].x+","+data.list[i].y+","+i+");'>选择</button></td><td><img src=\"http://api.amap.com/webapi/static/Images/" + (i + 1) + ".png\"></td>"
                    + "<td><h3><font color=\"#00a6ac\">名称: " + data.list[i].name + "</font></h3>";
                    resultStr += TipContents(data.list[i].type, data.list[i].address, data.list[i].tel) + "</td></tr></table></div>";
                    addmarker(i, data.list[i]);
                }
                mapObj.setFitView();
            }
            else if (data.status == "E1") {
                resultStr = "未查找到任何结果!<br />建议：<br />1.请确保所有字词拼写正确。<br />2.尝试不同的关键字。<br />3.尝试更宽泛的关键字。";
            }
            else {
                resultStr = "错误信息：" + data.state + "请对照API Server v2.0.0 简明提示码对照表查找错误类型";
            }
            document.getElementById("result").innerHTML = resultStr;
        }
        function TipContents(type, address, tel) {
            if (type == "" || type == "undefined" || type == null || type == " undefined" || typeof type == "undefined") {
                type = "暂无";
            }
            if (address == "" || address == "undefined" || address == null || address == " undefined" || typeof address == "undefined") {
                address = "暂无";
            }
            if (tel == "" || tel == "undefined" || tel == null || tel == " undefined" || typeof address == "tel") {
                tel = "暂无";
            }
            var str = "&nbsp;&nbsp;地址：" + address + "<br />&nbsp;&nbsp;电话：" + tel + " <br />&nbsp;&nbsp;类型：" + type;
            return str;
        }
        function openMarkerTipById1(pointid, thiss) {  //根据id 打开搜索结果点tip
            thiss.style.background = '#CAE1FF';
            windowsArr[pointid].open(mapObj, marker[pointid]);
        }
        function onmouseout_MarkerStyle(pointid, thiss) { //鼠标移开后点样式恢复
            thiss.style.background = "";
        }

        function showTime(){
            var date = new Date();
            document.getElementById("textSearchTime").value = date.getTime() - startTime + "毫秒";
        }

    </script>
</head>
<body onload="mapInit();" >
   <div class="addressMain">
<div class="left" >
<div class="searcherLayer">
   <b>城市：</b>
           <input type="text" id="city" name="city" value=""/>
           <b>关键字：</b>
           <input type="text" id="keyword" name="keyword" value=""/>
           <input type="button" value="查询" onclick="keywordSearch()" style="margin-left:5px"/>
</div>
    <div id="iCenter" style="width:679px;height:400px;border:#F6F6F6 solid 1px;"></div>
    </div>
    <div class="right" >
    <div id="r_title">关键字搜索结果:</div>
        <div id="result"></div>
    </div>
   </div>
</body>
</html>