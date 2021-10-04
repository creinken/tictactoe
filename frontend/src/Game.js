import React from 'react';
import Board from './Board';

class Game extends React.Component {
    state = {
        board: [['','',''],['','',''],['','','']]
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