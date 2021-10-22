import { connect } from "react-redux";
import React, { Component } from 'react';
import { add_token } from "../actions/game";

class BoardSquare extends Component {
    token = 'X';

    handleOnClick(X, Y, token) {
        let payload = [X, Y, token];
        return payload;
    }

    render () {
        return (
            <button className="square" onClick={() => this.props.add_token(this.handleOnClick(this.props.X, this.props.Y, this.token))}>
                {this.props.board[this.props.X][this.props.Y]}
                {console.log(this.props)}
            </button>
        );
    }
}

const mapStateToProps = state => {
    return {board: state.game.board}
}

const mapDispatchToProps = dispatch => {
    return {add_token: (board) => dispatch(add_token(board))}
}

export default connect(mapStateToProps, mapDispatchToProps)(BoardSquare)