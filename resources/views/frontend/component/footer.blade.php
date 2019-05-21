<section class="cid-rr04uE6sLA" id="footer1-8">
        <div class="container">
            <div class="media-container-row content text-white">
                <div class="col-12 col-md-4 mbr-fonts-style display-7">
                    <h5 class="pb-3">
                        <strong>CENTER TRANSAKSI SMS</strong>
                    </h5>
                    <ul class="footer-text">
                        <li>
                            <span>Axis</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 mbr-fonts-style display-7">
                    <h5 class="pb-3"><strong>CENTER TRANSAKSI ONLINE</strong></h5>
                    <ul class="footer-text">
                        <li>
                            <span>Whatsapp</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 mbr-fonts-style display-7">
                    <h5 class="pb-3"><strong>INFO / KOMPLAIN CS</strong></h5>
                    <ul class="footer-text">
                        <li>
                            <span>Axis</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                    </ul>
                    <h5 class="pb-3"><strong>MARKETING</strong></h5>
                    <ul class="footer-text">
                        <li>
                            <span>Telkomsel</span> 0992839283009
                        </li>
                    </ul>

                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="media-container-row mbr-white">
                    <div class="col-sm-6 copyright">
                        <p class="mbr-text mbr-fonts-style display-7">
                            © Copyright {{date('Y')}} Tokopulsa.com - All Rights Reserved
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-list align-right">
                            @foreach (App\Socmed::get() as $row)
                            <div class="soc-item">
                                <a href="{{$row->url}}" target="_blank">
                                    <span class="socicon-{{$row->name}} socicon mbr-iconfont mbr-iconfont-social"></span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
