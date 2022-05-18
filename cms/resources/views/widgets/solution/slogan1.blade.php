@extends('layouts.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Giải pháp&nbsp;&nbsp;>&nbsp;&nbsp;PHI THƯƠNG BẤT PHÚ</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form class="form-horizontal form-label-left input_mask" action="{{ url('widgets/' . $page . '/' . $position) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="key" value="{{'widget.' . $page . '.' . $position}}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="page" value="{{ $page }}">
                        <input type="hidden" name="position" value="{{ $position }}">
                        <input type="hidden" name="type" value="static">
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12">Nội dung <span
                                    class="required">*</span></label>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <textarea class="form-control editor_basic" name="{{$position}}" id="{{$position}}" required="required" rows="5">{{$widget->content??''}}</textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-11 col-sm-11 col-xs-12 col-md-offset-1">
                                <button type="submit" class="btn btn-success">Lưu</button>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12 text-primary">Mẫu</label>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                                <textarea class="form-control editor_example" name="{{$position}}_example" id="{{$position}}_example" rows="5">
                                    <section id="slogan1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h2 class="text-center mt-2">
                                                        <img class="mr-2 pb-3" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_8.png')}}" alt="">
                                                        PHI THƯƠNG BẤT PHÚ</h2>
                                                    <p>Làm sao để hưởng lợi ích từ thương mại nhưng không làm thay đổi bất kể hoạt động thông thường nào của doanh nghiệp?
                                                        <img class="ml-3 pt-2" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_9.png')}}" alt=""></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h2 class="last-child"><svg data-type="Rectangle" data-name="Rectangle 244" class="Rectangle_244">
                                                            <rect class="Rectangle_244_Class" rx="0" ry="0" x="0" y="0" width="5" height="40">
                                                            </rect>
                                                        </svg>
                                                        VỀ MÔ HÌNH</h2>
                                                    <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}}"
                                                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27@2x.png')}} 2x" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
