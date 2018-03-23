import React from 'react';

export default class Testimonials extends React.Component {
    constructor (props) {
        super(props);
    }

    render() {
        return (
            <div className="container flex-center">
                {this.props.testimonials.map(testimonial => <TestimonialCard key={"testimonial-" + testimonial.name} data={testimonial} />)}
            </div>
        );
    }
}

class TestimonialCard extends React.Component {
    constructor (props) {
        super(props);

    }

    render() {
        return (
            <div className="card-testimonial flex-center">
                <img src={this.props.data.img} alt="testimonial-img"/>
                <div className="content">
                    <span className={"title-" + this.props.data.class}>{this.props.data.name}</span>
                    <p>{this.props.data.text}</p>
                </div>
            </div>
        );
    }
}