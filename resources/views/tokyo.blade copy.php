@exteds('layputs.app')

@section('content')

        <div class="row justify-content-center">
                <div class="col-lg-9 card">
                    <div class="card-header">
                        <h3>みんなの、投稿。</h3>
                    </div>
                    <div class="card-body">
                        @if(isset($posts)) 
                        <!-- <img src="{{ asset('img/1adachi.png') }}" width="30%"> -->
                            @foreach ($posts as $post)
                        <div class="post-txt">
                            <p>{{ $post->category->name }}は、「<span class="msg-txt">{{ $post->text }}</span>」</p>
                            <p class="text-right"><span class="date">{{ $post->created_at->format('Y年m月d日(D)H:i') }}　by<span class="user-txt">{{ $post->users }}</span></p>
                        </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

@endsection








