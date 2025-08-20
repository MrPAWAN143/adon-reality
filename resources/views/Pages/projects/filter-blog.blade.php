 @if(isset($blogs) && $blogs->count() > 0)
 @foreach ($blogs as $blog)
 <x-blog-card url="{{route('blog.each', $blog->slug )}}" imageWrapperClass="m-blog-page-image-dev" cardCls="marketing-insights-card blog-page" class="featured-investment-img" src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" h4="{{ $blog->title }}" p="{{ $blog->summary }}" />
 @endforeach
 @else
 <p class="col-span-full text-center text-gray-500 py-6">No blog posts found matching your search.</p>
 @endif