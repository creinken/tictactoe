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
                <Board />
            </div>
        );
    }
}

export default Game;