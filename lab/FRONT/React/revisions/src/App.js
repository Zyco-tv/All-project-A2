import React from 'react';
import './App.css';
import Number from'./Number.js';
import Text from'./Text.js';

class App extends React.Component{
  constructor (props){
    super(props)
    this.state = {
      color: ""
    }
    this.change = this.change.bind(this)
  }
  change(valeur){
      this.setState({
        color : valeur
      })
  }
  render() {
    return (
      <div className="container">
          <Number color={this.state.color}></Number>
          <Text changeColor={this.change}></Text>
      </div>
    );
  }
}

export default App;