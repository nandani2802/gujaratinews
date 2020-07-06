 @if(count($data)>0)
                            @foreach($data as $row)
                            <li class="mega-menu-item">
                                <a href="news"><?php echo strtoupper($row->cname); ?></a>

                                <div class="sub-mega-menu">
                                    <div class="nav flex-column nav-pills" role="tablist">
                                        <a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">All</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-1" role="tab">Entertaiment</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-2" role="tab">Fashion</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-3" role="tab">Life Style</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-4" role="tab">Technology</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-5" role="tab">Travel</a>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="news-0" role="tabpanel">
                                            <div class="row">
                                                <div class="col-3">
                                                    <!-- Item post -->  
                                                    <div>
                                                        <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                            <img src="images/post-05.jpg" alt="IMG">
                                                        </a>

                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    Donec metus orci, malesuada et lectus vitae
                                                                </a>
                                                            </h5>

                                                            <span class="cl8">
                                                                <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    Music
                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>

                                                                <span class="f1-s-3">
                                                                    Feb 18
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-3">
                                                    <!-- Item post -->  
                                                    <div>
                                                        <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                                            <img src="images/post-10.jpg" alt="IMG">
                                                        </a>

                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    Donec metus orci, malesuada et lectus vitae
                                                                </a>
                                                            </h5>

                                                            <span class="cl8">
                                                                <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    Finance
                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>

                                                                <span class="f1-s-3">
                                                                    Jan 15
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-3">
                                                    <!-- Item post -->  
                                                    <div>
                                                        <a href="blog" class="wrap-pic-w hov1 trans-03">
                                                            <img src="images/post-14.jpg" alt="IMG">
                                                        </a>

                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    Donec metus orci, malesuada et lectus vitae
                                                                </a>
                                                            </h5>

                                                            <span class="cl8">
                                                                <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    Beach
                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>

                                                                <span class="f1-s-3">
                                                                    Feb 12
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-3">
                                                    <!-- Item post -->  
                                                    <div>
                                                        <a href="blog" class="wrap-pic-w hov1 trans-03">
                                                            <img src="images/post-36.jpg" alt="IMG">
                                                        </a>

                                                        <div class="p-t-10">
                                                            <h5 class="p-b-5">
                                                                <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    Donec metus orci, malesuada et lectus vitae
                                                                </a>
                                                            </h5>

                                                            <span class="cl8">
                                                                <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                                    Technology
                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>

                                                                <span class="f1-s-3">
                                                                    Jan 20
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @endif



                         