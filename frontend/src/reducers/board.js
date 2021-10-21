const boardReducer = (state = [['','',''],['','',''],['','','']], action) => {
    switch (action.type) {
        case 'ADD_TOKEN':
            return {
                state: action.payload
            }
    
        default:
            return state;
    }
}

export default boardReducer