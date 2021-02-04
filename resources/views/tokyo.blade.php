<!DOCTYPE html>
<html lang="ja">
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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

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
  <div class="modal-header"><p class="title-bar">TOKYO MAKES US HAPPY</p></div>
    <nav class="navbar navbar-expand-md fixed-top" style="background-color: transparent">
        <h1><a class="navbar-brand" href="/">　みんなの、23区。　</a></h1>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- innner -->
        <div >
            <button class="btn btn-outline-warning mr-auto" data-toggle="modal" data-target="#modal-post">書き.com</button>
            <div class="form-inline mt-2 mt-md-0">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="">問い合わせ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">リンク</a>
                    </li>  -->
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="main_content">
        <div class="container">

            <div class="main-msg">
                <h2 class="main-msg-txt">トーキョー、どう？</h2>
                <p>東京23区を愛するみなさまの声を集めたい！という思いから「みんなの、23区。」を開放します。<br>23区について、一言ずつ書いてみてください。
                    思わぬ盛り上がりがあるかもしれませんね。<br>あなたのメッセージを待っています。</p>
                <!-- フォームエリア -->
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modal-post">書き.com</button>
                    <p></p>
            </div>
                <div class="modal fade" id="modal-post" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title modal-label">
                                    Write from here!
                                </p>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true" class="xmark">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ action('PostsController@store') }}" method="POST">
                                    <p class="modal-innner"><label class="modal-label">WHERE</label>
                                        <select name="cat_id" value="categories">
                                            @foreach(config('categories') as $categories => $name)
                                            <option value="{{ $categories }}" required>{{ $name }}</option>
                                            @endforeach
                                        </select></p>
                                    <p class="modal-innner"><label class="modal-label">WHO ARE YOU?  </label>
                                        <label><input type="radio" name="users" value="住人" required>住人</label>
                                        <label><input type="radio" name="users" value="通行人">通行人</label>
                                        <label><input type="radio" name="users" value="外野">外野</label>
                                    </p>
                                    <label class="modal-innner modal-label" style="width:100%;">MESSAGE</label><input type="text" name="text" placeholder="全角100字まで" maxlength="200" style="width:100%;" required>
                                    <p><span class="msg-warning">100字を超えると勝手に切れちゃいます。<br>ごめんなさい！一度投稿したら削除することはできません！気をつけて。</span></p>
                                    <!-- 任意の数字半角4けた（削除時に必要です）<input type="text" name="pin_code"> -->
                                    {{ csrf_field() }}
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-classic">閉じる</button>
                                <button type="submit" class="btn btn-classic">公開する</button>
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
                    @include('modal')
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 card">
                    <div class="card-header">
                        <h3>みんなの、投稿。</h3>
                    </div>
                    <div class="card-body">
                        <!-- <img src="{{ asset('img/') }}" alt="プロフィール画像" width="30%"> -->
                                @forelse ($posts as $post)
                            <div class="post-txt">
                                <p><a href="{{ action('PostsController@cities','cat_id=') }}{{ $post->cat_id }}">{{ $post->category->name }}</a>は、「<span class="msg-txt">{{ $post->text }}</span>」</p>
                                <p class="text-right"><span class="date">{{ $post->created_at->format('Y年m月d日(D)H:i') }}　by<span class="user-txt">{{ $post->users }}</span></p>
                            </div>
                                @empty
                                <p>まだ投稿がありません。</p>
                                @endforelse
                            <div class="pagenate">
                                {{ $posts->links() }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<footer class="footer mt-auto py-3">
    <div class="container">
        <div class="row justify-content-center">
            <a href="https://twitter.com/kt4202546?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @kt4202546</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <div class="btm-img">
                <img src="{{ asset('img/night_dots.png') }}" width="100%">
            </div>
        </div>
    </div>

</footer>


</body>
</html>







