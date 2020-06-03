import React from 'react';
import Line from './Line';
import './App.css';

function Plateau(props) {
  const lines = props.game.map((element,index) =>
      <Line key={index} line={element}></Line>
  )
return (
  <div className="plateau">
      {lines}
  </div>
  );
}

export default Plateau;