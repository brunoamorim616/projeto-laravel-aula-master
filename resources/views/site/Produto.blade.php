
@extends('site.layout')

@section('titulo')
    {{$titulo}}
@stop

@section('conteudo')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Produtos</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para este template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading display-1">Produtos</h1>
          <p class="lead text-muted"></p>
          
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" src="https://www.extra-imagens.com.br/InstrumentosMusicais/Cordas/Contrabaixo/12544437/1091583742/contrabaixo-eletrico-ativo-5-cordas-gb205a-ng-natural-brilhante-giannini-12544437.jpg" height="300px" width="100px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Contrabaixo classic warwick</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                     
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="data:image/jpeg;base64,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" height="300px" width="100px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text">Contrabaixo branco c/ preto</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="https://www.pontofrio-imagens.com.br/InstrumentosMusicais/Cordas/Contrabaixo/10375969/886563146/contrabaixo-4-cordas-jazz-bass-preto-sjb005-bk-eagle-10375969.jpg" height="300px" width="100px" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Contrabaixo preto c/ branco</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            

    </main>

    <footer class="text-muted">
      <div class="container">
        
        
      </div>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
