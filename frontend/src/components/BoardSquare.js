const BoardSquare = (props) => {

    return (
        <button className="square" onClick={props.value=props.currentPlayer}>
            {props.value}
        </button>
    );
}

export default BoardSquare