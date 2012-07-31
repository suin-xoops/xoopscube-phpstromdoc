<?php

class XCube_IniHandler
{
	protected $_mConfig;

	protected $_mFilePath;

	protected $_mSectionFlag;

	public function __construct($filePath, $section){}

	protected function _loadIni(){}

	public function getConfig($key, $section){}

	public function getSectionConfig($section){}

	public function getAllConfig(){}

}

class XCube_ActionFilter
{
	/** @var XCube_Controller */
	public $mController;

	/** @var XCube_Root */
	public $mRoot;

	/**
	 * @param XCube_Controller $controller
	 */
	public function XCube_ActionFilter($controller){}

	public function preFilter(){}

	public function preBlockFilter(){}

	public function postFilter(){}

}

class XCube_ActionForm
{
	/** @var XCube_HttpContext */
	public $mContext;

	/** @var XCube_Principal */
	public $mUser;

	/** @var XCube_PropertyInterface[] */
	public $mFormProperties;

	/** @var XCube_FieldProperty[] */
	public $mFieldProperties;

	/** @var bool */
	public $mErrorFlag;

	/** @var string[] */
	public $mErrorMessages;

	/** @var string */
	public $_mToken;

	public function XCube_ActionForm(){}

	public function prepare(){}

	/**
	 * @return string
	 */
	public function getTokenName(){}

	/**
	 * @return string
	 */
	public function getToken(){}

	/**
	 * @return string
	 */
	public function getTokenErrorMessage(){}

	public function set(){}

	/**
	 * @deprecated
	 */
	public function setVar(){}

	/**
	 * @param string $key
	 * @param string $index
	 * @return mixed
	 */
	public function get($key, $index){}

	/**
	 * @deprecated
	 */
	public function getVar($key, $index){}

	/**
	 * @return XCube_AbstractProperty[]
	 */
	public function getFormProperties(){}

	/**
	 * @return void
	 */
	public function fetch(){}

	/**
	 * @return void
	 */
	public function _validateToken(){}

	/**
	 * @return void
	 */
	public function validate(){}

	/**
	 * @return bool
	 */
	public function hasError(){}

	/**
	 * @param string $message
	 */
	public function addErrorMessage($message){}

	/**
	 * @return string[]
	 */
	public function getErrorMessages(){}

	/**
	 * @param mixed $obj
	 * @return void
	 */
	public function load($obj){}

	/**
	 * @param mixed $obj
	 * @return void
	 */
	public function update($obj){}

}

class XCube_FieldProperty
{
	/** @var XCube_ActionForm */
	public $mForm;

	/** @var XCube_Validator[] */
	public $mDepends;

	/** @var array */
	public $mMessages;

	/** @var array */
	public $mVariables;

	/**
	 * @param XCube_ActionForm $form
	 */
	public function XCube_FieldProperty($form){}

	/**
	 * @param string[] $dependsArr
	 * @return void
	 */
	public function setDependsByArray($dependsArr){}

	/**
	 * @param string $name
	 * @param string $message
	 * @return void
	 */
	public function addMessage($name, $message){}

	/**
	 * @param string $name
	 * @return string
	 */
	public function renderMessage($name){}

	/**
	 * @param string $name
	 * @param mixed $value
	 */
	public function addVar($name, $value){}

	public function validate($form){}

}

class XCube_DependClassFactory
{
	/**
	 * @param string $dependName
	 * @return XCube_Validator
	 */
	public function factoryClass($dependName){}

}

class XCube_Root
{
	/** @var XCube_Controller */
	public $mController;

	/** @var XCube_LanguageManager */
	public $mLanguageManager;

	/** @var XCube_DelegateManager */
	public $mDelegateManager;

	/** @var XCube_ServiceManager */
	public $mServiceManager;

	/** @var array */
	public $_mRenderSystems;

	/** @var array */
	public $mSiteConfig;

	/** @var XCube_AbstractPermissionProvider */
	public $mPermissionManager;

	/** @var XCube_RoleManager */
	public $mRoleManager;

	/** @deprecated */
	public $mCacheSystem;

	/** @var XCube_TextFilter */
	public $mTextFilter;

	/** @var XCube_HttpContext */
	public $mContext;

	/** @var XCube_Session */
	public $mSession;

	public function XCube_Root(){}

	/**
	 * @return XCube_Root
	 */
	public function getSingleton(){}

	/**
	 * @return void
	 */
	public function loadSiteConfig(){}

	/**
	 * @param Array $config
	 * @return void
	 */
	public function setSiteConfig($config){}

	/**
	 * @param array $config
	 */
	public function overrideSiteConfig($config){}

	/**
	 * @return mixed
	 */
	public function getSiteConfig(){}

	/**
	 * @return void
	 */
	public function setupController(){}

	/**
	 * @return XCube_Controller
	 */
	public function getController(){}

	/**
	 * @param XCube_LanguageManager $languageManager
	 * @return void
	 */
	public function setLanguageManager($languageManager){}

	/**
	 * @return XCube_LanguageManager
	 */
	public function getLanguageManager(){}

	/**
	 * @param XCube_DelegateManager $delegateManager
	 * @return void
	 */
	public function setDelegateManager($delegateManager){}

	/**
	 * @return XCube_DelegateManager
	 */
	public function getDelegateManager(){}

	/**
	 * @param XCube_ServiceManager $serviceManager
	 * @return void
	 */
	public function setServiceManager($serviceManager){}

	/**
	 * @return XCube_ServiceManager
	 */
	public function getServiceManager(){}

	/**
	 * @param string $name
	 * @return XCube_RenderSystem
	 */
	public function getRenderSystem($name){}

	public function setPermissionManager($manager){}

	public function getPermissionManager(){}

	/**
	 * @param XCube_TextFilter $textFilter
	 * @return void
	 */
	public function setTextFilter($textFilter){}

	/**
	 * @return XCube_TextFilter
	 */
	public function getTextFilter(){}

	/**
	 * @param XCube_RoleManager $manager
	 * @return void
	 */
	public function setRoleManager($manager){}

	/**
	 * @param XCube_HttpContext $context
	 * @return void
	 */
	public function setContext($context){}

	/**
	 * @return XCube_HttpContext
	 */
	public function getContext(){}

	/**
	 * @param XCube_Session $session
	 * @return void
	 */
	public function setSession($session){}

	/**
	 * @return XCube_Session
	 */
	public function getSession(){}

	/**
	 * @param string $className
	 * @param string $classPath
	 * @param string $root
	 * @return Object
	 */
	public function _createInstance($className, $classPath, $root){}

}

class XCube_HttpContext
{
	/**
	 * @var array
	 * @protected
	 */
	public $mAttributes;

	/** @var XCube_HttpRequest */
	public $mRequest;

	/** @var XCube_Principal */
	public $mUser;

	/** @var string */
	public $mType;

	/** @private */
	public $mThemeName;

	public function XCube_HttpContext(){}

	/**
	 * @param string $key
	 * @param mixed $value
	 */
	public function setAttribute($key, $value){}

	/**
	 * @param string $key
	 * @return mixed
	 */
	public function hasAttribute($key){}

	/**
	 * @param string $key
	 * @return mixed
	 */
	public function getAttribute($key){}

	/**
	 * @param XCube_AbstractRequest $request
	 */
	public function setRequest($request){}

	/**
	 * @return XCube_AbstractRequest
	 */
	public function getRequest(){}

	/**
	 * @param XCube_Principal $principal
	 */
	public function setUser($principal){}

	/**
	 * @return XCube_Principal
	 */
	public function getUser(){}

	/**
	 * @deprecated
	 * @param string $theme
	 */
	public function setThemeName($theme){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function getThemeName(){}

}

class XCube_AbstractRequest
{
	/**
	 * @return mixed
	 */
	public function getRequest($key){}

}

class XCube_HttpRequest extends XCube_AbstractRequest
{
	/**
	 * @param string $key
	 * @return mixed
	 */
	public function getRequest($key){}

	/**
	 * @param Array $arr
	 * @return array
	 */
	public function _getArrayRequest($arr){}

}

class XCube_GenericRequest extends XCube_AbstractRequest
{
	/** @var array */
	public $mAttributes;

	public function XCube_GenericRequest($arr){}

	public function getRequest($key){}

}

class XCube_PropertyInterface
{
	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @param mixed $value
	 */
	public function set($value){}

	/**
	 * @return mixed
	 */
	public function get(){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_AbstractProperty extends XCube_PropertyInterface
{
	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @param mixed $value
	 */
	public function set($value){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_GenericArrayProperty extends XCube_PropertyInterface
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_AbstractArrayProperty extends XCube_GenericArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_AbstractArrayProperty($name){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_BoolProperty extends XCube_AbstractProperty
{
	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	public function set($value){}

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_BoolArrayProperty extends XCube_GenericArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_BoolArrayProperty($name){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_IntProperty extends XCube_AbstractProperty
{
	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	public function set($value){}

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_IntArrayProperty extends XCube_GenericArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_IntArrayProperty($name){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_FloatProperty extends XCube_AbstractProperty
{
	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	public function set($value){}

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_FloatArrayProperty extends XCube_GenericArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_FloatArrayProperty($name){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_StringProperty extends XCube_AbstractProperty
{
	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	public function set($value){}

	public function toNumber(){}

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_StringArrayProperty extends XCube_GenericArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_StringArrayProperty($name){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_TextProperty extends XCube_AbstractProperty
{
	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	public function set($value){}

	public function toNumber(){}

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_TextArrayProperty extends XCube_GenericArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_TextArrayProperty($name){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @return bool
	 */
	public function hasFetchControl(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

	/**
	 * @param XCube_ActionForm $form
	 * @return void
	 */
	public function fetch($form){}

}

class XCube_FileProperty extends XCube_AbstractProperty
{
	/** @var mixed */
	public $mIndex;

	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	public function XCube_FileProperty($name){}

	public function hasFetchControl(){}

	public function fetch($form){}

	public function isNull(){}

	public function toString(){}

	public function toNumber(){}

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @param mixed $value
	 */
	public function set($value){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

}

class XCube_FileArrayProperty extends XCube_GenericArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_FileArrayProperty($name){}

	public function hasFetchControl(){}

	public function fetch($form){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

}

class XCube_ImageFileProperty extends XCube_FileProperty
{
	/** @var mixed */
	public $mIndex;

	/** @var string */
	public $mName;

	/** @var string */
	public $mValue;

	public function XCube_ImageFileProperty($name){}

	public function XCube_FileProperty($name){}

	public function hasFetchControl(){}

	public function fetch($form){}

	public function isNull(){}

	public function toString(){}

	public function toNumber(){}

	/**
	 * @param string $name
	 */
	public function XCube_AbstractProperty($name){}

	/**
	 * @param mixed $value
	 */
	public function set($value){}

	/**
	 * @return mixed
	 */
	public function get($index){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

}

class XCube_ImageFileArrayProperty extends XCube_FileArrayProperty
{
	/** @var string */
	public $mName;

	/** @var XCube_AbstractProperty[] */
	public $mProperties;

	/** @var string */
	public $mPropertyClassName;

	public function XCube_ImageFileArrayProperty($name){}

	public function XCube_FileArrayProperty($name){}

	public function hasFetchControl(){}

	public function fetch($form){}

	/**
	 * @param string $classname
	 * @param string $name
	 */
	public function XCube_GenericArrayProperty($classname, $name){}

	public function set($arg1, $arg2){}

	public function add($arg1, $arg2){}

	/**
	 * @param string $index
	 * @param mixed $value
	 * @return void
	 */
	public function _set($index, $value){}

	/**
	 * @param mixed $index
	 * @return mixed
	 */
	public function get($index){}

	public function reset(){}

	/**
	 * @return bool
	 */
	public function isArray(){}

	/**
	 * @return bool
	 */
	public function isNull(){}

	/**
	 * @return int
	 */
	public function toNumber(){}

	/**
	 * @return string
	 */
	public function toString(){}

	/**
	 * @deprecated
	 * @return string
	 */
	public function toHTML(){}

	/**
	 * @param string $name
	 */
	public function XCube_PropertyInterface($name){}

	/**
	 * @deprecated
	 */
	public function setValue($arg0, $arg1){}

	/**
	 * @deprecated
	 */
	public function getValue($arg0){}

}

class XCube_Validator
{
	/**
	 * @param XCube_PropertyInterface $form
	 * @param array $vars
	 * @return bool
	 */
	public function isValid($form, $vars){}

}

class XCube_RequiredValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_MinlengthValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_MaxlengthValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_MinValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_MaxValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_IntRangeValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_EmailValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_MaskValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_ExtensionValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_MaxfilesizeValidator extends XCube_Validator
{
	public function isValid($form, $vars){}

}

class XCube_FormFile
{
	public $mName;

	public $mKey;

	public $mContentType;

	public $mFileName;

	public $mFileSize;

	public $_mTmpFileName;

	public $mUploadFileFlag;

	public function XCube_FormFile($name, $key){}

	public function fetch(){}

	public function hasUploadFile(){}

	/**
	 * @return string
	 */
	public function getContentType(){}

	public function getFileData(){}

	/**
	 * @return string
	 */
	public function getFileName(){}

	/**
	 * @return int
	 */
	public function getFileSize(){}

	/**
	 * @return string
	 */
	public function getExtension(){}

	/**
	 * @return string
	 */
	public function setExtension($ext){}

	/**
	 * @param string $contenttype
	 */
	public function setContentType($contenttype){}

	/**
	 * @param string $filename
	 */
	public function setFileName($filename){}

	/**
	 * @param int $filesize
	 */
	public function setFileSize($filesize){}

	/**
	 * @param string $bodyname
	 */
	public function setBodyName($bodyname){}

	/**
	 * @return string
	 */
	public function getBodyName(){}

	/**
	 * @param string $prefix
	 * @param string $salt
	 */
	public function setRandomToBodyName($prefix, $salt){}

	/**
	 * @param string $prefix
	 * @param string $salt
	 */
	public function setRandomToFilename($prefix, $salt){}

	public function _getRandomString($salt){}

	/**
	 * @param string $file
	 * @return bool
	 */
	public function saveAs($file){}

	/**
	 * @param string $dir
	 * @param string $prefix
	 * @param string $salt
	 * @return bool
	 */
	public function saveAsRandBody($dir, $prefix, $salt){}

	/**
	 * @param string $dir
	 * @param string $prefix
	 * @param string $salt
	 * @return bool
	 */
	public function saveAsRand($dir, $prefix, $salt){}

}

class XCube_FormImageFile extends XCube_FormFile
{
	public $mName;

	public $mKey;

	public $mContentType;

	public $mFileName;

	public $mFileSize;

	public $_mTmpFileName;

	public $mUploadFileFlag;

	public function fetch(){}

	/**
	 * @return int
	 */
	public function getWidth(){}

	/**
	 * @return int
	 */
	public function getHeight(){}

	/**
	 * @private
	 * @return bool
	 */
	public function _checkFormat(){}

	public function XCube_FormFile($name, $key){}

	public function hasUploadFile(){}

	/**
	 * @return string
	 */
	public function getContentType(){}

	public function getFileData(){}

	/**
	 * @return string
	 */
	public function getFileName(){}

	/**
	 * @return int
	 */
	public function getFileSize(){}

	/**
	 * @return string
	 */
	public function getExtension(){}

	/**
	 * @return string
	 */
	public function setExtension($ext){}

	/**
	 * @param string $contenttype
	 */
	public function setContentType($contenttype){}

	/**
	 * @param string $filename
	 */
	public function setFileName($filename){}

	/**
	 * @param int $filesize
	 */
	public function setFileSize($filesize){}

	/**
	 * @param string $bodyname
	 */
	public function setBodyName($bodyname){}

	/**
	 * @return string
	 */
	public function getBodyName(){}

	/**
	 * @param string $prefix
	 * @param string $salt
	 */
	public function setRandomToBodyName($prefix, $salt){}

	/**
	 * @param string $prefix
	 * @param string $salt
	 */
	public function setRandomToFilename($prefix, $salt){}

	public function _getRandomString($salt){}

	/**
	 * @param string $file
	 * @return bool
	 */
	public function saveAs($file){}

	/**
	 * @param string $dir
	 * @param string $prefix
	 * @param string $salt
	 * @return bool
	 */
	public function saveAsRandBody($dir, $prefix, $salt){}

	/**
	 * @param string $dir
	 * @param string $prefix
	 * @param string $salt
	 * @return bool
	 */
	public function saveAsRand($dir, $prefix, $salt){}

}

class XCube_Controller
{
	/** @var XCube_Root */
	public $mRoot;

	/** @var array */
	public $_mBlockChain;

	/** @var array */
	public $_mFilterChain;

	public $_mLoadedFilterNames;

	/** @var object */
	public $mDB;

	/** @var string */
	public $mLocale;

	/** @var string */
	public $mLanguage;

	/** @var XCube_Delegate */
	public $mSetupUser;

	/** @var XCube_Delegate */
	public $mExecute;

	/** @var XCube_Delegate */
	public $mSetupTextFilter;

	public function XCube_Controller(){}

	/**
	 * @param XCube_Root $root
	 */
	public function prepare($root){}

	public function executeCommon(){}

	public function executeHeader(){}

	public function execute(){}

	public function executeView(){}

	/**
	 * @param string $url
	 * @param int $time
	 * @param string $message
	 */
	public function executeForward($url, $time, $message){}

	/**
	 * @param string $url
	 * @param int $time
	 * @param string $message
	 */
	public function executeRedirect($url, $time, $message){}

	/**
	 * @param XCube_ActionFilter $filter
	 */
	public function addActionFilter($filter){}

	/**
	 * @protected
	 */
	public function _setupFilterChain(){}

	public function _setupEnvironment(){}

	/**
	 * @protected
	 */
	public function _setupDB(){}

	public function getDB(){}

	/**
	 * @protected
	 */
	public function _setupLanguage(){}

	/**
	 * @protected
	 */
	public function _setupTextFilter(){}

	public function _setupConfig(){}

	/**
	 * @protected
	 * @return void
	 */
	public function _setupSession(){}

	public function _setupUser(){}

	/**
	 * @protected
	 */
	public function _processFilter(){}

	public function _setupBlock(){}

	public function _processBlock(){}

	/**
	 * @protected
	 */
	public function _processPreBlockFilter(){}

	/**
	 * @protected
	 */
	public function _processPostFilter(){}

	/**
	 * @protected
	 * @param string $path
	 */
	public function _processPreload($path){}

	/**
	 * @return XCube_DelegateManager
	 */
	public function _createDelegateManager(){}

	/**
	 * @return XCube_ServiceManager
	 */
	public function _createServiceManager(){}

	/**
	 * @return XCube_PermissionManager
	 */
	public function _createPermissionManager(){}

	/**
	 * @return XCube_RoleManager
	 */
	public function _createRoleManager(){}

	/**
	 * @return XCube_HttpContext
	 */
	public function _createContext(){}

}

class XCube_RenderTarget
{
	public $mName;

	public $mRenderBuffer;

	public $mModuleName;

	public $mTemplateName;

	public $mAttributes;

	/** @deprecated */
	public $mType;

	public $mCacheTime;

	public function XCube_RenderTarget(){}

	public function setName($name){}

	public function getName(){}

	public function setTemplateName($name){}

	public function getTemplateName(){}

	public function setAttribute($key, $value){}

	public function setAttributes($attr){}

	public function getAttribute($key){}

	public function getAttributes(){}

	/**
	 * @deprecated
	 * @param int $type
	 */
	public function setType($type){}

	/**
	 * @deprecated
	 * @return int
	 */
	public function getType(){}

	public function setResult($result){}

	public function getResult(){}

	public function reset(){}

}

class XCube_RenderSystem
{
	public $mController;

	public $mRenderMode;

	public function XCube_RenderSystem(){}

	/**
	 * @param XCube_Controller $controller
	 */
	public function prepare($controller){}

	/**
	 * @return XCube_RenderTarget
	 */
	public function createRenderTarget(){}

	/**
	 * @param XCube_RenderTarget $target
	 */
	public function render($target){}

}

class XCube_Ref
{
	/** @var mixed */
	public $_mObject;

	/**
	 * @param mixed $obj
	 */
	public function XCube_Ref($obj){}

	/**
	 * @return mixed
	 */
	public function getObject(){}

}

class XCube_Delegate
{
	/** @var array */
	public $_mSignatures;

	/** @var array */
	public $_mCallbacks;

	/** @var bool */
	public $_mHasCheckSignatures;

	/** @var bool */
	public $_mIsLazyRegister;

	/** @var string */
	public $_mLazyRegisterName;

	public $_mUniqueID;

	public function XCube_Delegate(){}

	/**
	 * @param Vector $args
	 * @return void
	 */
	public function _setSignatures($args){}

	/**
	 * @param string $delegateName
	 * @return bool
	 */
	public function register($delegateName){}

	/**
	 * @return void
	 */
	public function add($callback, $param2, $param3){}

	/**
	 * @return void
	 */
	public function delete($delcallback){}

	/**
	 * @return void
	 */
	public function reset(){}

	public function call(){}

	/**
	 * @return bool
	 */
	public function isEmpty(){}

	public function getID(){}

}

class XCube_DelegateManager
{
	/** @var array */
	public $_mCallbacks;

	/** @var array */
	public $_mCallbackParameters;

	/** @var array */
	public $_mDelegates;

	public function XCube_DelegateManager(){}

	/**
	 * @param string $name
	 * @param XCube_Delegate $delegate
	 * @return bool
	 */
	public function register($name, $delegate){}

	/**
	 * @param string $name
	 * @return void
	 */
	public function add($name, $callback, $param3, $param4){}

	/**
	 * @param string $name
	 */
	public function delete($name, $delcallback){}

	/**
	 * @param string $name
	 */
	public function reset($name){}

	/**
	 * @param string $name
	 * @return bool
	 */
	public function isEmpty($name){}

	/**
	 * @return array
	 */
	public function getDelegates(){}

}

class XCube_DelegateUtils
{
	public function XCube_DelegateUtils(){}

	/**
	 * @deprecated
	 */
	public function call(){}

	/**
	 * @return bool
	 */
	public static function raiseEvent(){}

	/**
	 * @return string
	 */
	public function applyStringFilter(){}

	/**
	 * @return bool
	 */
	public function _compareCallback($callback1, $callback2){}

}

class XCube_Object
{
	public $mProperty;

	/**
	 * @static
	 * @return array
	 */
	public function isArray(){}

	/**
	 * @static
	 * @return array
	 */
	public function getPropertyDefinition(){}

	public function XCube_Object(){}

	public function prepare(){}

	public function toArray(){}

	public function loadByArray($vars){}

}

class XCube_ObjectArray
{
	public function isArray(){}

	/**
	 * @static
	 * @return string
	 */
	public function getClassName(){}

}

class XCube_Service
{
	/** @var string */
	public $mServiceName;

	/** @var string */
	public $mNameSpace;

	public $mClassName;

	/**
	 * @var XCube_ActionStrategy
	 * @deprecated
	 */
	public $_mActionStrategy;

	public $_mTypes;

	public $_mFunctions;

	public function XCube_Service(){}

	public function prepare(){}

	public function addType($className){}

	public function addFunction(){}

	public function _addFunctionStandard($name, $in, $out){}

	/**
	 * @param XCube_Procedure $procedure
	 */
	public function register($name, $procedure){}

}

class XCube_AbstractServiceClient
{
	public $mService;

	public $mClientErrorStr;

	public $mUser;

	public function XCube_AbstractServiceClient($service){}

	public function prepare(){}

	public function setUser($user){}

	public function call(){}

	public function getOperationData($operation){}

	public function setError($message){}

	public function getError(){}

}

class XCube_ServiceClient extends XCube_AbstractServiceClient
{
	public $mService;

	public $mClientErrorStr;

	public $mUser;

	public function call($operation, $params){}

	public function XCube_AbstractServiceClient($service){}

	public function prepare(){}

	public function setUser($user){}

	public function getOperationData($operation){}

	public function setError($message){}

	public function getError(){}

}

class XCube_Identity
{
	/** @var string */
	public $mName;

	/** @var string */
	public $_mAuthenticationType;

	public function XCube_Identity(){}

	/**
	 * @param string $type
	 */
	public function setAuthenticationType($type){}

	/**
	 * @return string
	 */
	public function getAuthenticationType(){}

	public function setName($name){}

	/**
	 * @return string
	 */
	public function getName(){}

	/**
	 * @return bool
	 */
	public function isAuthenticated(){}

}

class XCube_Principal
{
	public $mIdentity;

	/** @var string[] */
	public $_mRoles;

	public function XCube_Principal($identity, $roles){}

	/**
	 * @return XCube_Identity
	 */
	public function getIdentity(){}

	/**
	 * @return bool
	 */
	public function isInRole($rolename){}

}

class XCube_RoleManager
{
	public function getRolesForUser($username){}

}

class XCube_Role
{
	public function getRolesForUser($username){}

}

class XCube_Permissions
{
	public function getRolesOfAction(){}

}

class XCube_AbstractPermissionProvider
{
	public function XCube_AbstractPermissionProvider(){}

	public function prepare(){}

	public function getRolesOfAction($actionName, $args){}

}

class XCube_LanguageManager
{
	/**
	 * @var string
	 * @protected
	 */
	public $mLanguageName;

	/**
	 * @var string
	 * @protected
	 */
	public $mLocaleName;

	public function XCube_LanguageManager(){}

	public function prepare(){}

	/**
	 * @param string $local
	 */
	public function setLocale($locale){}

	/**
	 * @return string
	 */
	public function getLocale(){}

	/**
	 * @param string $language
	 */
	public function setLanguage($language){}

	/**
	 * @return string
	 */
	public function getLanguage(){}

	public function loadGlobalMessageCatalog(){}

	/**
	 * @param string $moduleName
	 */
	public function loadModuleMessageCatalog($moduleName){}

	/**
	 * @param string $themeName
	 */
	public function loadThemeMessageCatalog($themeName){}

	/**
	 * @param string $section
	 * @param string $filename
	 * @return bool
	 */
	public function existFile($section, $filename){}

	/**
	 * @param string $section
	 * @param string $filename
	 * @return string
	 */
	public function getFilepath($section, $filename){}

	/**
	 * @param string $section
	 * @param string $filename
	 * @return string
	 */
	public function loadTextFile($section, $filename){}

	/**
	 * @param string $word
	 * @return string
	 */
	public function translate($word){}

	/**
	 * @protected
	 * @return string
	 */
	public function getFallbackLanguage(){}

	/**
	 * @protected
	 * @return string
	 */
	public function getFallbackLocale(){}

	public function encodeUTF8($str){}

	public function decodeUTF8($str){}

}

class XCube_TextFilter
{
	public $mDummy;

	public function getInstance($instance){}

	public function toShow($str){}

	public function toEdit($str){}

}

class XCube_Session
{
	/** @var string */
	public $mSessionName;

	/** @var int */
	public $mSessionLifetime;

	/** @var XCube_Delegate */
	public $mSetupSessionHandler;

	/** @var XCube_Delegate */
	public $mGetSessionCookiePath;

	public function XCube_Session($sessionName, $sessionExpire){}

	public function setParam($sessionName, $sessionExpire){}

	public function start(){}

	public function destroy($forceCookieClear){}

	public function regenerate(){}

	public function rename(){}

	public function _cookiePath(){}

}

class XCube_PageNavigator
{
	/** @var array */
	public $mAttributes;

	/** @var int */
	public $mStart;

	/** @var int */
	public $mTotalItems;

	/** @var int */
	public $mPerpage;

	/** @var bool */
	public $mPerpageFreeze;

	/** @var array */
	public $mSort;

	/** @var string */
	public $mUrl;

	public $mPrefix;

	public $mExtra;

	public $mFlags;

	public $mFetch;

	/** @var bool */
	public $_mIsSpecifedTotalItems;

	/** @var XCube_Delegate */
	public $mGetTotalItems;

	/**
	 * @param string $url
	 * @param int $total
	 */
	public function XCube_PageNavigator($url, $flags){}

	public function fetch(){}

	public function fetchNaviControl($navi){}

	public function addExtra($key, $value){}

	public function removeExtra($key){}

	protected function _renderExtra($key, $extra, $query){}

	public function getRenderBaseUrl($mask){}

	/**
	 * @return string
	 */
	public function getRenderUrl($mask){}

	public function renderUrlForSort(){}

	public function renderUrlForPage($page){}

	/**
	 * @deprecated
	 */
	public function renderSortUrl($mask){}

	public function setStart($start){}

	public function getStart(){}

	public function setTotalItems($total){}

	public function getTotalItems(){}

	public function getTotalPages(){}

	public function setPerpage($perpage){}

	public function freezePerpage(){}

	public function getPerpage(){}

	public function setPrefix($prefix){}

	public function getPrefix(){}

	public function getStartKey(){}

	public function getPerpageKey(){}

	public function getCurrentPage(){}

	public function hasPrivPage(){}

	public function getPrivStart(){}

	public function hasNextPage(){}

	public function getNextStart(){}

}

class XCube_RenderCache
{
	public $mCacheId;

	public $mResourceName;

	public function XCube_RenderCache(){}

	/**
	 * @return bool
	 */
	public function isCache($cachetime){}

	/**
	 * @return bool
	 */
	public function enableCache(){}

	public function setResourceName($name){}

	/**
	 * @return string
	 */
	public function getCacheId(){}

	/**
	 * @return string
	 */
	public function _getFileName(){}

	public function save($renderTarget){}

	public function load(){}

	public function clear(){}

	public function reset(){}

}

class XCube_ServiceUtils
{
	public function isXSD($typeName){}

}

class XCube_ServiceManager
{
	/** @var array */
	public $mServices;

	/** @var XCube_Delegate */
	public $mCreateClient;

	/** @var XCube_Delegate */
	public $mCreateServer;

	public function XCube_ServiceManager(){}

	/**
	 * @param string $name
	 * @param XCube_Service $service
	 * @return bool
	 */
	public function addService($name, $service){}

	public function addWSDL($name, $url){}

	/**
	 * @deprecated
	 */
	public function addXCubeService($name, $service){}

	public function getService($name){}

	/**
	 * @deprecated
	 */
	public function searchXCubeService($name){}

	public function createClient($service){}

	public function createServer($service){}

}

class XCube_Theme
{
	/** @var string */
	public $mName;

	/** @var string */
	public $mDirname;

	/** @var string */
	public $mDepends;

	public $mVersion;

	public $mUrl;

	/** @var string */
	public $mRenderSystemName;

	/** @var string */
	public $mScreenShot;

	public $mDescription;

	/** @var string */
	public $mFormat;

	public $mAuthor;

	/** @deprecated */
	public $mLicence;

	public $mLicense;

	public $_mManifesto;

	/**
	 * @return bool
	 */
	public function loadManifesto($file){}

}

class XCube_Utils
{
	public function XCube_Utils(){}

	/**
	 * @deprecated
	 * @param string $url
	 * @param int $time
	 * @param mixed $message
	 * @return void
	 */
	public function redirectHeader($url, $time, $messages){}

	/**
	 * @return string
	 */
	public function formatString(){}

	/**
	 * @deprecated
	 */
	public function formatMessage(){}

	/**
	 * @deprecated
	 */
	public function formatMessageByMap($subject, $arr){}

}
