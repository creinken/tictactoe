const BoardSquare = (props) => {

    return (
        <button className="square">
            {props.value}
        </button>
    );
}

export default BoardSquare