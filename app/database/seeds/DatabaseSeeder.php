<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        $this->call('OffenceTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('StandardTableSeeder');
        $this->call('StandardDescriptionTableSeeder');



	}

}

class OffenceTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psms_offence')->delete();
        DB::table('psms_offence')->insert(
            array(
                'nature'=>'use of motor vehicle without registration',
                'section'=>'S.8(1)(2)',
                'relating'=>'motor vehicle',
                'amount'=>'30000',
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,

            ),
        DB::table('psms_offence')->insert(
                array(
                    'nature'=>'Failure to fix identification marks',
                    'section'=>'S.14(1)(2)(3)(5)',
                    'relating'=>'motor vehicle',
                    'amount'=>'30000',
                    'created_at'=>new DateTime,
                    'updated_at'=>new DateTime,

                ),
        DB::table('psms_offence')->insert(
                    array(
                        'nature'=>'Failure to carry certificate of registration in the vehicle',
                        'section'=>'S.13(1)(2)',
                        'relating'=>'motor vehicle',
                        'amount'=>'30000',
                        'created_at'=>new DateTime,
                        'updated_at'=>new DateTime,

                    ),
                        DB::table('psms_offence')->insert(
                        array(
                            'nature'=>'Driving without a valid driving license',
                            'section'=>'S.19(1)(2)',
                            'relating'=>'motor vehicle',
                            'amount'=>'30000',
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,

                        ),
                          DB::table('psms_offence')->insert(
                            array(
                                'nature'=>'Failure to display identification marks for vehicle used for driving lessons',
                                'section'=>'S22',
                                'relating'=>'motor vehicle',
                                'amount'=>'30000',
                                'created_at'=>new DateTime,
                                'updated_at'=>new DateTime,

                            ),
                          DB::table('psms_offence')->insert(
                                array(
                                    'nature'=>'Offences relating to driving instructions',
                                    'section'=>'S.37(a)(b)(c)(e)',
                                    'relating'=>'motor vehicle',
                                    'amount'=>'30000',
                                    'created_at'=>new DateTime,
                                    'updated_at'=>new DateTime,

                                ),
                          DB::table('psms_offence')->insert(
                                    array(
                                        'nature'=>'Offences relating to condition of motor vehicle for use on a road',
                                        'section'=>'S.39(1)(a)(b)(2)(3)',
                                        'relating'=>'motor vehicle',
                                        'amount'=>'30000',
                                        'created_at'=>new DateTime,
                                        'updated_at'=>new DateTime,

                                    ),
                          DB::table('psms_offence')->insert(
                                        array(
                                            'nature'=>'Failure to tighten a safety belt and or failure to wear a helmet',
                                            'section'=>'S.39(11)(12)',
                                            'relating'=>'motor vehicle',
                                            'amount'=>'30000',
                                            'created_at'=>new DateTime,
                                            'updated_at'=>new DateTime,

                                        ),
                          DB::table('psms_offence')->insert(
                                            array(
                                                'nature'=>'Failure to stop at Railway crossing',
                                                'section'=>'S.55',
                                                'relating'=>'motor vehicle',
                                                'amount'=>'30000',
                                                'created_at'=>new DateTime,
                                                'updated_at'=>new DateTime,

                                            ),
                          DB::table('psms_offence')->insert(
                                                array(
                                                    'nature'=>'Driving unreasonably slowly',
                                                    'section'=>'S.56',
                                                    'relating'=>'motor vehicle',
                                                    'amount'=>'30000',
                                                    'created_at'=>new DateTime,
                                                    'updated_at'=>new DateTime,

                                                ),
                          DB::table('psms_offence')->insert(
                                                    array(
                                                        'nature'=>'Riding in dangerous position',
                                                        'section'=>'S.58(1)(2)(3)(4)',
                                                        'relating'=>'motor vehicle',
                                                        'amount'=>'30000',
                                                        'created_at'=>new DateTime,
                                                        'updated_at'=>new DateTime,

                                                    ),
                          DB::table('psms_offence')->insert(
                                                        array(
                                                            'nature'=>'Restriction on pillion riding',
                                                            'section'=>'S.59(1)(2)',
                                                            'relating'=>'motor vehicle',
                                                            'amount'=>'30000',
                                                            'created_at'=>new DateTime,
                                                            'updated_at'=>new DateTime,

                                                        ),
                          DB::table('psms_offence')->insert(
                                                            array(
                                                                'nature'=>'Obstructing a driver of motor vehicle',
                                                                'section'=>'S.43&60',
                                                                'relating'=>'motor vehicle',
                                                                'amount'=>'30000',
                                                                'created_at'=>new DateTime,
                                                                'updated_at'=>new DateTime,

                                                            ),
                          DB::table('psms_offence')->insert(
                                                                array(
                                                                    'nature'=>'Causing damage to a motor vehicle',
                                                                    'section'=>'S.61(1)(2)(3)',
                                                                    'relating'=>'motor vehicle',
                                                                    'amount'=>'30000',
                                                                    'created_at'=>new DateTime,
                                                                    'updated_at'=>new DateTime,

                                                                ),
                          DB::table('psms_offence')->insert(
                                                                    array(
                                                                        'nature'=>'Careless or inconsiderate use of motor vehicle',
                                                                        'section'=>'S.50',
                                                                        'relating'=>'motor vehicle',
                                                                        'amount'=>'30000',
                                                                        'created_at'=>new DateTime,
                                                                        'updated_at'=>new DateTime,

                                                                    ),
                          DB::table('psms_offence')->insert(
                                                                        array(
                                                                            'nature'=>'Owner of a public service vehicle failing to mark/print name and address,
                                                                            maximum number of passenger and weight of goods on the right or off side of a vehicle',
                                                                            'section'=>'R.47(1)',
                                                                            'relating'=>'motor vehicle',
                                                                            'amount'=>'30000',
                                                                            'created_at'=>new DateTime,
                                                                            'updated_at'=>new DateTime,

                                                                        ),
                          DB::table('psms_offence')->insert(
                                  array(
                                      'nature'=>'Conveying on motor omnibus goods not belonging to passengers',
                                      'section'=>'R.53(1)',
                                      'relating'=>'motor vehicle',
                                      'amount'=>'30000',
                                      'created_at'=>new DateTime,
                                      'updated_at'=>new DateTime,

                                  ),
                          DB::table('psms_offence')->insert(
                                  array(
                                      'nature'=>'Failing to carry reflectors on motor vehicle',
                                      'section'=>'R.44(1)',
                                      'relating'=>'motor vehicle',
                                      'amount'=>'30000',
                                      'created_at'=>new DateTime,
                                      'updated_at'=>new DateTime,

                                  ),
                          DB::table('psms_offence')->insert(
                              array(
                                  'nature'=>'Unnecessary sounding of horns etc',
                                  'section'=>'R.39(3)',
                                  'relating'=>'motor vehicle',
                                  'amount'=>'30000',
                                  'created_at'=>new DateTime,
                                  'updated_at'=>new DateTime,

                              ),
                              DB::table('psms_offence')->insert(
                                  array(
                                      'nature'=>'Stopping the motor vehicle within twenty-five feet from comer in township',
                                      'section'=>'R.35(2)(b)',
                                      'relating'=>'motor vehicle',
                                      'amount'=>'30000',
                                      'created_at'=>new DateTime,
                                      'updated_at'=>new DateTime,

                                  ),
                                  DB::table('psms_offence')->insert(
                                      array(
                                          'nature'=>'Stopping the motor vehicle on the left or near side of the road when stopping in township',
                                          'section'=>'R.36(h)',
                                          'relating'=>'motor vehicle',
                                          'amount'=>'30000',
                                          'created_at'=>new DateTime,
                                          'updated_at'=>new DateTime,

                                      ),
                                      DB::table('psms_offence')->insert(
                                          array(
                                              'nature'=>'Failing to stop a vehicle',
                                              'section'=>'S.113(2)',
                                              'relating'=>'motor vehicle',
                                              'amount'=>'30000',
                                              'created_at'=>new DateTime,
                                              'updated_at'=>new DateTime,

                                          ),
                                          DB::table('psms_offence')->insert(
                                              array(
                                                  'nature'=>'Failing to comply with road Traffic',
                                                  'section'=>'S.113',
                                                  'relating'=>'motor vehicle',
                                                  'amount'=>'30000',
                                                  'created_at'=>new DateTime,
                                                  'updated_at'=>new DateTime,

                                              ),
                                              DB::table('psms_offence')->insert(
                                                  array(
                                                      'nature'=>'Driving a commercial vehicle;heavy duty or public service vehicle beyond speed limit',
                                                      'section'=>'R.60&S.51',
                                                      'relating'=>'motor vehicle',
                                                      'amount'=>'30000',
                                                      'created_at'=>new DateTime,
                                                      'updated_at'=>new DateTime,

                                                  ),
                                                  DB::table('psms_offence')->insert(
                                                      array(
                                                          'nature'=>'Driving or causing a motor vehicle or trailer to be driven with a load not well secured',
                                                          'section'=>'R.30(1)(e)',
                                                          'relating'=>'motor vehicle',
                                                          'amount'=>'30000',
                                                          'created_at'=>new DateTime,
                                                          'updated_at'=>new DateTime,

                                                      ),
                                                      DB::table('psms_offence')->insert(
                                                          array(
                                                              'nature'=>'Driving or causing a motor vehicle to be driven with defective tyres',
                                                              'section'=>'R.30(1)(i)',
                                                              'relating'=>'motor vehicle',
                                                              'amount'=>'30000',
                                                              'created_at'=>new DateTime,
                                                              'updated_at'=>new DateTime,

                                                          ),
                          DB::table('psms_offence')->insert(
                                  array(
                                      'nature'=>'Employer failing to keep record of a driver',
                                      'section'=>'R.79',
                                      'relating'=>'motor vehicle',
                                      'amount'=>'30000',
                                      'created_at'=>new DateTime,
                                      'updated_at'=>new DateTime,

                                  ),
                          DB::table('psms_offence')->insert(
                                  array(
                                      'nature'=>'Failure of the owner or hirer of a motor vehicle to give identity of a driver',
                                      'section'=>'S.80(a)(b)',
                                      'relating'=>'motor vehicle',
                                      'amount'=>'30000',
                                      'created_at'=>new DateTime,
                                      'updated_at'=>new DateTime,

                                  ),
                          DB::table('psms_offence')->insert(
                                      array(
                                          'nature'=>'Failure to remove broken down vehicle',
                                          'section'=>'S.85(1)(2)(a)(b)(3)(a)(b)(d)(4)',
                                          'relating'=>'motor vehicle',
                                          'amount'=>'30000',
                                          'created_at'=>new DateTime,
                                          'updated_at'=>new DateTime,

                                      ),
                                      DB::table('psms_offence')->insert(
                                          array(
                                              'nature'=>'Failure to remove a vehicle from packing place',
                                              'section'=>'S.86',
                                              'relating'=>'motor vehicle',
                                              'amount'=>'30000',
                                              'created_at'=>new DateTime,
                                              'updated_at'=>new DateTime,

                                          ),
                                          DB::table('psms_offence')->insert(
                                              array(
                                                  'nature'=>'Driving or packing a motor vehicle on a footpath',
                                                  'section'=>'S.86',
                                                  'relating'=>'motor vehicle',
                                                  'amount'=>'30000',
                                                  'created_at'=>new DateTime,
                                                  'updated_at'=>new DateTime,

                                              ),
                                          DB::table('psms_offence')->insert(
                                                  array(
                                                      'nature'=>'Offences relating to overtaking use of lanes,carriageways and conduct at intersections',
                                                      'section'=>'S.50 OF RTA No.30/1973 and S.11 of Act No.16/1996(amendment)(2)(3)(4)(5)(6)(7)(8)(9)(10)(11)(12)(13)(14)(15)(16)(17)(18)(19)(20)(21)(22)(23)(24)(25)(26)(27)',
                                                      'relating'=>'motor vehicle',
                                                      'amount'=>'30000',
                                                      'created_at'=>new DateTime,
                                                      'updated_at'=>new DateTime,

                                                  ),
                                          DB::table('psms_offence')->insert(
                                                      array(
                                                          'nature'=>'Failure to use dipped light when approaching an oncoming traffic',
                                                          'section'=>'S.39 of Act No.30/1973 and S.8 of Act No.16/1996',
                                                          'relating'=>'motor vehicle',
                                                          'amount'=>'30000',
                                                          'created_at'=>new DateTime,
                                                          'updated_at'=>new DateTime,

                                                      ),
                                          DB::table('psms_offence')->insert(
                                                          array(
                                                              'nature'=>'Taking motor vehicle without owners consent',
                                                              'section'=>'S.62 of Act No.30/1973',
                                                              'relating'=>'motor vehicle',
                                                              'amount'=>'30000',
                                                              'created_at'=>new DateTime,
                                                              'updated_at'=>new DateTime,

                                                          ),
                                          DB::table('psms_offence')->insert(
                                                              array(
                                                                  'nature'=>'Failure to observe pedestrian crossing',
                                                                  'section'=>'S.65 of Act No.30/1973',
                                                                  'relating'=>'motor vehicle',
                                                                  'amount'=>'30000',
                                                                  'created_at'=>new DateTime,
                                                                  'updated_at'=>new DateTime,

                                                              ),
                                          DB::table('psms_offence')->insert(
                                                                  array(
                                                                      'nature'=>'Offence relating to parking and standing',
                                                                      'section'=>'S.71 and 71(A) OF Act No.30/1973 and S.16 of Act No.16/1996(amendment)(1)(2)(3)(4)(5)(6)(7)',
                                                                      'relating'=>'motor vehicle',
                                                                      'amount'=>'30000',
                                                                      'created_at'=>new DateTime,
                                                                      'updated_at'=>new DateTime,

                                                                  ),
                                          DB::table('psms_offence')->insert(
                                                                      array(
                                                                          'nature'=>'Failure to observe instructions conveyed by traffic sign,traffic signals and road markings',
                                                                          'section'=>'S.73 and 73(1) of Act No.30/1973 and S.17 of Act No.16/1996(amendment)(2)(3)(4)',
                                                                          'relating'=>'motor vehicle',
                                                                          'amount'=>'30000',
                                                                          'created_at'=>new DateTime,
                                                                          'updated_at'=>new DateTime,

                                                                      ),
                                          DB::table('psms_offence')->insert(
                                                                          array(
                                                                              'nature'=>'Failure to carry reflectors on a motor vehicle',
                                                                              'section'=>'R.44',
                                                                              'relating'=>'motor vehicle',
                                                                              'amount'=>'30000',
                                                                              'created_at'=>new DateTime,
                                                                              'updated_at'=>new DateTime,

                                                                          ),
                                              DB::table('psms_offence')->insert(
                                                  array(
                                                      'nature'=>'Riding a bicycle in prohibited manner',
                                                      'section'=>'S.101',
                                                      'relating'=>'bicycle/tricycle',
                                                      'amount'=>'20000',
                                                      'created_at'=>new DateTime,
                                                      'updated_at'=>new DateTime,

                                                  ),
                                                  DB::table('psms_offence')->insert(
                                                      array(
                                                          'nature'=>'Riding a bicycle,which has no effective brake',
                                                          'section'=>'R.32',
                                                          'relating'=>'bicycle/tricycle',
                                                          'amount'=>'20000',
                                                          'created_at'=>new DateTime,
                                                          'updated_at'=>new DateTime,

                                                      ),
                                                  DB::table('psms_offence')->insert(
                                                          array(
                                                              'nature'=>'Using a bicycle/tricycle which has no horns,bell or other prescribed instruments',
                                                              'section'=>'S.107',
                                                              'relating'=>'bicycle/tricycle',
                                                              'amount'=>'20000',
                                                              'created_at'=>new DateTime,
                                                              'updated_at'=>new DateTime,

                                                          ),
                                                  DB::table('psms_offence')->insert(
                                                              array(
                                                                  'nature'=>'Riding a bicycle/tricycle which has no lights',
                                                                  'section'=>'R.43',
                                                                  'relating'=>'bicycle/tricycle',
                                                                  'amount'=>'20000',
                                                                  'created_at'=>new DateTime,
                                                                  'updated_at'=>new DateTime,

                                                              ),
                                                              DB::table('psms_offence')->insert(
                                                                  array(
                                                                      'nature'=>'Failing to carry reflector on a bicycle',
                                                                      'section'=>'R.44(10)(ii)',
                                                                      'relating'=>'bicycle/tricycle',
                                                                      'amount'=>'20000',
                                                                      'created_at'=>new DateTime,
                                                                      'updated_at'=>new DateTime,

                                                                  )


                                                              )

                                                          )

                                                      )

                                                  )

                                              )

                                          )

                                                                  )

                                                              )

                                                          )

                                                      )

                                                  )

                                              )

                                          )

                                      )

                                  )

                              )

                          )

                          )

                          )

                          )

                          )

                          )

                          )

                          )

                          )

                          )

                          )

                          )

                                                                )

                                                            )

                                                        )

                                                    )

                                                )

                                            )

                                        )

                                    )

                                )

                            )

                        )

                    )

                )

            ) );


    }}


class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psms_users')->delete();
        DB::table('psms_users')->insert(
            array(
                'rankNo'=>'4',
                'fullName'=>'Martha Shaka',
                'email'=>'marthashaka@yahoo.com',
                'station'=>'Kijitonyama',
                'password'=>md5('1234'),
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,

            ),
            DB::table('psms_users')->insert(
                array(
                    'rankNo'=>'3',
                    'fullName'=>'Saida Nurudini',
                    'email'=>'nurudinisaida@gmail.com',
                    'station'=>'Segerea',
                    'password'=>md5('1234'),
                    'created_at'=>new DateTime,
                    'updated_at'=>new DateTime,
                ),
                DB::table('psms_users')->insert(
                    array(
                        'rankNo'=>'2',
                        'fullName'=>'Isaya Zacharia',
                        'email'=>'issyzac.iz@gmail.com',
                        'station'=>'Kinondoni',
                        'password'=>md5('1234'),
                        'created_at'=>new DateTime,
                        'updated_at'=>new DateTime,
                    ),
                    DB::table('psms_users')->insert(
                        array(
                            'rankNo'=>'1',
                            'fullName'=>'Kelvin Mbwilo',
                            'email'=>'kelvinmbwilo@gmail.com',
                            'station'=>'Ubungo',
                            'password'=>md5('1234'),
                            'created_at'=>new DateTime,
                            'updated_at'=>new DateTime,
                        )
                    )
                )
            ));


}}


class StandardTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psms_standard')->delete();
        DB::table('psms_standard')->insert(
            array(
                'standard_id'=>'100',
                'description_id'=>'1',
                'name'=>'private car',
                'created_at'=>new DateTime,
            ),
            DB::table('psms_standard')->insert(
                array(
                    'standard_id'=>'101',
                    'description_id'=>'1',
                    'name'=>'foreign car',
                    'created_at'=>new DateTime,

                ),
                DB::table('psms_standard')->insert(
                    array(
                        'standard_id'=>'102',
                        'description_id'=>'1',
                        'name'=>'private motorcycle',
                        'created_at'=>new DateTime,

                    ),
                    DB::table('psms_standard')->insert(
                        array(
                            'standard_id'=>'103',
                            'description_id'=>'1',
                            'name'=>'private pedalcycle',
                            'created_at'=>new DateTime,

                        ),
                        DB::table('psms_standard')->insert(
                            array(
                                'standard_id'=>'104',
                                'description_id'=>'1',
                                'name'=>'pick up',
                                'created_at'=>new DateTime,

                            ),
                            DB::table('psms_standard')->insert(
                                array(
                                    'standard_id'=>'105',
                                    'description_id'=>'1',
                                    'name'=>'private truck',
                                    'created_at'=>new DateTime,

                                ),
                                DB::table('psms_standard')->insert(
                                    array(
                                        'standard_id'=>'106',
                                        'description_id'=>'1',
                                        'name'=>'3 wheeler',
                                        'created_at'=>new DateTime,

                                    ),
                                    DB::table('psms_standard')->insert(
                                        array(
                                            'standard_id'=>'107',
                                            'description_id'=>'1',
                                            'name'=>'guta',
                                            'created_at'=>new DateTime,

                                        ),
                                        DB::table('psms_standard')->insert(
                                            array(
                                                'standard_id'=>'108',
                                                'description_id'=>'1',
                                                'name'=>'mkokoteni',
                                                'created_at'=>new DateTime,

                                            ),
                                            DB::table('psms_standard')->insert(
                                                array(
                                                    'standard_id'=>'200',
                                                    'description_id'=>'2',
                                                    'name'=>'truck',
                                                    'created_at'=>new DateTime,

                                                ),
                                                DB::table('psms_standard')->insert(
                                                    array(
                                                        'standard_id'=>'201',
                                                        'description_id'=>'2',
                                                        'name'=>'HDV/semi trailler',
                                                        'created_at'=>new DateTime,

                                                    ),
                                                    DB::table('psms_standard')->insert(
                                                        array(
                                                            'standard_id'=>'202',
                                                            'description_id'=>'2',
                                                            'name'=>'truck and trailer',
                                                            'created_at'=>new DateTime,

                                                        ),
                                                        DB::table('psms_standard')->insert(
                                                            array(
                                                                'standard_id'=>'204',
                                                                'description_id'=>'2',
                                                                'name'=>'dangerous goods',
                                                                'created_at'=>new DateTime,
                                                            ),
                                                            DB::table('psms_standard')->insert(
                                                                array(
                                                                    'standard_id'=>'205',
                                                                    'description_id'=>'2',
                                                                    'name'=>'abnormal dimension',
                                                                    'created_at'=>new DateTime,

                                                                ),
                                                                DB::table('psms_standard')->insert(
                                                                    array(
                                                                        'standard_id'=>'206',
                                                                        'description_id'=>'2',
                                                                        'name'=>'abnormal dimension',
                                                                        'created_at'=>new DateTime,

                                                                    ),
                                                                    DB::table('psms_standard')->insert(
                                                                        array(
                                                                            'standard_id'=>'207',
                                                                            'description_id'=>'2',
                                                                            'name'=>'motorcycle',
                                                                            'created_at'=>new DateTime,

                                                                        ),
                                                                        DB::table('psms_standard')->insert(
                                                                            array(
                                                                                'standard_id'=>'208',
                                                                                'description_id'=>'2',
                                                                                'name'=>'tractor',
                                                                                'created_at'=>new DateTime,

                                                                            ),
                                                                            DB::table('psms_standard')->insert(
                                                                                array(
                                                                                    'standard_id'=>'300',
                                                                                    'description_id'=>'3',
                                                                                    'name'=>'government vehicle',
                                                                                    'created_at'=>new DateTime,

                                                                                ),
                                                                                DB::table('psms_standard')->insert(
                                                                                    array(
                                                                                        'standard_id'=>'301',
                                                                                        'description_id'=>'3',
                                                                                        'name'=>'defence force',
                                                                                        'created_at'=>new DateTime,

                                                                                    ),
                                                                                    DB::table('psms_standard')->insert(
                                                                                        array(
                                                                                            'standard_id'=>'302',
                                                                                            'description_id'=>'3',
                                                                                            'name'=>'prison vehicle',
                                                                                            'created_at'=>new DateTime,

                                                                                        ),
                                                                                        DB::table('psms_standard')->insert(
                                                                                            array(
                                                                                                'standard_id'=>'303',
                                                                                                'description_id'=>'3',
                                                                                                'name'=>'national service',
                                                                                                'created_at'=>new DateTime,

                                                                                            ),
                                                                                            DB::table('psms_standard')->insert(
                                                                                                array(
                                                                                                    'standard_id'=>'304',
                                                                                                    'description_id'=>'3',
                                                                                                    'name'=>'police',
                                                                                                    'created_at'=>new DateTime,

                                                                                                ),
                                                                                                DB::table('psms_standard')->insert(
                                                                                                    array(
                                                                                                        'standard_id'=>'305',
                                                                                                        'description_id'=>'3',
                                                                                                        'name'=>'police motorcycle',
                                                                                                        'created_at'=>new DateTime,
                                                                                                    ),
                                                                                                    DB::table('psms_standard')->insert(
                                                                                                        array(
                                                                                                            'standard_id'=>'306',
                                                                                                            'description_id'=>'3',
                                                                                                            'name'=>'diplomatic vehicle',
                                                                                                            'created_at'=>new DateTime,

                                                                                                        ),
                                                                                                        DB::table('psms_standard')->insert(
                                                                                                            array(
                                                                                                                'standard_id'=>'400',
                                                                                                                'description_id'=>'4',
                                                                                                                'name'=>'fire brigade',
                                                                                                                'created_at'=>new DateTime,

                                                                                                            ),
                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                array(
                                                                                                                    'standard_id'=>'401',
                                                                                                                    'description_id'=>'4',
                                                                                                                    'name'=>'ambulance',
                                                                                                                    'created_at'=>new DateTime,

                                                                                                                ),
                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                    array(
                                                                                                                        'standard_id'=>'402',
                                                                                                                        'description_id'=>'4',
                                                                                                                        'name'=>'rescue service',
                                                                                                                        'created_at'=>new DateTime,

                                                                                                                    ),
                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                        array(
                                                                                                                            'standard_id'=>'500',
                                                                                                                            'description_id'=>'5',
                                                                                                                            'name'=>'PSV motorcycle',
                                                                                                                            'created_at'=>new DateTime,

                                                                                                                        ),
                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                            array(
                                                                                                                                'standard_id'=>'501',
                                                                                                                                'description_id'=>'5',
                                                                                                                                'name'=>'PSV 3 wheeler',
                                                                                                                                'created_at'=>new DateTime,

                                                                                                                            ),
                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                array(
                                                                                                                                    'standard_id'=>'502',
                                                                                                                                    'description_id'=>'5',
                                                                                                                                    'name'=>'PSV dtaxi cab',
                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                ),
                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                    array(
                                                                                                                                        'standard_id'=>'503',
                                                                                                                                        'description_id'=>'5',
                                                                                                                                        'name'=>'PSV daladala',
                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                    ),
                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                        array(
                                                                                                                                            'standard_id'=>'504',
                                                                                                                                            'description_id'=>'5',
                                                                                                                                            'name'=>'private bus',
                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                        ),
                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                            array(
                                                                                                                                                'standard_id'=>'505',
                                                                                                                                                'description_id'=>'5',
                                                                                                                                                'name'=>'PSV bus',
                                                                                                                                                'created_at'=>new DateTime,

                                                                                                                                            ),
                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                array(
                                                                                                                                                    'standard_id'=>'506',
                                                                                                                                                    'description_id'=>'5',
                                                                                                                                                    'name'=>'foreign bus',
                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                ),
                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                    array(
                                                                                                                                                        'standard_id'=>'600',
                                                                                                                                                        'description_id'=>'0',
                                                                                                                                                        'name'=>'others',
                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                    ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'1',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'crossing roads',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'2',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'round about',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'3',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'T junction',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'4',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'Y junction',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'5',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'staggered junction',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'6',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'junction > 4 arms',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'7',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'bridge/fly over',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'8',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'rail cross manned',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'9',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'rail cross no sign',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'10',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'pedestrian cross',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                        array(
                                                                                                                                                            'standard_id'=>'11',
                                                                                                                                                            'description_id'=>'6',
                                                                                                                                                            'name'=>'none',
                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                        ),
                                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                                            array(
                                                                                                                                                                'standard_id'=>'1',
                                                                                                                                                                'description_id'=>'7',
                                                                                                                                                                'name'=>'uncontrolled',
                                                                                                                                                                'created_at'=>new DateTime,

                                                                                                                                                            ),
                                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                                            array(
                                                                                                                                                                'standard_id'=>'2',
                                                                                                                                                                'description_id'=>'7',
                                                                                                                                                                'name'=>'police officer',
                                                                                                                                                                'created_at'=>new DateTime,

                                                                                                                                                            ),
                                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                                            array(
                                                                                                                                                                'standard_id'=>'3',
                                                                                                                                                                'description_id'=>'7',
                                                                                                                                                                'name'=>'traffic signs',
                                                                                                                                                                'created_at'=>new DateTime,

                                                                                                                                                            ),
                                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                                            array(
                                                                                                                                                                'standard_id'=>'4',
                                                                                                                                                                'description_id'=>'7',
                                                                                                                                                                'name'=>'traffic light',
                                                                                                                                                                'created_at'=>new DateTime,
                                                                                                                                                            ),
                                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                                            array(
                                                                                                                                                                'standard_id'=>'5',
                                                                                                                                                                'description_id'=>'7',
                                                                                                                                                                'name'=>'flashing signal',
                                                                                                                                                                'created_at'=>new DateTime,

                                                                                                                                                            ),
                                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                                            array(
                                                                                                                                                                'standard_id'=>'6',
                                                                                                                                                                'description_id'=>'7',
                                                                                                                                                                'name'=>'none',
                                                                                                                                                                'created_at'=>new DateTime,

                                                                                                                                                            ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'1',
                                                                                                                                                                    'description_id'=>'8',
                                                                                                                                                                    'name'=>'trunk roads',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'2',
                                                                                                                                                                    'description_id'=>'8',
                                                                                                                                                                    'name'=>'regional roads',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'3',
                                                                                                                                                                    'description_id'=>'8',
                                                                                                                                                                    'name'=>'district roads',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'4',
                                                                                                                                                                    'description_id'=>'8',
                                                                                                                                                                    'name'=>'city roads',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'5',
                                                                                                                                                                    'description_id'=>'8',
                                                                                                                                                                    'name'=>'rural roads',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'6',
                                                                                                                                                                    'description_id'=>'8',
                                                                                                                                                                    'name'=>'bridge',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'1',
                                                                                                                                                                    'description_id'=>'9',
                                                                                                                                                                    'name'=>'paved',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'2',
                                                                                                                                                                    'description_id'=>'9',
                                                                                                                                                                    'name'=>'unpaved',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'3',
                                                                                                                                                                    'description_id'=>'9',
                                                                                                                                                                    'name'=>'concrete',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'4',
                                                                                                                                                                    'description_id'=>'9',
                                                                                                                                                                    'name'=>'metal bridge',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'5',
                                                                                                                                                                    'description_id'=>'9',
                                                                                                                                                                    'name'=>'gravel',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                array(
                                                                                                                                                                    'standard_id'=>'6',
                                                                                                                                                                    'description_id'=>'9',
                                                                                                                                                                    'name'=>'sandy',
                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                        'description_id'=>'10',
                                                                                                                                                                        'name'=>'no lanes',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                        'description_id'=>'10',
                                                                                                                                                                        'name'=>'1,2 or 3 lanes',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                        'description_id'=>'10',
                                                                                                                                                                        'name'=>'hard shoulders',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                        'description_id'=>'10',
                                                                                                                                                                        'name'=>'straight',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'5',
                                                                                                                                                                        'description_id'=>'10',
                                                                                                                                                                        'name'=>'slight curve',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'6',
                                                                                                                                                                        'description_id'=>'10',
                                                                                                                                                                        'name'=>'sharp curve',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                        'description_id'=>'11',
                                                                                                                                                                        'name'=>'flat road',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                        'description_id'=>'11',
                                                                                                                                                                        'name'=>'gentile slope',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                        'description_id'=>'11',
                                                                                                                                                                        'name'=>'steep slope',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                        'description_id'=>'11',
                                                                                                                                                                        'name'=>'hump/bump',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'5',
                                                                                                                                                                        'description_id'=>'11',
                                                                                                                                                                        'name'=>'dip(hole/dirt)',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'6',
                                                                                                                                                                        'description_id'=>'11',
                                                                                                                                                                        'name'=>'road works',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                        'description_id'=>'12',
                                                                                                                                                                        'name'=>'dry',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                        'description_id'=>'12',
                                                                                                                                                                        'name'=>'wet',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                        'description_id'=>'12',
                                                                                                                                                                        'name'=>'rain',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                        'description_id'=>'12',
                                                                                                                                                                        'name'=>'water',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'5',
                                                                                                                                                                        'description_id'=>'12',
                                                                                                                                                                        'name'=>'muddy',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'6',
                                                                                                                                                                        'description_id'=>'12',
                                                                                                                                                                        'name'=>'debris',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                        'description_id'=>'13',
                                                                                                                                                                        'name'=>'day',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                        'description_id'=>'13',
                                                                                                                                                                        'name'=>'twilight',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                        'description_id'=>'13',
                                                                                                                                                                        'name'=>'night',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                        'description_id'=>'13',
                                                                                                                                                                        'name'=>'smoke',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'5',
                                                                                                                                                                        'description_id'=>'13',
                                                                                                                                                                        'name'=>'street light',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                        'description_id'=>'14',
                                                                                                                                                                        'name'=>'clear',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                        'description_id'=>'14',
                                                                                                                                                                        'name'=>'cloudy',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                        'description_id'=>'14',
                                                                                                                                                                        'name'=>'storm',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                        'description_id'=>'14',
                                                                                                                                                                        'name'=>'fog',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                        'description_id'=>'15',
                                                                                                                                                                        'name'=>'traffic signal',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                        'description_id'=>'15',
                                                                                                                                                                        'name'=>'no traffic signal',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                        'description_id'=>'15',
                                                                                                                                                                        'name'=>'lane marking',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                        'description_id'=>'15',
                                                                                                                                                                        'name'=>'speed limit/sign',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                        'name'=>'over speed',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                        'name'=>'overload',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                        'name'=>'distance keeping',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                        'name'=>'white lane cross',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'5',
                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                        'name'=>'red light',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                    array(
                                                                                                                                                                        'standard_id'=>'6',
                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                        'name'=>'overtaking',
                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                    ),
                                                                                                                                                                    DB::table('psms_standard')->insert(
                                                                                                                                                                        array(
                                                                                                                                                                            'standard_id'=>'7',
                                                                                                                                                                            'description_id'=>'16',
                                                                                                                                                                            'name'=>'wrong direction',
                                                                                                                                                                            'created_at'=>new DateTime,

                                                                                                                                                                        ),
                                                                                                                                                                        DB::table('psms_standard')->insert(
                                                                                                                                                                            array(
                                                                                                                                                                                'standard_id'=>'8',
                                                                                                                                                                                'description_id'=>'16',
                                                                                                                                                                                'name'=>'drink and drive',
                                                                                                                                                                                'created_at'=>new DateTime,

                                                                                                                                                                            ),
                                                                                                                                                                            DB::table('psms_standard')->insert(
                                                                                                                                                                                array(
                                                                                                                                                                                    'standard_id'=>'9',
                                                                                                                                                                                    'description_id'=>'16',
                                                                                                                                                                                    'name'=>'careless ped',
                                                                                                                                                                                    'created_at'=>new DateTime,

                                                                                                                                                                                ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'10',
                                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                                        'name'=>'unsecured load',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'11',
                                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                                        'name'=>'zebra crossing',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'12',
                                                                                                                                                                                        'description_id'=>'16',
                                                                                                                                                                                        'name'=>'others',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'1',
                                                                                                                                                                                        'description_id'=>'17',
                                                                                                                                                                                        'name'=>'brakes',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'2',
                                                                                                                                                                                        'description_id'=>'17',
                                                                                                                                                                                        'name'=>'bad light',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'3',
                                                                                                                                                                                        'description_id'=>'17',
                                                                                                                                                                                        'name'=>'bad tyre',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'4',
                                                                                                                                                                                        'description_id'=>'17',
                                                                                                                                                                                        'name'=>'tyre burst',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    ),
                                                                                                                                                                                DB::table('psms_standard')->insert(
                                                                                                                                                                                    array(
                                                                                                                                                                                        'standard_id'=>'5',
                                                                                                                                                                                        'description_id'=>'17',
                                                                                                                                                                                        'name'=>'others',
                                                                                                                                                                                        'created_at'=>new DateTime,

                                                                                                                                                                                    )


                                                                                                                                                                                )
                                                                                                                                                                                ))))))
                                                                                                                                                                            )

                                                                                                                                                                        )

                                                                                                                                                                    )

                                                                                                                                                                )

                                                                                                                                                            )

                                                                                                                                                        )

                                                                                                                                                    )

                                                                                                                                                )

                                                                                                                                            )
                                                                                                                                                    )))))))))))
                                                                                                                                        )
                                                                                                                                                    )))))))))))))))))))))))
                                                                                                                                    )

                                                                                                                                )

                                                                                                                            )

                                                                                                                        )

                                                                                                                    )

                                                                                                                )

                                                                                                            )

                                                                                                        )

                                                                                                    )

                                                                                                )

                                                                                            )

                                                                                        )

                                                                                    )

                                                                                )

                                                                            )

                                                                        )

                                                                    )

                                                                )

                                                            )

                                                        )

                                                    )

                                                )

                                            )

                                        )

                                    )

                                )

                            )

                        )

                    )

                )))))))))))))))))))))))))))))))

            );


    }}


class StandardDescriptionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psms_standard_description')->delete();
        DB::table('psms_standard_description')->insert(
            array(
                'id'=>'1',
                'name'=>'private',
                'created_at'=>new DateTime,

            ),
            DB::table('psms_standard_description')->insert(
                array(
                    'id'=>'2',
                    'name'=>'commercial',
                    'created_at'=>new DateTime,

                ),
                DB::table('psms_standard_description')->insert(
                    array(
                        'id'=>'3',
                        'name'=>'government',
                        'created_at'=>new DateTime,

                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'4',
                            'name'=>'emergency',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'5',
                            'name'=>'passenger service vehicles',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'6',
                            'name'=>'junction structure',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'7',
                            'name'=>'junction control',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'8',
                            'name'=>'road class',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'9',
                            'name'=>'surface type',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'10',
                            'name'=>'road structure',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'11',
                            'name'=>'road status',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'12',
                            'name'=>'road surface',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'13',
                            'name'=>'light',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'14',
                            'name'=>'weather',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'15',
                            'name'=>'control',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'16',
                            'name'=>'violation',
                            'created_at'=>new DateTime,

                        )
                    ),
                    DB::table('psms_standard_description')->insert(
                        array(
                            'id'=>'17',
                            'name'=>'vehicle defects',
                            'created_at'=>new DateTime,

                        )
                    )
                )
            ));


    }}


