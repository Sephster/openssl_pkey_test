<?php


use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase
{
	public function testKeyCreation() 
	{
		 // Create the keypair
            $res = \openssl_pkey_new([
                'digest_alg' => 'sha512',
                'private_key_bits' => 2048,
                'private_key_type' => OPENSSL_KEYTYPE_DSA,
            ]);
            // Get private key
            \openssl_pkey_export($res, $keyContent, 'mystrongpassword');

	    $this->assertTrue(true);
	}
}
