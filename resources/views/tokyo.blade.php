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
            <div class="text-center">
                <p class="dot"></p>
                <h3>WHAT'S THIS!?</h3>
                <p>東京23区を愛するみなさまの声を集めたい。</p>
                <!-- <p>ビュー：地図の上のボタンをクリックしてみてください。</p> -->
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 card">
                    <div>
                        <form method="GET" action="">
                        @csrf
                            <select name="cat_id" value="(config('categories'))">
                                @foreach(config('categories') as $categories => $name)
                                    <option value="{{ $categories}}">{{ $name }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="みる" class="">
                        </form>
                        <div>
                            @if($posts->count()) 
                            <table>
                            {{ $name }}について
                                @foreach ($posts as $post)
                                <li>{{ $post->users }}の声「{{ $post->text }}」
                                    <br>{{ $post->created_at->format('Y年m月d日(D)H:i') }}
                                </li>
                                <form action="{{ action('PostsController@delete', $post->id) }}" method="post">
                                    @csrf
                                    <button class="btn">削除する</button>
                                 </form>
                                @endforeach
                            </table>
                            @else
                            {{ $name }}について
                                <p>まだ書き込みがありません</p>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-area">
            <!-- フォームエリア -->
                <p>下のフォームから100字以内くらいで誰でも投稿できます。<br>
                     1.23区からひと区選ぶ<br>
                     2.その区にお住まいなら"住人"、住んでないけどよく行くなら"通行人"、そのほかなら"外野"から送信してくださいね。
                </p>
            <form action="{{ action('PostsController@store') }}" method="POST">
                    <select name="cat_id" value="categories">
                        @foreach(config('categories') as $categories => $name)
                            <option value="{{ $categories }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    <select name="users" value="users">
                    @foreach(config('users') as $users => $voice)
                            <option value="{{ $users }}">{{ $voice }}</option>
                        @endforeach
                    </select>
                    <p>メッセージ<input type="text" name="text" style="width:60%">
                    <!-- 任意の数字半角4けた（削除時に必要です）<input type="text" name="pin_code"> -->
                    {{ csrf_field() }}
                    <input type="submit" value="公開する" class="btn btn-warning"></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>







