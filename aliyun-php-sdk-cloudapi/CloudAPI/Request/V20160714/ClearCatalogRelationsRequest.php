<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of ClearCatalogRelations
 *
 * @method string getCatalogId()
 * @method string getSecurityToken()
 */
class ClearCatalogRelationsRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CloudAPI',
            '2016-07-14',
            'ClearCatalogRelations',
            'apigateway'
        );
    }

    /**
     * @param string $catalogId
     *
     * @return $this
     */
    public function setCatalogId($catalogId)
    {
        $this->requestParameters['CatalogId'] = $catalogId;
        $this->queryParameters['CatalogId'] = $catalogId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }
}
