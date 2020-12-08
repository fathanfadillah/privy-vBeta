@extends('layout.app')
@section('style')
<style>
.hero {
    height: 720px;
}

.card {
    border-radius: 20px;
    height: 250px;
}

#nav-link {
    border-bottom: solid transparent;
}

#nav-link:hover {
    border-bottom: 1px solid;
    color: white;
}
</style>
@endsection
@section('title','Home')
@section('content')
<!-- header -->
<div class="mb-auto mt-n5">
    <div class="hero">
        <div class="container p-5">
            <div class="card mx-auto rounded-md m-auto col-md-8">
                <div class="">
                    <div class="card-body">
                        <h3 class="text-center py-4">Digital Signature Verification
                        </h3>
                        <div class="input-group my-3 rounded-pill">
                            <div class="custom-file border-0 rounded-pill">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="">
                                <label class="custom-file-label" for="">Choose file</label>
                            </div>
                        </div>
                        <a
                            class="w-full text-decoration-none btn btn-link btn-lg bg-danger rounded-pill text-white border-0 m-auto">
                            Verify Document
                        </a>
                    </div>
                </div>
            </div>
            <p class="m-3 text-white text-center font-weight-bold"><?php echo date("Y");?> - &#169; Privy</p>
        </div>
    </div>
    <!-- /.hero__bg -->

    <!-- .container -->
</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
    $('footer').hide();
    $('#arrow').hide();
});
</script>
<script>
</script>
@endsection