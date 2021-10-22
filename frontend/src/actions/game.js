export const player_join = (player) => {
    return {
        type: 'PLAYER_JOIN',
        payload: player
    }
}

export const player_leave = (player) => {
    return {
        type: 'PLAYER_LEAVE',
        payload: player
    }
}

export const add_move = (move) => {
    return {
        type: 'ADD_MOVE',
        payload: move
    }
}

export const game_over = (isOver) => {
    return {
        type: 'GAME_OVER',
        payload: isOver
    }
}

export const add_token = ([X, Y, token]) => {
    return {
        type: 'ADD_TOKEN',
        payload: {x: X,
            y: Y,
            token: token
        }
    }
}