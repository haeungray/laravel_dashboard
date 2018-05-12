<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/dashboard">ACE Trader Admin</a>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li><a href="/dashboard">현황판<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="/campaign" class = 'dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup="true" aria-expanded='true'>캠페인관리<span class='caret'></a>
            <ul class = 'dropdown-menu'>
              <li><a href="/campaign/create">입력페이지</a></li>
              <li><a href="/campaign/show">캠페인 열람</a></li>
              <li><a href="/campaign/history">히스토리</a></li>
            </ul>
        </li>
        <li><a href="/report">리포트</a></li>
        <li><a href="/forcasting">포캐스팅</a></li>
        <li><a href="/optimized_board">최적화 현황판</a></li>
      </ul>
    </div>
