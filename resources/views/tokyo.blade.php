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
                    <div class="card-body map">
                        <!-- Modalエリア -->
                        <img src="{{ asset('/img/23WARDS.png') }}" class="layer-img" width="40%">
                        <ul id="btn">
                        <li type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal01">中心部</li>
                        <li type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal02">東部</li>
                        <li type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal03">西部</li>
                        <li type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal04">南部</li>
                        <li type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal05">北部</li>
                        </ul>
                        <div class="modal fade" id="modal01" tabindex="-1" role="dialog" aria-labelledby="modal01" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list">
                                            <ul id="mainimage">
                                            <a href="/city/{{$posts->cat_id}}" target="city" class="btn btn-outline-warning">千代田区</a>
                                            <div class="btn btn-outline-warning">中央区</div>
                                            <div class="btn btn-outline-warning">新宿区</div>
                                            <div class="btn btn-outline-warning">渋谷区</div>
                                            <div class="btn btn-outline-warning">港区</div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal02" tabindex="-1" role="dialog" aria-labelledby="modal02" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list">
                                            <div class="btn btn-outline-warning">足立区</div>
                                            <div class="btn btn-outline-warning">葛飾区</div>
                                            <div class="btn btn-outline-warning">江戸川区</div>
                                            <div class="btn btn-outline-warning">荒川区</div>
                                            <div class="btn btn-outline-warning">台東区</div>
                                            <div class="btn btn-outline-warning">墨田区</div>
                                            <div class="btn btn-outline-warning">江東区</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal03" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list" data-list="3">
                                            <div data-id="13" class="btn btn-outline-warning">練馬区</div>
                                            <div data-id="14" class="btn btn-outline-warning">中野区</div>
                                            <div data-id="15" class="btn btn-outline-warning">杉並区</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal04" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list" data-list="4">
                                            <div data-id="16" class="btn btn-outline-warning">世田谷区</div>
                                            <div data-id="17" class="btn btn-outline-warning">目黒区</div>
                                            <div data-id="18" class="btn btn-outline-warning">品川区</div>
                                            <div data-id="19" class="btn btn-outline-warning">大田区</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal05" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="city_list" data-list="5">
                                            <div data-id="20" class="btn btn-outline-warning">板橋区</div>
                                            <div data-id="21" class="btn btn-outline-warning">北区</div>
                                            <div data-id="22" class="btn btn-outline-warning">豊島区</div>
                                            <div data-id="23" class="btn btn-outline-warning">文京区</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iframe-area">
                        <iframe src="" name="city" width="100%" height="400px">
                        </iframe>
                    </div>
                </div>
                <!-- rightエリア -->
                <div class="col-sm-2 card side none">
                    <div class="card-body scroll-area1">
                        <h3>最近はこんな書き込みがありました</h3>
                        @if(isset($posts))
                        @foreach ($posts as $post )
                            <li>東京都　<span>{{ $post->category->name }}</span> について、<span>{{ $post->users }}の声</span>です。<br>
                            「{{ $post->text }}」</li>
                            <form action="{{ action('PostsController@delete', $post->id) }}" method="post">
                                {{ csrf_field() }}
                                <button class="btn btn-outline-warning">削除する</button>
                            </form>
                        @endforeach
                        @endif
                    </div>
                    <div class="card-body scroll-area2">
                        <h3>何かが入ります</h3>
                        <a href="{{ route('login') }}" class="text-muted">中の人入り口</a>
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







