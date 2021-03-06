<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(WalletSeeder::class);
        $this->call(ReferralSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(PackageFeatureSeeder::class);
        $this->call(PartnersTableSeeder::class);
        // $this->call(ReferralBonusSeeder::class);
        // $this->call(ServiceProvidedSeeder::class);
        $this->call(CategorySeeder::class);
        // $this->call(SubCategorySeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventPackageTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        
    }
}
