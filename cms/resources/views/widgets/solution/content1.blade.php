@extends('layouts.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Giải pháp&nbsp;&nbsp;>&nbsp;&nbsp;MONG MUỐN - THỰC TRẠNG</h2>
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
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <h2>MONG MUỐN</h2>
                                                    <ul>
                                                        <li>1: Đáp ứng nhu cầu của CBNV</li>
                                                        <li>2: Tăng thêm các hoạt động phúc lợi cho CBNV</li>
                                                        <li>3: Cùng CBNV thực hiện các giá trị cho cộng đồng, xã hội</li>
                                                    </ul>
                                                    <span class="highlight"><strong>Từ đó:</strong></span>
                                                    <ul>
                                                        <li>1: Tăng cường hiệu suất làm việc CBNV</li>
                                                        <li>2: Gia tăng sự gắn bó, trung thành của người lao động</li>
                                                        <li>3: Khẳng định danh tiếng của tổ chức</li>
                                                    </ul>
                                                    <hr/>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <h2>THỰC TRẠNG</h2>
                                                    <span class="highlight"><strong>Nguồn tiền chi tiêu cho các hoạt động chủ yếu từ:</strong></span>
                                                    <ul>
                                                        <li>1: Quỹ công đoàn</li>
                                                        <li>2: Quỹ phúc lợi Doanh nghiệp</li>
                                                        <li>3: Nguồn tài trợ từ mạnh thường quân</li>
                                                        <li>4: Nguồn từ chính chủ doanh nghiệp</li>
                                                    </ul>
                                                    <span class="highlight"><strong>Đặc điểm nguồn tiền:</strong></span>
                                                    <ul>
                                                        <li>1: Phụ thuộc</li>
                                                        <li>2: Biến động</li>
                                                        <li>3: Không bền vững</li>
                                                        <li>4: Chưa thỏa mãn hết các nhu cầu phúc lợi của NLĐ</li>
                                                    </ul>
                                                    <hr/>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="box1 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
                                                    <h2>
                                                        <span><img width="10%" class="mr-1" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_14.png')}}"
                                                                   srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_14.png')}} 1x" alt=""></span>
                                                        Nút thắt là vấn đề tài chính</h2>
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
