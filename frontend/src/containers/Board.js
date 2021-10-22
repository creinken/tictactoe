import BoardSquare from "../components/BoardSquare";

const Board = () => {
    const player = 'X';
    
    function createSquare(X, Y) {
        return <BoardSquare X={X} Y={Y}/>
    }

    return (
        <div className="Game-Board">
            <div className="player">Current Player: {player}</div>
            <div className="board-row">
                {createSquare(0, 0)}
                {createSquare(0, 1)}
                {createSquare(0, 2)}
            </div>
            <div className="board-row">
                {createSquare(1, 0)}
                {createSquare(1, 1)}
                {createSquare(1, 2)}
            </div>
            <div className="board-row">
                {createSquare(2, 0)}
                {createSquare(2, 1)}
                {createSquare(2, 2)}
            </div>

        </div>
    );
}

export default Board;