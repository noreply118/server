<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::TestAction',  '_route' => 'test',);
        }

        if (0 === strpos($pathinfo, '/mortgage-payment-calculator-')) {
            // mortgage_payment_golden
            if ($pathinfo === '/mortgage-payment-calculator-golden') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::paymentGoldenAction',  '_route' => 'mortgage_payment_golden',);
            }

            // mortgage_payment_ratetrade
            if ($pathinfo === '/mortgage-payment-calculator-ratetrade') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::paymentRatetradeAction',  '_route' => 'mortgage_payment_ratetrade',);
            }

        }

        // payment_analyzer_ratetrade
        if ($pathinfo === '/payment-analyzer-ratetrade') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::PaymentAnalyzerRatetradeAction',  '_route' => 'payment_analyzer_ratetrade',);
        }

        // income_ratetrade
        if ($pathinfo === '/income-ratetrade') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::IncomeRatetradeAction',  '_route' => 'income_ratetrade',);
        }

        // mortgage_payment1
        if ($pathinfo === '/mortgage-payment-calculator1') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::payment1Action',  '_route' => 'mortgage_payment1',);
        }

        if (0 === strpos($pathinfo, '/get-mortgage')) {
            // get_mortgage
            if ($pathinfo === '/get-mortgage') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getMortgageAction',  '_route' => 'get_mortgage',);
            }

            // get_mortgage_installement
            if ($pathinfo === '/get-mortgage-installement') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getMortgageInstallmentAction',  '_route' => 'get_mortgage_installement',);
            }

        }

        // land_transfer_tax_golden
        if ($pathinfo === '/land-transfer-tax-golden') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::LandTransferTaxGoldenAction',  '_route' => 'land_transfer_tax_golden',);
        }

        // get_land_transfer_tax
        if ($pathinfo === '/get-land-transfer-tax') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getLandTransferTaxAction',  '_route' => 'get_land_transfer_tax',);
        }

        if (0 === strpos($pathinfo, '/chmc-insurance-calculator-')) {
            // chmc_insurance_golden
            if ($pathinfo === '/chmc-insurance-calculator-golden') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::ChmcCalculatorGoldenAction',  '_route' => 'chmc_insurance_golden',);
            }

            // chmc_insurance_ratetrade
            if ($pathinfo === '/chmc-insurance-calculator-ratetrade') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::ChmcCalculatorRatetradeAction',  '_route' => 'chmc_insurance_ratetrade',);
            }

        }

        // loan_tools
        if ($pathinfo === '/loan-tools-dashboard') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::LoanToolsAction',  '_route' => 'loan_tools',);
        }

        // affordability_calculator
        if ($pathinfo === '/affordability-calculator') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::AffordabiltyCalAction',  '_route' => 'affordability_calculator',);
        }

        if (0 === strpos($pathinfo, '/get-')) {
            // province_cities
            if ($pathinfo === '/get-province-city') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getProvinceCityAction',  '_route' => 'province_cities',);
            }

            if (0 === strpos($pathinfo, '/get-a')) {
                if (0 === strpos($pathinfo, '/get-affordability')) {
                    // get_affordability
                    if ($pathinfo === '/get-affordability') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getAffordabilityAction',  '_route' => 'get_affordability',);
                    }

                    if (0 === strpos($pathinfo, '/get-affordability-')) {
                        // get_affordability_table
                        if ($pathinfo === '/get-affordability-table') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getAffordabilityTableAction',  '_route' => 'get_affordability_table',);
                        }

                        // get_affordability_down
                        if ($pathinfo === '/get-affordability-down') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getAffordabilityDownAction',  '_route' => 'get_affordability_down',);
                        }

                    }

                }

                // get_ammortization_table
                if (0 === strpos($pathinfo, '/get-ammort-table') && preg_match('#^/get\\-ammort\\-table/(?P<principal>[^/]++)/(?P<num_years>[^/]++)/(?P<rate>[^/]++)/(?P<payment_frequency>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_ammortization_table')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getAmortizationTableAction',));
                }

            }

            // get_prop_tax
            if ($pathinfo === '/get-prop-tax') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getPropTaxAction',  '_route' => 'get_prop_tax',);
            }

        }

        if (0 === strpos($pathinfo, '/mortgage-refinance-')) {
            if (0 === strpos($pathinfo, '/mortgage-refinance-equity')) {
                // equity_refinance1
                if ($pathinfo === '/mortgage-refinance-equity1') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getRefinanceEquity1Action',  '_route' => 'equity_refinance1',);
                }

                // equity_refinance_golden
                if ($pathinfo === '/mortgage-refinance-equity-golden') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getRefinanceEquityGoldenAction',  '_route' => 'equity_refinance_golden',);
                }

            }

            if (0 === strpos($pathinfo, '/mortgage-refinance-penalty')) {
                // refinance_penalty1
                if ($pathinfo === '/mortgage-refinance-penalty1') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getRefinancePenalty1Action',  '_route' => 'refinance_penalty1',);
                }

                // refinance_penalty_golden
                if ($pathinfo === '/mortgage-refinance-penalty-golden') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::getRefinancePenaltyGoldenAction',  '_route' => 'refinance_penalty_golden',);
                }

            }

            if (0 === strpos($pathinfo, '/mortgage-refinance-calculator')) {
                // refinance_calculator1
                if ($pathinfo === '/mortgage-refinance-calculator1') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::RefinanceCalculator1Action',  '_route' => 'refinance_calculator1',);
                }

                if (0 === strpos($pathinfo, '/mortgage-refinance-calculator-')) {
                    // refinance_calculator_golden
                    if ($pathinfo === '/mortgage-refinance-calculator-golden') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::RefinanceCalculatorGoldenAction',  '_route' => 'refinance_calculator_golden',);
                    }

                    // refinance_calculator_ratetrade
                    if ($pathinfo === '/mortgage-refinance-calculator-ratetrade') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::RefinanceCalculatorRatetradeAction',  '_route' => 'refinance_calculator_ratetrade',);
                    }

                }

            }

        }

        // debt-consolidation-calculator_golden
        if ($pathinfo === '/debt-consolidation-refinance-calculator-golden') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::DebtConsolidationAction',  '_route' => 'debt-consolidation-calculator_golden',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::LoginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::LogoutAction',  '_route' => 'logout',);
            }

            // logincheck
            if ($pathinfo === '/logincheck') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::LoginCheckAction',  '_route' => 'logincheck',);
            }

        }

        if (0 === strpos($pathinfo, '/rate-entry-form')) {
            // rateform
            if ($pathinfo === '/rate-entry-form') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::RateEntryFormAction',  '_route' => 'rateform',);
            }

            // rateform_update
            if ($pathinfo === '/rate-entry-form-update') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::RateEntryFormUpdateAction',  '_route' => 'rateform_update',);
            }

        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::AboutAction',  '_route' => 'about',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::ContactAction',  '_route' => 'contact',);
        }

        // mortgage
        if ($pathinfo === '/mortgage') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::MortgageAction',  '_route' => 'mortgage',);
        }

        // calculator
        if ($pathinfo === '/calculator') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::CalculatorAction',  '_route' => 'calculator',);
        }

        // allrates
        if ($pathinfo === '/all-rates') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::AllRatesAction',  '_route' => 'allrates',);
        }

        // json
        if ($pathinfo === '/test-json') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\MortgageController::JSONAction',  '_route' => 'json',);
        }

        // ratetrade_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ratetrade_homepage');
            }

            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::homepageAction',  '_route' => 'ratetrade_homepage',);
        }

        // email_subscribe
        if ($pathinfo === '/email_subscribe') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::EmailSubscribeAction',  '_route' => 'email_subscribe',);
        }

        // thankyou
        if ($pathinfo === '/thank-you') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::ThankyouAction',  '_route' => 'thankyou',);
        }

        // get_city
        if (0 === strpos($pathinfo, '/get_province_city') && preg_match('#^/get_province_city/(?P<provinceid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_city')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::getProvinceCityAction',));
        }

        if (0 === strpos($pathinfo, '/best-mortgage-rates')) {
            // mortgage_rates
            if (preg_match('#^/best\\-mortgage\\-rates/(?P<ratetype>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mortgage_rates')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::MortgageRatesAction',));
            }

            // mort_rates
            if ($pathinfo === '/best-mortgage-rates') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::MortRatesAction',  '_route' => 'mort_rates',);
            }
            if ($pathinfo === '/new-rates') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::NewRatesAction',  '_route' => 'new_rates',);
            }

        }

        // real_estate
        if ($pathinfo === '/real-estate') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::RealEstateAction',  '_route' => 'real_estate',);
        }

        // compare_rates
        if ($pathinfo === '/compare-mortgage-rates') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::CompareRatesAction',  '_route' => 'compare_rates',);
        }

        // apply_now
        if ($pathinfo === '/apply-now') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::ApplyNowAction',  '_route' => 'apply_now',);
        }

        if (0 === strpos($pathinfo, '/contact-us')) {
            // contact_us
            if ($pathinfo === '/contact-us') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::ContactUsAction',  '_route' => 'contact_us',);
            }

            // contact_us_update
            if ($pathinfo === '/contact-us-update') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::ContactUsUpdateAction',  '_route' => 'contact_us_update',);
            }

        }

        // lead_update
        if ($pathinfo === '/lead-update') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::LeadUpdateAction',  '_route' => 'lead_update',);
        }

        // broker_list
        if ($pathinfo === '/mortgage-brokers-list') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerListAction',  '_route' => 'broker_list',);
        }

        // bank_mortgage_rates
        if ($pathinfo === '/bank-mortgage-rates') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BankMortgageRatesAction',  '_route' => 'bank_mortgage_rates',);
        }

        if (0 === strpos($pathinfo, '/mortgage-broker-')) {
            // broker_signup
            if ($pathinfo === '/mortgage-broker-signup') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerSignUpAction',  '_route' => 'broker_signup',);
            }

            if (0 === strpos($pathinfo, '/mortgage-broker-login')) {
                // broker_login
                if ($pathinfo === '/mortgage-broker-login') {
                    return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerLoginAction',  '_route' => 'broker_login',);
                }

                // broker_logincheck
                if ($pathinfo === '/mortgage-broker-logincheck') {
                    return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerLoginCheckAction',  '_route' => 'broker_logincheck',);
                }

            }

            // broker_dashboard
            if ($pathinfo === '/mortgage-broker-dashboard') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerDashboardAction',  '_route' => 'broker_dashboard',);
            }

            // broker_rates
            if ($pathinfo === '/mortgage-broker-rates') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerRatesAction',  '_route' => 'broker_rates',);
            }

        }

        if (0 === strpos($pathinfo, '/broker-')) {
            // broker_update
            if ($pathinfo === '/broker-update') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerUpdateAction',  '_route' => 'broker_update',);
            }

            // broker_login_update
            if ($pathinfo === '/broker-login-update') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerLoginUpdateAction',  '_route' => 'broker_login_update',);
            }

            // broker_rate_update
            if ($pathinfo === '/broker-rate-update') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerRateUpdateAction',  '_route' => 'broker_rate_update',);
            }

            // broker_logout
            if ($pathinfo === '/broker-logout') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::BrokerLogoutAction',  '_route' => 'broker_logout',);
            }

        }

        // mortgage_payment
        if ($pathinfo === '/mortgage-payment-calculator') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::PaymentAction',  '_route' => 'mortgage_payment',);
        }

        // payment_analyzer
        if ($pathinfo === '/payment-analyzer-calculator') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::PaymentAnalyzerAction',  '_route' => 'payment_analyzer',);
        }

        // income_cal
        if ($pathinfo === '/income-calculator') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::IncomeCalAction',  '_route' => 'income_cal',);
        }

        // land_transfer_tax
        if ($pathinfo === '/land-transfer-tax') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::LandTransferTaxAction',  '_route' => 'land_transfer_tax',);
        }

        // chmc_insurance
        if ($pathinfo === '/cmhc-insurance-calculator') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::ChmcCalculatorAction',  '_route' => 'chmc_insurance',);
        }

        if (0 === strpos($pathinfo, '/mortgage-')) {
            if (0 === strpos($pathinfo, '/mortgage-refinance-')) {
                // equity_refinance
                if ($pathinfo === '/mortgage-refinance-equity') {
                    return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::getRefinanceEquityAction',  '_route' => 'equity_refinance',);
                }

                // refinance_penalty
                if ($pathinfo === '/mortgage-refinance-penalty') {
                    return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::getRefinancePenaltyAction',  '_route' => 'refinance_penalty',);
                }

            }

            // affordability_cal
            if ($pathinfo === '/mortgage-affordability') {
                return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::AffordabilityAction',  '_route' => 'affordability_cal',);
            }

        }

        // debt-consolidation-calculator
        if ($pathinfo === '/debt-consolidation-refinance-calculator') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::DebtConsolidationAction',  '_route' => 'debt-consolidation-calculator',);
        }

        // refinance-calculator
        if ($pathinfo === '/mortgage-refinance-calculator') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::MortgageRefinanceAction',  '_route' => 'refinance-calculator',);
        }

        // detect_city
        if ($pathinfo === '/detect_city') {
            return array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::DetectCityAction',  '_route' => 'detect_city',);
        }

        if (0 === strpos($pathinfo, '/mortgage-re')) {
            // mortgage_renewals
            if (0 === strpos($pathinfo, '/mortgage-renewal-process') && preg_match('#^/mortgage\\-renewal\\-process\\-(?P<city>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mortgage_renewals')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::MortgageRenewalsAction',));
            }

            // mortgage_refinance
            if (0 === strpos($pathinfo, '/mortgage-refinance') && preg_match('#^/mortgage\\-refinance\\-(?P<city>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mortgage_refinance')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::MortgageRefinancingAction',));
            }

        }

        // dynmaicurl
        if (preg_match('#^/(?P<urlparam>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dynmaicurl')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::DynamicPageAction',));
        }

        // ncity_ratetypes
        if (preg_match('#^/(?P<target>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ncity_ratetypes')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::NcityRatesAction',));
        }

        // city_ratetypes
        if (preg_match('#^/(?P<target>[^/]++)/(?P<ratetype>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_ratetypes')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::CityRatesAction',));
        }

        // city_mortgage_rates
        if (preg_match('#^/(?P<target>[^/]++)/(?P<term>[^/]++)/(?P<ratetype>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_mortgage_rates')), array (  '_controller' => 'Main\\RatetradeBundle\\Controller\\DefaultController::CityMortgageRatesAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
