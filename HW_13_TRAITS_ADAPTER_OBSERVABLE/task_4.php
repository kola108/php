<?php

trait Trait1 {
    private function method(){
        return 1;
    }
}

trait Trait2 {
    private function method(){
        return 2;
    }
}

trait Trait3 {
    private function method(){
        return 3;
    }
}

class Test {
    use Trait1, Trait2, Trait3 {
        Trait1::method insteadof Trait2, Trait3;
        Trait1::method as public;
    }

    public function getSum() {
        return $this->method() + $this->method() + $this->method();
    }
}

$test = new Test();
echo $test->getSum();
