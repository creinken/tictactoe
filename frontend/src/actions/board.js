export const add_token = ([X, Y, token]) => {
    return {
        type: 'ADD_TOKEN',
        payload: {x: X,
                y: Y,
                token: token
        }
    }
}