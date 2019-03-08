@extends('layouts.app')


@section('content')

	<div class="home-page-wrapper">
		<div class="container-flui">
			<div class="row no-gutters">
				<div class="col-sm-6">
					<div class="hero">
						<img class="img-fluid" src="/img/logo.png" alt="Milton Eats">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="hero-content">
						<nav class="main-nav">

						</nav>
						<div class="selection">
							
							<h1>Find the food you love in Milton, WV.</h1>
						
							<form action="#" method="POST">
								<select name="food_type">
									<option vlaue="#">Enter Food Type</option>
									<option value="#">Dine In</option>
									<option vlaue="#">Carry Out</option>
									<option value="pizza">Pizza</option>
									<option value="burgers">Burgers</option>
									<option value="other">Other</option>
								</select>
								<button type="submit" name="submit" class="submit"><i class="fas fa-caret-right"></i></button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection