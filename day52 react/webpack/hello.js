import  hello  from './functions.js';

import React from 'react';
import ReactDOM  from 'react-dom';

import CarsList from './components/cars-list.component.js';

var cars = [
    { brand: 'Lada', type: 'Niva' },
    { brand: 'Wartburg', type: '353W' },
    { brand: 'Skoda', type: '120L' }
];

var list = React.createElement(CarsList, {
    cars: cars
});

ReactDOM.render(list, document.getElementById('react-app'));


/*var car_list = (
    <div id="car_list">
        <h1>Cars</h1>
        <div id="cars">
            <div className="car">
                <h2>Porsche</h2>
                <span className="type">Carrera</span>
            </div>
        </div>
    </div>
);

ReactDOM.render(car_list, document.getElementById('react-app'));*/