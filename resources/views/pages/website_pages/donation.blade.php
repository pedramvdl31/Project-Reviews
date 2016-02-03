@extends($layout)
@section('stylesheets')
  {!! Html::style('/assets/css/pages/website_pages/general.css') !!}
  {!! Html::style('/assets/css/pages/website_pages/events.css') !!}
@stop
@section('scripts')
<script src="/assets/js/pages/website_pages/events.js"></script>
@stop

@section('content')
<div class="container" style="padding-top:80px;background-color:black">
  <div class="jumbotron my-jumbotron" style="">
    <h1>Donations</h1>
  </div>
  	<div class="panel panel-default my-panel-default">
	  <div class="panel-body">




			<center><div id="fb-root"></div><script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/ubutoday/videos/441151662718031/" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ubutoday/videos/441151662718031/">Posted by <a href="https://www.facebook.com/ubutoday/">Believe in Breath - UBU Today</a> on&nbsp;<a href="https://www.facebook.com/ubutoday/videos/441151662718031/">Tuesday, April 28, 2015</a></blockquote></div></div></center>
			<br>
			<br>










	  </div>
	</div>
</div>

@stop