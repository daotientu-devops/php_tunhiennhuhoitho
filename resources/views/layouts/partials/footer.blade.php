<style>
    #footer {
        background-color: rgba(218,4,4,1);
        padding: 10px 0;
        color: #FFF;
        font-size: 12px;
    }

    #footer .container-fluid {
        padding: 0 5.5%;
    }

    #footer ul {
        margin-top: 5px;
    }

    #footer ul.contact li {
        float: right;
        margin-right: 3%;
        list-style: none;
    }

    #footer ul.contact img {
        height: 25px;
    }
    /** Mobile **/
    @media (max-width: 991.98px) {
        .Group_187_Class {
            text-align: center;
        }

        #footer ul {
            margin: 15px 0;
            height: 20px;
        }

        #footer ul.contact li:first-child {
            width: 40%;
        }
    }
</style>
<footer id="footer">
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-0">
                <div data-type="Group" data-name="Group 187" class="Group_187_Class">
                    <a href="{{url('/')}}" title="Tự nhiên như hơi thở" class="mr-1">
                        <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_footer.png')}}"
                             srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/logo_footer.png')}} 1x" alt="Tự nhiên như hơi thở">
                    </a>
                    <span>Copyright © <?php echo date('Y') ?> Tu nhien nhu hoi tho</span>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pr-0">
                <ul class="contact w-100">
                    <li>
                        <a href="{{!empty($info['instagram'])?$info['instagram']:'https://www.instagram.com'}}" title="Instagram" target="_blank">
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-instagram.png')}} 1x" alt="Instagram">
                        </a>
                    </li>
                    <li>
                        <a href="{{!empty($info['youtube'])?$info['youtube']:'https://www.youtube.com'}}" title="Youtube" target="_blank">
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-youtube.png')}} 1x" alt="Youtube">
                        </a>
                    </li>
                    <li>
                        <a href="{{!empty($info['facebook'])?$info['facebook']:'https://www.facebook.com'}}" title="Facebook" target="_blank">
                            <img src="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook.png')}}"
                                 srcset="{{asset(env('FOLDER_PUBLIC').'images/graphics/ic-facebook.png')}} 1x" alt="Facebook">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
