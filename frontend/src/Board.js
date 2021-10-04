function Board() {
    const player = 'X';

    return (
        <div className="Game-Board">
            <div className="player">Current Player: {player}</div>
        </div>
    );
}

export default Board;