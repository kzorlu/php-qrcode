<?php
/**
 * Class ECITest
 *
 * @filesource   ECITest.php
 * @created      28.03.2018
 * @package      chillerlan\QRCodeTest\Data
 * @author       Bostjan Rihter <@brihter>
 * @author       Smiley <smiley@chillerlan.net>
 * @license      MIT
 */

namespace chillerlan\QRCodeTest\Data;

use chillerlan\QRCode\Data\{Byte, QRDataInterface};
use chillerlan\QRCode\QROptions;

class ECITest extends DatainterfaceTestAbstract {

	protected string $testdata = 'š';
	//@todo: this needs work
	protected array $expected = [
		112, 68, 2, 197, 161, 0, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		236, 17, 236, 17, 236, 17, 236, 17,
		66, 225, 182, 239, 198, 41, 5, 15,
		239, 84, 65, 11, 213, 187, 242, 92,
		214, 202, 185, 36
	];

	/**
	 * @inheritDoc
	 * @internal
	 */
	protected function getDataTestOptions():QROptions{
		return new QROptions([
			'version'     => 4,
			'eci'         => true,
			'eciEncoding' => QRDataInterface::ECI_ISO_IEC_8859_2
		]);
	}

	/**
	 * @inheritDoc
	 * @internal
	 */
	protected function getDataInterfaceInstance(QROptions $options):QRDataInterface{
		return new Byte($options);
	}

	//@todo: this needs work
	public function testSetData(){
		$this->dataInterface->setData($this->testdata);

		//$this->assertSame($this->expected, $this->getProperty('matrixdata')->getValue($this->dataInterface));
		$this::markTestIncomplete();
	}

	public function testGetMinimumVersionException():void{
		$this::markTestSkipped('N/A');
	}
}
