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
							<ul>
								<li><a href="#">Create Account</a></li>
								<li><a href="#">Sign In</a></li>
							</ul>
						</nav>
						<div class="selection">
							
							<h1>Find the food you love in Milton, WV.</h1>
						
							<form action="#" method="POST">
								<span class="icon"><i class="fas fa-hand-pointer"></i></span>
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
						<h2>Save Your Favorite Restaurants</h2>
						<p>Save your favorite restaurants for quick access on your next visit.</p>
					</div>
					<div class="col-sm-4">
						<img class="icon-img" src="/img/icons/takeOutPack/037-reward.png" alt="Rewarded With Free Food">
						<h2>Get Free Food</h2>
						<p>Create an account and you will be entered automatically every month in our drawing for a free gift certificate.</p>
					</div>
				</div>
			</div>
		</div>



		<div class="order-up">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2>Find a local restaurant to crush that craving!</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-md-5 offset-md-2 is-relative">
						<img class="img-fluid" src="/img/serving-burger.jpeg" alt="Pic of burger being served">
						<div class="chat-bubble">
							<img src="/img/order-up.png" alt="Order's Up!">
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>

@endsection