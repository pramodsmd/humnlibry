<style>
    :root {
        --main-color-one: {{get_static_option('site_main_color_one','#1DBF73')}};
        --main-color-two: {{get_static_option('site_main_color_two','#47C8ED')}};
        --main-color-three: {{get_static_option('site_main_color_three','#FF6B2C')}};
        --heading-color: {{get_static_option('heading_color','#333333')}};
        --light-color: {{get_static_option('light_color','#666666')}};
        --extra-light-color: {{get_static_option('extra_light_color','#999999')}};

        --heading-font: {{get_static_option('heading_font_family')}},sans-serif;
        --body-font: {{get_static_option('body_font_family')}},sans-serif;

            @if(get_static_option('dashboard_variant_seller') == '02')
              @if(!empty(Auth::guard('web')->user()->user_typ) == 0)
              @if(request()->is('seller/*'))
                --main-color-one: #2163b3;
                --main-color-one-rgb: 33, 99, 179;
              @endif
            @endif
            @endif
        }
    </style>



