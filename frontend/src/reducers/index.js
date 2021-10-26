import { combineReducers } from 'redux';
import playersReducer from './players';
import gameReducer from './game';
import { authentication } from './authentication.reducer';
import { users } from './users.reducer';
import { alert } from './alert.reducer';

const rootReducer = combineReducers({
    authentication,
    users,
    alert,
    playersReducer,
    gameReducer
});

export default rootReducer;