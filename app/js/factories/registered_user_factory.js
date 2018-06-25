app.service('loginService', function () {
    var _login_user = "login";
    return {
        setName: function (login_user) {
            _login_user = login_user;
        },
        getName: function () {
            return _login_user;
        }
    }
})