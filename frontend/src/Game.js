import React from 'react';

class Game extends React.Component {
    state = {
        board: [['','',''],['','',''],['','','']]
    };
    
    render() {
        return (
            <div className="Game"></div>
        );
    }
}

export default Game;