<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telecom Ticket System</title>

    <style>
        body {
    background-color: #999;
    padding: 0;
    margin: 0;
    width: 100vw;
    height: 100vh;
    }

    .header {
    background-color: #676;
    width: 100%;
    height: 100px;
    display: flex;
    }

    .center {
    display: flex;
    justify-content: center;
    }

    .main {
    display: flex;
    }

    .navigation {
    width: 350px;
    background-color: rgb(67, 107, 107);
    max-height: calc(100vh - 100px);
    min-height: 150px;
    display: flex;
    justify-content: center;
    overflow: auto;
    }

    .fsre-link {
    color: blue;
    }
    .exercise {
    padding-top: 20px;
    color: blue;
    }
    .table-data,
    th,
    td {
    border: 1px solid black;
    width: 70%;
    margin: 20px auto;
    }
    .logo {
    font-weight: bold;
    font-size: 45px;
    margin: auto 15px;
    color: rgb(79, 35, 155);
    }

    .content {
    height: calc(100vh - 150px);
    width: calc(100vw - 250px);
    background-color: #999;
    text-align: center;
    overflow: auto;
    }
    .content__title {
    margin-top: 0;
    padding-top: 20px;
    }

    .footer {
    background-color: #676;
    height: 50px;
    }

    .footer__content {
    display: flex;
    justify-content: center;
    padding-top: 20px;
    }

    @media all and (max-width: 600px) {
    .main {
        display: flex;
        flex-direction: column;
    }
    .header {
        display: flex;
        justify-content: center;
    }
    .navigation {
        height: 50px;
        width: 100%;
    }
    .content {
        width: 100%;
        justify-content: center;
  }
}
    </style>
  </head>
  <body>
    <div class="header">
      <span class="logo">TTS</span>
    </div>
    <div class="main">
      <div class="navigation">
      </div>
      <div>
        <div class="content">

          <h1 class="content__title">Telecom Ticket System</h1>
          <div class="content__text"></div>
          <h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia,
            fugiat.
          </h3>
          <a class="fsre-link" href="https://github.com/dalibornerbergit/RNWA"
            >Github</a
          >
          <table class="table-data">
          </table>

          @yield('content')

          <article>
            <div id="resultDiv"></div>
          </article>
          <br />
          <div class="team">
            Projektni tim: <b>Ante Antonini i Dalibor Nerber</b>
            <br />
            <a href="mailto:anteantonini1@gmail.com"
              >anteantonini1@gmail.com
            </a>
            <br />
            <a href="mailto:dalibor.nerber@gmail.com"
              >dalibor.nerber@gmail.com
            </a>
          </div>
          <br />
        </div>
        <div class="footer">
          <div class="footer__content">Telecom Ticket System - 2021</div>
        </div>
      </div>
    </div>
  </body>
</html>