import React from 'react';
import $ from 'jquery';

import Headline from './headline.component.js';
import Car from './car.component.js';

// a simple component creating a headline
var CarsList = React.createClass({
    render: function() {

        // var h1 = React.createElement(Headline, { 
        //     level: 1,
        //     text: 'Cars list'
        // });

        // var children = [];
        // for(var i = 0; i < this.props.cars.length; i++) {

        //     children.push(React.createElement(Car, {
        //         key: i,
        //         brand: this.props.cars[i].brand,
        //         model: this.props.cars[i].type
        //     }));

        // }

        var children = [];
        $.each(this.props.cars, function(key, value) {

            var car  = (
                <Car key={ key } brand={ value.brand } model={ value.type } />
            );
            children.push(car);

        });

        var wrapper = (
            <div id="cars-list">
                <Headline level="1" text="Cars list" />
                <div className="cars">
                    { children }  
                </div>
            </div>
        );

        return wrapper;
    }
});

export default CarsList;