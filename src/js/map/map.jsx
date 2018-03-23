import React from 'react';

export default class Map extends React.Component {
	constructor (props) {
		super(props);
	}

	render() {
		return (
			<div className="container flex-center">
				<div className="map" id="map" />
				<form className="form-contact flex-center" action="" method="post">
					<input type="tel" name="phone" id="phone" placeholder="Phone"/>
					<input type="email" name="email" id="email" placeholder="Email"/>
					<textarea name="message" id="message" placeholder="Message" />
					<input type="submit" value="Send" className="btn btn-primary"/>
				</form>
			</div>
		);
	}
}