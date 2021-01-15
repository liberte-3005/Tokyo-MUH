<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKYO MAKES US HAPPY</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;500;900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dot.css') }}" rel="stylesheet">
</head>



</head>
<body>

<div class="grid-area">
    <div class="top-area">
        <div class="container card-body">
            <p class="dot"></p>
        </div>

        <div class="container card card-body">
            <div class="">
                <h3>WHAT'S THIS!?</h3>
                <p>東京23区を愛するみなさまの声を集めたい。</p>
                <!-- <p>ビュー：地図の上のボタンをクリックしてみてください。</p> -->
                <p>下のフォームから100字以内くらいで投稿してください。<br>
                 1.23区からひと区選ぶ<br>
                 2.その区にお住まいの方は住人の声を<br>
                 住んでないけどよく行く方は通行人の声を<br>
                 そのほかの方は外野の声をそれぞれ選択して送信してくださいね。
                </p>

                <!-- フォームエリア -->
                <form action="/" method="POST">
                    <select name='categories'>
                        <option value="">なに区？</option>
                        <option value='足立区'>足立区</option>
                        <option value='荒川区'>荒川区</option>
                        <option value='板橋区'>板橋区</option>
                        <option value='江戸川区'>江戸川区</option>
                        <option value='大田区'>大田区</option>
                        <option value='葛飾区'>葛飾区</option>
                        <option value='北区'>北区</option>
                        <option value='江東区'>江東区</option>
                        <option value='品川区'>品川区</option>
                        <option value='渋谷区'>渋谷区</option>
                        <option value='新宿区'>新宿区</option>
                        <option value='杉並区'>杉並区</option>
                        <option value='墨田区'>墨田区</option>
                        <option value='世田谷区'>世田谷区</option>
                        <option value='台東区'>台東区</option>
                        <option value='千代田区'>千代田区</option>
                        <option value='中央区'>中央区</option>
                        <option value='豊島区'>豊島区</option>
                        <option value='中野区'>中野区</option>
                        <option value='練馬区'>練馬区</option>
                        <option value='文京区'>文京区</option>
                        <option value='港区'>港区</option>
                        <option value='目黒区'>目黒区</option>
                    </select>
                    <select name='users'>
                        <option value="">あなたは誰？</option>
                        <option value='住人の声'>住人</option>
                        <option value='通行人の声'>通行人</option>
                        <option value='外野の声'>外野</option>
                    </select>
                    <div>
                        メッセージ<input type="text" name="text">
                        <!-- 任意の数字4けた（半角）<input type="text" name="pin_code">-->
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" value="そーーしんっ！" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>
    <div class="bottom-area">
        <div class="container">
            <h3 class="card-body">最近はこんな書き込みがありました</h3>
            @if(isset($posts))
                @foreach ($posts as $post )
                    <li>東京都　<span>{{ $post->categories }}</span> について、<span>{{ $post->users }}</span>です。<br>
                    「{{ $post->text }}」</li>

                    <form action="{{ action('PostsController@delete', $post->id) }}" method="post">
                        {{ csrf_field() }}
                        <button class="btn btn-outline-warning">削除する</button>
                    </form>
                @endforeach
            @endif
        </div>
    </div>
</div>


</body>
</html>







