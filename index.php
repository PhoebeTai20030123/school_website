<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 |  教室借用系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="a_top.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: white"> 
    <div class="nav">
        <ul class="nav__list">
          <li class="nav__listlogo">
            <a href="index.html"><img src="school_logo.jpg" alt=""></a>
          </li>
        </ul>
    </div>

    <div class="box-form" >
      <div class="left" style="width:500px; height:95%; background-color: aliceblue; border-radius: 4px;">
        <div class="overlay">
          <h1>目前剩餘教室</h1>
          <div class="accordion" id="floor">
            <!--3rd floor-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headin3F">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  3F
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="heading3F" data-bs-parent="#floor">
                <div class="accordion-body">
                  <!--3F table-->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">教室名稱</th>
                        <th scope="col">間數</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>302</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>303</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>311</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--4th floor-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading4F">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  4F
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="heading4F" data-bs-parent="#floor">
                <div class="accordion-body">
                  <!--4F table-->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">教室名稱</th>
                        <th scope="col">間數</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>402</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>403</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>404</td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <td>420</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--5th floor-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading5F">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  5F
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="heading5F" data-bs-parent="#floor">
                <div class="accordion-body">
                  <!--4F table-->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">教室名稱</th>
                        <th scope="col">間數</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>506</td>
                        <td>1</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form class="form" name="LoginSys" method="post" action="logincheck.php">
							
        <div class="right" style="width:100%; height:100%">
          <h5 style="color: #2BE23D;">Login</h5>
          <div class="inputs">
          <input type="text" placeholder="學生請以學號為帳號" name="acc">
          <br>
          <input type="password" placeholder="預設密碼為西元生日8碼" name="pwd">
        </div>
          <br>
          <div class="checkbox-container">
            <input type="checkbox" id="cb"  >
            <label for="cb">remember me.</label>
          </div>
          <br>
          <h3 ><a href="forget.html"style="color:#d195b3">forget password?</a></h3>
          <br>
          <input type="submit" value="登入" name="LoginSys" id="submitButton" class="btn-light-bg" title="點此登入!" />
        </div>
      </form>
    </div>
  </body>
</html>
