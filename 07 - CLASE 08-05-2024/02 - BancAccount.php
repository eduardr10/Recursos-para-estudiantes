<?php
class BankAccount
{

    public function __construct(
        private $accountNumber,
        private $holderName,
        private $balance,
        private $accountType
    ) {
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            return "Deposited $amount successfully.";
        }
        return "Invalid deposit amount.";
    }

    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrew $amount successfully.";
        }
        return "Insufficient funds or invalid withdrawal amount.";
    }

    public function accountSummary()
    {
        return [
            "Account Number: $this->accountNumber",
            "Holder Name: $this->holderName",
            "Account Type: $this->accountType",
            "Balance: $this->balance",
        ];
    }
}
