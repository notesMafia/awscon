<?php

namespace App\Helpers\Calculator;

trait WithCalculatorConfig
{
    public array $endPoints = [
        'base_overdraft_data' => 'BaseOverdraftData',
        'eligibility_calculation_for_all_data_combined' => 'EligibilityCalculationForAllDataCombined',
        'eligibility_calc_with_year_n_quarter' => 'EligibilityCalcWithYearNQuater',
        'eligibility_data_with_nsf_calc_for_6_months_n_3_months_elig_reduction_30_per' => 'EligibilityDataWithNSFCalcfor6MonthsN3MonthsEligReduction30Per',
        'last_3_months_less_than_5_deposits_reduce_eligibility_20_per' => 'Last_3months_LessThan5_deposits_ReduceEligibility20Per',
        'last_4_6_months_less_than_5_deposits_reduce_eligibility_10_per' => 'Last_4_6months_LessThan5_deposits_ReduceEligibility10Per',
        'last_6_months_0_deposits_reduce_eligibility_20_per' => 'Last_6months_0_deposits_ReduceEligibility20Per',
        'non_sufficient_funds' => 'NonSuffecientFunds',
        'only_5_to_10_deposit_reduce_eligibility_20_per' => 'Only_5To10Deposit_ReduceEligibility20Per',
        'overdraft_data_with_number_of_negative_days_month_wise_each_year' => 'OverdraftDataWithNumberOfNegativeDaysMonthWiseEachYear',
        'per_increase_or_decrease_month_on_month' => 'PerIncreaseorDecreaseMonthOnMonth',
        'pos_settle_type_of_card' => 'POS_Settle_TypeOfCard',
        'pos_pay_and_type_of_card_used' => 'POSPayAndTypeofCardUsed',
        'recurring_expense_data' => 'RecurringExpenseData',
        'recurring_income_month_on_month_for_each_year' => 'RecurringIncomeMonthOnMonthForEachYear',
        'twelve_three_month_average_deposits' => 'Twelve_Three_Month_AverageDeposits',
    ];

}
