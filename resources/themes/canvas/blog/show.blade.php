 <section class="breadcrumb-area breadcrumb-overlay p-relative pb-115 pt-195 jarallax" data-background="/public/front/assets/img/breadcrumb/breadcrumb-bg-1.jpg" style="background-image: none; background-attachment: scroll; background-size: auto;"><div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; transition: transform 0s linear -1ms, -webkit-transform 0s linear -1ms; visibility: hidden; z-index: -100;" id="jarallax-container-0"><div style="position: fixed; top: 0px; left: 0px; width: 1440px; height: 435px; overflow: hidden; pointer-events: none; transition: transform 0s linear -1ms, -webkit-transform 0s linear -1ms; background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;https://html.weblearnbd.net/seomy-prv/seomy//public/front/assets/img/breadcrumb/breadcrumb-bg-1.jpg&quot;); background-size: 1440px 644.25px; visibility: visible; transform: translate3d(0px, 0px, 0px);"></div></div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content breadcrumb__content-2 text-center p-relative z-index-1">
                     <h3 class="breadcrumb__title">Blog</h3>
                     <x-application-breadcrumbs />
                  </div>
               </div>
            </div>
         </div>
         <div class="inner-shape-dots">
            <img src="/public/front/assets/img/shape/inner-dots-shape.png" alt="">
         </div>
      </section>
       
<x-application-blog-wrapper>
    <x-page-wrapper class="bg-transparent">
        <div class="row blog-posts">
            @foreach ($posts as $post)
                @php
                    $dynamic_class = $loop->index > 0 && ($loop->iteration % 7 == 6 || $loop->iteration % 7 == 0) ? 'list-view' : 'grid-view';
                    $columns = $loop->index > 0 && in_array($loop->iteration % 7, [2, 3, 4, 5]) ? 6 : 12;
                @endphp
             
                
                <div class="col-lg-6 col-md-6">
                           <div class="tpblog-item-2 mb-30">
                               @if ($post->getFirstMediaUrl('featured-image'))
                            <div class="tpblog-thumb-2">
                                 <a href="{{ route('posts.show', ['slug' => $post->slug]) }}"><img src="{{ $post->getFirstMediaUrl('featured-image') }}" alt="{{ $post->title }}"></a>
                              </div>
                        @endif
                             
                              <div class="tpblog-wrap">
                                 <div class="tpblog-content-2">
                                       @foreach ($post->categories as $category)
                                         <span><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></span>
                                       
                                    @endforeach
                                 
                                    <h4 class="tpblog-title-2"><a href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h4>
                                 </div>
                                 <div class="tpblog-meta-2">
                                    <span>
                                       <i>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#565764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M10.5967 10.226L8.42672 8.93099C8.04872 8.70699 7.74072 8.16799 7.74072 7.72699V4.85699" stroke="#565764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </i>
                                      {{ $post->created_at->format('M d') }} <span
                                        class="mx-1">/</span>
                                    {{ $post->created_at->diffForHumans() }}
                                    </span>
                                    <span>
                                       <a href="#">
                                          <i>
                                             <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99976 7.98487C8.92858 7.98487 10.4922 6.42125 10.4922 4.49243C10.4922 2.56362 8.92858 1 6.99976 1C5.07094 1 3.50732 2.56362 3.50732 4.49243C3.50732 6.42125 5.07094 7.98487 6.99976 7.98487Z" stroke="#565764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M13 14.9697C13 12.2665 10.3108 10.0803 7 10.0803C3.68917 10.0803 1 12.2665 1 14.9697" stroke="#565764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             </svg>
                                          </i>
                                       {{ $post->author->name }}
                                       </a>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                
            @endforeach
        </div>
    </x-page-wrapper>
      @push('page_scripts')
  <script>
      
      $(document).ready(function(){
        $('#header-sticky').addClass('tp-white-menu');  
      })
  </script>
  
  @endpush

</x-application-blog-wrapper>

