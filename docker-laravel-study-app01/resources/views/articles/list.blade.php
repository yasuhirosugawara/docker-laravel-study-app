<h1>投稿記事一覧</h1>
<a href="/articles/create" class="btn btn-primary">新規投稿</a>
@if(count($articles) > 0)
  @foreach($articles as $article)
    <a href="/articles/{{$article->id}}">
      <div class="card my-3">
        <div class="card-body">
          <h3>No.{{$article->id}}</h3>
          <h3 class="card-title">タイトル：{{$article->title}}</h3>
          <small>投稿日:{{($article->created_at)->format('Y/m/d')}}</small><br/>
          <small>更新日:{{($article->updated_at)->format('Y/m/d')}}</small>
          <p class="card-text">本文：{{$article->content}}</p>
          
        </div>
      </div>
    </a>
    <a href="/articles/{{$article->id}}/edit">編集</a>
  @endforeach
@endif