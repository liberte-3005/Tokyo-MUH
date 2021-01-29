<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>みんなの、23区。</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;500;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dot.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>

<body>
<header>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #272343;">
        <a class="navbar-brand" href="">みんなの、23区。</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- innner -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <button class="btn btn-outline-warning mr-auto" data-toggle="modal" data-target="#modal-post">カキコ</button>
            <div class="form-inline mt-2 mt-md-0">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">問い合わせ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">リンク</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="main_content">
        <div class="container">
            <div class="head-dots none">
                <p class="dot"></p>
            </div>
            <div class="text-center">
                <h3>WHAT'S THIS!?</h3>
                <p>東京23区を愛するみなさまの声を集めたい。</p>
                <!-- フォームエリア -->
                <button class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-post">カキコ</button>
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
                                    <label>なに区のお話ですか？</label>
                                        <select name="cat_id" value="categories">
                                            @foreach(config('categories') as $categories => $name)
                                            <option value="{{ $categories }}">{{ $name }}</option>
                                            @endforeach
                                        </select><br>
                                    <label>あなたは誰？</label><label><input type="radio" name="users" value="住人">住人</label>
                                    <label><input type="radio" name="users" value="通行人">通行人</label>
                                    <label><input type="radio" name="users" value="外野">外野</label>
                                    <p>メッセージ<input type="text" name="text" style="width:100%">
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
                <div class="col-sm-9">
                        @include('modal')
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 card">
                        <div class="card-body">
                            @if(isset($posts)) 
                            <div class="post-txt">
                                @foreach ($posts as $post)
                                <p>{{ $post->category->name }}は、「<span class="msg-txt">{{ $post->text }}</span>」<span class="date">{{ $post->created_at->format('Y年m月d日(D)H:i') }}</span>　by<span class="user-txt">{{ $post->users }}</span></p>
                                @endforeach
                            </div>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>


<footer class="footer mt-auto py-3">
    <div class="container">
        <div class="head-dots none">
            <p class="dot"></p>
        </div>
        <div class="text-right">
            <a href="https://twitter.com/kt4202546?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @kt4202546</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
  </div>
</footer>


</body>
</html>







