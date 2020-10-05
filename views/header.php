<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- <link rel="icon" href="/img/logo.ico"> -->
	<link rel="stylesheet" href="/fontawesome/css/all.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/home.css">
	<link rel="stylesheet" href="/css/profile.css">
	<link rel="stylesheet" href="/css/board.css">
	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/script.js"></script>
	<title>에브리페이</title>
</head>
<body>



<?php if(isset($_SESSION['user'])) : ?>

	<!-- 로그인 후 홈 헤더 -->
	<div id="header">
		<div class="size">

			<!-- 로고 -->
			<a href="/home">
				<img src="./img/logo.png" alt="logo">
			</a>

			<!-- 검색창 -->
			<div class="search-box">
				<input type="text" placeholder="밴드, 페이지, 게시글 검색">
				<button><i class="fas fa-search"></i></button>
			</div>

			<!-- 오른쪽 메뉴 -->
			<div id="header-menu">
				<div><a href="/home">내 피드</a></div>
				<div><i class="fas fa-bell"></i></div>
				<div><i class="fas fa-comment-dots"></i></div>
				<div class="profile-menu-top">
					<img src="<?= $user->img ?>" alt="profile" class="profile-img">

					<ul id="profile-menu" class="profile-menu">
						<li><a href="/profile">내 정보</a></li>
						<li><a href="/logout">로그아웃</a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<script>
		
		$('html').on("click", (e)=>{
			if(!$(e.target).hasClass('profile-img') && !$(e.target).hasClass('profile-menu')){
				if($("#profile-menu").hasClass('db')){
					$("#profile-menu").removeClass("db");
				}
			}
		});

		
		$(".profile-img").on("click", ()=>{
			if($("#profile-menu").hasClass('db')){
				$("#profile-menu").removeClass("db");
			}else {
				$("#profile-menu").addClass("db");
			}
		});
		
	</script>

<?php else : ?>

	<!-- 로그인 전 메인 헤더 -->
	<header>
		<div class="size">
			<a href="/">
				<img src="/img/logo2.png" alt="logo" width="150">
			</a>

			<div class="right-menu">
				<ul id="main-menu">
					<li><a href="/guide">이용안내</a><span></span></li>
					<li><a href="/cs">고객센터</a><span></span></li>
				</ul>
				<button class="login">LOGIN</button>
			</div>
		</div>
	</header>

<?php endif; ?>