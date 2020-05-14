<?php
class Quad {
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a= $a;
        $this->b= $b;
        $this->c= $c;
    }
    function delta() {
        return($this->b*$this->b) - 4*$this->a*$this->c;
    }
    function getRoot() {
        return -$this->b/(2*$this->a);
    }
    function getRoot1() {
        return (-$this->b - sqrt($this->delta()))/(2*$this->a);
    }
    function getRoot2()
    {
        return (-$this->b + sqrt($this->delta())) / (2 * $this->a);
    }
    function getResult() {
        if ($this->delta() > 0) {
            echo "Phuong trinhc o 2 nghiem phan biet la: " . $this->getRoot1() . " va " . $this->getRoot2();
        } elseif ($this->delta() == 0) {
            echo "Phuong trinh co nghiem kep la: " . $this->getRoot();
        } else {
            echo "Phuong trinh vo nghiem";
        }

        return $this->getResult();
    }
}
?>