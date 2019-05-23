<?php

use Database\Seeds\Accounts;
use Database\Seeds\BillStatuses;
use Database\Seeds\Categories;
use Database\Seeds\Currencies;
use Database\Seeds\InvoiceStatuses;
use Database\Seeds\Modules;
use Database\Seeds\Roles;
use Database\Seeds\Settings;
use Database\Seeds\TestCompany;
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
        $this->call(Accounts::class);
        $this->call(BillStatuses::class);
        $this->call(Categories::class);
        $this->call(CompanySeeder::class);
        $this->call(Currencies::class);
        $this->call(InvoiceStatuses::class);
        $this->call(Modules::class);
        $this->call(Roles::class);
        $this->call(Settings::class);
        $this->call(TestCompany::class);

    }
}
