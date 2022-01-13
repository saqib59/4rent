<?php

namespace App\Console\Commands;

use App\Models\Income;
use App\Models\Property;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Console\Command;

class IncomeCalculate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'income:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate Income for each user monthly';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $users =  User::all();
        foreach ($users as $user)
        {
            $incomes = 0;
            $tenants = Tenant::where('owner_id',$user->id)->get();
            foreach ($tenants as $tenant)
            {
                $propert_val = Property::where('id',$tenant->property_id)->get();
                $incomes = $incomes+ $propert_val[0]->rent_pm;
            }
            $income = new Income();
            $income->user_id = $user->id;
            $income->year = date("Y");
            $income->month = date("m");
            $income->total  =$incomes;
            $income->save();
        }
        $this->info('Successfully calculate income for everyone.');
    }
}
