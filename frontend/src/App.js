import React, { Component } from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';
// import { connect } from 'react-redux';
import Game from './containers/Game';


class App extends Component {

  render() {
    return (
      <Router>
          <>
            {/* <Route exact path="/" component={Home} /> */}
            {/* <Route exact path="/games" render={routerProps => <Game {...routerProps} /> } /> */}
            <Route path={`/games/:gameId`} render={routerProps => <Game {...routerProps} />} />
            {/* <Route exact path="/login" component={Login} /> */}
          </>
      </Router>
    );
  }
}

// const mapStateToProps = state => {
//     return {
//         groups: state.groupsReducer.groups
//     }
// }

export default App