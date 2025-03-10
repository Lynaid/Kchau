<?php

class BankRekening {
    private $saldo = 0;

    public function stort($bedrag) {
        if ($bedrag > 0) {
            $this->saldo += $bedrag;
            echo "Bedrag van €$bedrag is succesvol gestort. Nieuw saldo: €{$this->saldo}\n";
        } else {
            echo "Fout: Je kunt alleen een positief bedrag storten.\n";
        }
    }

    public function opnemen($bedrag) {
        if ($bedrag > 0) {
            if ($bedrag <= $this->saldo) {
                $this->saldo -= $bedrag;
                echo "Bedrag van €$bedrag is succesvol opgenomen. Nieuw saldo: €{$this->saldo}\n";
            } else {
                echo "Fout: Niet genoeg saldo beschikbaar!\n";
            }
        } else {
            echo "Fout: Je kunt alleen een positief bedrag opnemen.\n";
        }
    }

    public function bekijkSaldo() {
        echo "Huidig saldo: €{$this->saldo}\n";
    }
}

$rekening = new BankRekening();

$rekening->bekijkSaldo();

$rekening->stort(100);
$rekening->stort(-50);

$rekening->opnemen(30);
$rekening->opnemen(100);
$rekening->opnemen(-20);

$rekening->bekijkSaldo();

?>