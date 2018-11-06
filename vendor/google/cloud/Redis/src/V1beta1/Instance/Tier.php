<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1\Instance;

/**
 * Available service tiers to choose from
 *
 * Protobuf type <code>google.cloud.redis.v1beta1.Instance.Tier</code>
 */
class Tier
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>TIER_UNSPECIFIED = 0;</code>
     */
    const TIER_UNSPECIFIED = 0;
    /**
     * BASIC tier: standalone instance
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * STANDARD_HA tier: highly available primary/replica instances
     *
     * Generated from protobuf enum <code>STANDARD_HA = 3;</code>
     */
    const STANDARD_HA = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Tier::class, \Google\Cloud\Redis\V1beta1\Instance_Tier::class);

