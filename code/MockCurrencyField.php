<?php





class MockCurrencyField extends DataExtension {


	public function getFakerData(Generator $faker) {
		return $faker->randomFloat(2, 1, 1000);
	}

}
