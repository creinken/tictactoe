const boardReducer = (state = [['','',''],['','',''],['','','']], action) => {
    switch (action.type) {
        case 'ADD_TOKEN':
            return {
                ...state,
                board: state.board.map((innerArray, index) => {
                    if (index === action.payload.x) return innerArray.map((item, index) => {
                        if (index === action.payload.y) return action.payload.token
                        return item
                    })
                    return innerArray
                })
            }
    
        default:
            return state;
    }
}

export default boardReducer