
cd /var/www/html
wp core download --allow-root
wp config create --allow-root --skip-check --dbname="wacoal" --dbuser="admin" --dbpass="admin" --dbhost=mysql --dbprefix="wp_" --extra-php="define( 'WACOAL_ENABLE_LOCAL_SETTINGS', true ); define( 'WACOAL_PHOTON_URL', 'http://photon.local' ); define('WP_DEBUG',true); define('WP_DEBUG_LOG',true); define('WP_DEBUG_DISPLAY',false); define('WP_ENV', 'development'); define('WP_SITEURL', 'http://localhost/'); define('WP_HOME', 'http://localhost/'); if ( file_exists( __DIR__ . '/wp-content/vip-config/vip-config.php' ) ) { require_once __DIR__ . '/wp-content/vip-config/vip-config.php'; }"
wp core multisite-install --allow-root --admin_user="wacoal" --admin_email="admin@admin.com" --admin_password="admin" --url="http://localhost/" --title="WP wacoal"

cd wp-content
git clone https://github.com/Automattic/vip-go-mu-plugins-built.git mu-plugins-all
cp -r mu-plugins-all/* mu-plugins/
rm -rf  mu-plugins-all

wp theme activate wacoal --allow-root
wp plugin activate --all --allow-root
wp plugin list --allow-root
