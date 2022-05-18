@extends('layouts.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Về chúng tôi&nbsp;&nbsp;>&nbsp;&nbsp;Tự nhiên như hơi thở</h2>
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
                                    <section id="content1">
                                        <div class="container">
                                            <div class="row mb-3">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pr-3">
                                                    <h2>
                                                        <span>Tự nhiên<br/>
                                                            như hơi thở</span></h2>
                                                    <p>
                                                        CVV Việt Nam là công ty công nghệ được sáng lập bởi Tiến sĩ, Doanh nhân Đỗ Ngọc Chung và các đồng sự. Với kinh nghiệm 10 năm làm việc tại viện Hàn lâm khoa học Việt Nam, 07 năm là Giảng viên Đại học Công nghệ ĐHQGHN, và rất nhiều sản phẩm nghiên cứu khoa học đã được thương mại hóa thành công, TS Đỗ Ngọc Chung mong muốn xây dựng một điểm hội tụ các chuyên gia về công nghệ để biến những công trình nghiên cứu khoa học sớm đi vào thực tiễn, phục vụ cộng đồng.
                                                        Một trong những giá trị cốt lõi lớn nhất và xuyên suốt tại CVV là giá trị hướng tới cộng đồng, ứng dụng công nghệ để giải quyết các vấn đề của xã hội, đem đến hạnh phúc cho con người và sự thịnh vượng cho quốc gia.
                                                    </p>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-right">
                                                    ĐI VỚI NGƯỜI TIÊN PHONG BẠN SẼ LÀ NGƯỜI DẪN ĐẦU
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <img style="width:39%" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_51.png')}}"
                                                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_51.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_51@2x.png')}} 2x" alt="">
                                                    <img style="width:59%;margin-left:1%" src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Batchao.png')}}"
                                                         srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Batchao.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Batchao@2x.png')}} 2x" alt="">
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
