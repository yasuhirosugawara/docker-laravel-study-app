<h1>新規投稿</h1>
<div>
  <form method="POST" action="/articles">
    @csrf
    <div class="form-group">
    <label for="exampleFormControlInput1">タイトル：</label><br>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">本文：</label><br>
      <textarea class="form-control"rows="5" name="content" cols="40"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="投稿"/>
  </form>
</div>