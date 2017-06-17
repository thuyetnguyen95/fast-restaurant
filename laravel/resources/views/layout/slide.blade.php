<div class="containers">
    <div class="row">

        @include('layout.sidebar')

        <div class="col-md-9">

            <div class="row carousel-holder" style="margin-top: 15px;">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            
                            <?php $count = 0; ?>
                            @foreach($slide as $sl)

                                <li data-target="#carousel-example-generic" data-slide-to="{{$count}}" 
                                
                                @if($count == 0)
                                    class="active"
                                @endif

                                ></li>

                            <?php $count++ ;?>
                            @endforeach
                            
                        </ol>
                        <div class="carousel-inner">
                            <?php $i=0 ;?>
                            @foreach($slide as $sl)
                                <div 
                                    @if($i == 0)
                                        class="item active"
                                    @else 
                                        class="item" 
                                    @endif
                                >
                            <?php $i++; ?>
                                    <img class="slide-image" src="upload/slide/{{$sl->hinh}}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>