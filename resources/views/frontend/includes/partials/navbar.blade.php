<li class="active menu-item-has-children"><a href="#">Home</a>
    <ul class="sub-menu">
        <li><a href="{{ route('home') }}">Home One</a></li>
        <li><a href="{{ route('indexTwo') }}">Home Two</a></li>
        <li><a href="{{ route('indexThree') }}">Home Three</a></li>
    </ul>
</li>
<li><a href="{{ route('about') }}">About</a></li>
<li class="menu-item-has-children"><a href="#">Services</a>
    <ul class="sub-menu">
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('architecture') }}">Architecture</a></li>
        <li><a href="{{ route('interiorDesign') }}">Interior Design</a>
        </li>
        <li><a href="{{ route('uiuxDesign') }}">UiUx Designing</a>
        </li>
        <li><a href="{{ route('buildingRenovation') }}">Building Renovation</a>
        </li>
        <li><a href="{{ route('constructionSite') }}">Construction Site</a>
        </li>
        <li><a href="{{ route('securitySystem') }}">Security System</a>
        </li>
    </ul>
</li>
<li class="menu-item-has-children"><a href="#">Pages</a>
    <ul class="sub-menu">
        <li><a href="{{ route('team') }}">Team</a></li>
        <li><a href="{{ route('teamDetails') }}">Team Details</a>
        </li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('projectDetails') }}">Project
                Details</a></li>
        <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
        <li><a href="{{ route('pricing') }}">Pricing</a></li>
        <li><a href="{{ route('faq') }}">Faq</a></li>
        <li><a href="{{ route('errorPage') }}">Error</a></li>
    </ul>
</li>
<li class="menu-item-has-children"><a href="#">Shop</a>
    <ul class="sub-menu">
        <li><a href="{{ route('shop') }}">Shop</a></li>
        <li><a href="{{ route('shopDetails') }}">Shop Details</a>
        </li>
        <li><a href="{{ route('cart') }}">Cart</a></li>
        <li><a href="{{ route('checkout') }}">Checkout</a></li>
    </ul>
</li>
<li class="menu-item-has-children"><a href="#">Blog</a>
    <ul class="sub-menu">
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('blogSidebar') }}">Blog Sidebar</a>
        </li>
        <li><a href="{{ route('blogDetails') }}">Blog Details</a>
        </li>
    </ul>
</li>
<li><a href="{{ route('contact') }}">Contact</a></li>