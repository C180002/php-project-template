<?php
/** オートローダの読込み */
require_once dirname(__DIR__)."/vendor/autoload.php";
/** テストケースのロード */
use PHPUnit\Framework\TestCase;
?>
<?php
/**
 * テストケースクラス
 */
class testTest extends TestCase {

	/**
	 * @test
	 */
	public function かんたんなテスト_成功編() {
		$this->assertTrue(true);
	}
	/**
	 * @test
	 */
	public function かんたんなテスト_失敗編() {
		$this->assertTrue(false);
	}
}

?>