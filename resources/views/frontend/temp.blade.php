<div class="col-md-4">
    <article class="post post-medium border-0 pb-0 mb-5">
        <div class="post-image">
            <a href="blog-post.html">
                <img src="img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
            </a>
        </div>

        <div class="post-content">

            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Amazing Mountain</a></h2>
            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

            <div class="post-meta">
                <span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>
                <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
            </div>

        </div>
    </article>
</div>
                    @foreach($pengumuman as $item)
                    <article class="mb-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body p-0 z-index-1">
                                <a <?php echo ("href='/artikel/pengumuman/detail/$item->id'") ?> data-cursor-effect-hover="plus">
                                    <img class="card-img-top rounded-0 mb-2" src="/storage/{{$item->image}}" alt="Card Image">
                                </a>
                                <p class="text-uppercase text-color-default text-1 my-2">
                                    @php
                                    $date = \Carbon\Carbon::parse($item->tanggal);
                                    @endphp
                                    <time pubdate datetime="2024-06-9">{{$date->format('M d, Y')}}</time>
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title text-5 font-weight-bold pb-1 mb-2">
                                        <a class="text-color-dark text-color-hover-primary text-decoration-none" <?php echo ("href='/artikel/pengumuman/detail/$item->id'") ?>>
                                            {{$item->judul}}
                                        </a>
                                    </h4>
                                    <!-- <p class="card-text mb-2">{{$item->deskripsi}}</p> -->
                                    <a <?php echo ("href='/artikel/pengumuman/detail/$item->id'") ?> class="read-more text-color-primary font-weight-semibold mt-0 text-2">Selengkapnya <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach