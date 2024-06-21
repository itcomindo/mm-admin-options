<?php

/**
 *
 * CTA.
 *@package mmao
 */

defined('ABSPATH') || die('No script kiddies please!');

function mmao_cta()
{
?>
    <div id="mmao-cta-greeting"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24" style="transform: ;msFilter:;">
            <path d="M16 14h.5c.827 0 1.5-.673 1.5-1.5v-9c0-.827-.673-1.5-1.5-1.5h-13C2.673 2 2 2.673 2 3.5V18l5.333-4H16zm-9.333-2L4 14V4h12v8H6.667z"></path>
            <path d="M20.5 8H20v6.001c0 1.1-.893 1.993-1.99 1.999H8v.5c0 .827.673 1.5 1.5 1.5h7.167L22 22V9.5c0-.827-.673-1.5-1.5-1.5z"></path>
        </svg><span>Staff</span></div>
    <div id="mmao-cta" class="">
        <div id="mmao-close">X</div>
        <ul>
            <?php
            echo mmao_cta_items();
            ?>
        </ul>
    </div>
<?php
}



function mmao_cta_items()
{
    if (carbon_get_theme_option('mmao_enable_cta_floating')) {
        $mmao_cta = carbon_get_theme_option('mmao_cta');
        if ($mmao_cta) {
            $pass = array('a', 'li', 'svg');
            foreach ($mmao_cta as $cta) {
                $cta_type = $cta['mmao_cta_type'];

                if ('whatsapp' === $cta_type) {
                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg>';
                    $cta_link = $cta['mmao_cta_whatsapp_number'];
                    $mmao_cta_whatsapp_text = $cta['mmao_cta_whatsapp_text'];
                    $mmao_cta_whatsapp_text = str_replace(' ', '%20', $mmao_cta_whatsapp_text);
                    $cta_link = '<li><a href="https://api.whatsapp.com/send?phone=' . $cta_link . '&text=' . $mmao_cta_whatsapp_text . '" target="_blank">' . $icon . '</a></li>';
                } elseif ('telegram' === $cta_type) {
                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"></path></svg>';
                    $cta_link = $cta['mmao_cta_telegram_username'];
                    $cta_link = '<li><a href="https://t.me/' . $cta_link . '" target="_blank">' . $icon . '</a></li>';
                } elseif ('email' === $cta_type) {
                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>';
                    $cta_link = $cta['mmao_cta_email'];
                    $cta_link = '<li><a href="mailto:' . $cta_link . '">' . $icon . '</a></li>';
                } elseif ('phone' === $cta_type) {
                    $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z"></path></svg>';
                    $cta_link = $cta['mmao_cta_phone_number'];
                    $cta_link = '<li><a href="tel:+' . $cta_link . '">' . $icon . '</a></li>';
                }
                echo wp_kses($cta_link, mmao($pass));
            }
        }
    }
}



function mmao_load_style_and_script()
{
    wp_enqueue_style('mmao-cta-style', MMAO_URL . 'mmao-style.css', array(), '1.0', 'all');
    wp_enqueue_script('mmao-cta-scripts', MMAO_URL . 'mmao-js.js', array('jquery'), '1.0', true);
}


function mmao_launch_cta()
{
    if (carbon_get_theme_option('mmao_enable_cta_floating')) {
        add_action('wp_footer', 'mmao_cta');
        add_action('wp_enqueue_scripts', 'mmao_load_style_and_script');
    }
}
add_action('init', 'mmao_launch_cta');
