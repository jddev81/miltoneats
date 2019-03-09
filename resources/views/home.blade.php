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



		<div class="under-hero">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<img class="icon-img" src="/img/icons/takeOutPack/036-restaurant-2.png" alt="Restaurant">
						<h2>Local Favorites</h2>
						<p>Satisfy your cravings! Browse all restaurants in Milton, WV. Browse by category or delivery status.</p>
					</div>
					<div class="col-sm-4">
						<img class="icon-img" src="/img/icons/takeOutPack/011-favorite.png" alt="Favorite Restaurants">
						<h2>Favorite Restaurants</h2>
						<p>Save your favorite restaurants for quick access on your next visit.</p>
					</div>
					<div class="col-sm-4">
						<img class="icon-img" src="/img/icons/takeOutPack/037-reward.png" alt="Rewarded With Free Food">
						<h2>Free Food</h2>
						<p>Create an account to be entered into our monthly drawing for a free gift certificate.</p>
					</div>
				</div>
			</div>
		</div>



	</div>

@endsection