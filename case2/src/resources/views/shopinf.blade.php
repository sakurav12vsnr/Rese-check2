@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="shop-inf">
    <div class="shop-detail">
        <div class="shop-ttl">
            <a href="#" class="arrow-button"></a>
            <h2 class="shop-name">
                仙人
            </h2>
        </div>
        <div class="shop-img">
            <img src="images/sushi.jpg" alt="仙人" width="100%">
        </div>
        <div class="shop-content_tag">
            <ul class="card-content_tag-list">
                <li class="card-content_tag-item">
                    #東京都
                </li>
                <li class="card-content_tag-item">
                    #寿司
                </li>
            </ul>
        </div>
        <div class="shop-explanation">
            料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。
        </div>
    </div>
    <div class="reservation">
        <h2 class="booking-ttl">
            予約
        </h2>
        <form action="/done" method="post" name="bookin-form" id="booking-form">
            @csrf
            <input name="date" id="date" type="date">
            <select name="time" id="time">
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
            </select>
            <select name="number" id="number">
                <option value="1">1人</option>
                <option value="2">2人</option>
                <option value="3">3人</option>
                <option value="4">4人</option>
                <option value="5">5人</option>
                <option value="6">6人</option>
                <option value="7">7人</option>
                <option value="8">8人</option>
                <option value="9">9人</option>
                <option value="10">10人</option>
            </select>
        </form>
        <div class="booking-conf">
            <label for="shop-name">Shop</label>
            <label for="date">Date</label>
            <label for="time">Time</label>
            <label for="number">Number</label>
        </div>
        <div class="booking-btn">
            <input type="submit" value="予約する">
        </div>
    </div>
</div>
@endsection