<?php 
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    // Método Construtor
    public function __construct() {
        $this->setSaldo(0);  // Inicializa o saldo em 0
        $this->setStatus(false);  // Inicializa a conta como fechada
    }

    // Métodos 
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        
        if ($t == "CC") { // Conta Corrente
            $this->setSaldo(50);
        } elseif ($t == "CP") { // Conta Poupança
            $this->setSaldo(150);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito. Impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta fechada com sucesso!</p>";
        }
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$ $valor realizado com sucesso na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Impossível depositar. Conta está fechada!</p>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$ $valor realizado com sucesso na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente para saque!</p>";
            }
        } else {
            echo "<p>Impossível sacar. Conta está fechada!</p>";
        }
    }

    public function pagarMensal() {
        $valor = ($this->getTipo() == "CC") ? 12 : 20; // R$12 para Conta Corrente, R$20 para Conta Poupança

        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mensalidade de R$ $valor debitada na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente para pagar a mensalidade!</p>";
            }
        } else {
            echo "<p>Impossível cobrar mensalidade. Conta está fechada!</p>";
        }
    }

    // Métodos Especiais (Getters e Setters)
    public function getNumConta(){
        return $this->numConta; 
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo(){
        return $this->tipo; 
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono(){
        return $this->dono; 
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo(){
        return $this->saldo; 
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status; 
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}

?>
