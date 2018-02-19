<nav class="nav nav-tabs" id="seo-settings-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-global-tab" data-toggle="tab" href="#nav-global" role="tab"
       aria-controls="nav-global" aria-selected="true"><i class="fa fa-home"></i> Home
    </a>

    <a class="nav-item nav-link" id="nav-facebook-tab" data-toggle="tab" href="#nav-facebook-meta" role="tab"
       aria-controls="nav-meta"><i class="fa fa-facebook-official"></i> Facebook
    </a>

    <a class="nav-item nav-link" id="nav-twitter-tab" data-toggle="tab" href="#nav-twitter-meta" role="tab"
       aria-controls="nav-meta"><i class="fa fa-twitter"></i> Twitter
    </a>

    <a class="nav-item nav-link" id="nav-page-tab" data-toggle="tab" href="#nav-meta" role="tab"
       aria-controls="nav-meta">Others
    </a>
</nav>
<div class="tab-content mt-3" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-global" role="tabpanel" aria-labelledby="nav-global-tab">
        @include('seo::forms.page',[
        'model'=>$record,
         'route'=>route('seo::pages.update',$record->id),
         'method'=>'PUT'
        ])
    </div>

    <div class="tab-pane fade hide" id="nav-facebook-meta" role="tabpanel" aria-labelledby="nav-facebook-tab">
        @include('seo::forms.page_meta_tag_group',['tags' => $og])
    </div>

    <div class="tab-pane fade hide" id="nav-twitter-meta" role="tabpanel" aria-labelledby="nav-twitter-tab">
        @include('seo::forms.page_meta_tag_group',['tags' => $twitter])
    </div>

    <div class="tab-pane fade hide" id="nav-meta" role="tabpanel" aria-labelledby="nav-page-tab">
        @include('seo::forms.page_meta_tag')
    </div>
</div>