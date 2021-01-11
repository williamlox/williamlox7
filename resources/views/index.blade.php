<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>許文智</title>
  </head>
  <body>
    <div class="container">
        <h1>許文智的期末網站</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">J109212110</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">首頁</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/lotto/">樂透</a>
        </li>
        @guest
        <li class="nav-item">
          <!-- 登入後到首頁 -->
          <a class="nav-link" href="/login/">登入</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="/register/" tabindex="-1" aria-disabled="true">註冊</a>
        </li>
        @endguest 
        @auth
        <li class="nav-item">
          <a class="nav-link" href="/mylogout/">登出</a>
        </li>
        @endauth 
      </ul>
    </div>
  </div>
</nav>
<!-- 只有登入者才有權限 -->
@auth
<form method='POST' action="/insert" style="margin-bottom:20px"  onsubmit='check();return false;'id='reg' name='reg'>
@csrf
最新消息 : <input type=text size=40 name=title>
<input type=submit value="發佈" class="btn btn-success">
</form>
@endauth
<table class="table table-striped table-hover"> 
    <tr>
      <th>編號</th><th>馬路消息</th><th>張貼時間</th><th>編輯</th>
    </tr>
    @foreach ($titles as $item)
    <tr class="tableth">
      <td> {{$item->id}} </td>
      <td> {{$item->title}} </td>
      <td> {{$item->created_at}} </td>
      <td>
      <a href={{'delete/' .$item->id}}><button type="button"  class="btn btn-info">刪除</button></a>
      </td>
    </tr>
   @endforeach
</table>

</div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>