@if(session($redirectMessageName))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4><i class="icon fa fa-ban"></i>{{ session($redirectMessageName)[0] }}</h4>
                <span style="white-space: pre-wrap">{{ session($redirectMessageName)[1] }}</span>
            </div>
        </div>
    </div>
@endif