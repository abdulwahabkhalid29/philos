@extends('layout.scaffold')
@push('title')
Brand
@endpush
@section('content')
<main>
    <section class="post-details-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                     <!-- also-like -->
                     <div class="also-like mt-30">
                        <div class="section-title mb-30">
                            <h2>{{$brand->category->name}} Brands</h2>
                        </div>
                        <div class="row">
                            @foreach ($clothes as $item)
                            <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                   <a href="{{route('pages.detail',$item->id)}}"> <img src="{{asset('upload/image/'.$item->image)}}"  style="width: 150px;" alt=""></a>
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="product_detail.html">{{$item->name}}</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                </p>
                                <h5 class="item-price">{{$item->price}}</h5>
                            </div>
                        </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="container">
      <div class="row">
         @forelse($brands as $brand)
         <a href="{{route('pages.brand',$brand->id)}}"><div class="col-md-3">
            <div class="card ml-5 p-4" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('upload/image/'.$brand->image)}}" alt="Card image cap">
               <div class="card-body ">
                                <li><a href="{{route('pages.brand',$brand->id)}}"> <span>{{$brand->brandCount($brand->id)}}</span></a></li>
               </div>
            </div>
         </div></a>
         @empty
         @endforelse
         </div>
      </div>
        </div>
    </section>

</main>
@endsection 