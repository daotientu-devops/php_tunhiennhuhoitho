@extends('layouts.default')
@section('content')
    <div class="row">
        @include('components.alert')
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Về chúng tôi&nbsp;&nbsp;>&nbsp;&nbsp;TÁC GIẢ MÔ HÌNH</h2>
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
                                            <div class="row position-relative" style="height:1000px">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-left position-relative">
                                                    <svg data-type="Rectangle" data-name="Rectangle 216" class="Rectangle_216_bn">
                                                        <rect class="Rectangle_216_bn_Class" rx="0" ry="0" x="0" y="0" width="118" height="5">
                                                        </rect>
                                                    </svg>
                                                    <h2>TÁC GIẢ MÔ HÌNH</h2>
                                                    <p class="mb-0">
                                                        Về Doanh nhân Tiến sĩ <br/><strong>Đỗ Ngọc Chung</strong>
                                                    </p>
                                                    <p>
                                                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_50.png')}}"
                                                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_50.png')}} 1x, {{asset(env('FOLDER_PUBLIC').'images/graphics/Mask_Group_50@2x.png')}} 2x" alt="">
                                                    </p>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-right">
                                                    <p class="mt-2 font-weight-bold" style="font-size:20px;line-height:29px;color:#727272">
                                                        TS ĐỖ NGỌC CHUNG SINH NĂM 1980<br/>
                                                        TẠI ĐAN PHƯỢNG
                                                    </p>
                                                    <p>
                                                        <span class="year">2002</span><br/>
                                                        <span style="font-size:15px;line-height:22px;font-family:Montserrat">Tốt nghiệp Đại học KHTN, ĐHQGHN<br/>
                                                            Nghiên cứu viên tại Viện Khoa học Vật liệu – Viện Hàn lâm Khoa học và công nghệ Việt Nam</span>
                                                    </p>
                                                    <p>
                                                        <span class="year">2006</span><br/>
                                                        <span style="font-size:15px;line-height:22px;font-family:Montserrat">Tốt nghiệp thạc sĩ chuyên ngành Vật liệu<br/>
                                                            và Linh kiện Nano- Trường Đại học Công nghệ, ĐHQGHN</span>
                                                    </p>
                                                    <p>
                                                        <span class="year">2009</span><br/>
                                                        <span style="font-size:15px;line-height:22px;font-family:Montserrat">Giảng viên Trường Đại học Công nghệ - Đại học<br/>
                                                        Quốc Gia Hà Nội</span>
                                                    </p>
                                                    <p>
                                                        <span class="year">2015</span><br/>
                                                        <span style="font-size:15px;line-height:22px;font-family:Montserrat">Hoàn thành Luận án Tiến sĩ chuyên ngành Vật liệu và Linh kiện Nano- Trường Đại học Công nghệ, ĐHQGHN<br/>
                                                        Sáng lập Công ty TNHH Giải pháp Năng lượng Toàn Diện<br/>
                                                        Đạt giải thưởng Techmart Quốc Tế</span>
                                                    </p>
                                                    <p>
                                                        <span class="year">2016</span><br/>
                                                        <span style="font-size:15px;line-height:22px;font-family:Montserrat">Phó giám đốc Trung tâm Dịch vụ và truyền thông công nghệ - Trung tâm Phát triển công nghệ cao, Viện Hàn lâm KH&CN Việt Nam<br/>
                                                        Phó giám đốc Xưởng cơ khí điện tử, Viện Hàn lâm KH&CN Việt Nam</span>
                                                    </p>
                                                    <p>
                                                        <span class="year">2016 - 2019</span><br/>
                                                        <span style="font-size:15px;line-height:22px;font-family:Montserrat">Nhận bằng sáng chế cho Thiết bị làm rau giá đỗ<br/>
                                                        Nhận bằng sáng chế Cơ cấu nén dùng cho dụng cụ làm rau giá đỗ<br/>
                                                        Nhận bằng sáng chế về Máy ủ giá công nghiệp<br/>
                                                        Nhận bằng sáng chế Áo dưỡng khí<br/>
                                                        Nhận bằng sáng chế Tăm nguyên sinh<br/>
                                                        Đạt giải thưởng Cuộc thi chứng minh ý tưởng Poc2,
                                                        Trung tâm đổi mới sáng tạo ứng phó với biến đổi khí hậu
                                                        Việt Nam (VCIC), Quỹ WorldBank tài trợ.</span>
                                                    </p>
                                                    <p>
                                                        <span class="year">2020</span><br/>
                                                        <span style="font-size:15px;line-height:22px;font-family:Montserrat">Sáng lập CVV PTE. Ltd, Singapore<br/>
                                                        Sáng lập Công ty cổ phần CVV Việt Nam</span>
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
