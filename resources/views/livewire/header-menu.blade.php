<div class="nav-menu nav-menu-social align-to-right mt-2">
    <div class="dropdown show light">
        <a class="btn btn-custom dropdown-toggle login_click" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false">
            <img src="{{ asset($language['flag']) }}" style="width: 24px" alt="Default image" class="flag img-fluid">
            {{ $language['name'] }}
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @foreach($languages as $lang)
                <a class="dropdown-item" wire:click="changeLanguage('{{ $lang['code'] }}')">
                    <img src="{{ asset($lang['flag']) }}" style="width: 24px" alt="Image fluid" class="flag img-fluid">
                    {{ $lang['name'] }}</a>
            @endforeach
        </div>
    </div>

</div>
