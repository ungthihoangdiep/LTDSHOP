<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'ldtshop' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>=o],b$01`u!qU?#lLn5@..R+apAJY+43FAk;/3OK5g&($%S$EPX:Hb/,e,`rcxA' );
define( 'SECURE_AUTH_KEY',  '4%Q[GV? li@bnzTVZ8zmqi^fe8(9XKZzWk;i%wD:2ms.mw_baB61{.j%Gy&n7Tlr' );
define( 'LOGGED_IN_KEY',    '=dB_Kt{s>`!@s`C8djHgaHvv*9yRHJy-ZbRa_B9%}5<@HGdiCBDO7}/.0K }<~!0' );
define( 'NONCE_KEY',        'WPc-6`ou7`l<y+x^nz~Nsb~_ZSMJXHIC-_5iJkv)T:CZhITJt+ZE<6I|R%~D>sA2' );
define( 'AUTH_SALT',        'p<#?zsvAF@},c(5VNCY&$hv9.[Eyz$1yI7jI@o1{Nsal3s~Vb[>WRe(H5GloF0sf' );
define( 'SECURE_AUTH_SALT', 'hF3e~hy)p+)L)(E`P(1 24@D.{R]BkYaO@=_j<MHbE;wRY]HO]84tWe<=7P~uAe0' );
define( 'LOGGED_IN_SALT',   'G~0A.S=.CGNH2L!?ON6Oxp@h 9VVzcu3%[B&IbLruW>a4Q,r1mIafDC$xXQcvOMd' );
define( 'NONCE_SALT',       '~7w-:uY4px.{yT,{9|.Ls,wckCmSBO{K<!Q-1LjNadgEYgP*PEd8e,}|7K=gL!>p' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
