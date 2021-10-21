const gameReducer = (state = { game: { id: 0, players: [], current_player: '', game_over: false, moves: [] } }, action) => {
    switch (action.type) {
        case 'PLAYER_JOIN':
            return {
                ...state,
                game: {
                    players: [...state.game.players, action.payload]
                }
            }
        
        case 'PLAYER_LEAVE':
            return {
                ...state,
                game: {
                    players: state.game.players.filter(player => player.id !== action.id)
                }
                
            }
        
        case 'ADD_MOVE':
            return {
                ...state,
                game: {
                    moves: [...state.game.moves, action.payload]
                }
            }
        
        case 'GAME_OVER':
            return {
                ...state,
                game: {
                    game_over: true
                }
            }

        default:
            return state;
    }
}

export default gameReducer