<?php
    if(!isset($_GET["topic"])){
        $topic = 'hot';
    }else {
        $topic = $_GET["topic"];
    }
?>
<section id="title-top">
    <img src="/img/logo.png" alt="">
    <h2>자주 묻는 질문</h2>
</section>

<section id="cs">
    <ul id="cs-menu">
        <li class="menu-on"><a href="/cs/faq">자주 묻는 질문</a></li>
        <li><a href="/cs/notice">공지사항</a></li>
        <li><a href="http://thefunnyit.co.kr" target="_blank">문의하기</a></li>
    </ul>
    
    <!-- hot -->
    <?php if($topic == "hot") : ?>
    <ul id="cs-topic">
        <li class="topic-on"><a href="/cs/faq?topic=hot">HOT 질문</a></li>
        <li><a href="/cs/faq?topic=contract">계약등록/서류검토</a></li>
        <li><a href="/cs/faq?topic=payment">결제하기</a></li>
        <li><a href="/cs/faq?topic=commission">이용료/수수료</a></li>
        <li><a href="/cs/faq?topic=deposit">입금안내</a></li>
        <li><a href="/cs/faq?topic=refund">취소/환불</a></li>
    </ul>

    <div id="cs-boxes">
        <div>
            <div class="cs-box">
                <p><span>Q.</span> 이게 무슨 서비스에요?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    단비페이는 고객님이 단비페이로 월세, 관리비, 보증금, 수리비, 기타 납부할 금액을
                    신용카드로 결제 하시고, 그 담에 카드사에서 청구서가 오면 다달이 카드사에 
                    결제대금을 납부하시는 거랍니다.좀 더 자세히 설명 드리자면
                </p>

                <p>
                    ① 고객님께서 단비페이 납부대행 서비스를 신용카드로 결제하시면 <br>
                    ② 서비스 이용료를 뺀 금액을 임대인 계좌로 - 고객님이 지정하신 
                    이름으로 무통장 입금해 드리는 거지요.
                </p>

                <p>
                    무이자할부 신용카드 결제로 현금부담을 줄이시거나, 
                    청구할인 혜택 등과 비교하셔서 카드결제가 낫겠다 싶으실 때 
                    이용하시는 서비스랍니다. 그래서 다른 결제수단 말고 &lt;신용카드 결제&gt;가 필요하구요. 카드결제 한도가 있으셔야 한답니다. (고객님께서 이용하시는 기존 신용카드가 있으셔야 합니다. 단비가 별도로 카드를 발급해 드리지는 않습니다~)
                </p>

                <p>
                    종합적으로!! 현금사정이 아주 넉넉하시거나 혜택 등에서 메리트가 없으실 땐?? 
                    요럴 땐 굳이 쓰실 일이 없으시지만, 납부금 내야 할 부담이 있는 상황에서 자금 
                    스케쥴이 안맞을 때, 이렇게 꼭 필요할 땐?? 완죤 요긴한 꿀템이라 자평합니다^^
                </p>

                <p>
                    단!! 실제 임대차거래가 없으시다면 서비스 이용이 제한되며, 
                    어차피 서류검토 과정에서 모두 걸러지니 아예 회원가입을 하지 마셔요~
                </p>
            </div>
        </div>

        <div>
            <div class="cs-box">
                <p><span>Q.</span> 임대인 동의가 필요한가요?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    임대인, 집주인, 건물주의 동의가 필요 없습니다~ <br>
                    결제내역이 임대인에게 통보되지도 않습니다. <br>
                    임대인이 회원가입할 필요도 없고, 결제요청 보내는 것도 없습니다.
                </p>

                <p>
                    그냥 세입자(이용자)가 단비페이에 회원가입 후 단독으로 결제 가능합니다. <br>
                    진짜 계약이 맞다면 눈치 보지 마시고 속편하게 이용하세요~
                </p>
            </div>
        </div>
    </div>

    <!-- hot -->
    <?php elseif($topic == "contract") : ?>
    <ul id="cs-topic">
        <li ><a href="/cs/faq?topic=hot">HOT 질문</a></li>
        <li class="topic-on"><a href="/cs/faq?topic=contract">계약등록/서류검토</a></li>
        <li><a href="/cs/faq?topic=payment">결제하기</a></li>
        <li><a href="/cs/faq?topic=commission">이용료/수수료</a></li>
        <li><a href="/cs/faq?topic=deposit">입금안내</a></li>
        <li><a href="/cs/faq?topic=refund">취소/환불</a></li>
    </ul>

    <div id="cs-boxes">
        <div>
            <div class="cs-box">
                <p><span>Q.</span> 이게 무슨 asdf?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    단비페이는 고객님이 단비페이로 월세, 관리비, 보증금, 수리비, 기타 납부할 금액을
                    신용카드로 결제 하시고, 그 담에 카드사에서 청구서가 오면 다달이 카드사에 
                    결제대금을 납부하시는 거랍니다.좀 더 자세히 설명 드리자면
                </p>

                <p>
                    ① 고객님께서 단비페이 납부대행 서비스를 신용카드로 결제하시면 <br>
                    ② 서비스 이용료를 뺀 금액을 임대인 계좌로 - 고객님이 지정하신 
                    이름으로 무통장 입금해 드리는 거지요.
                </p>

                <p>
                    무이자할부 신용카드 결제로 현금부담을 줄이시거나, 
                    청구할인 혜택 등과 비교하셔서 카드결제가 낫겠다 싶으실 때 
                    이용하시는 서비스랍니다. 그래서 다른 결제수단 말고 &lt;신용카드 결제&gt;가 필요하구요. 카드결제 한도가 있으셔야 한답니다. (고객님께서 이용하시는 기존 신용카드가 있으셔야 합니다. 단비가 별도로 카드를 발급해 드리지는 않습니다~)
                </p>

                <p>
                    종합적으로!! 현금사정이 아주 넉넉하시거나 혜택 등에서 메리트가 없으실 땐?? 
                    요럴 땐 굳이 쓰실 일이 없으시지만, 납부금 내야 할 부담이 있는 상황에서 자금 
                    스케쥴이 안맞을 때, 이렇게 꼭 필요할 땐?? 완죤 요긴한 꿀템이라 자평합니다^^
                </p>

                <p>
                    단!! 실제 임대차거래가 없으시다면 서비스 이용이 제한되며, 
                    어차피 서류검토 과정에서 모두 걸러지니 아예 회원가입을 하지 마셔요~
                </p>
            </div>
        </div>

        <div>
            <div class="cs-box">
                <p><span>Q.</span> 임대인 동의가 필요한가요?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    임대인, 집주인, 건물주의 동의가 필요 없습니다~ <br>
                    결제내역이 임대인에게 통보되지도 않습니다. <br>
                    임대인이 회원가입할 필요도 없고, 결제요청 보내는 것도 없습니다.
                </p>

                <p>
                    그냥 세입자(이용자)가 단비페이에 회원가입 후 단독으로 결제 가능합니다. <br>
                    진짜 계약이 맞다면 눈치 보지 마시고 속편하게 이용하세요~
                </p>
            </div>
        </div>
    </div>


    <!-- payment -->
    <?php elseif($topic == "payment") : ?>
    <ul id="cs-topic">
        <li ><a href="/cs/faq?topic=hot">HOT 질문</a></li>
        <li><a href="/cs/faq?topic=contract">계약등록/서류검토</a></li>
        <li class="topic-on"><a href="/cs/faq?topic=payment">결제하기</a></li>
        <li><a href="/cs/faq?topic=commission">이용료/수수료</a></li>
        <li><a href="/cs/faq?topic=deposit">입금안내</a></li>
        <li><a href="/cs/faq?topic=refund">취소/환불</a></li>
    </ul>

    <div id="cs-boxes">
        <div>
            <div class="cs-box">
                <p><span>Q.</span> 이게 무슨 qwer?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    단비페이는 고객님이 단비페이로 월세, 관리비, 보증금, 수리비, 기타 납부할 금액을
                    신용카드로 결제 하시고, 그 담에 카드사에서 청구서가 오면 다달이 카드사에 
                    결제대금을 납부하시는 거랍니다.좀 더 자세히 설명 드리자면
                </p>

                <p>
                    ① 고객님께서 단비페이 납부대행 서비스를 신용카드로 결제하시면 <br>
                    ② 서비스 이용료를 뺀 금액을 임대인 계좌로 - 고객님이 지정하신 
                    이름으로 무통장 입금해 드리는 거지요.
                </p>

                <p>
                    무이자할부 신용카드 결제로 현금부담을 줄이시거나, 
                    청구할인 혜택 등과 비교하셔서 카드결제가 낫겠다 싶으실 때 
                    이용하시는 서비스랍니다. 그래서 다른 결제수단 말고 &lt;신용카드 결제&gt;가 필요하구요. 카드결제 한도가 있으셔야 한답니다. (고객님께서 이용하시는 기존 신용카드가 있으셔야 합니다. 단비가 별도로 카드를 발급해 드리지는 않습니다~)
                </p>

                <p>
                    종합적으로!! 현금사정이 아주 넉넉하시거나 혜택 등에서 메리트가 없으실 땐?? 
                    요럴 땐 굳이 쓰실 일이 없으시지만, 납부금 내야 할 부담이 있는 상황에서 자금 
                    스케쥴이 안맞을 때, 이렇게 꼭 필요할 땐?? 완죤 요긴한 꿀템이라 자평합니다^^
                </p>

                <p>
                    단!! 실제 임대차거래가 없으시다면 서비스 이용이 제한되며, 
                    어차피 서류검토 과정에서 모두 걸러지니 아예 회원가입을 하지 마셔요~
                </p>
            </div>
        </div>

        <div>
            <div class="cs-box">
                <p><span>Q.</span> 임대인 동의가 필요한가요?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    임대인, 집주인, 건물주의 동의가 필요 없습니다~ <br>
                    결제내역이 임대인에게 통보되지도 않습니다. <br>
                    임대인이 회원가입할 필요도 없고, 결제요청 보내는 것도 없습니다.
                </p>

                <p>
                    그냥 세입자(이용자)가 단비페이에 회원가입 후 단독으로 결제 가능합니다. <br>
                    진짜 계약이 맞다면 눈치 보지 마시고 속편하게 이용하세요~
                </p>
            </div>
        </div>
    </div>

    <!-- commission -->
    <?php elseif($topic == "commission") : ?>
    <ul id="cs-topic">
        <li ><a href="/cs/faq?topic=hot">HOT 질문</a></li>
        <li><a href="/cs/faq?topic=contract">계약등록/서류검토</a></li>
        <li><a href="/cs/faq?topic=payment">결제하기</a></li>
        <li class="topic-on"><a href="/cs/faq?topic=commission">이용료/수수료</a></li>
        <li><a href="/cs/faq?topic=deposit">입금안내</a></li>
        <li><a href="/cs/faq?topic=refund">취소/환불</a></li>
    </ul>

    <div id="cs-boxes">
        <div>
            <div class="cs-box">
                <p><span>Q.</span> 이게 무슨 asedrhuret?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    단비페이는 고객님이 단비페이로 월세, 관리비, 보증금, 수리비, 기타 납부할 금액을
                    신용카드로 결제 하시고, 그 담에 카드사에서 청구서가 오면 다달이 카드사에 
                    결제대금을 납부하시는 거랍니다.좀 더 자세히 설명 드리자면
                </p>

                <p>
                    ① 고객님께서 단비페이 납부대행 서비스를 신용카드로 결제하시면 <br>
                    ② 서비스 이용료를 뺀 금액을 임대인 계좌로 - 고객님이 지정하신 
                    이름으로 무통장 입금해 드리는 거지요.
                </p>

                <p>
                    무이자할부 신용카드 결제로 현금부담을 줄이시거나, 
                    청구할인 혜택 등과 비교하셔서 카드결제가 낫겠다 싶으실 때 
                    이용하시는 서비스랍니다. 그래서 다른 결제수단 말고 &lt;신용카드 결제&gt;가 필요하구요. 카드결제 한도가 있으셔야 한답니다. (고객님께서 이용하시는 기존 신용카드가 있으셔야 합니다. 단비가 별도로 카드를 발급해 드리지는 않습니다~)
                </p>

                <p>
                    종합적으로!! 현금사정이 아주 넉넉하시거나 혜택 등에서 메리트가 없으실 땐?? 
                    요럴 땐 굳이 쓰실 일이 없으시지만, 납부금 내야 할 부담이 있는 상황에서 자금 
                    스케쥴이 안맞을 때, 이렇게 꼭 필요할 땐?? 완죤 요긴한 꿀템이라 자평합니다^^
                </p>

                <p>
                    단!! 실제 임대차거래가 없으시다면 서비스 이용이 제한되며, 
                    어차피 서류검토 과정에서 모두 걸러지니 아예 회원가입을 하지 마셔요~
                </p>
            </div>
        </div>

        <div>
            <div class="cs-box">
                <p><span>Q.</span> 임대인 동의가 필요한가요?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    임대인, 집주인, 건물주의 동의가 필요 없습니다~ <br>
                    결제내역이 임대인에게 통보되지도 않습니다. <br>
                    임대인이 회원가입할 필요도 없고, 결제요청 보내는 것도 없습니다.
                </p>

                <p>
                    그냥 세입자(이용자)가 단비페이에 회원가입 후 단독으로 결제 가능합니다. <br>
                    진짜 계약이 맞다면 눈치 보지 마시고 속편하게 이용하세요~
                </p>
            </div>
        </div>
    </div>

    <!-- deposit -->
    <?php elseif($topic == "deposit") : ?>
    <ul id="cs-topic">
        <li ><a href="/cs/faq?topic=hot">HOT 질문</a></li>
        <li><a href="/cs/faq?topic=contract">계약등록/서류검토</a></li>
        <li><a href="/cs/faq?topic=payment">결제하기</a></li>
        <li><a href="/cs/faq?topic=commission">이용료/수수료</a></li>
        <li class="topic-on"><a href="/cs/faq?topic=deposit">입금안내</a></li>
        <li><a href="/cs/faq?topic=refund">취소/환불</a></li>
    </ul>

    <div id="cs-boxes">
        <div>
            <div class="cs-box">
                <p><span>Q.</span> 이게 무슨 ertyutfgh?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    단비페이는 고객님이 단비페이로 월세, 관리비, 보증금, 수리비, 기타 납부할 금액을
                    신용카드로 결제 하시고, 그 담에 카드사에서 청구서가 오면 다달이 카드사에 
                    결제대금을 납부하시는 거랍니다.좀 더 자세히 설명 드리자면
                </p>

                <p>
                    ① 고객님께서 단비페이 납부대행 서비스를 신용카드로 결제하시면 <br>
                    ② 서비스 이용료를 뺀 금액을 임대인 계좌로 - 고객님이 지정하신 
                    이름으로 무통장 입금해 드리는 거지요.
                </p>

                <p>
                    무이자할부 신용카드 결제로 현금부담을 줄이시거나, 
                    청구할인 혜택 등과 비교하셔서 카드결제가 낫겠다 싶으실 때 
                    이용하시는 서비스랍니다. 그래서 다른 결제수단 말고 &lt;신용카드 결제&gt;가 필요하구요. 카드결제 한도가 있으셔야 한답니다. (고객님께서 이용하시는 기존 신용카드가 있으셔야 합니다. 단비가 별도로 카드를 발급해 드리지는 않습니다~)
                </p>

                <p>
                    종합적으로!! 현금사정이 아주 넉넉하시거나 혜택 등에서 메리트가 없으실 땐?? 
                    요럴 땐 굳이 쓰실 일이 없으시지만, 납부금 내야 할 부담이 있는 상황에서 자금 
                    스케쥴이 안맞을 때, 이렇게 꼭 필요할 땐?? 완죤 요긴한 꿀템이라 자평합니다^^
                </p>

                <p>
                    단!! 실제 임대차거래가 없으시다면 서비스 이용이 제한되며, 
                    어차피 서류검토 과정에서 모두 걸러지니 아예 회원가입을 하지 마셔요~
                </p>
            </div>
        </div>

        <div>
            <div class="cs-box">
                <p><span>Q.</span> 임대인 동의가 필요한가요?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    임대인, 집주인, 건물주의 동의가 필요 없습니다~ <br>
                    결제내역이 임대인에게 통보되지도 않습니다. <br>
                    임대인이 회원가입할 필요도 없고, 결제요청 보내는 것도 없습니다.
                </p>

                <p>
                    그냥 세입자(이용자)가 단비페이에 회원가입 후 단독으로 결제 가능합니다. <br>
                    진짜 계약이 맞다면 눈치 보지 마시고 속편하게 이용하세요~
                </p>
            </div>
        </div>
    </div>

    <!-- refund -->
    <?php elseif($topic == "refund") : ?>
    <ul id="cs-topic">
        <li ><a href="/cs/faq?topic=hot">HOT 질문</a></li>
        <li><a href="/cs/faq?topic=contract">계약등록/서류검토</a></li>
        <li ><a href="/cs/faq?topic=refund">결제하기</a></li>
        <li><a href="/cs/faq?topic=commission">이용료/수수료</a></li>
        <li><a href="/cs/faq?topic=deposit">입금안내</a></li>
        <li class="topic-on"><a href="/cs/faq?topic=refund">취소/환불</a></li>
    </ul>

    <div id="cs-boxes">
        <div>
            <div class="cs-box">
                <p><span>Q.</span> 이게 무슨 yuooiyi?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    단비페이는 고객님이 단비페이로 월세, 관리비, 보증금, 수리비, 기타 납부할 금액을
                    신용카드로 결제 하시고, 그 담에 카드사에서 청구서가 오면 다달이 카드사에 
                    결제대금을 납부하시는 거랍니다.좀 더 자세히 설명 드리자면
                </p>

                <p>
                    ① 고객님께서 단비페이 납부대행 서비스를 신용카드로 결제하시면 <br>
                    ② 서비스 이용료를 뺀 금액을 임대인 계좌로 - 고객님이 지정하신 
                    이름으로 무통장 입금해 드리는 거지요.
                </p>

                <p>
                    무이자할부 신용카드 결제로 현금부담을 줄이시거나, 
                    청구할인 혜택 등과 비교하셔서 카드결제가 낫겠다 싶으실 때 
                    이용하시는 서비스랍니다. 그래서 다른 결제수단 말고 &lt;신용카드 결제&gt;가 필요하구요. 카드결제 한도가 있으셔야 한답니다. (고객님께서 이용하시는 기존 신용카드가 있으셔야 합니다. 단비가 별도로 카드를 발급해 드리지는 않습니다~)
                </p>

                <p>
                    종합적으로!! 현금사정이 아주 넉넉하시거나 혜택 등에서 메리트가 없으실 땐?? 
                    요럴 땐 굳이 쓰실 일이 없으시지만, 납부금 내야 할 부담이 있는 상황에서 자금 
                    스케쥴이 안맞을 때, 이렇게 꼭 필요할 땐?? 완죤 요긴한 꿀템이라 자평합니다^^
                </p>

                <p>
                    단!! 실제 임대차거래가 없으시다면 서비스 이용이 제한되며, 
                    어차피 서류검토 과정에서 모두 걸러지니 아예 회원가입을 하지 마셔요~
                </p>
            </div>
        </div>

        <div>
            <div class="cs-box">
                <p><span>Q.</span> 임대인 동의가 필요한가요?</p>
                <span class="cs-box-check"><i class="fas fa-chevron-down"></i></span>
                <div></div>
            </div>
            <div class="cs-box-sub">
                <p>
                    임대인, 집주인, 건물주의 동의가 필요 없습니다~ <br>
                    결제내역이 임대인에게 통보되지도 않습니다. <br>
                    임대인이 회원가입할 필요도 없고, 결제요청 보내는 것도 없습니다.
                </p>

                <p>
                    그냥 세입자(이용자)가 단비페이에 회원가입 후 단독으로 결제 가능합니다. <br>
                    진짜 계약이 맞다면 눈치 보지 마시고 속편하게 이용하세요~
                </p>
            </div>
        </div>
    </div>
    

    <?php endif; ?>
</section>


<script>
    $(".cs-box").on("click", (e)=>{
        let a = e.target.parentNode.parentNode.querySelector('.cs-box-sub');
        console.log(a);
        let b = e.target.parentNode.querySelector('.cs-box-check');
        console.log(b);
        if($(a).hasClass('show')){
            $(a).removeClass('show');
            $(b).html(`<i class="fas fa-chevron-down"></i>`);
        }else {
            $(a).addClass('show');
            $(b).html(`<i class="fas fa-chevron-up"></i>`);
        }
    });
</script>