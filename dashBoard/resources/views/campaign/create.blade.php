@extends('welcome')
@section('title', ' | 캠페인관리')
@section("style")
<!-- 여기에 스타일 시트를 추가하시면 됩니다. -->
thead{background:green;}
@endsection

@section("content")
<!-- 여기에 페이지 내용을 추가하시면 됩니다. -->
<p class='head'>
<div class="col-md-18 col-md-offset-2">
  <strong>홈> 캠페인 관리> 입력 페이지</strong>
</div>
  <div class="row">
    <div class="col-md-18 col-md-offset-3">
        {!! Form::open(['route' => 'campaign.store', 'method' => 'post']) !!}
        <!-- From 태그 하위에 배열로 class를 선언, css를 컨트롤 할 수 있다.
        라벨은 명칭을 지정해주는 것이고, text는 label을 어떻게 표현할 것인지에 대해 명명하는 것이다.-->
        {{ Form::label('name_proposal', '제안명',['class' => 'awesome'])}}
        {{ Form::text('title',null)}}
        {{ Form::label('date_proposal', '제안일',['class' => 'awesome'])}}
        {{ Form::date('name', \Carbon\Carbon::now())}}
      </br>
        {{ Form::label('advname', '광고주명')}}
        {{ Form::select('advname', $advname, null,['placeholder' => '신규 광고주'])}}
        {{ Form::text('advname',null)}}
        {{ Form::label('advcate1', '업종')}}
        {{ Form::select('advcate1', $advcate1, null,['placeholder' => '업종 카테고리1'])}}
        {{ Form::select('advcate2', $advcate2, null,['id' => 'advcate2', 'placeholder' =>'업종 카테고리2'])}}
      </br>
        {{ Form::label('agencies', '대행 계정명')}}
        {{ Form::select('agencies',["", 'a','b'],null,['placeholder' => '신규 대행사'])}}
        {{ Form::text('agencies',null,['placeholder' => '신규시 임의작성'])}}
        {{ Form::label('agencies1', '1차 대행')}}
        {{ Form::select('agencies1',["", 'a','b'],null,['placeholder' => '신규 대행사'])}}
        {{ Form::text('agencies1',null,['placeholder' => '신규시 임의작성'])}}
    </p>
      </br>
  </div>
    </div>

    <div class="row">
      <div class="col-md-18 col-md-offset-2">
        <table class = 'table'>
          <thead>
            <th class="active">애드센터 셋팅 캠페인 명</th>
            <th class="active">시작일</th>
            <th class="active">종료일</th>
            <th class="active">노출기기</th>
            <th class="active">매출월</th>
            <th class="active">과금</th>
            <th class="active">보장 노출량</th>
            <th class="active">예산</th>
            <th class="active">일 예산</th>
            <th class="active">수수료율</th>
            <th class="active">메모</th>
          </thead>
          <tbody>
            <tr>
              <!-- 몇 개를 추가할 수 있게 구현하는지, default로 몇 개를 설정해주어야 하는지 확인 하고 진행-->
              <td>{{ Form::text('campaign1',null, array('id' => 'campaign1', 'palceholder'=>'A캠페인'))}}</td>
              <td>{{ Form::date('sdate`', \Carbon\Carbon::now(), ['id' => 'start_date'])}}</td>
              <td>{{ Form::date('edate', \Carbon\Carbon::now(), ['id' => 'end_date'])}}</td>
              <td>{{ Form::select('device',["PC", 'M.web','M.app'],null,['id' => 'device', 'placeholder' => 'PC'])}}</td>
              <td>{{ Form::selectMonth("month", null, ['id'=>'salesMonth'])}}</td>
              <td>{{ Form::select("model", ["CPC", "CPM",'CPVC'], null,['id' =>'model'])}}</td>
              <td>{{ Form::text('exposure',null, array('id' => 'exposure'))}}</td>
              <td>{{ Form::text('deposit',null, array('id' => 'deposit'))}}</td>
              <td>{{ Form::text('daily',null, array('id' => 'daily'))}}</td>
              <td>{{ Form::text('fees',null, array('id' => 'fees','placeholder' =>'00%'))}}</td>
              <td>{{ Form::text('memo',null, array('id' => 'memo'))}}</td>
            </tr>
          </tbody>
        </table>
          {{ Form::submit('등록', array('class' => 'btn btn-primary'))}}
        {!! Form::close() !!}
      </div>
    </div>







@endsection

@section("script")
<!-- 여기에 자바스크립트를 추가하시면 됩니다. -->
@endsection
