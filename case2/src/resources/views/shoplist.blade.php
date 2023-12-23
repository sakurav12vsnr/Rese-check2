@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="card">
    <div class="card-container">
        <div class="card-img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="仙人">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                仙人
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #寿司
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/yakiniku.jpg" alt="牛助">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                牛助
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #大阪府
                    </li>
                    <li class="card-content_tag-item">
                        #焼肉
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/izakaya.jpg" alt="戦慄">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                戦慄
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #福岡県
                    </li>
                    <li class="card-content_tag-item">
                        #居酒屋
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/italian.jpg" alt="ルーク">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                ルーク
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #イタリアン
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/ramen.jpg" alt="志摩屋">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                志摩屋
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #福岡県
                    </li>
                    <li class="card-content_tag-item">
                        #ラーメン
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/yakiniku.jpg" alt="香">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                香
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #焼肉
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/italian.jpg" alt="JJ">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                JJ
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #大阪府
                    </li>
                    <li class="card-content_tag-item">
                        #イタリアン
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/ramen.jpg" alt="ラーメン極み">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                ラーメン極み
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #ラーメン
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/izakaya.jpg" alt="鳥雨">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                鳥雨
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #大阪府
                    </li>
                    <li class="card-content_tag-item">
                        #居酒屋
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/sushi.jpg" alt="築地色合">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                築地色合
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #寿司
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/yakiniku.jpg" alt="晴海">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                晴海
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #大阪府
                    </li>
                    <li class="card-content_tag-item">
                        #焼肉
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/yakiniku.jpg" alt="三子">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                三子
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #福岡県
                    </li>
                    <li class="card-content_tag-item">
                        #焼肉
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/izakaya.jpg" alt="八戒">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                八戒
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #居酒屋
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/sushi.jpg" alt="福助">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                福助
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #大阪府
                    </li>
                    <li class="card-content_tag-item">
                        #寿司
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/ramen.jpg" alt="ラー北">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                ラー北
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #ラーメン
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/izakaya.jpg" alt="翔">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                翔
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #大阪府
                    </li>
                    <li class="card-content_tag-item">
                        #居酒屋
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/sushi.jpg" alt="経緯">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                経緯
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #寿司
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/yakiniku.jpg" alt="漆">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                漆
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #東京都
                    </li>
                    <li class="card-content_tag-item">
                        #焼肉
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/italian.jpg" alt="THE TOOL">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                THE TOOL
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #福岡県
                    </li>
                    <li class="card-content_tag-item">
                        #イタリアン
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card-img">
            <img src="images/sushi.jpg" alt="木船">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                木船
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #大阪府
                    </li>
                    <li class="card-content_tag-item">
                        #寿司
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <input type="submit" value="詳しく見る">
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection