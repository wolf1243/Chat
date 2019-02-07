<div class="col-2 panel">
    <div class="profile-div">
        <?php echo $content ?>
        <?php echo $profile['name']; echo '<br>' . $profile['id'];?>
        <img src="<?php echo $profile['path'] ?>" alt="">
    </div>
    <div>
        <div class="row panel-items">
            <div class="col-4"><i class="fas fa-user"></i></div>
            <div class="col-8 d-flex align-items-center"><a href="#" class="panel-link">Profile</a></div>
        </div>
        <div class="row panel-items">
            <div class="col-4"><i class="fas fa-comment-alt"></i></div>
            <div class="col-8 d-flex align-items-center"><a href="#" class="panel-link">Chat</a></div>
        </div>
        <div class="row panel-items">
            <div class="col-4"><i class="fas fa-cog"></i></div>
            <div class="col-8 d-flex align-items-center"><a href="#" class="panel-link">Settings</a></div>
        </div>
    </div>
</div>
<div class="col-10 content">
    <div class="row">
        <div class="col-2 d-flex align-items-center mt-5 mb-3"><h1>Chat</h1></div>
        <div class="col-10 left mt-5 mb-3">
            <i class="fas fa-bell"></i>
        </div>
    </div>
    <div class="search-div row">
        <div class="col-1 d-flex align-items-center"><i class="fas fa-search"></i></div>
        <div class="col-10"><input type="search" class="search form-control search" placeholder="Search"></div>
    </div>
</div>