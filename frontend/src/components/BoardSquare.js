import { useSelector, useDispatch } from "react-redux";
import { add_token } from "../actions/board";

const BoardSquare = (props) => {
    const board = useSelector(state => state.board);
    const dispatch = useDispatch();
    const token = 'X';
    console.log(board)

    const handleOnClick = (board, X, Y, token) => {
        let newBoard = board;
        newBoard[X][Y] = token;
        return newBoard;
    }

    return (
        <button className="square" onClick={() => dispatch(add_token(handleOnClick(board, props.X, props.Y, token)))}>
            {props.value}
        </button>
    );
}

export default BoardSquare