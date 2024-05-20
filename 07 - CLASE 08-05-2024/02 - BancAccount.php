<?php

/**
 * **Ejercicio 2: Administrando una cuenta bancaria**

Crear una clase "CuentaBancaria" que tenga los atributos: número de cuenta, nombre del titular, saldo y tipo de cuenta (ahorro o corriente). Implementar métodos para:

 * Consultar el saldo.
 * Depositar dinero.
 * Retirar dinero (validando que el saldo sea suficiente).
 * Obtener un resumen de la cuenta (número, titular, tipo, saldo).
 */
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
        if (($amount > 0) && ($amount <= $this->balance)) {
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

$cuenta1 = new BankAccount('0001', 'Miguel', 0, 'Corriente');

// echo $cuenta1->balance();
echo $cuenta1->deposit(8) . "\n";
echo $cuenta1->deposit(199) . "\n";
// echo $cuenta1->balance() . "\n";
echo $cuenta1->withdraw(200) . "\n";
// echo $cuenta1->balance() . "\n";
echo json_encode($cuenta1->accountSummary());
