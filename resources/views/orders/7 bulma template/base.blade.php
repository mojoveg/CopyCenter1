

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>bulma cards</title>
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
  <!-- Bulma Version 0.8.2-->
  <link rel='stylesheet' href='https://unpkg.com/bulma@0.8.2/css/bulma.min.css'>
  <link rel="stylesheet" href="/css/kanban.css">
  <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
</head>
<body>

  @include('orders.navbar')




  @yield('main')



  <div class="columns is-mobile is-centered">
    <div class="column is-half is-narrow"></div>
  </div>
  <footer>
    <div class="box cta">
      <div class="columns is-mobile is-centered">
        <div class="field is-grouped is-grouped-multiline">
          <div class="control">
            <div class="tags has-addons"><a class="tag is-link" href="https://github.com/BulmaTemplates/bulma-templates">Bulma Templates</a><span class="tag is-light">Daniel Supernault</span></div>
          </div>
          <div class="control">
            <div class="tags has-addons"><a class="tag is-link">The source code is licensed</a><span class="tag is-light">MIT  <i class="fa fa-github"></i></span></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="/js/bulma.js"></script>
</body>
</html>
