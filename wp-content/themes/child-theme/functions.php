<?php
function wizard_assets()
{
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('wizard-style', get_stylesheet_directory_uri() . '/assets/css/wizard.css');

    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('wizard-js', get_stylesheet_directory_uri() . '/assets/js/wizard.js', array('jquery'), null, true);
    wp_localize_script('wizard-js', 'my_ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'wizard_assets');


function r_test_shortcode($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'title' => 'Default title',
        ),
        $atts,
        'r_test'
    );

    return '<div class="r-test">
              <h3>' . esc_html($atts['title']) . '</h3>
              <p>' . do_shortcode($content) . '</p>
            </div>';
}
add_shortcode('r_test', 'r_test_shortcode');


function handle_send_form_email()
{
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $quantity = intval($_POST['quantity']);


    $to = $email;
    $subject = 'Нове замовлення';
    $message = "Ім'я: $name\nEmail: $email\nТелефон: $phone\nКількість: $quantity";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    $sent = wp_mail($to, $subject, $message, $headers);


    if ($sent) {
        wp_send_json_success('Лист надіслано');
    } else {
        wp_send_json_error('Не вдалося надіслати лист');
    }
}
add_action('wp_ajax_send_form_email', 'handle_send_form_email');
add_action('wp_ajax_nopriv_send_form_email', 'handle_send_form_email');

?>