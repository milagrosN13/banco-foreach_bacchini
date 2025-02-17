<?php
/*Agregar al ejercicio de las cuentas bancarias del primer cuatrimestre,
* una propiedad que contenga un array con las últimas transacciones, con signo positivo
* para los depósitos y negativo para las extracciones.
* Adecuar los archivos para que el usuario pueda consultar las últimas operaciones.*/
abstract class Cuenta
{
    /**
     * @var int $numero Número de cuenta.*/
    protected $numero;
    /**
     * @var int $saldo Saldo de la cuenta */
    protected $saldo;
    /** @var string $titular Nombre de la persona titular de la cuenta */
    protected $titular;
    protected $transacciones = [];
    /**
     * Constructor
     * @params int $numero
     * @params string $titular
     * @params int $saldo
     */
    public function __construct($numero, $titular, $saldo, $transacciones)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->transacciones = $transacciones;
    }
    /**
     * Permite realizar un depósito, incrementando el saldo de la cuenta
     * @param int $monto El monto a depositar
     * @return string Mensaje que especifica el resultado de la operación.
     */
    public function depositar($monto)
    {
        $this->saldo += $monto;
        array_push($this->transacciones, "+");
        return "El depósito se realizó correctamente.";
    }

    /**
     * Permite realizar una extracción, disminuyendo el saldo de la cuenta
     *
     * @param int $monto El monto a extraer
     * @return string Mensaje que especifica el resultado de la operación.
     * 
     */
    public function extraer($monto) {
        $this->saldo -= $monto;
        array_push($this->transacciones, "-");
        return "Extracción realizada correctamente.";
    }


    /**
     * Permite obtener el saldo.
     *
     * @return int El saldo de la cuenta.
     */
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getTransacciones()
    {
        return $this->transacciones;
    }
}
