<nav class="navbar navbar-expand navbar-dark bg-green">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logow.png" width="40" height="40" alt="">
              </a>
                <a class="navbar-brand" href="/home">iNGage</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
          
                <div class="collapse navbar-collapse" id="navbarsExample02">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Events 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="/create_events">Create Events</a>
                          <a class="dropdown-item" href="/all-events">View Events</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/my-events">My Events</a>
                        </div>
                      </li>
                  </ul>
              
                  <span style="color:white;padding-right:20px"><?php 
                  if(isset($_SESSION['current_user_email'])){
                     $full_name=get_user_full_name($_SESSION['current_user_email']);
                      echo '<a style="color:white" href="profile?email='.$_SESSION['current_user_email'].'">'.$full_name.'</a>';
                  }?></span>
                
                   <div class="logout">
                <button class="btn btn-default btn-circle text-uppercase" type="button" onclick="signout()">
                    <span class="glyphicon glyphicon-off"></span> Logout                    
                </button>  
                              
            </div>
                 
                        
                <script>
                function signout(){
                  location.href='/signout';
                }
                </script>
                </div>
              </nav>




