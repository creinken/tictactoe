import React, { Component } from 'react';
import { connect } from 'react-redux';
import Board from './Board';
import { fetchGame } from '../actions/game';

class Game extends Component {

    componentDidMount() {
        console.log(this.props.match.url)
        this.props.fetchGame(this.props.match.url)
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
    return { game: state.gameReducer.game }
}

const mapDispatchToProps = dispatch => {
    return { fetchGame: url => dispatch(fetchGame(url))}
}

export default connect(mapStateToProps,mapDispatchToProps)(Game);