import React from 'react';

export default class Order extends React.Component {
	constructor(props) {
		super(props);
	}

	render() {
		return (
			<form action="" method="post" className="flex-center">
				<div className="data flex-center">
					<div className="container flex-between">
						<input type="text" name="name" id="name" placeholder="Name"/>
						<input type="text" name="last_name" id="last_name" placeholder="Last name"/>
						<textarea name="address" id="address" placeholder="Address" />
						<textarea name="story" id="story" placeholder="Story" />
						<input type="tel" name="phone" id="phone" placeholder="Phone"/>
						<input type="email" name="email" id="email" placeholder="Email"/>
					</div>
				</div>
				<div className="order flex-center">
					<div className="container flex-between">
						<h2>Order</h2>
						<input type="text" name="cakes_cupcakes" id="cakes_cupcakes" placeholder="Cakes & cupcakes"/>
						<input type="text" name="candy_bar" id="candy_bar" placeholder="Candy bar"/>
						<input type="submit" value="Send" className="btn btn-search"/>

						<div className="title-section">
							<h2>We will contact you</h2>
							<span className="line-decorator" />
						</div>
					</div>
				</div>
			</form>
		);
	}
}
