<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/protobuf/wrappers.proto
//   Date: 2016-07-18 20:27:54

namespace google\protobuf {

  class DoubleValue extends \DrSlump\Protobuf\Message {

    /**  @var float */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.DoubleValue');

      // OPTIONAL DOUBLE value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_DOUBLE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\DoubleValue
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return float
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param float $value
     * @return \google\protobuf\DoubleValue
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class FloatValue extends \DrSlump\Protobuf\Message {

    /**  @var float */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.FloatValue');

      // OPTIONAL FLOAT value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\FloatValue
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return float
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param float $value
     * @return \google\protobuf\FloatValue
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class Int64Value extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.Int64Value');

      // OPTIONAL INT64 value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\Int64Value
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return int
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param int $value
     * @return \google\protobuf\Int64Value
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class UInt64Value extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.UInt64Value');

      // OPTIONAL UINT64 value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\UInt64Value
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return int
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param int $value
     * @return \google\protobuf\UInt64Value
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class Int32Value extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.Int32Value');

      // OPTIONAL INT32 value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\Int32Value
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return int
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param int $value
     * @return \google\protobuf\Int32Value
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class UInt32Value extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.UInt32Value');

      // OPTIONAL UINT32 value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\UInt32Value
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return int
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param int $value
     * @return \google\protobuf\UInt32Value
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class BoolValue extends \DrSlump\Protobuf\Message {

    /**  @var boolean */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.BoolValue');

      // OPTIONAL BOOL value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\BoolValue
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return boolean
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param boolean $value
     * @return \google\protobuf\BoolValue
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class StringValue extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.StringValue');

      // OPTIONAL STRING value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\StringValue
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return string
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param string $value
     * @return \google\protobuf\StringValue
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\protobuf {

  class BytesValue extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.protobuf.BytesValue');

      // OPTIONAL BYTES value = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value> value
     *
     * @return \google\protobuf\BytesValue
     */
    public function clearValue(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value> value
     *
     * @return string
     */
    public function getValue(){
      return $this->_get(1);
    }
    
    /**
     * Set <value> value
     *
     * @param string $value
     * @return \google\protobuf\BytesValue
     */
    public function setValue( $value){
      return $this->_set(1, $value);
    }
  }
}

