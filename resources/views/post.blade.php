@extends('layouts.app')

@section('content')
<h1>hey</h1>
<a href = "/index" method = 'get'>aaa</a>
<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Book
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					

					<!-- New Book Form -->
					<form action="/post" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Book Name -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Book</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="book-name" class="form-control" value="{{ old('book') }}">
							</div>
						</div>

						<!-- Add Book Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-plus"></i>本を追加する
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>