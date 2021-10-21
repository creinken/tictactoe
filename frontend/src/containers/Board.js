import BoardSquare from "../components/BoardSquare";
import { useSelector } from "react-redux";

const Board = () => {
    const player = 'X';
    
    function createSquare(value) {
        return <BoardSquare value={value} currentPlayer={player}/>
    }

    return (
        <div className="Game-Board">
            <div className="player">Current Player: {player}</div>
            <div className="board-row">
                {createSquare(useSelector(state => state.board[0][0]))}
                {createSquare(useSelector(state => state.board[0][1]))}
                {createSquare(useSelector(state => state.board[0][2]))}
            </div>
            <div className="board-row">
                {createSquare(useSelector(state => state.board[1][0]))}
                {createSquare(useSelector(state => state.board[1][1]))}
                {createSquare(useSelector(state => state.board[1][2]))}
            </div>
            <div className="board-row">
                {createSquare(useSelector(state => state.board[2][0]))}
                {createSquare(useSelector(state => state.board[2][1]))}
                {createSquare(useSelector(state => state.board[2][2]))}
            </div>

        </div>
    );
}

export default Board;