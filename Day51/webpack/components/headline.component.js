import React from 'react';



// a simple component creating a headline
var Headline = React.createClass({
  render: function() {
    return (
      // this is where all the createElement functions go
      React.createElement('h1', {}, 'Headline text')
    )
  },
});

export default Headline;