<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/agent.proto

namespace Google\Cloud\Dialogflow\V2\Agent;

/**
 * Match mode determines how intents are detected from user queries.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.Agent.MatchMode</code>
 */
class MatchMode
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>MATCH_MODE_UNSPECIFIED = 0;</code>
     */
    const MATCH_MODE_UNSPECIFIED = 0;
    /**
     * Best for agents with a small number of examples in intents and/or wide
     * use of templates syntax and composite entities.
     *
     * Generated from protobuf enum <code>MATCH_MODE_HYBRID = 1;</code>
     */
    const MATCH_MODE_HYBRID = 1;
    /**
     * Can be used for agents with a large number of examples in intents,
     * especially the ones using &#64;sys.any or very large developer entities.
     *
     * Generated from protobuf enum <code>MATCH_MODE_ML_ONLY = 2;</code>
     */
    const MATCH_MODE_ML_ONLY = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MatchMode::class, \Google\Cloud\Dialogflow\V2\Agent_MatchMode::class);

