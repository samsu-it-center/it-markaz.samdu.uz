<footer class="dark-footer skin-dark-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="footer-widget">
                    <img src="{{ asset('logo.png') }}" class="img-footer" alt="Logo" />

                    <div class="footer-add">
                        <p>{!! $footer->{'contact_it_center_' . session('locale')} ?? $menu->name_uz !!}</p>
                        <p>{{ $footer->phone }}</p>
                        <p>{{ $footer->email }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-3">
                <div class="footer-widget">
                    <ul class="footer-menu">
                        @foreach($menus as $menu)
                            <li><a href="{{ $menu->route ?? '#' }}">{{ $menu->{'name_' . session('locale')} ?? $menu->name_en }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <iframe style="width: 100%" height="300"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9320.458032388887!2d66.9694552!3d39.6383979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1f8bc8499255%3A0x7d89646ab179a0fe!2sSamarqand%20Davlat%20Universiteti%20IT%20Markazi!5e0!3m2!1sen!2s!4v1662635733627!5m2!1sen!2s">
                </iframe>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">© 2020 SamSU IT Center. Designd By <a href="https://t.me/shoyimobloqulov">Shoyim Obloqulov</a>.</p>
                </div>

                <div class="col-lg-6 col-md-6 text-right">
                    <ul class="footer-bottom-social">
                        <li><a href="https://t.me/itcenter_samdu"><i class="ti-text"></i></a></li>
                        <li><a href="https://www.instagram.com/it.center.samsu"><i class="ti-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/@intellektualtizimlar"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
