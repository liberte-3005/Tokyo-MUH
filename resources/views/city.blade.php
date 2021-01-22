
    <div class="container mt-4">
    <li>東京都　<span>{{ $post->category->name }}</span> について、
    @if(isset($posts))
        @foreach ($posts as $post )
            <span>{{ $post->users }}の声</span>です。<br>
                「{{ $post->text }}」</li>
                <form action="{{ action('PostsController@delete', $post->id) }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-outline-warning">削除する</button>
                </form>
                        @endforeach
                        @endif
    </div>