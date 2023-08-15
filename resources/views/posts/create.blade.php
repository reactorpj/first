<h2>create post</h2>
<form action="/posts" method="post">
    @csrf
    <div>Title: <input type="text" name="title"></div>
    <div>Content: <textarea type="text" name="content"></textarea></div>
    <button>Send</button>
</form>
