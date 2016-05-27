/**
 * pc端 选qq群 并接收回调
 */

(function(){
		window.qq_activity_selectGroup = {
			config:{
				src:"http://qqweb.qq.com/qunactivity/notice-select-group.html",
				data:"",
				iframe:"",
				fn:"",
				callBack:function(event){
					var data = event.data;
					var selectGroup = window.qq_activity_selectGroup;
					if( data ){
						selectGroup.config.fn.call(data,data);
					}
				}
			},
			createFrame : function(){
				var iframe = document.createElement("iframe");
				iframe.style = "display:none;height:0;width:0";
				iframe.src = this.config.src;
				iframe.style.display = "none";
				iframe.style.height = "0";
				iframe.style.width = "0";
				this.config.iframe = iframe;
				document.body.appendChild(iframe);
				return iframe;
			},
			bindEvent:function( fn ){
				if(window.addEventListener){
					window.addEventListener('message',fn,false);
				} else if(window.attachEvent){
					window.attachEvent('message',fn);
				}
			},
			getData : function( fn ){
				var selectGroup = this;
				var defaultConfig = selectGroup.config;
				var callBack = defaultConfig.callBack;
				this.config.fn = fn || function(){}; 
				this.createFrame();
				this.bindEvent( callBack );
			}
		}
		
	})();

	////调用
	////调用
	//qq_activity_selectGroup.getData(function(data){console.log(data)})