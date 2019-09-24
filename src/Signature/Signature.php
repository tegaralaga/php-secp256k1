<?php

namespace kornrunner\Signature;

use kornrunner\Serializer\HexSignatureSerializer;
use kornrunner\Signature\SignatureInterface;
use Mdanter\Ecc\Crypto\Signature\Signature as EccSignature;

class Signature extends EccSignature implements SignatureInterface
{
    protected $serializer;

    protected $recoveryParam;

    public function __construct($r, $s, $recoveryParam) {
        parent::__construct($r, $s);

        $this->serializer = new HexSignatureSerializer;
        $this->recoveryParam = $recoveryParam;
    }

    public function toHex() {
        return $this->serializer->serialize($this);
    }

    public function getRecoveryParam() {
        return $this->recoveryParam;
    }
}