<!DOCTYPE html>
<html lang="{{Lang::getLocale()}}">
	<head >
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/all.css')}}" rel="stylesheet" >
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
		<title>The-Deployer.com</title>
		<style type="text/css">
			.hero{
				color:#9d9ddd;
				height: 100vh;
				background-size: cover;
			  background-position: center;
			  background-image: url('img/hero-2.jpg');
				margin-bottom: 50px;

				display: flex;
				flex-direction: column;
        
				justify-content: center;
				align-items: center;
				text-align: center;
        
        /* Internet Explorer 10 */
        display:-ms-flexbox;
        -ms-flex-pack:center;
        -ms-flex-align:center;       
        /* Safari, Opera, and Chrome */
        display:-webkit-box;
        -webkit-box-pack:center;
        -webkit-box-align:center;
        /* W3C */
        box-pack:center;
        box-align:center;
			}
			#main-nav-container{
				margin-bottom:0px;
			}
			body,html {
			  position: relative;
			  background-color:#D6D6D6;

			}
      .hidden{
        display:none;
      }
			.footer{
				padding: 20px 20px;
				background-color: #444;
				color:#fff;
				margin-top:20px;

			}
			.footer a{
				color:#000;
			}
			#top-link-block.affix-top {
			    position: absolute; /* allows it to "slide" up into view */
			    bottom: -82px; /* negative of the offset - height of link element */
			    left: 10px; /* padding from the left side of the window */
			}
			#top-link-block.affix {
			    position: fixed; /* keeps it on the bottom once in view */
			    bottom: 18px; /* height of link element */
			    left: 10px; /* padding from the left side of the window */
			}
			.content .row{
				margin-top:20px;
				margin-bottom: 10px;
			}
			img.align-center{
				display: block;
			    margin-left: auto;
			    margin-right: auto;
			}
      /*.sidebar.affix-top{
        position: absolute; /* allows it to "slide" up into view *
       display:none;
      }
      .sidebar-right.affix-top{
        right:-250px;
        
      }
      .sidebar-left.affix-top{
        left:-250px;
        
      }
      .sidebar.affix{
        position:fixed;
        top:53px;
        display:block;
      }
      .sidebar{
        max-width: 200px;
        background-color:#f5f5f5;
        border-right: 1px solid #eee;
        overflow-x: hidden;
        overflow-y: hidden;
        position:absolute;
      }

      .sidebar-right{
        float:right;
        right:2px;
      }
      .sidebar-left{
        float:left;
        left:2px;
      }
      @media (max-width:600px){
        .sidebar{
          display:none;
        }
      }*/
      .contact input{
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background: none repeat scroll 0 center rgba(0, 0, 0, 0);
        border-color: -moz-use-text-color -moz-use-text-color #ffffff;
        border-image: none;
        border-style: none none solid;
        border-width: 0 0 1px;
        color: #000;
        font-size: 12px;
        font-style: italic;
        font-weight: 400;
        letter-spacing: 1px;
        margin: 0 0 5px;
        outline: 0 none;
        padding: 5px 10px;
        width: 100%;
      }
      .contact textarea {
        margin-top: 10px;
        margin-left: 50px;
        width: 500px;
        height: 100px;
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
        border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
        border-image: none;
        border-radius: 6px 6px 6px 6px;
        border-style: none solid solid none;
        border-width: medium 1px 1px medium;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
        color: #555555;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 1em;
        line-height: 1.4em;
        padding: 5px 8px;
        transition: background-color 0.2s ease 0s;
      }
      .contact textarea:focus {
        background: none repeat scroll 0 0 #FFFFFF;
        outline-width: 0;
      } 
      #main-nav-container{
        border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        -webkit-border-radius: 0 !important;
        -ms-border-radius:0 !important;
        -o-border-radius:0 !important
      }
      #main-nav-container.affix-top{
        position:fixed;
        top:-100px;
      }
      #main-nav-container.affix{
        position:fixed;
      }
		</style>
    @yield('stylesheets')
	</head>
  
  
  
	<body>
		<nav class="navbar navbar-default navbar-responsive" id="main-nav-container">
			<div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="{{url('/')}}">The-deployer.com</a>
			    </div>
			    <div class="collapse navbar-collapse" id="main-nav">
			    	<ul class="nav navbar-nav">
                <li class="pull-left"><a href="{{url('/about-us')}}">About Us</a></li>
			    		   <form class="navbar-form pull-right">
                   <input type="text" style="width: 200px;">
                   <button type="submit" class="btn btn-default">Submit</button>
                 </form>
                 <li class=""><a href=""><button type="button" class="btn btn-primary">Sign In</button></a></li>
                 </ul>
                @section('main-navigation')
			    	</ul>
			    </div>
			</div>
		</nav>
		<a name="top"></a>
     @if(!empty($errors) && count($errors))
    <div class="alert alert-warning alert-dismissible" role="alert">
      <h3><p>There seemed to be some errors, please check the following :</p></h3>
      <ul>
        @foreach ($errors->all('<li>:message</li>') as $message)
            {!! $message !!}
        @endforeach
      </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="page-content">
     
      @yield('hero')
      <!-- SIDEBAR -->
      <div class="sidebar-container">
        <div class="sidebar-left sidebar hidden">
          @yield('sidebar-left')
        </div>
        <div class="sidebar-right sidebar hidden">
          @yield('sidebar-right')
          <ul class='navbar'>
            <li>
              akfsjshdf
            </li>
          </ul>
        </div>
      </div><!-- /SIDEBAR -->
      <!-- CONTENT -->
      <div class="container" >
        @yield('content')      
      </div><!-- /CONTENT --> 
    </div>
		
		<span id="top-link-block" class="hidden">
		    <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
		        <i class="glyphicon glyphicon-chevron-up"></i>
		    </a>
		</span><!-- /top-link-block -->
		<footer class="footer">			
			<div class="container">
				<div class="row">
					<div class="col-xs-4 text-left">
						<p>&copy; Copyright The-deployer.com</p>
						<p>This website is powered by <a href="//laravel.com">Laravel</a> and  <a href="//getbootstrap.com">Twitter Bootstrap</a></p>
					</div>
					<div class="col-xs-4 text-center">
						<ul class="list-unstyled">
						
							<li><a href="https://github.com/Grisou13/load-balancer.git"><i class="fa fa-github"></i> Official Repository</a></li>
						</ul>
					</div>
					<div class="col-xs-4 text-right">
						<p><a href="/todo">Contact Us!</a></p>
					</div>
				</div>
			</div>
		</footer>
		
	    
	    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script type="text/javascript" src=" {{asset('js/all.js')}} "></script>
	    @yield('scripts')
	</body>
</html>
