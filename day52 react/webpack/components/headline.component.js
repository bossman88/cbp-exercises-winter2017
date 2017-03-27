import React from 'react';

// a simple component creating a headline
var Headline = React.createClass({
  render: function() {
    return (
      // this is where all the createElement functions go
      React.createElement('h' + this.props.level, {}, this.props.text)
    )
  },
});

export default Headline;