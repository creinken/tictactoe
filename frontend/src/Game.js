import React, { Component } from 'react';
import Board from './Board';

class Game extends Component {
    state = {
        board: [['','',''],['','',''],['','','']]
    };
    
    render() {
        return (
            <div className="Game">
                <Board board={this.state.board} />
            </div>
        );
    }
}

export default Game;