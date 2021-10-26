import { userConstants } from '../constants';
import { userService } from '../services';
import { alertActions } from './';
import { history } from '../helpers';

export const userActions = {
    login,
    logout,
    getAll
};

function login(username, password) {
    return dispatch => {
        dispatch(request({ username }));

        userService.login(username, password)
            .then(
                user => {
                    dispatch(success(user));
                    history.push('/');
                },
                error => {
                    dispatch(failure(error));
                    dispatch(alertActions.error(error));
                }
            );
    };

    function logout() {
        userService.logout();
        return { type: userConstants.LOGOUT };
    }

    function getAll() {
        return dispatch => {

            userService.getAll()
                .then(
                    users => dispatch(success(users)),
                    error => dispatch(failure(error))
                );
        };

        function request() { return { type: userConstants.GETALL_REQUEST }}
        function success(users) { return { type: userConstants.GETALL_SUCCESS, users } }
        function failure(error) { return { type: userConstants.GETALL_FAILURE, error } }
    }
}