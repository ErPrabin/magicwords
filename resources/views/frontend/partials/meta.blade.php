@foreach (getPageMetaTags($metatags, $page) as $meta)
<meta name="{!! strip_tags($meta['meta_name']) !!}" content="{!! strip_tags($meta['meta_content']) !!}" />
@endforeach