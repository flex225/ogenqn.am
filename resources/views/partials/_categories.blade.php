<li>
    {{ $category->name }}
</li>
@if ($category->children->count())
<ul>
    @foreach($category->children as $category)
        @include('partials._categories', $category)
    @endforeach
</ul>
@endif