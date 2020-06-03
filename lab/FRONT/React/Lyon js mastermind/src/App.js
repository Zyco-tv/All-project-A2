import React from 'react';
import './App.css';
import Navbar from './Navbar';
import Plateau from './Plateau.js'
import Controle from './Controle.js'




class App extends React.Component {

  constructor(props){
    super(props)
    this.state = {
      currentLine: 0,
      currentCase: 0,
      combination:[],
      combinationtoFin:["red", "orange", "yellow", "green"],
      game: [
        [[], []],
        [[], []],
        [[], []],
        [[], []],
        [[], []],
        [[], []],
        [[], []],
        [[], []],
        [[], []],
        [[], []],
      ]

    }
    this.change = this.change.bind(this)
    this.undo = this.undo.bind(this)
    this.compare = this.compare.bind(this)
  }

  change(value){
    const game = [...this.state.game]
    const combination = [...this.state.combination]

    if (this.state.currentCase < 4) {
      game[this.state.currentLine][0].push(value)
      combination.push(value)


    this.setState(state => ({
    game: game,
    currentCase: state.currentCase + 1
    }))
    }
  }

  undo(){
    const game = [...this.state.game]
    

    if (this.state.currentCase > 0) {
      game[this.state.currentLine][0].pop()
      this.setState(state => ({
        game: game,
        currentCase: state.currentCase - 1
        }))
    }
    
  }

  compare(){
    if (this.state.currentCase == 4) {
      
      
    }
  }

  render(){
  return (
    <div className="">
      <Navbar></Navbar>
      <main>
        <div className="tab">
        <Plateau game={this.state.game}></Plateau>
        <Controle colorize={this.change} undo={this.undo} compare={this.compare}></Controle>
        </div>
      </main>
    </div>
  );
}
}

export default App;
