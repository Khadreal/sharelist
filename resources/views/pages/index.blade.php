@extends('master')

@section('title', 'Sharelist')

@section('content')
	<div class="holder">
		<div class="col-xs-12">
			<div class="form_container col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						Share Your Playlist with friends
					</div>
					<div class="panel-body">
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						@if (Session::has('form-submit'))
				            <div class="alert alert-info alert-dismissable">
				                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				                Your playlist has been added.
				            </div>
				        @endif 
					
						<form method="post" class="play-list">
							<div class="form-group">
								<input class="{{ $errors->has('name') ? 'form-control has-error' : 'form-control' }}" type="text" placeholder="Playlist Title e.g: zone" name="name" value="{{ old('name') }}" >
								@if($errors->has('name'))
									<span class="err">{{ $errors->first('name') }}</span>
								@endif
							</div>
							
							<div class="form-group">
								<select name="platform" class="{{ $errors->has('platform') ? 'form-control has-error' : 'form-control' }}">
									<option value="">--Please select an Option--</option>
									<option value="Youtube">Youtube</option>
									<option value="Deezer">Deezer</option>
								</select>
								@if($errors->has('platform'))
									<span class="err">{{ $errors->first('platform') }}</span>
								@endif
							</div>

							<div class="form-group">
								<input class="{{ $errors->has('link') ? 'form-control has-error' : 'form-control' }}" type="text" placeholder="Playlist URL" name="link" value="{{ old('link') }}" >
								@if($errors->has('link'))
									<span class="err">{{ $errors->first('link') }}</span>
								@endif
								</div>
							<input type="hidden" name="_token" value="{!! csrf_token() !!}">

							<input type="submit" value="Send">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection