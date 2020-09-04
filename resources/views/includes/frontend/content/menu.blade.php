<nav id="menu" class="main-menu">
    <ul>
        <li><span><a href="<?php echo url('home');?>">Home</a></span></li>
        <li><span><a href="<?php echo url('home/listings');?>">Listings</a></span></li>
        <li><span><a href="<?php echo url('home/category');?>">Category</a></span></li>
        <li><span><a href="<?php echo url('home/pricing');?>">Pricing</a></span></li>
        <li><span><a href="<?php echo url('home/blog');?>">Blog</a></span></li>
        <?php if (Auth::check()): ?>
        <li><span><a href="javascript::">Account</a></span>
            <ul class="manage_account_navbar">
                <li><a href="<?php echo route('dashboard.index');?>">Manage Account</a></li>
                <form action="{{url('logout')}}" method="post">0
                    @csrf
                    <li><a href="#" onclick="$(this).closest('form').submit();">Logout</a></li>
                </form>

            </ul>
        </li>
        <?php endif; ?>
    </ul>
</nav>




