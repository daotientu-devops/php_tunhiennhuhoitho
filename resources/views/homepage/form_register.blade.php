<style>
    #form_register {
        background-color: rgba(75,75,75,1);
        margin-bottom: 0;
        color: #FFF;
    }

    #form_register .container {
        padding: 20px 10px;
    }

    #form_register h2 {
        margin: 20px 0 30px;
        font-size: 30px;
        line-height: 53px;
    }

    .form-group > label {
        margin-bottom: 5px;
        font-size: 13px;
        font-family: Montserrat;
    }

    #form_register input {
        background-color: rgba(63,63,63,1);
        border: 1px solid rgba(63,63,63,1);
        color: #FFF;
    }

    #form_register #btn_register {
        padding: 10px 100px;
        background-color: rgba(218,4,4,1);
        color: #FFF;
        border-radius: 5px;
        font-size: 20px;
    }

    #form_register .hotline {
        font-size: 26px;
        display: inline-block;
        margin-top: 20px;
        margin-left: 17px;
    }

    #form_register a .hotline {
        color: #FFF;
    }

    #form_register .address {
        font-size: 13px;
        font-family: Montserrat;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        color: #4F4F4F;
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px 10px 10px;
        border: 1px solid #888;
        border-radius: 10px;
        width: 40%;
        display: block;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal .title {
        font-size: 25px !important;
        line-height: 32px !important;
    }

    /** Mobile **/
    @media (max-width: 991.98px) {
        #form_register .row .col-12 {
            padding: 10px !important;
        }
    }
</style>
<section id="form_register">
    <div class="container">
        <h2 class="text-center">ĐĂNG KÝ</h2>
        <form action="{{ url('customer-register') }}" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 hide-mobile"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 pr-3">
                <div class="form-group has-error">
                    <label for="fullname_register">
                        Họ tên
                    </label>
                    <input type="text" id="fullname_register" name="fullname_register" class="form-control" placeholder="" onkeypress="if (this.value.length===50) return false;"/>
                    <span class="help-block form-error fullname_register"></span>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 pl-3">
                <div class="form-group has-error">
                    <label for="telephone_register">
                        Số điện thoại
                    </label>
                    <input type="text" id="telephone_register" name="telephone_register" class="form-control" placeholder="" onkeypress="if (this.value.length===10) return false;"/>
                    <span class="help-block form-error telephone_register"></span>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 hide-mobile"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 hide-mobile"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 pr-3">
                <div class="form-group has-error">
                    <label for="email_register">
                        Email
                    </label>
                    <input type="text" id="email_register" name="email_register" class="form-control" placeholder=""/>
                    <span class="help-block form-error email_register"></span>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 pl-3">
                <div class="form-group has-error">
                    <label for="organization_register">
                        Tên tổ chức
                    </label>
                    <input type="text" id="organization_register" name="organization_register" class="form-control" placeholder=""/>
                    <span class="help-block form-error organization_register"></span>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 hide-mobile"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2 text-center">
                <div class="form-group">
                    <button type="button" id="btn_register">Gửi ngay</button>
                    <p class="mt-2">
                        <a class="hide-desktop" href="tel:{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964783913'}}" title="Hotline">
                            <img width="12%" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_12.png')}}" alt="">
                            <span class="hotline"><strong>{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964 783 913'}}</strong></span>
                        </a>
                        <a class="hide-mobile" href="tel:{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964783913'}}" title="Hotline">
                            <img width="4%" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_12.png')}}" alt="">
                            <span class="hotline"><strong>{{!empty($info['telephone_contact'])?$info['telephone_contact']:'0964 783 913'}}</strong></span>
                        </a>
                    </p>
                    <p class="address">
                        {{!empty($info['telephone_contact'])?$info['address_contact']:'Văn phòng HN - Số 16 - TT7A - Khu đô thị Đại Kim, Hoàng Mai, Hà Nội'}}
                    </p>
                </div>
            </div>
        </div>
        </form>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="title row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <img class="w-10" src="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_16.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/icons/Asset_16.png')}} 1x" alt="">
                        <h2>Đăng ký thành công</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                        <p style="line-height:25px">
                            Chúng tôi đã nhận được thông tin của bạn và sẽ liên hệ lại<br/> trong vòng 24h làm việc (không tính T7,CN).
                        </p>
                        <p>
                            Trân trọng!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    require(['jquery'], function ($) {
        var f01, f02, f03, f04 = true
            , form_register = $('#form_register')
            , fullname_register = form_register.find('input[name="fullname_register"]')
            , error_fullname_register = form_register.find('.form-error.fullname_register')
            , telephone_register = form_register.find('input[name="telephone_register"]')
            , error_telephone_register = form_register.find('.form-error.telephone_register')
            , email_register = form_register.find('input[name="email_register"]')
            , error_email_register = form_register.find('.form-error.email_register')
            , organization_register = form_register.find('input[name="organization_register"]')
            , error_organization_register = form_register.find('.form-error.organization_register')
            , regexPattern = new RegExp(/^[0-9]+$/)
            , modal = document.getElementById("myModal")
        ;

        // Xử lý form
        function resetRegisterForm() {
            fullname_register.val('');
            telephone_register.val('');
            email_register.val('');
            organization_register.val('');
        }

        // Form đặt hàng
        form_register.find('#btn_register').click(function () {
            if (fullname_register.val() === '') {
                error_fullname_register.text('Họ tên không được phép để trống').show();
                fullname_register.focus();
                f01 = false;
            } else {
                if (fullname_register.val().length < INPUT_FULLNAME_MIN_LENGTH || fullname_register.val().length > INPUT_FULLNAME_MAX_LENGTH) {
                    error_fullname_register.text('Tên không hợp lệ').show();
                    fullname_register.focus();
                    f01 = false;
                } else {
                    error_fullname_register.text('').hide();
                    f01 = true;
                }
            }
            if (telephone_register.val() === '') { // Invalid
                error_telephone_register.text('Số điện thoại không được phép để trống').show();
                f02 = false;
            } else { // Invalid
                if (!regexPattern.test(telephone_register.val()) || (telephone_register.val().length < INPUT_TELEPHONE_MAX_LENGTH || telephone_register.val().length > INPUT_TELEPHONE_MAX_LENGTH)) { // Invalid
                    error_telephone_register.text('Số điện thoại không hợp lệ').show();
                    telephone_register.focus();
                    f02 = false;
                } else { // Valid
                    error_telephone_register.text('').hide();
                    f02 = true;
                }
            }
            if (email_register.val() === '') {
                error_email_register.text('Email không được phép để trống').show();
                email_register.focus();
                f03 = false;
            } else {
                error_email_register.text('').hide();
                f03 = true;
            }
            if (organization_register.val() === '') {
                error_organization_register.text('Tên tổ chức không được phép để trống').show();
                organization_register.focus();
                f04 = false;
            } else {
                error_organization_register.text('').hide();
                f04 = true;
            }
            if (f01 === true && f02 === true && f03 === true && f04 === true) {
                // Post form
                $.ajax({
                    type: 'POST',
                    url: form_register.find('form').attr('action'),
                    data: form_register.find('form').serialize(),
                    dataType: 'json',
                    success: function (result, status, xhr) {
                        var result = JSON.parse(JSON.stringify(result));
                        if (ALLOW_CONSOLE_LOG_DATA == 1) console.log(result);
                        if (result.error == 0) {
                            modal.style.display = "block";
                        } else {
                            alert(result.message);
                        }
                        window.onclick = function (event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    },
                    error: function (xhr, status, error) {
                        if (ALLOW_CONSOLE_LOG_DATA == 1) console.log(error);
                    }
                });
                resetRegisterForm();
            }
        });
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    });
</script>
