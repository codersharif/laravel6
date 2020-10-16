<div id="header" class="container">
    <div id="logo">
        <h1><a href="#">SimpleWork</a></h1>
    </div>
    <div id="menu">
        <ul>
            <li class="{{Request::path() === '/'?'current_page_item':''}}"><a href="{{URL::to('/')}}" accesskey="1" title="">Homepage</a></li>
            <li><a href="#" accesskey="2" title="">Our Clients</a></li>
            <li class="{{Request::path() === 'about'?'current_page_item':''}}"><a href="{{URL::to('about')}}" accesskey="3" title="">About Us</a></li>
            <li class="{{Request::path() === 'article'?'current_page_item':''}}"><a href="{{URL::to('article')}}" accesskey="4" title="">@lang('label.ARTICLE')</a></li>
            <li><a href="#" accesskey="5" title="">Contact Us</a></li>
        </ul>
    </div>
</div>