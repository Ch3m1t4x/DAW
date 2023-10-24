<?php
/**
 * Clase para representar una Cuenta Bancaria
 */
class CuentaBancaria
{
    /** @var string $titular Titular de la cuenta */
    private $titular;

    /** @var float $saldo Saldo de la cuenta */
    private $saldo;

    /**
     * Constructor de la clase CuentaBancaria.
     * @param string $titular Titular de la cuenta.
     * @param float $saldoInicial Saldo inicial de la cuenta (opcional).
     */
    public function __construct(string $titular, int $saldoInicial = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    /**
     * Deposita una cantidad a la cuenta.
     * @param float $cantidad Cantidad a depositar.
     */
    public function depositar(int $cantidad)
    {
        $this->saldo += $cantidad;
    }

    /**
     * Retira una cantidad de la cuenta.
     * @param float $cantidad Cantidad a retirar.
     * @return string Mensaje de éxito o error.
     */
    public function retirar(int $cantidad)
    {
        if ($this->saldo >= $cantidad) {
            $this->saldo -= $cantidad;
            return "Saldo retirado";
        } else {
            return "Saldo insuficiente";
        }
    }

    /**
     * Consulta el saldo de la cuenta.
     * @return float Saldo actual.
     */
    public function consultarSaldo()
    {
        return $this->saldo;
    }

    /**
     * Representación en cadena de texto del objeto.
     * @return string Representación en cadena del objeto.
     */
    public function __toString()
    {
        return "Titular: $this->titular, Saldo: $this->saldo";
    }

    public function fusionar(object $cuenta){
        $nombre = $cuenta->titular;
        $dinero = $cuenta->saldo;

        $this->titular = $this->titular." ($nombre)"; 
        $cuenta->titular = "(deshabilitada) $nombre";

        $this->depositar($dinero);
        $cuenta->saldo = 0;

        echo $this->__toString();
        echo $cuenta->__toString();
    }
}
?>