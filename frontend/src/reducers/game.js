const gameReducer = (state = { id: 0, players: [], current_player: '', game_over: false, moves: [] }, action) => {
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
        
        case 'ADD_MOVE':
            return {
                ...state,
                moves: [...state.moves, action.payload]
            }
        
        case 'GAME_OVER':
            return {
                ...state,
                game_over: true
            }

        default:
            return state;
    }
}

export default gameReducer