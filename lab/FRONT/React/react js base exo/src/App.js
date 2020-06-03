import React from 'react';
import './App.css';
import Number from'./Number.js';
import Compter from'./Compter.js';

class App extends React.Component{
  constructor(props){
    super(props)
    this.state = {
      compter: 0
    }
    this.add = this.add.bind(this)
  }

  add(test){
    console.log("plus")
    this.setState(state =>({
      compter: test
    }))
  }

 

  render() {
    return (
      <div className="App">
        <Number nombre={this.state.compter}></Number>
        <Compter value="1" change={this.add}></Compter>
        <Compter value="2" change={this.add}></Compter>
        <Compter value="3" change={this.add}></Compter>
        <Compter value="4" change={this.add}></Compter>
        <Compter value="5" change={this.add}></Compter>
      </div>
    );
  }
}

export default App;
