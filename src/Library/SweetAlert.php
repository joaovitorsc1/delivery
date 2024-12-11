<?php

namespace Project\Delivery\Library;

class SweetAlert
{
    public static function basicMessage(string $message)
    {
        $message = filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
        echo "
        <script>
            Swal.fire('{$message}');
        </script>
        ";
    }

    public static function messageWithIcon(string $title, string $text, string $icon)
    {
        $title = filter_var($title, FILTER_SANITIZE_SPECIAL_CHARS);
        $text = filter_var($text, FILTER_SANITIZE_SPECIAL_CHARS);
        $icon = filter_var($icon, FILTER_SANITIZE_SPECIAL_CHARS);
        echo "
        <script>
            Swal.fire({
                title: '{$title}',
                text: '{$text}',
                icon: '{$icon}'
                });
        </script>
        ";
    }
}
?>