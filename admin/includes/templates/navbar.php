

<!-- <nav class="navbar navbar-inverse navbar-fixed-top" > -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="" >
    <div class="container">
    
        <!-- 1] {Navbar Container / Header} : Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand hvr-pop" href="#"> Shindow Pro <span>lnc.</span> </a> -->
            <a class="navbar-brand hvr-pop" href="#"> <?php echo lang('HOME_ADMIN'); ?> <span>lnc.</span> </a>
        </div>
    
        <!-- 2] {Navbar Container / Menu Items} : Collect the nav links, forms, and other content for toggling -->
        <div id="app-nav" class="collapse navbar-collapse" >
            
            <ul class="nav navbar-nav navbar-right">
                
                <li class="active"><a href="#MainC"> <span class="sr-only">(current)</span></a></li>
                
                <li><a href="#JSDOMCon"> </a></li>
                <li><a href="#JSDOMImp"> </a></li>
                <li><a href="#JSDOMSyntx"></a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Hot Links <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#VideoSection" target="_self" class="videoLink"> Lesson Video </a></li>
        
                        <li role="separator" class="divider"></li>
        
                        <li><a href="http://shadi-pro.epizy.com" target="_blank"> My References </a></li>
                        
                        <li role="separator" class="divider"></li>
                        
                        <li><a href="http://shadi-cv.epizy.com" target="_blank"> My Personal Website </a></li>
                  
                    </ul>
                </li>
            </ul>
            

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shadi<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</nav>
