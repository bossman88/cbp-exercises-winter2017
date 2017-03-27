

//without .    it will look for node module , with . it will look for file 
import hello from './functions.js';

import React from 'react';
import ReactDOM from 'react-dom';

import Headline from './components/headline.component.js';


//hello();

var h1 = React.createElement('h1', { id: 'heading1' },
    React.createElement('span', {}, 'span within the heading'),
    React.createElement('div', { className: 'foo' }, 'div within the heading')
);

ReactDOM.render(h1, document.getElementById('react-app'));


ReactDOM.render(Headline, document.getElementById('react-app'));