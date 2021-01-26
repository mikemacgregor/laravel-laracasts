@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
            <form method="get" action="">
                @csrf

                <div class="form-group">
                    <label for="title">Text</label>
                    <input type="text" id="title" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="excerpt">Text</label>
                    <textarea id="excerpt" class="form-control" name="excerpt" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="body">Text</label>
                    <textarea id="body" class="form-control" name="body" rows="3"></textarea>
                </div>

                <button class="btn btn-primary" type="button">Text</button>
            </form>
        </div>
	</div>
</div>
@endsection