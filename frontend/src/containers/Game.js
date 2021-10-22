import React, { Component } from 'react';
import { connect } from 'react-redux';
import Board from './Board';
import { fetchMoves } from '../actions/game';

class Game extends Component {

    componentDidMount() {
        this.props.fetchMoves(this.props.match.url)
    }
    
    render() {
        return (
            <div className="Game">
                <Board />
            </div>
        );
    }
}

const mapStateToProps = state => {
    return { game: state.game }
}

const mapDispatchToProps = dispatch => {
    return { fetchMoves: url => dispatch(fetchMoves(url))}
}

export default connect(mapStateToProps,mapDispatchToProps)(Game);