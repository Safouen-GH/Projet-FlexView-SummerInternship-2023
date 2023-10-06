<?php

namespace Symfony\Config\LiipImagine\ResolversConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AwsS3Config 
{
    private $bucket;
    private $cache;
    private $acl;
    private $cachePrefix;
    private $clientConfig;
    private $getOptions;
    private $putOptions;
    private $proxies;
    private $_usedProperties = [];
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bucket($value): static
    {
        $this->_usedProperties['bucket'] = true;
        $this->bucket = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): static
    {
        $this->_usedProperties['cache'] = true;
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @default 'public-read'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acl($value): static
    {
        $this->_usedProperties['acl'] = true;
        $this->acl = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cachePrefix($value): static
    {
        $this->_usedProperties['cachePrefix'] = true;
        $this->cachePrefix = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function clientConfig(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['clientConfig'] = true;
        $this->clientConfig = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function getOptions(string $key, mixed $value): static
    {
        $this->_usedProperties['getOptions'] = true;
        $this->getOptions[$key] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function putOptions(string $key, mixed $value): static
    {
        $this->_usedProperties['putOptions'] = true;
        $this->putOptions[$key] = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function proxies(string $name, mixed $value): static
    {
        $this->_usedProperties['proxies'] = true;
        $this->proxies[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
        if (array_key_exists('bucket', $value)) {
            $this->_usedProperties['bucket'] = true;
            $this->bucket = $value['bucket'];
            unset($value['bucket']);
        }
    
        if (array_key_exists('cache', $value)) {
            $this->_usedProperties['cache'] = true;
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (array_key_exists('acl', $value)) {
            $this->_usedProperties['acl'] = true;
            $this->acl = $value['acl'];
            unset($value['acl']);
        }
    
        if (array_key_exists('cache_prefix', $value)) {
            $this->_usedProperties['cachePrefix'] = true;
            $this->cachePrefix = $value['cache_prefix'];
            unset($value['cache_prefix']);
        }
    
        if (array_key_exists('client_config', $value)) {
            $this->_usedProperties['clientConfig'] = true;
            $this->clientConfig = $value['client_config'];
            unset($value['client_config']);
        }
    
        if (array_key_exists('get_options', $value)) {
            $this->_usedProperties['getOptions'] = true;
            $this->getOptions = $value['get_options'];
            unset($value['get_options']);
        }
    
        if (array_key_exists('put_options', $value)) {
            $this->_usedProperties['putOptions'] = true;
            $this->putOptions = $value['put_options'];
            unset($value['put_options']);
        }
    
        if (array_key_exists('proxies', $value)) {
            $this->_usedProperties['proxies'] = true;
            $this->proxies = $value['proxies'];
            unset($value['proxies']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['bucket'])) {
            $output['bucket'] = $this->bucket;
        }
        if (isset($this->_usedProperties['cache'])) {
            $output['cache'] = $this->cache;
        }
        if (isset($this->_usedProperties['acl'])) {
            $output['acl'] = $this->acl;
        }
        if (isset($this->_usedProperties['cachePrefix'])) {
            $output['cache_prefix'] = $this->cachePrefix;
        }
        if (isset($this->_usedProperties['clientConfig'])) {
            $output['client_config'] = $this->clientConfig;
        }
        if (isset($this->_usedProperties['getOptions'])) {
            $output['get_options'] = $this->getOptions;
        }
        if (isset($this->_usedProperties['putOptions'])) {
            $output['put_options'] = $this->putOptions;
        }
        if (isset($this->_usedProperties['proxies'])) {
            $output['proxies'] = $this->proxies;
        }
    
        return $output;
    }

}
