import React, { Component } from 'react';
import Board from './Board';

class Game extends Component {
    state = {
        board: [['','',''],['','',''],['','','']],
        players: ['X','O']
    };
    
    render() {
        return (
            <div className="Game">
                {/* <Board board={this.state.board} players={this.state.players} /> */}
            </div>
        );
    }
}

export default Game;