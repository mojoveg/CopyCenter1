<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Copy Center</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
  <link rel="stylesheet" href="css/orders.css">

<style>
.flex-container {
  display: flex;
  flex-wrap: wrap;
  /*background-color: DodgerBlue;*/
}

/*.flex-container > div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}*/
</style>

</head>
<body>{{--
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
 --}}

  <body>

<section class="hero is-primary">
<div class="hero-body ">
    <div class="container">
      <h1 class="title">
        Hello World
      </h1>
      <p class="subtitle">
        My first website with <strong>Bulma</strong>!
      </p>

    </div>
</div>
</section>


  <section class="section">
    <div class="container">
      @yield('main')
    </div>
  </section>
  </body>

 </html>


