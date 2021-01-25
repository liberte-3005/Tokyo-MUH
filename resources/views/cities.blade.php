
@if(isset($posts))

        @foreach ($posts as $post)
        <div class="card mb-4">
            <li>投稿者:{{ $post->users }}の声<br>
                「{{ $post->text }}」{{ $post->created_at->format('Y年m月d日(D)H:i') }}

            </li>
            <form action="{{ action('PostsController@delete', $post->id) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-outline-warning">削除する</button>
            </form>
        </div>
        @endforeach
        @endif
