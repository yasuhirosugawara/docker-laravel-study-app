<div class="card my-3">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <small>投稿日:{{($article->created_at)->format('Y/m/d')}}</small><br />
        <small>更新日:{{($article->updated_at)->format('Y/m/d')}}</small>
        <p class="card-text">{{$article->content}}</p><br>
        <a href="/articles/{{$article->id}}/edit">編集</a><br>
        <a href="/articles">一覧表示</a>
    </div>
</div>