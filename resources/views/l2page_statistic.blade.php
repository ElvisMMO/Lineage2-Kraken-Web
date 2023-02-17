@extends('layouts.l2templatefolder.l2templatepages')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section("title" , "Страница описания!")
@section("page-title" , "Регистрация")
@section('inside_info')
<script src="{{asset('/js/statistics.js') }}"></script>
<script src="{{asset('/js/alertsMessages.js') }}"></script>

	<h1 class="page-title"><p style="color:black;">{{ __('messages.static') }}</p></h1>
	<div style="margin: auto;width: 100%;"class="contentHomeStatic">

	<div class="message"></div>
	
	<div id="show_alert" class="alert info">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  		<strong id="text_alert">{{ __('messages.info_first_page_static') }}</strong>
	</div>

  
  <div class="container">
      <div style="display:block; float: left;" class=body_ts>
    
    <div style="display:inline-block;">
        <div  class="select">
            <select name="format" id="format" onchange="GetSelectedServer(this)">
                <option selected disabled>{{ __('messages.select_server') }}</option>
                @foreach ($arrayNameServers as $id)
                  <option value={{$id}}>Сервер {{$id}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div style="display:inline-block;">
        <div  class="select">
            <select name="format" id="format" onchange="GetSelectedTop(this)">
                <option selected disabled>{{ __('messages.select_static') }}</option>
                @foreach ($arrayNameStatistic as $multiArr)
                    @foreach ($multiArr as $arr)
                      <option value={{$arr['id']}}>{{ $arr['name'] }}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
    </div>
    
</div>
<div><button style="font-size: xx-small; float:left margin-top:100px">Поиск</button></div>
    
 
  <table id="customers">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>CLASS</th>
    <th>CLAN</th>
    <th>LVL</th>
    <th>PVP</th>
    <th>PK</th>
    <th>TIME</th>
    <th>ONLINE</th>
  </tr>
  <tr align="center">
  <td colspan="9">{{ __('messages.no_data') }}</td>
  </tr>
  
</table>

</div>
</div>
</div>
<script>
  function GetSelectedServer(education) {
    var sleTex = education.options[education.selectedIndex].innerHTML;
    var selVal = education.value;
    alert("Selected Text: " + sleTex + " Value: " + selVal);
}

function GetSelectedTop(education) {
    var sleTex = education.options[education.selectedIndex].innerHTML;
    var selVal = education.value;
    alert("Selected Text: " + sleTex + " Value: " + selVal);
}
</script>
@endsection

