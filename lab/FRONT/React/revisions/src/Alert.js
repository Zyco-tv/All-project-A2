import React from 'react';
import './App.css';

class Alert extends React.Component{
  constructor(props){
    super(props)
    this.state ={
      open: true
    }
    this.change = this.change.bind(this)
  }

change() {
  this.setState({open: false})
}

render() {
  return (
    <div className={"Alert" + (this.state.open ? "d-block":"d-none")}>
      <p>Bonjour, il y a 5 alert</p>
      <span onClick={this.change}>X</span>
    </div>
  );
}
}

export default Alert;
