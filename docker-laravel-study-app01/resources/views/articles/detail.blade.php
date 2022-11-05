<div class="card my-3">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <small>投稿日:{{($article->created_at)->format('Y/m/d')}}</small><br />
        <small>更新日:{{($article->updated_at)->format('Y/m/d')}}</small>
        <a href="/articles/{{$article->id}}/edit">編集</a>
        <p class="card-text">{{$article->content}}</p>
    </div>
</div>