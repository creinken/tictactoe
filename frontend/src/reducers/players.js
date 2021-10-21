const playersReducer = (state = [], action) => {
    switch (action.type) {
        case 'PLAYER_JOIN':
            return {
                ...state + action.payload
            }
        
        case 'PLAYER_LEAVE':
            return {
                state: state.filter(player => player.id !== action.id)
            }
    
        default:
            return state;
    }
}

export default playersReducer