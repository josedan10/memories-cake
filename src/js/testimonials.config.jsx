import React from 'react';
import ReactDOM from 'react-dom';
import Testimonials from './testimonials/testimonials';

const data = [
    {
        img: null,
        name: 'Pepito Perez',
        text: 'Deserunt culpa et labore reprehenderit pariatur ullamco reprehenderit elit Lorem ea anim.',
        class: 'dark-brown'
    },
    {
        img: null,
        name: 'Sofía Domínguez',
        text: 'Laboris occaecat commodo pariatur elit aute do laborum aliqua aute commodo.',
        class: 'pink'
    },
    {
        img: null,
        name: 'Jose Daniel',
        text: 'Exercitation eu ea veniam deserunt dolore in consequat ullamco deserunt id sit.',
        class: 'light-brown'
    },
    {
        img: null,
        name: 'Alan Brito Delgado',
        text: 'Deserunt adipisicing id occaecat id fugiat pariatur nostrud laborum adipisicing.',
        class: 'dark-brown'
    }
];

ReactDOM.render(
    <Testimonials testimonials={data} />,
    document.getElementById('testimonials')
);
