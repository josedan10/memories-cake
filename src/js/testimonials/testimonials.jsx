import React from 'react';

export default class Testimonials extends React.Component {
	constructor(props) {
		super(props);
	}

	render() {
		return (
			<div className='flex-center' style={{ width: '100%', flexWrap: 'wrap' }}>
				<div className='container grid-container'>
					<img className='background-image' src={this.props.presentation.img1} alt=''/>
					<div className='testimonial-presentation flex-center'>
						<h1>{this.props.presentation.title}</h1>
						<p>{this.props.presentation.content}</p>
					</div>
					<div className='testimonials-container flex-center'>
						{this.props.testimonials.map(testimonial => <TestimonialCard key={'testimonial-' + testimonial.name} data={testimonial} />)}
					</div>
					<img className='background-image' src={this.props.presentation.img2} alt=''/>
				</div>
            
				<hr/>
			</div>
		);
	}
}

class TestimonialCard extends React.Component {
	constructor(props) {
		super(props);

	}

	render() {
		return (
			<div className='card-testimonial flex-center'>
				<img src={this.props.data.img} alt='testimonial-img'/>
				<div className='content'>
					<span className={'title-' + this.props.data.class}>{this.props.data.name}</span>
					<p>{this.props.data.text}</p>
				</div>
			</div>
		);
	}
}
