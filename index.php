<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <title>GoldenView - Test01</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" href="http://goldenview-novo/img/favicon.png"/>
      <link rel="stylesheet" href="http://goldenview-novo/css/bootstrap.min.css"> 
      <link rel="stylesheet" href="http://goldenview-novo/css/webstyle.css"> 
   </head>
   <body id="idgbody">

      <!--MENU-->   
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
         <div class="container">
            <a class="navbar-brand" href="#"><img title="GoldenView" alt="[Logo GoldenView]" src="http://goldenview-novo/img/logo.png"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#idgnavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div id="idgnavbar" class="collapse navbar-collapse">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a class="nav-link" href="#idhome">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#idgempresa">Empresa</a></li>
                  <li class="nav-item"><a class="nav-link" href="#idgsolucoes">Soluções</a></li>
                  <li class="nav-item"><a class="nav-link" href="#idgcases">Cases</a></li>
                  <li class="nav-item"><a class="nav-link" href="#idgartigos">Artigos</a></li>
                  <li class="nav-item"><a class="nav-link" href="#idgdownload">Download</a></li>
                  <li class="nav-item"><a class="nav-link" href="#idgfalecon">Fale Conosco</a></li>
               </ul>
            </div>
         </div>
      </nav>

      <!--HOME SECTION-->   
      <header id="idghome">
         <div class="dark-overlay">
            <div class="home-inner">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 d-none d-lg-block">
                        <h1 class="display-4">GoldenView Tecnologia da Informação</h1>
                     </div>
                     <div class="col-lg-4">
                        <div class="card text-center bg-dark card-form">
                           <div class="card-body">
                              <img class="my-2" title="GoldenView" alt="[Logo GoldenView]" src="http://goldenview-novo/img/logo.png"/>
                              <p>Informe usuário e senha para acessar o sistema GDView</p>
                              <form>
                                 <div class="form-group">
                                    <input type='text' class="form-control form-control-sm" placeholder="E-mail">
                                 </div>
                                 <div class="form-group">
                                    <input type='password' class="form-control form-control-sm" placeholder="Senha">
                                 </div>
                                 <input type="submit" value="Entrar" class="btn btn-outline-light btn-block">
                              </form>
                           </div>                           
                        </div>   
                     </div>                        
                  </div>     
               </div>
            </div>         
         </div>     
      </header>

      <!--OUTRA SECTION-->   
      <section id="idgsection">
         <div class="container">
            <div class="row">
               <div class="col text-center">
                  <div class="m-5">
                     <h1 class="display-4">OUTRA SEÇÃO</h1>
                     <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting 
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                        the 1500s, when an unknown printer took a galley of type and scrambled it to 
                        make a type specimen book. It has survived not only five centuries, but also 
                        the leap into electronic typesetting, remaining essentially unchanged. 
                     </p>
                  </div>
               </div>               
            </div>            
         </div>
      </section>      

      <!--FOOTER-->   
      <footer id="idgfooter" class="bg-dark">
         <div class="container">
            <div class="row">
               <div class="col text-center">
                  <div class="py-4">
                     <h1 class="h3">GoldenView</h1>
                     <p>Copyright &copy; 2017</p>
                     <button class="btn btn-primary" data-toggle="modal" data-target="#idgfaleconosco">Fale Conosco</button>
                  </div>
               </div>
            </div>
         </div>            
      </footer>

      <!--FALE CONOSCO MODAL-->   
      <div id="idgfaleconosco" class="modal fade text-dark">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="idgfaleconoscotitle">Fale Conosco</h5>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control">
                     </div>                        
                     <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control">
                     </div>                        
                     <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control"></textarea>
                     </div>                        
                  </form>
               </div>
               <div class="modal-footer">
                  <button class="btn btn-primary btn-block">Enviar Mensagem</button>
               </div>
            </div>
         </div>

      </div>      

      <!--SCRIPTS-->   
      <script src="http://goldenview-novo/js/jquery.min.js"></script>
      <script src="http://goldenview-novo/js/popper.min.js"></script>
      <script src="http://goldenview-novo/js/bootstrap.min.js"></script>
   </body>
</html>
