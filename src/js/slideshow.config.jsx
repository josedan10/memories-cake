import React from 'react';
import ReactDOM from 'react-dom';
import SlideShow from './slideshow/slideshow';


const slideshow = [
	{
		titulo: 'Cake #001',
		texto: 'Ipsum deserunt ea occaecat elit nisi irure ipsum dolor aliquip aliquip.',
		precio: '70.000',
		imagen: '',
		id: 0
	},
	{
		titulo: 'Cake #002',
		texto: 'Aute mollit ullamco ullamco aliqua consequat tempor adipisicing laboris consequat in labore.',
		precio: '95.000',
		imagen: '',
		id: 0
	},
	{
		titulo: 'Cake #003',
		texto: 'Sunt in nostrud ad consectetur reprehenderit Lorem fugiat minim ut incididunt exercitation.',
		precio: '83.000',
		imagen: '',
		id: 0
	}
];

const configSlideShow = {
	intervalo: 5000,	// Tiempo que demora en cambiar de un slide a otro (milisegundos)
	efecto: 'fade',		// Opciones: fade, slide
	delayEfecto: 700	// Tiempo del efecto
	
};

var i = 0;

for (let index in slideshow) {
	slideshow[index].id = i++;
}

ReactDOM.render(
	<SlideShow elementos={slideshow} config={configSlideShow}/>,
	document.getElementById('slideshow')
);
