<?php
/**
 * Shipper
 *
 * @package       Shiiper
 * @author        mavericklp28
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   Shipper
 * Plugin URI:    https://shiparon.com
 * Description:   WooCommerce integration with Shiparon
 * Version:       1.0.0
 * Author:        Shiparon
 * Author URI:    https://shiparon.com
 * Text Domain:   spr
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://shiparon.com
 *
 * You should have received a copy of the GNU General Public License
 * along with Shipper. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.
include(dirname(__FILE__) . '/includes/admin-options.php');
require(dirname(__FILE__) . '/includes/woo-options.php');