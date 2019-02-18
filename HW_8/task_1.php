<?php

class PersonalComputer {
    protected $motherboard;
    protected $processor;
    protected $ram;
    protected $videoCard;
    protected $soundCard;
    protected $networking;
    protected $hardDrive;
    protected $additionalHardDrive;
    protected $dvdRom;
    protected $powerSupply;
    protected $operationSystem;

    public function __construct(
        $pcMotherboard,
        $pcProcessor,
        $pcRam,
        $pcVideoCard,
        $pcSoundCard,
        $pcNetworking,
        $pcHardDrive,
        $pcAdditionalHardDrive,
        $pcDvdRom,
        $pcPowerSupply,
        $pcOperationSystem
    ){
        $this->motherboard = $pcMotherboard;
        $this->processor = $pcProcessor;
        $this->ram = $pcRam;
        $this->videoCard = $pcVideoCard;
        $this->soundCard = $pcSoundCard;
        $this->networking = $pcNetworking;
        $this->hardDrive = $pcHardDrive;
        $this->additionalHardDrive = $pcAdditionalHardDrive;
        $this->dvdRom = $pcDvdRom;
        $this->powerSupply = $pcPowerSupply;
        $this->operationSystem = $pcOperationSystem;
    }
    public function getPcInformation(){
        $pcInformation = [];
        $pcInformation['motherboard'] = $this->motherboard;
        $pcInformation['processor'] = $this->processor;
        $pcInformation['ram'] = $this->ram;
        $pcInformation['videoCard'] = $this->videoCard;
        $pcInformation['soundCard'] = $this->soundCard;
        $pcInformation['networking'] = $this->networking;
        $pcInformation['hardDrive'] = $this->hardDrive;
        $pcInformation['additionalHardDrive'] = $this->additionalHardDrive;
        $pcInformation['dvdRom'] = $this->dvdRom;
        $pcInformation['powerSupply'] = $this->powerSupply;
        $pcInformation['operationSystem'] = $this->operationSystem;
        return $pcInformation;
    }

    public function setPcRam($pcRam) {
        $this->ram = $pcRam;
    }
    public function getPcRam() {
        return $this->ram;
    }
    public function setPcHardDrive($pcHardDrive) {
        $this->hardDrive = $pcHardDrive;
    }
    public function getPcHardDrive() {
        return $this->hardDrive;
    }
    public function setPcAdditionalHardDrive($pcAdditionalHardDrive) {
        $this->additionalHardDrive = $pcAdditionalHardDrive;
    }
    public function getPcAdditionalHardDrive() {
        return $this->additionalHardDrive;
    }
    public function setPcDvdRom($pcDvdRom) {
        $this->dvdRom = $pcDvdRom;
    }
    public function getPcDvdRom() {
        return $this->dvdRom;
    }
    public function setPcOperationSystem($pcOperationSystem) {
        $this->operationSystem = $pcOperationSystem;
    }
    public function getOperationSystem() {
        return $this->operationSystem;
    }

}

class LapTop extends PersonalComputer {
    private $type='laptop';
    private $screenSize;
    private $maxScreenResolution;

    public function __construct(
        $pcMotherboard,
        $pcProcessor,
        $pcRam,
        $pcVideoCard,
        $pcSoundCard,
        $pcNetworking,
        $pcHardDrive,
        $pcAdditionalHardDrive,
        $pcDvdRom,
        $pcPowerSupply,
        $pcOperationSystem,
        $screenSize,
        $maxScreenResolution
    ) {
        parent::__construct($pcMotherboard, $pcProcessor, $pcRam, $pcVideoCard, $pcSoundCard, $pcNetworking, $pcHardDrive, $pcAdditionalHardDrive, $pcDvdRom, $pcPowerSupply, $pcOperationSystem);
        $this->screenSize = $screenSize;
        $this->maxScreenResolution = $maxScreenResolution;
    }

    public function getPcInformation(){
        $pcInformation = [];
        $pcInformation['motherboard'] = $this->motherboard;
        $pcInformation['processor'] = $this->processor;
        $pcInformation['ram'] = $this->ram;
        $pcInformation['videoCard'] = $this->videoCard;
        $pcInformation['soundCard'] = $this->soundCard;
        $pcInformation['networking'] = $this->networking;
        $pcInformation['hardDrive'] = $this->hardDrive;
        $pcInformation['additionalHardDrive'] = $this->additionalHardDrive;
        $pcInformation['dvdRom'] = $this->dvdRom;
        $pcInformation['powerSupply'] = $this->powerSupply;
        $pcInformation['operationSystem'] = $this->operationSystem;
        $pcInformation['screenSize'] = $this->screenSize;
        $pcInformation['maxScreenResolution'] = $this->maxScreenResolution;
        return $pcInformation;
    }

    public function getPcType(){
        return $this->type;
    }
}


class Desktop extends PersonalComputer {
    private $type='desktop';

    public function getPcType(){
        return $this->type;
    }
    public function setMotherboard($pcMotherboard) {
        $this->motherboard = $pcMotherboard;
    }
    public function getMotherboard() {
        return $this->motherboard;
    }
    public function setPcProcessor($pcProcessor) {
        $this->processor = $pcProcessor;
    }
    public function getPcProcessor() {
        return $this->processor;
    }
    public function setPcVideoCard($pcVideoCard) {
        $this->videoCard = $pcVideoCard;
    }
    public function getPcVideoCard() {
        return $this->videoCard;
    }
    public function setPcSoundCard($pcSoundCard) {
        $this->soundCard = $pcSoundCard;
    }
    public function getPcSoundCard() {
        return $this->soundCard;
    }
    public function setPcNetworking($pcNetworking) {
        $this->networking = $pcNetworking;
    }
    public function getPcNetworking() {
        return $this->networking;
    }
    public function setPcPowerSupply($pcPowerSupply) {
        $this->powerSupply = $pcPowerSupply;
    }
    public function getPcPowerSupply() {
        return $this->powerSupply;
    }
}

$acerPredatorHelios300GamingLaptop = new LapTop(
    'Acer Predator Series',
    '4.1 GHz Intel Core i7',
    '16 GB DDR4',
    'NVIDIA GeForce GTX 1060',
    'Acer Predator Series',
    '802.11.ac',
    '256 GB Flash Memory Solid State',
    'Flash Memory Size 256.0',
    'None',
    'Acer Predator Series',
    'Windows 10 Home',
    '15.6 inches',
    '1920 x 1080'
);

$acerPredatorHelios300GamingLaptop->setPcOperationSystem('Ubunta v 16');
$acerPredatorHelios300GamingLaptop->setPcRam('24 GB DDR4');
$acerPredatorHelios300GamingLaptop->setPcHardDrive('512 GB Flash Memory Solid State');

foreach($acerPredatorHelios300GamingLaptop->getPcInformation() as $key => $value){
    echo $key . ": " . $value . "<br>";
}



$cyberPowerPCGamerXtremeVR = new Desktop(
    'GXiVR8060A5',
    '2.8 GHz Core i5 8400',
    '8 GB DDR4',
    ' NVIDIA GTX 1060 3GB',
    'Acer Predator Series',
    '802.11.ac',
    '1024 GB 7200 RPM SATA III',
    'Flash Memory Size 256.0',
    'None',
    'Gamer Xtreme Series',
    'Windows 10 Home'
);

$cyberPowerPCGamerXtremeVR->setMotherboard('MSI Z390-A Pro');
$cyberPowerPCGamerXtremeVR->setPcProcessor('4.1 GHz Intel Core i7');
$cyberPowerPCGamerXtremeVR->setPcVideoCard('GIGABYTE GeForce GTX 1080 G1 Gaming (GV-N1080G1 GAMING-8GD)');
$cyberPowerPCGamerXtremeVR->setPcRam('24 GB DDR4');
$cyberPowerPCGamerXtremeVR->setPcHardDrive('512 GB Flash Memory Solid State');

foreach($cyberPowerPCGamerXtremeVR->getPcInformation() as $key => $value){
    echo $key . ": " . $value . "<br>";
}