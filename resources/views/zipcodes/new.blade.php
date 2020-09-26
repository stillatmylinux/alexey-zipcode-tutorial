@extends('layouts.boot4')
@section('title', 'Zipcodes: New Zipcode')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					New Zipcode
				</div>
				<div class="card-body">

					<form method="POST">

						@csrf

						<div class="form-group">
							<input type="text" name="zipcode" class="form-controller" autocomplete="off">
							<label for="zipcode">Zipcode</label>
						</div>

						<div class="form-group">
							<select name="state" class="form-controller">
								<option value="">--</option>
								<option value="CA">California</option>
								<option value="IA">Iowa</option>
							</select>
							<label for="state">State</label>
						</div>

						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">New Zipcode</button>
						</div>

					</form>
				</div>
			</div>


		</div>
	</div>
</div>


@endsection

@section('footer-scripts')

@endsection