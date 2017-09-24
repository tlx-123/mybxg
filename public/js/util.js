define(['jquery'],function($){
	return {
		// 获取URl参数中的指定的参数值
		qs : function(key){
			var param = location.search.substr(1);
			var result = null;
			if(param){
			  var ps = param.split('&');
			  $.each(ps,function(index,item){
				var kv = item.split('=');
				if(kv[0] == key){
				  result = kv[1];
				  return false; // 终止each循环
				}
			});
		  }
		  return result;
	    },
	    setMenu : function(path){
	    	// 设置导航菜单选中
		$('.aside .navs a[href="'+path+'"]').addClass('active').closest('ul').show();
	    }
	}
});