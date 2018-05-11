<?php

namespace Guesl\CardConnect\CoPilot\Models;

class SignatureStatus extends Model
{
    /**
     * @var string
     */
    protected $signatureUrl;

    /**
     * @var string
     */
    protected $signedSiteUserId;

    /**
     * MM/DD/YYYY HH:II:SS a
     * "m/d/Y H:i:s a"
     *
     * Like "10/21/2013 08:18:18 AM".
     *
     * @var string
     */
    protected $signedDateTime;

    /**
     * MM/DD/YYYY HH:II:SS a
     * "m/d/Y H:i:s a"
     *
     * Like "10/21/2013 08:18:18 AM".
     *
     * @var string
     */
    protected $signer;

    /**
     * The signatureStatusCd will be one of the following: NOT_SENT, PENDING, or SIGNED.
     *
     * NOT_SENT: represents a merchant that is not ready for the owner to sign the application and an email has not been sent to the owner.
     * PENDING: represents a signature request has been sent to the owner.
     * SIGNED: means the owner has signed the application.
     *
     * @var string
     */
    protected $signatureStatusCd;

    /**
     * @return string
     */
    public function getSignatureUrl(): string
    {
        return $this->signatureUrl;
    }

    /**
     * @param string $signatureUrl
     */
    public function setSignatureUrl(string $signatureUrl): void
    {
        $this->signatureUrl = $signatureUrl;
    }

    /**
     * @return string
     */
    public function getSignedSiteUserId(): string
    {
        return $this->signedSiteUserId;
    }

    /**
     * @param string $signedSiteUserId
     */
    public function setSignedSiteUserId(string $signedSiteUserId): void
    {
        $this->signedSiteUserId = $signedSiteUserId;
    }

    /**
     * @return string
     */
    public function getSignedDateTime(): string
    {
        return $this->signedDateTime;
    }

    /**
     * @param string $signedDateTime
     */
    public function setSignedDateTime(string $signedDateTime): void
    {
        $this->signedDateTime = $signedDateTime;
    }

    /**
     * @return string
     */
    public function getSigner(): string
    {
        return $this->signer;
    }

    /**
     * @param string $signer
     */
    public function setSigner(string $signer): void
    {
        $this->signer = $signer;
    }

    /**
     * @return string
     */
    public function getSignatureStatusCd(): string
    {
        return $this->signatureStatusCd;
    }

    /**
     * @param string $signatureStatusCd
     */
    public function setSignatureStatusCd(string $signatureStatusCd): void
    {
        $this->signatureStatusCd = $signatureStatusCd;
    }
}
