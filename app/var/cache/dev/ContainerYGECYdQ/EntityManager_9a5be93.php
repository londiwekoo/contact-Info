<?php

namespace ContainerYGECYdQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdd228 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbc5ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0f46 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getConnection', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getMetadataFactory', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getExpressionBuilder', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'beginTransaction', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getCache', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'transactional', array('func' => $func), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->transactional($func);
    }

    public function commit()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'commit', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->commit();
    }

    public function rollback()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'rollback', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'createQuery', array('dql' => $dql), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'createQueryBuilder', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'flush', array('entity' => $entity), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'clear', array('entityName' => $entityName), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->clear($entityName);
    }

    public function close()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'close', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->close();
    }

    public function persist($entity)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'persist', array('entity' => $entity), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'remove', array('entity' => $entity), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'refresh', array('entity' => $entity), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'detach', array('entity' => $entity), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'merge', array('entity' => $entity), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'contains', array('entity' => $entity), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getEventManager', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getConfiguration', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'isOpen', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getUnitOfWork', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getProxyFactory', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'getFilters', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'isFiltersStateClean', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'hasFilters', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return $this->valueHolderdd228->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbc5ff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdd228) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdd228 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdd228->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, '__get', ['name' => $name], $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        if (isset(self::$publicPropertiesf0f46[$name])) {
            return $this->valueHolderdd228->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd228;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd228;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd228;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdd228;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, '__isset', array('name' => $name), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd228;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdd228;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, '__unset', array('name' => $name), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd228;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdd228;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, '__clone', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        $this->valueHolderdd228 = clone $this->valueHolderdd228;
    }

    public function __sleep()
    {
        $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, '__sleep', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;

        return array('valueHolderdd228');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc5ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc5ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbc5ff && ($this->initializerbc5ff->__invoke($valueHolderdd228, $this, 'initializeProxy', array(), $this->initializerbc5ff) || 1) && $this->valueHolderdd228 = $valueHolderdd228;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd228;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd228;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
