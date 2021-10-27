import React, { Component } from 'react';
import { Router, Route } from 'react-router-dom';
import { connect } from 'react-redux';

import { history } from './helpers';
import { alertActions } from './actions';
import { PrivateRoute } from './components';
import Game from './containers/Game';
import HomePage from './HomePage';
import LoginPage from './LoginPage';


class App extends Component {
	constructor(props) {
    	super(props);

		const { dispatch } = this.props;
		history.listen((location, action) => {
			// clear alert on location change
			dispatch(alertActions.clear());
		});
  	}

  	render() {
		const { alert } = this.props;
    	return (
      		<div className="jumbotron">
				<div className="container">
					<div className="col-sm-8 col-sm-offset-2">
						{alert.message &&
							<div className={`alert ${alert.type}`}>{alert.message}</div>
						}
						<Router history={history}>
							<>
            					<PrivateRoute exact path="/" component={HomePage} />
            					{/* <Route exact path="/games" render={routerProps => <Game {...routerProps} /> } /> */}
            					<Route path={`/games/:gameId`} render={routerProps => <Game {...routerProps} />} />
            					<Route path="/login" render={() => <LoginPage />} />
          					</>
      					</Router>
					</div>
				</div>
			</div>
    	);
  	}
}

function mapStateToProps(state) {
	const { alert } = state;
	return {
		alert
	};
}

export default connect(mapStateToProps)(App);