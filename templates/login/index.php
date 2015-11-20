<div class="col-md-8 col-md-offset-2 " ng-controller="loginController as fCtrl">
    <form novalidate name="loginForm" ng-submit="">
      <p>Login:<br />
        <input type="text" class="form-control" name="login" ng-model="login" ng-init="login=''" required/><br />
        <span style="color:red" ng-show="loginForm.login.$dirty && loginForm.login.$invalid">
        <span ng-show="loginForm.login.$error.required">Username is required.</span>
      </p>
      <p> Password:<br />
        <input class="form-control" type="password" name="pssw" ng-model="pssw" ng-init="pssw=''" required/><br />
        <span style="color:red" ng-show="loginForm.pssw.$dirty && loginForm.pssw.$invalid">
        <span ng-show="loginForm.pssw.$error.required">Username is required.</span>
      </p>
      <button class="btn btn-success form-control" type="submit" ng-disabled="login.length == 0 || pssw.length == 0" ng-click="fCtrl.log(user)" />Logar</button>
      <br />
      <h1> {{ login.length }} </h1>
      <h1> {{ result }} </h1>
    </form>
</div>
