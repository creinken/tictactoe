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
                {createSquare(props.board[0][0])}
                {createSquare(props.board[0][1])}
                {createSquare(props.board[0][2])}
            </div>
            <div className="board-row">
                {createSquare(props.board[1][0])}
                {createSquare(props.board[1][1])}
                {createSquare(props.board[1][2])}
            </div>
            <div className="board-row">
                {createSquare(props.board[2][0])}
                {createSquare(props.board[2][1])}
                {createSquare(props.board[2][2])}
            </div>

        </div>
    );
}

export default Board;