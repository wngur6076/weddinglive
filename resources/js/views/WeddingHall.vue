<template>
    <div class="container">
        <div class="title mb-4 text-center">
            <p class="m-0">디엘웨딩홀</p>
            <h2>아모르홀</h2>
        </div>

        <!-- <div class="jb-wrap">
            <div id="palyVideo" style="display:none;"></div>
            <div id="ddayVideo" style="display:none;">
                <div class="jb-image"><img src="http://weddinglive.kr/resources/img/view/ddaybg.png" class="img-fluid"></div>
                <div class="jb-text">
                    <p>최석원&최미라님의 결혼식 시작까지</p>
                    <flip-countdown deadline="2021-06-20 12:30:00"></flip-countdown>
                </div>
            </div>
		</div> -->

        <!-- <image src="http://192.168.123.101:1935/Juhyeok/definst/brick/image.gif" /> -->


        <h3><span class="badge badge-primary">결혼식 전(카운트 다운)</span></h3>
        <div class="jb-wrap">
            <div id="ddayVideo">
                <div class="jb-image"><img src="http://weddinglive.kr/resources/img/view/ddaybg.png" class="img-fluid"></div>
                <div class="jb-text">
                    <p>최석원&최미라님의 결혼식 시작까지</p>
                    <flip-countdown deadline="2021-06-20 12:30:00"></flip-countdown>
                </div>
            </div>
		</div>

        <h3><span class="badge badge-danger">결혼식 중(라이브 방송)</span></h3>
        <div id="palyVideo"></div>

        <h3><span class="badge badge-success">결혼식 후(녹화 실행)</span></h3>
        <div id="afterVideo"></div>


        <div class="banner_div row" onclick="window.open('http://www.weddingview.kr/wedding-live-page/')"></div>
        <div class="section d-flex flex-column justify-content-center align-items-center">
            <h1 class="section_name">최석원 & 김미라</h1>
            <div class="dotted_line"></div>
            <ul class="section_info mb-0">
                <li class="d-flex align-items-center"><img class="mr-3" src="http://weddinglive.kr/resources/img/view/location_big.png"><span>부산 동구 조방로 14</span></li>
                <li class="d-flex align-items-center"><img class="mr-3" src="http://weddinglive.kr/resources/img/view/schedule_big.png"><span>2021년 06월 20일 일요일</span></li>
                <li class="d-flex align-items-center"><img class="mr-3" src="http://weddinglive.kr/resources/img/view/time_big.png"><span>PM 12시 30분 - PM 13시 30분</span></li>
            </ul>
            <div class="dotted_line"></div>
            <div class="text-center mb-5">
                <p class="mt-3 section1_3_wrap">평생을 같이하고 싶은 사람을 만났습니다</br>
                    서로 아껴주고 이해하며</br>
                    사랑 베풀며 살고 싶습니다</br>
                    저희 약속 위에</br>
                    따뜻한 격려로 축복해주셔서</br>
                    힘찬 출발의 디딤이 되어 주세요</br>
                </p>
                <div class="mt-4">
                    <a href=""><img class="view_fi_pc mr-2" src="http://weddinglive.kr/resources/img/view/invitation_pc_before.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/invitation_pc_after.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/invitation_pc_before.png'" border="0"></a>
                    <a href=""><img class="view_fi_pc ml-2" src="http://weddinglive.kr/resources/img/view/return_pc_before.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/return_pc_after.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/return_pc_before.png'" border="0"></a>
                </div>
            </div>
        </div>
        <div class="div_section">
            <div class="div_section_part">
                <div class="div_section_part_top">
                    <div class="div_section_part_title">
                        <h2>최석원 신랑에게 축하 인사</h2>
                    </div>
                </div>
                <div class="div_section_part_body">
                    <div class="div_section_part_icon">
                        <a class="div_section_part_icon_wrap" href="tel:01050478559">
                            <img src="http://weddinglive.kr/resources/img/view/view_tel01.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/view_tel02.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/view_tel01.png'">
                            <span>전화하기</span>
                        </a>
                        <a class="div_section_part_icon_wrap" href="sms:01050478559">
                            <img src="http://weddinglive.kr/resources/img/view/view_msg01.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/view_msg02.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/view_msg01.png'">
                            <span>문자하기</span>
                        </a>
                        <a class="div_section_part_icon_wrap" href="">
                            <img src="http://weddinglive.kr/resources/img/view/view_send01.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/view_send02.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/view_send01.png'">
                            <span>축의금보내기</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="div_section_empty"></div>

            <div class="div_section_part">
                <div class="div_section_part_top">
                    <div class="div_section_part_title">
                        <h2>김미라 신부에게 축하 인사</h2>
                    </div>
                </div>
                <div class="div_section_part_body">
                    <div class="div_section_part_icon">
                        <a class="div_section_part_icon_wrap" href="tel:01050478559">
                            <img src="http://weddinglive.kr/resources/img/view/view_tel01.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/view_tel02.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/view_tel01.png'">
                            <span>전화하기</span>
                        </a>
                        <a class="div_section_part_icon_wrap" href="sms:01050478559">
                            <img src="http://weddinglive.kr/resources/img/view/view_msg01.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/view_msg02.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/view_msg01.png'">
                            <span>문자하기</span>
                        </a>
                        <a class="div_section_part_icon_wrap" href="">
                            <img src="http://weddinglive.kr/resources/img/view/view_send01.png" onmouseover="this.src='http://weddinglive.kr/resources/img/view/view_send02.png'" onmouseout="this.src='http://weddinglive.kr/resources/img/view/view_send01.png'">
                            <span>축의금보내기</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <lingallery class="mb-5" :width="width" :height="height" :items="items"/>
        <chat-room :auth-user="user"></chat-room>
    </div>
</template>

<script>
import FlipCountdown from 'vue2-flip-countdown'
import Lingallery from 'lingallery';

export default {
    components: { FlipCountdown, Lingallery },

    data() {
        return {
            width: 1200,
            height: 600,
            items: [
            {
                src: 'http://weddinglive.kr/getImg.do?f=wedding/113/1_2021620KIMMIRA1.JPG',
                thumbnail: 'http://weddinglive.kr/getImg.do?f=wedding/113/1_2021620KIMMIRA1.JPG',
            },
            {
                src: 'http://weddinglive.kr/getImg.do?f=wedding/113/2_2021620KIMMIRA2.JPG',
                thumbnail: 'http://weddinglive.kr/getImg.do?f=wedding/113/2_2021620KIMMIRA2.JPG'
            },
            {
                src: 'http://weddinglive.kr/getImg.do?f=wedding/113/3_2021620KIMMIRA3.JPG',
                thumbnail: 'http://weddinglive.kr/getImg.do?f=wedding/113/3_2021620KIMMIRA3.JPG'
            },
            {
                src: 'http://weddinglive.kr/getImg.do?f=wedding/113/4_2021620KIMMIRA5.JPG',
                thumbnail: 'http://weddinglive.kr/getImg.do?f=wedding/113/4_2021620KIMMIRA5.JPG'
            },
            {
                src: 'https://picsum.photos/1200/600/?image=5',
                thumbnail: 'https://picsum.photos/64/64/?image=5'
            },
        ]};
    },

    methods: {
        addScript() {
            const script = document.createElement('script')
            const script1 = document.createElement('script')

            // script.onload = () => {
            //     jwplayer("palyVideo").setup({
            //         "playlist": [{
            //             "file": "http://192.168.123.101:1935/Juhyeok/brick4/playlist.m3u8?DVR",
            //         }]
            //     });
            //     jwplayer().onPlay(function() {
            //         document.getElementById('palyVideo').style.display = "block";
            //         document.getElementById('ddayVideo').style.display = "none";
            //     });
            //     jwplayer().onError(function() {
            //         document.getElementById('palyVideo').style.display = "none";
            //         document.getElementById('ddayVideo').style.display = "block";
            //     });
            // }

            script.onload = () => {
                jwplayer("palyVideo").setup({
                    "playlist": [{
                        "file": "http://3.36.95.96:1935/WeddingLive/brick/playlist.m3u8",
                        // "image": "http://192.168.123.101:1935/Juhyeok/brick2/image.gif",
                    }]
                });
            }
            // <image src="http://192.168.123.101:1935/Juhyeok/brick/image.gif" />

            script1.onload = () => {
                jwplayer("afterVideo").setup({
                    "playlist": [{
                        "file": "http://3.36.95.96:1935/WeddingLive/brick2/playlist.m3u8",
                    }]
                });
            }

            script.src = 'https://cdn.jwplayer.com/libraries/wEhXm0ld.js'
            document.head.appendChild(script)

            script1.src = 'https://cdn.jwplayer.com/libraries/wEhXm0ld.js'
            document.head.appendChild(script1)
        }
    },

    created () {
        this.addScript();
    }
}

</script>

<style scoped>
    ul {
        list-style: none;
    }
    .jb-wrap {
        margin: 15px auto;
        border: 1px solid #000000;
        position: relative;
    }
    .jb-wrap img {
        width: 100%;
        vertical-align: middle;
    }
    .jb-text {
        padding: 5px 10px;
        text-align: center;
        font-weight: 600;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate( -50%, -50% );
        font-size: 18px;
        color: #7F5C37;
        min-width: 800px;
    }
    .banner_div {
        width: 100%;
        height: 200px;
        background-image: url('http://weddinglive.kr/resources/img/view/banner.png');
        background-size: 100% 100%;
        margin: 0 auto 15px auto;
        cursor: pointer;
    }
    .dotted_line {
        width: 90%;
        border-bottom: 1px dotted #ab9786;
        margin-top: 25px;
        margin-bottom: 25px;
        margin-left: auto;
        margin-right: auto;
    }
    .section {
        background-color: whitesmoke;
        margin-bottom: 15px;
    }
    .section_name {
        color: #c2a38c;
        font-family: "Noto Serif KR";
        padding: 0;
        margin-top: 35px;
        margin-bottom: 0px;
        line-height: 1;
        font-size: 30px;
        font-weight: 400;
    }
    .section_info {
        color: #979797;
        font-weight: 200;
    }
    .div_section {
        width: 100%;
        height: 200px;
        display: flex;
        margin-bottom: 15px;
    }
    .div_section_part {
        width: calc((100% - 15px) / 2);
        height: 100%;
        background-color: whitesmoke;
    }
    .div_section_part_top {
        width: 100%;
        height: 38px;
        display: block;
    }
    .div_section_part_title {
        width: 275px;
        height: 100%;
        margin: 0 auto;
        background-color: #C2a38c;
    }
    .div_section_part_title>h2 {
        text-align: center;
        color: white;
        font-size: 17px;
        font-family: "Noto Serif KR", Sans-serif;
        font-weight: 300;
        margin: 0px;
        line-height: 38px;
    }
    .div_section_part_body {
        width: 100%;
        height: calc(100% - 38px);
        display: block;
    }
    .div_section_part_icon {
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .div_section_part_icon_wrap {
        display: inline-block;
        width: 90px;
        height: 100px;
        text-decoration: none;
        color: inherit;
        text-align: center;
        margin: 34px 20px;
    }
    .div_section_part_icon_wrap>img {
        width: 67px;
        height: 67px;
    }
    .div_section_part_icon_wrap>span {
        font-family: "Noto Serif KR", Sans-serif;
        font-size: 14px;
        color: #7d5b36;
        display: block;
    }
    .section1_3_wrap {
        color: darkolivegreen;
        font-family: "Noto Serif KR";
        font-size: 17px;
        font-weight: 500;
        line-height: 30px;
        padding: 0;
        margin: 0;
        text-align: center;
        word-break: keep-all;
    }
    .div_section_empty {
        display: flex;
        width: 15px;
        height: 100%;
    }

    @media (max-width: 767px)
    {
        .banner_div {
            height: 100px;
        }
        .div_section {
            display: block;
            height: 100%;
        }
        .div_section_part {
            display: block;
            width: 100%;
        }
        .div_section_part_title {
            width: 203px;
            height: 30px;
        }
        .div_section_part_title>h2 {
            font-size: 12px;
            line-height: 30px;
        }
        .div_section_part_icon_wrap {
            margin: 15px 0px 0px 0px;
            height: 75px;
        }
        .div_section_part_icon_wrap>img {
            width: 30px;
            height: 30px;
        }
        .div_section_part_icon_wrap>span {
            font-size: 12px;
        }
        .div_section_empty {
            display: block;
            width: 100%;
            height: 17px;
        }
    }
</style>
