<?php
	// 后端路由
	
	// 告诉浏览器以utf-8显示
	// header('content-type:text/html; charset=utf8');
	// echo '<div>主页内容</div>';

	// include 在当前php内部嵌入一个子页面


	// 必须通过URL区分出用户想访问哪个页面

	// 默认目录名称
	$dir = 'main';
	// 默认文件名称
	$filename = 'index';

	if(array_key_exists('PATH_INFO', $_SERVER)){
		// PATH_INFO属性存在
		$path = $_SERVER['PATH_INFO']; // /main/index

		// 去掉第一个斜杠
		$str = substr($path, 1); // main/index
		// 字符串分隔，和js中的split方法很像
		$ret = explode('/', $str);
		if (count($ret) == 2) {
			// 路由有两层
			$dir = $ret[0]; // 覆盖目录
			$filename = $ret[1]; // 覆盖文件名称
		}else{
			// 其他情况全部跳转到登录页面
			$filename = 'login';
		}
	}
	// 嵌入子页面
	include('./views/'.$dir.'/'.$filename.'.html');

	// include('./views/main/index.html');

	// $_SERVER php提供的全局变量
	// var_dump($_SERVER);

	// $path = $_SERVER['PATH_INFO'];
	// echo $path;

	// include('./views'.$path.'.html');

	 
?>
