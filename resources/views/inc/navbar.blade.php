<nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TodoList</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExample02">
          <ul class="navbar-nav mr-auto">
    
              <!--if requested page (current page) is () then add 'active' or not -->
              <li class="{{Request::is('/') ? 'active':'nav-item'}}">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
    
              <li class="{{Request::is('todo/create') ? 'active':'nav-item'}}">
                <a class="nav-link" href="/todo/create">Create Todo</a>
              </li>
              
              <li class="{{Request::is('messages') ? 'active':'nav-item'}}">
                  <a class="nav-link" href="/messages">Messages</a>
              </li>
    
          </ul>
        </div>
      </nav>