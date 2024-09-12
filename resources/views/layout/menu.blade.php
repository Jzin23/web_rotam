  <html>
  <style type="text/css">
    img{border-radius: 110%; height: 20%; width: 20%;}
    
    </style>
    <body>
      <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <div id="image_logo">
            <a href="{{Route('index')}}">
              <img src="{{ asset('image/logo.png') }}" alt="logo" id="logo" >
            </a>      
            
          
                </div>
        

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li>
              <a href="{{Route('Portfolio')}}" class="nav-link px-2 text-white">Portfolio 

              </a></li>
            <li><a href="{{Route('artigos')}}" class="nav-link px-2 text-white">Artigos</a></li>
            <li><a href="{{Route('galeria')}}" class="nav-link px-2 text-white">Galeria</a></li>
            
          </ul>


          <div class="text-end">
            <button  type="button" class="btn btn-warning">
              <a href="{{Route('login')}}">
                  Login
              </a>
            </button>
          </div>
        </div>
      </div>
    </header>
    </body>
  </html>