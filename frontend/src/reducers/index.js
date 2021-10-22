import { combineReducers } from 'redux';
import playersReducer from './players';
import gameReducer from './game';
// import boardReducer from './board';

export default combineReducers({
    players: playersReducer,
    game: gameReducer
});