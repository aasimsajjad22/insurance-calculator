<?php
namespace App;
use App\Insurance\InsuranceInterface;
use PHPUnit\Util\Exception;

class BankService implements InsuranceInterface
{
    /** @var string $bankUrl */
    const BANK_URL = 'http://demo9084693.mockable.io/bank';

    public function getQuote()
    {
        try{
            $prices = file_get_contents(self::BANK_URL);
        }
        catch(Exception $ex){
            throw new Exception(0,$ex);
        }

        return $prices;
    }
}