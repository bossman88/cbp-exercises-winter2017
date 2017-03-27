import React from 'react';

import Headline from './headline.component.js';

// a simple component creating a headline
var Car = React.createClass({
    render: function() {

        var headline = React.createElement(Headline, {
            level: '2',
            text: this.props.brand
        });

        var car = (
            <div className="car">
                { headline }
                <span className="type">{ this.props.model }</span>
            </div>
        );
        
        return car;

    }
});

export default Car;