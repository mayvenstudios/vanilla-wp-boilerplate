@layout('views.layouts.master')

@section('content')
    
    @wpquery(['post_type' => 'post'])

    <!-- Article Schema for single.php -->   
    <div itemscope itemtype="http://schema.org/Article">
         <span itemprop="name"></span>
         <span itemprop="author"></span>
         <span itemprop="datePublished"></span>
         <span itemprop="image"></span>
    </div>    

    @wpempty
        

    @wpend

    @wpposts

        {{ the_title() }}

    @wpempty

        <div class="container">
            <div class="row">
                <div class="col-sm-5">

                    <h1>Error.</h1>

                    <p>Something went wrong.  We can not load this page.</p>

                    <div class="buttons">
                        <a href="/" class="btn btn-lg btn-primary">&laquo; Back to home</a>
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--container-->

    @wpend
@endsection