<?php	
    class auto{
        public $audi, $color;
        function __construct($audi, $color){
            $this->audi = $audi;
            $this->color = $color;
        }
    function get_name(){
        return $this->audi;
    }
    function get_color(){
        return $this->color;
    }
}

    $auditel = new auto("rs6", "blauw");
    echo $auditel->get_name();
    echo "<br>";
    echo $auditel->get_color();
    

        

?>