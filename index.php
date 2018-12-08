<?php

	$flag="ptbt{Congratulations_you_find_the_flag_by_github}";
?>


<!DOCTYPE html>
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>实验环境-渗透测试最佳实践</title>
    <!-- Meta -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&#39;E&#39; is for &#39;effective&#39;. EJS is a simple templating language that lets you generate HTML markup with plain JavaScript. No religiousness about how to organize things. No reinvention of iteration and control-flow. It&#39;s just plain JavaScript.">
    <meta name="author" content="">
    <link href="./static/css" rel="stylesheet">
    <link href="./static/css(1)" rel="stylesheet">
    <!-- Global CSS -->
    <link rel="stylesheet" href="./static/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="./static/font-awesome.css">
    <link rel="stylesheet" href="./static/prism.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="./static/styles-2.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll">

    <!-- ******HEADER****** -->
    <header id="header" class="header">
      <div class="container">
        <h1 class="logo pull-left">
            <a class="scrollto" href="https://ejs.co/#promo">
                <span class="logo-title">渗透测试最佳实践</span>
            </a>
        </h1><!--//logo-->
        <nav id="main-nav" class="main-nav navbar-right" role="navigation">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!--//nav-toggle-->
          </div><!--//navbar-header-->
          <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item sr-only active"><a class="scrollto" href="#">首页</a></li>
              <li class="nav-item"><a target="_blank" class="scrollto" href="#about">关于</a></li>
              <li class="nav-item"><a target="_blank" class="scrollto" href="http://www.admintony.com">作者博客</a></li>
              <li class="nav-item"><a class="scrollto" href="#unit-1">开始实验</a></li>
              <li class="nav-item"><a target="_blank" class="scrollto" href="#">购书链接</a></li>
              <li class="nav-item"><a target="_blank" class="scrollto" href="https://github.com/PenetrationTestBestPractice/PentrationTestTools">工具下载</a></li>
              <li class="nav-item"><a target="_blank" href="https://github.com/admintony/">GitHub</a></li>
            </ul><!--//navbar-nav-->
          </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
      </div><!--//container-->
    </header><!--//header-->

    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
      <div class="container text-center">
        <h2 class="title">
          <span class="highlight">
            实验环境
            <!--<span style="font-size: 60%;">-《渗透测试最佳实践》</span>-->
          </span>
        </h2>
        <p class="intro">《渗透测试最佳实践》</p>
        <div class="btns">
          <a class="btn btn-cta-secondary scrollto" href="#unit-1">Get Started</a>
        </div>
        <ul class="meta list-inline">
          <li>&nbsp;</li>
        </ul><!--//meta-->
      </div><!--//container-->
      <div class="social-media">
        <div class="social-media-inner container text-center">
          <ul class="list-inline"></ul>
        </div>
      </div>
    </section><!--//promo-->
	<div id="unit-1" class="container">
		<div class="row">
		<h1 align="center">第一章 外围信息收集</h1>
            <div class="col-xs-6 col-lg-4">
              <h2>模拟邮件发送</h2>
              <p>&emsp;&emsp;该环境模拟服务器发送邮件,以演示从邮件源码中获取网站真实IP的案例。</p>
              <p><a class="btn btn-default" href="unit-1/lab1/" role="button">进入实验 »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <!--<div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
        </div>
	</div>
    <!-- ******FOOTER****** -->
    <footer class="footer">
      <div class="container text-center">
        <small class="copyright">EJS © 2112 <a href="http://twitter.com/mde">Matthew Eernisse</a> ::: Template designed with by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a></small>
      </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script async="" src="./static/analytics.js"></script><script src="./static/jquery-1.11.1.min.js"></script>
    <script src="./static/jquery-migrate-1.2.1.min.js"></script>
    <script src="./static/jquery.easing.1.3.js"></script>
    <script src="./static/bootstrap.min.js"></script>
    <script src="./static/jquery.scrollTo.min.js"></script>
    <script src="./static/prism.js"></script>
    <script src="./static/main.js"></script>
  

</body></html>
