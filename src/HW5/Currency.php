<?php

namespace App\HW5;

class Currency
{
    private string $isoCode;
    private array $currencies = [
        'UAH',
        'USD',
        'EUR',
        'GBP',
        'JPY',
        'CHF',
        'CNY',
        'RUB',
        'AED',
        'AFN',
        'ALL',
        'AMD',
        'AOA',
        'ARS',
        'AUD',
        'AZN',
        'BDT',
        'BGN',
        'BHD',
        'BIF',
        'BND',
        'BOB',
        'BRL',
        'BWP',
        'BYN',
        'CAD',
        'CDF',
        'CLP',
        'COP',
        'CRC',
        'CUP',
        'CZK',
        'DJF',
        'DKK',
        'DZD',
        'EGP',
        'ETB',
        'GEL',
        'GHS',
        'GMD',
        'GNF',
        'HKD',
        'HRK',
        'HUF',
        'IDR',
        'ILS',
        'INR',
        'IQD',
        'IRR',
        'ISK',
        'JOD',
        'KES',
        'KGS',
        'KHR',
        'KPW',
        'KRW',
        'KWD',
        'KZT',
        'LAK',
        'LBP',
        'LKR',
        'LYD',
        'MAD',
        'MDL',
        'MGA',
        'MKD',
        'MNT',
        'MRO',
        'MUR',
        'MVR',
        'MWK',
        'MXN',
        'MYR',
        'MZN',
        'NAD',
        'NGN',
        'NIO',
        'NOK',
        'NPR',
        'NZD',
        'OMR',
        'PEN',
        'PHP',
        'PKR',
        'PLN',
        'PYG',
        'QAR',
        'RON',
        'RSD',
        'SAR',
        'SCR',
        'SDG',
        'SEK',
        'SGD',
        'SLL',
        'SOS',
        'SRD',
        'SYP',
        'SZL',
        'THB',
        'TJS',
        'TMT',
        'TND',
        'TRY',
        'TWD',
        'TZS',
        'UGX',
        'UYU',
        'UZS',
        'VEF',
        'VND',
        'XAF',
        'XDR',
        'XOF',
        'YER',
        'ZAR',
        'ZMK'
    ];

    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }

    public function equals(self $currency): bool
    {
        return $this->getIsoCode() == $currency->getIsoCode();
    }

    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    private function setIsoCode($isoCode): void
    {
        if (!in_array(strtoupper($isoCode), $this->getCurrencies())) {
            exit('Invalid currency');
        }

        $this->isoCode = strtoupper($isoCode);
    }

    private function setCurrencies(array $currencies): void
    {
        $this->currencies = $currencies;
    }
}
