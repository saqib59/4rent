<div>
    <div class="row" x-data="calculator()">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card white-box p-0">
                <div class="card-heading pb-2">
                    <h3 class="box-title mb-0">Renditenrechner</h3>
                </div>
                <div class="card-body">
                    <p class="block font-medium text-sm text-gray-700">This calculator will help you to get a detailed overview about a interesting real estate</p>

                    <div class="relative mx-auto max-w-xl overflow-hidden pb-1 pt-4">
                        Step <span x-text="step"></span> of 13
                    </div>
                    <div class="h-3 relative mx-auto max-w-xl rounded-full overflow-hidden">
                        <div class="w-full h-full bg-gray-200 absolute"></div>
                        <div class="h-full bg-green-500 absolute transition-all" :style="`width: ${step * 100 / 13}%;`"></div>
                    </div>

                    {{-- Step 1 --}}
                    <div class="py-4" id="step1" x-show.transition.in="step === 1">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 1:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Adresse des Bewertungsobjektes
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="Address" type="text" data-rules='["required"]' @blur="blur" @input="input" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="address" name="address">

                                <p x-show="address.errorMessage && address.blurred" x-text="address.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Quadratmeter
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="x m²" type="number" data-rules='["required"]' @blur="blur" @input="input" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="square_meters" name="square_meters">
                            
                                <p x-show="square_meters.errorMessage && square_meters.blurred" x-text="square_meters.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Kaufdatum
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input value="1900-01-01" type="date" data-rules='["required"]' @blur="blur" @input="input" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="purchase_date" name="purchase_date">
                                
                                <p x-show="purchase_date.errorMessage && purchase_date.blurred" x-text="purchase_date.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                    </div>

                    {{-- Step 2 --}}
                    <div class="py-4" id="step2" x-show.transition.in="step === 2" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 2:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Kaufpreis
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="x€" type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcGrossRental" id="price_of_purchase" name="price_of_purchase" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="price_of_purchase.errorMessage && price_of_purchase.blurred" x-text="price_of_purchase.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Kaltmiete pro Monat
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="x€" type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcGrossRental" id="rental" name="rental" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="rental.errorMessage && rental.blurred" x-text="rental.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                einfache Bruttomiete
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx%" x-model="simpleGrossRentalYield" type="text" id="gross_rental" name="gross_rental" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="py-4" id="step3" x-show.transition.in="step === 3" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 3:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Bundesland
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <select name="state" id="state" x-on:change="calcAdditionalPurchaseCost" x-model="buyingTax" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                    <option value="5.0" selected>Baden-Württemberg</option>
                                    <option value="3.5">Bayern</option>
                                    <option value="6.0">Berlin</option>
                                    <option value="6.5">Brandenburg</option>
                                    <option value="5.0">Bremen</option>
                                    <option value="4.5">Hamburg</option>
                                    <option value="6.0">Hessen</option>
                                    <option value="5.0">Mecklenburg-Vorpommern</option>
                                    <option value="5.0">Niedersachsen</option>
                                    <option value="6.5">Nordrhein-Westfalen</option>
                                    <option value="5.0">Rheinland-Pfalz</option>
                                    <option value="6.5">Saarland</option>
                                    <option value="3.5">Sachsen</option>
                                    <option value="5.0">Sachsen-Anhalt</option>
                                    <option value="6.5">Schleswig-Holstein</option>
                                    <option value="6.5">Thüringen</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Grunderwerbssteuer
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="3.50%" type="number" x-model="buyingTax" id="buying_tax" name="buying_tax" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Immobilienmakler
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input  placeholder="xx%" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcAdditionalPurchaseCost" type="number" id="estate_agent" name="estate_agent" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="estate_agent.errorMessage && estate_agent.blurred" x-text="estate_agent.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Notar
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx%" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcAdditionalPurchaseCost" type="number" id="notary" name="notary" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                                
                                <p x-show="notary.errorMessage && notary.blurred" x-text="notary.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Grundbucheintrag
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx%" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcAdditionalPurchaseCost" type="number" id="register_cost" name="register_cost" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="register_cost.errorMessage && register_cost.blurred" x-text="register_cost.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                weitere Nebenkosten
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx%" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcAdditionalPurchaseCost" type="number" id="more_cost" name="more_cost" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="more_cost.errorMessage && more_cost.blurred" x-text="more_cost.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Summe Kaufnebenkosten
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="€" type="text" x-model="additionalPurchaseCost" id="additional_cost" name="additional_cost" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            </div>
                        </div>
                    </div>

                    {{-- Step 4 --}}
                    <div class="py-4" id="step4" x-show.transition.in="step === 4" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 4:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                geplante Sanierungskosten
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx €" type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcNeedOfCapital" id="renovation" name="renovation" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="renovation.errorMessage && renovation.blurred" x-text="renovation.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                geplante Sonderumlagen
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx €" type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcNeedOfCapital" id="contribution" name="contribution" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="contribution.errorMessage && contribution.blurred" x-text="contribution.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Kaufpreis inkl. Nebenkosten
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="€" type="text" x-model="priceAndCost" id="purchase_cost" name="purchase_cost" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Kapitalbedarf
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="€" type="text" x-model="capitalNeed" id="capital_need" name="capital_need" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Sanierung bei Mieterwechsel
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx €" type="number" data-rules='["required"]' @blur="blur" @input="input" id="renovation_ten" name="renovation_ten" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="renovation_ten.errorMessage && renovation_ten.blurred" x-text="renovation_ten.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                    </div>

                    {{-- Step 5 --}}
                    <div class="py-4" id="step5" x-show.transition.in="step === 5" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 5:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Kreditanteil vom Kaufpreis
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="80%" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcLoanAmount" type="number" max="100" min="0" id="loan_percent" name="loan_percent" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="loan_percent.errorMessage && loan_percent.blurred" x-text="loan_percent.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Kreditbetrag
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx €" type="text" x-model="loanAmount" id="loan_amount" name="loan_amount" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Zinssatz
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx %" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcMonthlyPayment" type="number" id="interest" name="interest" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="interest.errorMessage && interest.blurred" x-text="interest.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Tilgung in % 
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx %" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcMonthlyPayment" type="number" id="repayment_in" name="repayment_in" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="repayment_in.errorMessage && repayment_in.blurred" x-text="repayment_in.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                    </div>

                    {{-- Step 6 --}}
                    <div class="py-4" id="step6" x-show.transition.in="step === 6" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 6:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Monatliche Rate
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx €" type="text" x-model="monthlyPayment" id="monthly_payment" name="monthly_payment" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Schuldenfrei in
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="in xx years" type="text" value="25" id="debt_free" name="debt_free" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Eigenkapitalbedarf
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="€" type="text" id="private_capital" x-model="privateCapital" name="private_capital" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            </div>
                        </div>
                    </div>

                    {{-- Step 7 --}}
                    <div class="py-4" id="step7" x-show.transition.in="step === 7" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 7:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Nicht umlagerfähiges Hausgeld
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="xx €" type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcCashFlowWithoutTax" id="house_money" name="house_money" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="house_money.errorMessage && house_money.blurred" x-text="house_money.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                eigene Rücklagen Mietausfall
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="i% of rent" type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcCashFlowWithoutTax" id="saving" name="saving" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="saving.errorMessage && saving.blurred" x-text="saving.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                eigene Rücklagen Renovierung
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input  placeholder="€ p. m²" type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcCashFlowWithoutTax" id="renovation_saving" name="renovation_saving" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="renovation_saving.errorMessage && renovation_saving.blurred" x-text="renovation_saving.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                    </div>

                    {{-- Result so far --}}
                    <div class="py-4" id="step8" x-show.transition.in="step === 8" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Zwischenergebnis :</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-12 col-sm-12 flex items-center justify-center text-center text-lg font-bold py-5">
                                Monatlicher Cashflow vor Steuern&nbsp; <span x-text="cashFlowWithoutTax"></span> €
                            </div>
                        </div>
                    </div>

                    {{-- Step 8 --}}
                    <div class="py-4" id="step9" x-show.transition.in="step === 9" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 8: Zinsanderungsrisiko</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Zinsbindung
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input type="number" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcSamePayment" id="interest_for_years" name="interest_for_years" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="interest_for_years.errorMessage && interest_for_years.blurred" x-text="interest_for_years.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                gleiche Rate danach bei Zinssatz
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input type="number" id="same_payment" name="same_payment" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                    </div>

                    {{-- Step 9 --}}
                    <div class="py-4" id="step10" x-show.transition.in="step === 10" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 9: Ground % of House</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Fläche Haus von Grund in %
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input type="number" data-rules='["required"]' @blur="blur" @input="input" id="house_of_ground" name="house_of_ground" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="house_of_ground.errorMessage && house_of_ground.blurred" x-text="house_of_ground.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                    </div>

                    {{-- Step 10 --}}
                    <div class="py-4" id="step11" x-show.transition.in="step === 11" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 10:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Baujahr
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="<1925, >1924" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcDepreciationRate" type="number" id="year_build" name="year_build" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="year_build.errorMessage && year_build.blurred" x-text="year_build.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Abschreibung in % 
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="2,5%, 2%" x-model="depriciationRate" type="text" id="depreciation" name="depreciation" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Abschreibung pro Monat
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="€" x-model="depriciation" type="text" id="depreciation_month" name="depreciation_month" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                    </div>

                    {{-- Step 11 --}}
                    <div class="py-4" id="step12" x-show.transition.in="step === 12" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Step 11: Tax</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Persönlicher Steuersatz
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input type="number" id="tax_rate" data-rules='["required"]' @blur="blur" @input="input" @keyup="calcTaxableCashFlow" name="tax_rate" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full">
                            
                                <p x-show="tax_rate.errorMessage && tax_rate.blurred" x-text="tax_rate.errorMessage" class="text-danger pt-1 px-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                zu Versteuernder Cash Flow
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="€" type="text" x-model="taxableCashflow" id="tax_cashflow" name="tax_cashflow" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                Monthly tax amount
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12">
                                <input placeholder="€" type="text" id="monthly_tax" name="monthly_tax" class="grayinput border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" readonly>
                            </div>
                        </div>
                    </div>

                    {{-- Final result --}}
                    <div class="py-4" id="step13" x-show.transition.in="step === 13" style="display: none;">
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-3 col-sm-12 flex items-center">
                                <h3 class="box-title mb-0 justify-cente">Final result:</h3>
                            </div>
                            <div class="col-md-12 col-lg-4 col-sm-12"></div>
                        </div>
                        <div class="row pt-2 justify-center">
                            <div class="col-md-12 col-lg-12 col-sm-12 flex items-center justify-center text-center text-lg font-bold py-5">
                                Cashflow after tax&nbsp; <span x-text="cashflowAfterTax"></span>€
                            </div>
                        </div>
                    </div>

                    {{-- Wizard Navigations --}}
                    <div class="py-5">
                        <div class="row justify-center">
                            <div class="col-md-6 col-lg-3 col-sm-6 col-6 col-xs-12 flex items-center">
                                <button
                                    x-show="step > 1"
                                    @click="step--"
                                    style="display: none;"
                                    class="focus:outline-none py-2 px-4 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                                >Back</button>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6 col-6 col-xs-12 flex items-center justify-end">
                                <button
                                    x-show="step < 13"
                                    @click="processStep"
                                    class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
                                >Next</button>

                                <button
                                    x-show="step === 13"
                                    @click="step++"
                                    style="display: none;"
                                    class="focus:outline-none border border-transparent py-2 px-4 rounded-lg shadow-sm text-center text-white bg-green-500 hover:bg-green-600 font-medium" 
                                >Finish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
        function calculator() {
            return {
                step: 1,
                
                // Calculation Figures
                simpleGrossRentalYield: 0.00,
                buyingTax: 5.0,
                additionalPurchaseCost: 0.00,
                priceAndCost: 0.00,
                capitalNeed: 0.00,
                loanAmount: 0.00,
                monthlyPayment: 0.00,
                privateCapital: 0.00,
                cashFlowWithoutTax: 0.00,
                depriciationRate: 0.00,
                depriciation: 0.00,
                taxableCashflow: 0.00,
                monthlyTax: 100.00,
                cashflowAfterTax: 0.00,
                samePaymentInterest: 0.00,

                // Step 1 Data
                address: { errorMessage:'', blurred:false },
                square_meters: { errorMessage:'', blurred:false },
                purchase_date: { errorMessage:'', blurred:false },

                // Step 2 Data
                price_of_purchase: { errorMessage:'', blurred:false },
                rental: { errorMessage:'', blurred:false },

                // Step 3 Data
                estate_agent: { errorMessage:'', blurred:false },
                notary: { errorMessage:'', blurred:false },
                register_cost: { errorMessage:'', blurred:false },
                more_cost: { errorMessage:'', blurred:false },

                // Step 4 Data
                renovation: { errorMessage:'', blurred:false },
                contribution: { errorMessage:'', blurred:false },
                renovation_ten: { errorMessage:'', blurred:false },

                // Step 5 Data
                loan_percent: { errorMessage:'', blurred:false },
                interest: { errorMessage:'', blurred:false },
                repayment_in: { errorMessage:'', blurred:false },

                // Step 7 Data
                house_money: { errorMessage:'', blurred:false },
                saving: { errorMessage:'', blurred:false },
                renovation_saving: { errorMessage:'', blurred:false },

                // Step 8 Data
                interest_for_years: { errorMessage:'', blurred:false },

                // Step 9 Data
                house_of_ground: { errorMessage:'', blurred:false },

                // Step 10 Data
                year_build: { errorMessage:'', blurred:false },

                // Step 11 Data
                tax_rate: { errorMessage:'', blurred:false },
            

                processStep: function () {
                    let id = '#step' + this.step;
                    this.inputElements = [...this.$el.querySelectorAll(id + " input[data-rules]")];

                    let isValid = true;

                    this.inputElements.map((input) => {
                        if (Iodine.is(input.value, JSON.parse(input.dataset.rules)) !== true) {
                            const error = Iodine.is(input.value, JSON.parse(input.dataset.rules));

                            input.classList.add("border-red-500");
                            this[input.name].errorMessage = Iodine.getErrorMessage(error);
                            this[input.name].blurred = true;

                            isValid = false;
                        } else {
                            input.classList.remove("border-red-500");
                            this[input.name].errorMessage = "";
                        }
                    });

                    if (isValid) {
                        this.step++;
                    }
                },

                blur: function(event) {
                    let ele = event.target;
                    this[ele.name].blurred = true;
                    let rules = JSON.parse(ele.dataset.rules)
                    this[ele.name].errorMessage = this.getErrorMessage(ele, rules);
                },

                input: function(event) {
                    let ele = event.target;
                    let rules = JSON.parse(ele.dataset.rules)
                    this[ele.name].errorMessage = this.getErrorMessage(ele, rules);
                },

                getErrorMessage: function(input, rules){
                    let isValid = Iodine.is(input.value, rules);

                    if (isValid !== true) {
                        input.classList.add("border-red-500");
                        return Iodine.getErrorMessage(isValid);
                    }

                    input.classList.remove("border-red-500");
                    return '';
                },

                calcGrossRental: function() {
                    let price = this.$el.querySelector('input[name=price_of_purchase]').value;
                    let rental = this.$el.querySelector('input[name=rental]').value;

                    if (price && rental) {
                        this.simpleGrossRentalYield = ((Number(rental) * 12) / Number(price) * 100).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    }
                },

                calcAdditionalPurchaseCost: function() {
                    let estateAgent = this.$el.querySelector('input[name=estate_agent]').value;
                    let notary = this.$el.querySelector('input[name=notary]').value;
                    let registerCost = this.$el.querySelector('input[name=register_cost]').value;
                    let moreCost = this.$el.querySelector('input[name=more_cost]').value;
                    let purchasePrice = this.$el.querySelector('input[name=price_of_purchase]').value;

                    if (estateAgent && notary && registerCost && moreCost) {
                        let purchaseCost = ((Number(this.buyingTax) + Number(estateAgent) + Number(notary) + Number(registerCost) + Number(moreCost)) * Number(purchasePrice) / 100)
                        this.additionalPurchaseCost = purchaseCost.toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

                        this.priceAndCost = (Number(purchasePrice) + Number(purchaseCost)).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    }
                },

                calcNeedOfCapital: function() {
                    let renovation = this.$el.querySelector('input[name=renovation]').value;
                    let contribution = this.$el.querySelector('input[name=contribution]').value;

                    console.log("Price and cost", Number(this.priceAndCost));

                    if (contribution && renovation) {
                        this.capitalNeed = (Number(contribution) + Number(renovation) + Number(this.priceAndCost.replace(/,/g, ''))).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    }
                },

                calcLoanAmount: function() {
                    let loanPercent = this.$el.querySelector('input[name=loan_percent]').value;
                    let price = this.$el.querySelector('input[name=price_of_purchase]').value;

                    if (loanPercent) {
                        this.loanAmount = (Number(price) * Number(loanPercent) / 100).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

                        this.privateCapital = (Number(this.capitalNeed.replace(/,/g, '')) - Number(this.loanAmount.replace(/,/g, ''))).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    }
                },

                calcMonthlyPayment: function() {
                    let interest = this.$el.querySelector('input[name=interest]').value;
                    let repaymentIn = this.$el.querySelector('input[name=repayment_in]').value;

                    if (interest && repaymentIn) {
                        this.monthlyPayment = ((Number(interest) + Number(repaymentIn)) * Number(this.loanAmount.replace(/,/g, '')) / 12 / 100).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    }
                },

                calcCashFlowWithoutTax: function() {
                    let houseMoney = this.$el.querySelector('input[name=house_money]').value;
                    let saving = this.$el.querySelector('input[name=saving]').value;
                    let renovationSaving = this.$el.querySelector('input[name=renovation_saving]').value;
                    let rental = this.$el.querySelector('input[name=rental]').value;
                    let squareMeters = this.$el.querySelector('input[name=square_meters]').value;

                    // Calculating Percentages
                    saving = Number(rental) * Number(saving) / 100;
                    renovationSaving = Number(renovationSaving) * Number(squareMeters);

                    this.cashFlowWithoutTax = (Number(rental) - (Number(this.monthlyPayment.replace(/,/g, '')) + Number(houseMoney) + Number(saving) + Number(renovationSaving))).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                },

                calcDepreciationRate: function() {
                    let year = this.$el.querySelector('input[name=year_build]').value;

                    if (Number(year) > 1924) {
                        this.depriciationRate = 2.0;
                    } else {
                        this.depriciationRate = 2.5;
                    }

                    let price = this.$el.querySelector('input[name=price_of_purchase]').value;

                    this.depriciation = ((Number(price) * this.depriciationRate) / 100).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                },

                calcTaxableCashFlow: function() {
                    let taxRate = this.$el.querySelector('input[name=tax_rate]').value;
                    let rental = this.$el.querySelector('input[name=rental]').value;
                    let houseMoney = this.$el.querySelector('input[name=house_money]').value;

                    console.log('rental', Number(rental))
                    console.log('housemoney', Number(houseMoney))
                    console.log('monthly', Number(this.monthlyPayment.replace(/,/g, '')))
                    console.log('depreciation', Number(this.depriciation.replace(/,/g, '')))


                    this.taxableCashflow = (Number(rental) - Number(houseMoney) - Number(this.monthlyPayment.replace(/,/g, '')) - Number(this.depriciation.replace(/,/g, ''))).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

                    this.cashflowAfterTax = (Number(this.cashFlowWithoutTax.replace(/,/g, '')) - this.monthlyTax).toLocaleString('en', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                },

                calcSamePayment: function() {
                    let interestYears = this.$el.querySelector('input[name=interest_for_years]').value;

                    if (Number(interestYears) == 10) {
                        this.samePaymentInterest = 3;
                    }
                }
            }
        }
    </script>
@endsection