<ul class="sidenav sidenav-fixed" id="slide-out">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="img/3.jpg" class="responsive-img" alt="">
                    </div>
                    <a href="">
                        <img src="img/<?php echo $mUser->userImage  ; ?>" class="circle responsive-img" alt="">
                    </a>
                    <span class="name white-text"><?php echo $mUser->userName; ?></span>
                    <span class="email white-text"><?php echo $mUser->userEmail; ?></span>
                </div>
            </li>
            <li>
                <a href="dashboard">
                    <i class="material-icons">dashboard</i>Dashboard
                </a>
            </li>
            <li>
                <a href="users">
                    <i class="material-icons">person</i>All Users
                </a>
            </li>
            <li>
                <a href="publish">
                    <i class="material-icons">send</i>Post
                </a>
            </li>
            <li>
                <a href="posts">
                    <i class="material-icons">list</i>All Posts
                </a>
            </li>
            <div class="divider"></div>
            <li><a href="logout"><i class="material-icons">logout</i>Logout</a></li>
            <li><a href=""><i class="material-icons">call</i>Contact Us</a></li>
            <li><a href="about"><i class="material-icons">info</i>About Us</a></li>
        </ul>