
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Web 101 - Projects</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--link rel="stylesheet" href="../projects.css"-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    
  </head>

  <body>

    <header id="navcontainer">
     
    </header>

    <main role="main">

      <div class="container">
        
          <h1>Routes</h1>

          <ul class="list-group">
            <li class="list-group-item">
              <h2>POST - api/login</h2>
              <p>payload: {
                "email": "esimerkki@esimerkki.com",
                "password": "salasana"
            }</p>
            <p>respose: logged in user</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>POST - api/register</h2>
              <p>payload: {
                "name": "nimi",
                "email": "esimerkki@esimerkki.com",
                "password": "salasana"
            }</p>
            <p>respose: newly registered and logged in user</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>POST - api/user</h2>
              <p>payload: NONE</p>
            <p>respose: logged in user</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>POST - api/logout</h2>
              <p>payload: NONE</p>
            <p>respose: status 200</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>GET - api/projects</h2>
              <p>payload: NONE</p>
            <p>respose: array of projects</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>POST - api/projects</h2>
              <p>payload: {"name": "nimi", "description": "kuvaus"}</p>
            <p>respose: newly added project</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>PUT|PATCH - api/projects/{project}</h2>
              <p>payload: {"name": "nimi", "description": "kuvaus"}</p>
            <p>respose: newly updated project</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>DELETE - api/projects/{project}</h2>
              <p>payload: NONE</p>
            <p>respose: {
              "destroyed" => true|false
            }</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>GET - api/projects/{project}/manager</h2>
              <p>payload: NONE</p>
            <p>respose: manager of selected project</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>GET - api/projects/{project}/tasks</h2>
              <p>payload: NONE</p>
            <p>respose: list of tasks in selected project</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>POST - api/projects/{project}/tasks</h2>
              <p>payload: {"name" : "nimi", "description": "kuvaus"}</p>
            <p>respose: newly added task</p>
            

            
            </li>
            <li class="list-group-item">
              <h2>PATCH - api/projects/{project}/tasks/{task}</h2>
              <p>payload: {"name" : "nimi", "description": "kuvaus"}</p>
            <p>respose: newly updated task</p>
            

            
            </li>
          </ul>

      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
       
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script-->




<script>


  document.addEventListener('DOMContentLoaded', function(){

    /*axios.get('/nav.html').then(function(nav) {
          document.querySelector('#navcontainer').innerHTML = nav.data;
        }).catch(function(navErr) {

        })*/
  })
  
</script>
  </body>
</html>


