@extends('master')

@section('title', 'List of Shared Playlist')

@section('content')
	<div class="list--list">
		<div class="col-xs-12">
			@foreach($data as $row)
				<div class="panel panel-default">
					<div class="panel-heading text-left">
						{{$row->name}}
					</div>
					<div class="panel-body list">
						@if($row->platform == "Youtube")
							<iframe width="640" height="360" src="https://www.youtube.com/embed/videoseries?{{$row->list_id}}" frameborder="0" allowfullscreen></iframe>
						@elseif($row->platform == "Deezer")
							<iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id={{$row->list_id}}&app_id=1" width="700" height="350"></iframe>
						@endif
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection