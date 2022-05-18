@extends('layouts.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Trang chủ&nbsp;&nbsp;>&nbsp;&nbsp;TÁC GIẢ MÔ HÌNH</h2>
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
                                    <section id="author">
                                        <div class="container">
                                            <h2 class="text-left mb-4">
                                                <svg data-type="Rectangle" data-name="Rectangle 244" class="Rectangle_244">
                                                    <rect class="Rectangle_244_Class" rx="0" ry="0" x="0" y="0" width="5" height="40">
                                                    </rect>
                                                </svg>TÁC GIẢ MÔ HÌNH<br/>TỰ NHIÊN NHƯ HƠI THỞ</h2>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 pr-4 text-center">
                                                    <img class="w-100" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}}"
                                                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_27@2x.png')}} 2x" alt="">
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                                    <h4>
                                                        Về Doanh nhân<br/>
                                                        Tiến sĩ Đỗ Ngọc Chung
                                                    </h4>
                                                    <p>
                                                        Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                                                    </p>
                                                    <p>
                                                        Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa. Vivamus lectus arcu, commodo sed turpis sit amet, consectetur dapibus massa.
                                                    </p>
                                                    <p class="mt-5">
                                                        <a href="{{url('/ve-chung-toi#author')}}" class="view-more" title="Xem thêm">Xem thêm</a>
                                                    </p>
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
