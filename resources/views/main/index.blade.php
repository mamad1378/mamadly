@extends('/main/layouts/end')

@section('page_title' , 'main')


@section('feed_list')

@foreach ($categories as $category)
    <a href="#" class="menu-item">
        <li class="item-color">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="float-left bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            <p>
                {{$category->title}}        
            </p>
        </li>
    </a>            
@endforeach

    {{-- @unless ($categories)
    @else    
        <a href="#" class="menu-item">
            <li class="create  item-color">
                not any feed
            </li>
        </a>  
    @endif --}}

@endsection



@section('content')
    index page
@endsection