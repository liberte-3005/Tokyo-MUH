<!doctype html>
<html lang="ja">
<head>
@yield('head')
</head>
<body>
<main class="main_content py-4">
        <div class="container">
            <div class="text-center">
                <h1>みんなの、23区。</h1>
                <p>東京23区を愛するみなさまの声を集めたい！というサイトです。<br>23区について、一言ずつ書いてみてください。
                    思わぬ盛り上がりがあるかもしれませんね。<br>あなたのメッセージを待っています。</p>
                <!-- フォームエリア -->
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modal-post">書き.com</button>
                    <p></p>
            </div>
                <div class="modal fade" id="modal-post" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modal-label">
                                    あなたの書き込みに感謝します
                                </h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ action('PostsController@store') }}" method="POST">
                                    <p><label>なに区のお話ですか？</label>
                                        <select name="cat_id" value="categories">
                                            @foreach(config('categories') as $categories => $name)
                                            <option value="{{ $categories }}">{{ $name }}</option>
                                            @endforeach
                                        </select></p>
                                    <p><label>あなたは誰？  </label><label><input type="radio" name="users" value="住人">住人</label></p>
                                    <label><input type="radio" name="users" value="通行人">通行人</label>
                                    <label><input type="radio" name="users" value="外野">外野</label>
                                    <p>メッセージ<input type="text" name="text" style="width:100%">
                                    <p><span class="msg-warning">ごめんなさい！一度投稿したら削除することはできません！気をつけて。</span></p>
                                    <!-- 任意の数字半角4けた（削除時に必要です）<input type="text" name="pin_code"> -->
                                    {{ csrf_field() }}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">閉じる</button>
                                <input type="submit" value="公開する" class="btn btn-warning">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="head-dots none">
                        <p class="dot"></p>
                    </div>
                    <!-- modalエリア -->
                    @include('modal')
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- 一覧表示エリア -->
            @yield('content')
            </div>
        </div>
    </div>
</main>
<footer class="footer mt-auto py-3">
    <div class="container">
        <div class="row justify-content-center">
            <img src="{{ asset('img/night_dots.png') }}" width="100%">
        </div>
    </div>
</footer>

</body>
</html>
