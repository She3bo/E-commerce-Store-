<nav class="main_navigation">
            <div class="employee_info">
                <div class="profile_picture">
                    <img src="../../public/img/user.png" alt="User Profile Picture">
                </div>
                <span class="name">أحمد شعبان</span>

                <span class="privilege"><?= @$App_Manger ?></span>
            </div>
            <ul class="app_navigation">
                <li><a href=""><i class="fa fa-dashboard"></i><?= @$stat ?></a></li>
                <li><a href="/employee"><i class="fa fa-users"></i><?= @$emplo ?></a></li>
                <li><a href="/language"><i class="fa fa-users"></i><?= @$chang_Lang ?></a></li>
                <li><a href=""><i class="fa fa-sign-out"></i><?= @$LogOut ?></a></li>
            </ul>
        </nav>
        <div class="action_view">