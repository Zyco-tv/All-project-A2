import React from 'react';
import './App.css';

function Box(props) {
  return (
    <div className="App">

        <button className="case red" onClick={() => props.changeColor("red")}></button>
        <button className="case yellow"onClick={() => props.changeColor("yellow")}></button>
        <button className="case blue"onClick={() => props.changeColor("blue")}></button>
        <button className="case green"onClick={() => props.changeColor("green")}></button>
        <button className="case purple"onClick={() => props.changeColor("purple")}></button>

    </div>
  );
}

export default Box;
