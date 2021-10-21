import { combineReducers } from 'redux';
import playersReducer from './players';
import gameReducer from './game';

export default combineReducers({
    players: playersReducer,
    game: gameReducer
});