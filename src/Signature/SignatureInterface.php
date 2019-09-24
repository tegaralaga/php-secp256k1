<?php

namespace kornrunner\Signature;

use Mdanter\Ecc\Crypto\Signature\SignatureInterface as EccSignatureInterface;

interface SignatureInterface extends EccSignatureInterface {
    public function getRecoveryParam();
}
