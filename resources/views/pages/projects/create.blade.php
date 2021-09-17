@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
    

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
    <!-- Hero -->
    @include('pages.includes.breadcrumb')

    <!-- Page Content -->
    <div class="content">

        <!-- Recent Orders -->
        <div class="block block-rounded">
             <div class="content content-boxed">
                    <!-- User Profile -->
                    <div class="block block-rounded">
                        
                      <form action="/project" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="py-2">
                            <div class="form-group">
                                <label for="title">Project Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Project Management System" value="">
                            </div>

                            <div class="form-group">
                              <label for="cat_id">Project Category</label>
                              <select class="js-select2 form-control" id="cat_id" name="cat_id" style="width: 100%;">
                                <option selected disabled>Choose one..</option>
                                @forelse ( $categories as $category )
                                <option value="{{  $category->id }}">
                                  {{ $category->name }}</option>
                                @empty
                            
                            
                                @endforelse
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="lang_id">Programing Language</label>
                              <select class="js-select2 form-control" id="lang_id" name="lang_id" style="width: 100%;">
                                <option selected disabled>Choose one..</option>
                            
                                @forelse ( $languages as $language )
                                <option value="{{  $language->id }}">{{ $language->langName }}</option>
                                @empty
                            
                            
                                @endforelse
                              </select>
                            </div>


                          <div class="form-group">
                            <label for="description">Description <i class="fa fa-asterisk text-danger font-size-sm"></i></label>
                            <textarea class="form-control" id="description" name="description" rows="7" placeholder="Enter Project Description.."></textarea>
                          </div>

                            <div class="form-group">
                              <label>Project Cover  <small class="text-danger font-size-sm"> {{ __('720x480') }}</small></label>
                                <div class="custom-file">
                                  
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="cover" name="cover">
                                <label class="custom-file-label" for="cover">Choose Project Cover</label>
                                </div>

                                {{-- <div class="push pt-3">
                                  <img class="img-avatar" src="assets/media/avatars/avatar13.jpg" alt="">
                                </div> --}}
                            </div>

                            <div class="form-group">
                              <label for="repository">Repository</label>
                              <input type="text" class="form-control" id="repository" name="repository" placeholder="https://github.com/deesynertz/Management-System" value="">
                            </div>

                            <div class="form-group ">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Submit
                                </button>
                            </div>
                          </div>
                      </form>
                    </div>

                </div>
        </div>
        <!-- END Recent Orders -->
    </div>
    <!-- END Page Content -->
@endsection
