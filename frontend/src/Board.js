import BoardSquare from "./BoardSquare";

const Board = (props) => {
    function createSquare(value) {
        return <BoardSquare value={value} />
    }
    const player = 'X';

    return (
        <div className="Game-Board">
            <div className="player">Current Player: {player}</div>
            <div className="board-row">
                {this.createSquare({props.board[0][0]})}
            </div>
        </div>
    );
}

export default Board;