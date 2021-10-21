const playersReducer = (state = { players: [] }, action) => {
    switch (action.type) {
        case 'PLAYER_JOIN':
            return {
                ...state,
                players: [...state.players, action.payload]
            }
        
        case 'PLAYER_LEAVE':
            return {
                ...state,
                players: state.players.filter(player => player.id !== action.id)
            }
    
        default:
            return state;
    }
}

export default playersReducer