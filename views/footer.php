    <!-- 푸터 -->
    <footer>
        <div class="footer_upper">
            <div class="size">
                <ul id="footer_menu">
                    <li><a href="/terms">서비스 이용약관</a></li>
                    <li><a href="/privacy" class="on">개인정보 처리방침</a></li>
                </ul>
                <div id="footer_site">
                    <button id="site_map">FAMILY SITE <span id="site_up"><i class="fas fa-chevron-up"></i></span></button>
                    <ul>
                        <li><a href="http://www.thefunnyit.co.kr/">더퍼니잇 쇼핑몰</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_under">
            <div class="size">
                <div class="footer_logo">
                    <a href="/"><img src="/img/logo2.png" alt="footer_logo"></a>
                </div>
                <div class="footer_sub">
                    <p>서울특별시 구로구 디지털로26길 61 에이스하이엔드타워2차 1801호</p>
                    <p>회사명 : (주)집사  대표자 : 이승권  사업자등록번호 : 856-88-00319</p>
                    <p>Copyright ⓒ 2016 ZIPSA. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- 위로 올리기 버튼 -->
    <button class="go-up"><i class="fas fa-angle-up"></i></button>
    
    <!-- 버튼 js -->
	<script>
        let isOn = false;
        $("#site_map").on("click", ()=>{
            isOn = !isOn;
            if(isOn) {
                $("#footer_site > ul").addClass("on");
                $("#site_up").html(`<i class="fas fa-chevron-down"></i>`)
            }else {
                $("#footer_site > ul").removeClass("on");
                $("#site_up").html(`<i class="fas fa-chevron-up"></i>`)
            }
        })
		$(".go-up").on("click", ()=>{
			$('html, body').animate({scrollTop: 0}, 500, 'swing');	
		});
	</script>
    
</body>
</html>