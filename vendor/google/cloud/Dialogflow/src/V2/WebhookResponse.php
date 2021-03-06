<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/webhook.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for a webhook call.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.WebhookResponse</code>
 */
class WebhookResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The text to be shown on the screen. This value is passed directly
     * to `QueryResult.fulfillment_text`.
     *
     * Generated from protobuf field <code>string fulfillment_text = 1;</code>
     */
    private $fulfillment_text = '';
    /**
     * Optional. The collection of rich messages to present to the user. This
     * value is passed directly to `QueryResult.fulfillment_messages`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message fulfillment_messages = 2;</code>
     */
    private $fulfillment_messages;
    /**
     * Optional. This value is passed directly to `QueryResult.webhook_source`.
     *
     * Generated from protobuf field <code>string source = 3;</code>
     */
    private $source = '';
    /**
     * Optional. This value is passed directly to `QueryResult.webhook_payload`.
     * See the related `fulfillment_messages[i].payload field`, which may be used
     * as an alternative to this field.
     * This field can be used for Actions on Google responses.
     * It should have a structure similar to the JSON message shown here. For more
     * information, see
     * [Actions on Google Webhook
     * Format](https://developers.google.com/actions/dialogflow/webhook)
     * <pre>{
     *   "google": {
     *     "expectUserResponse": true,
     *     "richResponse": {
     *       "items": [
     *         {
     *           "simpleResponse": {
     *             "textToSpeech": "this is a simple response"
     *           }
     *         }
     *       ]
     *     }
     *   }
     * }</pre>
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 4;</code>
     */
    private $payload = null;
    /**
     * Optional. The collection of output contexts. This value is passed directly
     * to `QueryResult.output_contexts`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context output_contexts = 5;</code>
     */
    private $output_contexts;
    /**
     * Optional. Makes the platform immediately invoke another `DetectIntent` call
     * internally with the specified event as input.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EventInput followup_event_input = 6;</code>
     */
    private $followup_event_input = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fulfillment_text
     *           Optional. The text to be shown on the screen. This value is passed directly
     *           to `QueryResult.fulfillment_text`.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\Message[]|\Google\Protobuf\Internal\RepeatedField $fulfillment_messages
     *           Optional. The collection of rich messages to present to the user. This
     *           value is passed directly to `QueryResult.fulfillment_messages`.
     *     @type string $source
     *           Optional. This value is passed directly to `QueryResult.webhook_source`.
     *     @type \Google\Protobuf\Struct $payload
     *           Optional. This value is passed directly to `QueryResult.webhook_payload`.
     *           See the related `fulfillment_messages[i].payload field`, which may be used
     *           as an alternative to this field.
     *           This field can be used for Actions on Google responses.
     *           It should have a structure similar to the JSON message shown here. For more
     *           information, see
     *           [Actions on Google Webhook
     *           Format](https://developers.google.com/actions/dialogflow/webhook)
     *           <pre>{
     *             "google": {
     *               "expectUserResponse": true,
     *               "richResponse": {
     *                 "items": [
     *                   {
     *                     "simpleResponse": {
     *                       "textToSpeech": "this is a simple response"
     *                     }
     *                   }
     *                 ]
     *               }
     *             }
     *           }</pre>
     *     @type \Google\Cloud\Dialogflow\V2\Context[]|\Google\Protobuf\Internal\RepeatedField $output_contexts
     *           Optional. The collection of output contexts. This value is passed directly
     *           to `QueryResult.output_contexts`.
     *     @type \Google\Cloud\Dialogflow\V2\EventInput $followup_event_input
     *           Optional. Makes the platform immediately invoke another `DetectIntent` call
     *           internally with the specified event as input.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The text to be shown on the screen. This value is passed directly
     * to `QueryResult.fulfillment_text`.
     *
     * Generated from protobuf field <code>string fulfillment_text = 1;</code>
     * @return string
     */
    public function getFulfillmentText()
    {
        return $this->fulfillment_text;
    }

    /**
     * Optional. The text to be shown on the screen. This value is passed directly
     * to `QueryResult.fulfillment_text`.
     *
     * Generated from protobuf field <code>string fulfillment_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFulfillmentText($var)
    {
        GPBUtil::checkString($var, True);
        $this->fulfillment_text = $var;

        return $this;
    }

    /**
     * Optional. The collection of rich messages to present to the user. This
     * value is passed directly to `QueryResult.fulfillment_messages`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message fulfillment_messages = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFulfillmentMessages()
    {
        return $this->fulfillment_messages;
    }

    /**
     * Optional. The collection of rich messages to present to the user. This
     * value is passed directly to `QueryResult.fulfillment_messages`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.Message fulfillment_messages = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\Message[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFulfillmentMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\Message::class);
        $this->fulfillment_messages = $arr;

        return $this;
    }

    /**
     * Optional. This value is passed directly to `QueryResult.webhook_source`.
     *
     * Generated from protobuf field <code>string source = 3;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Optional. This value is passed directly to `QueryResult.webhook_source`.
     *
     * Generated from protobuf field <code>string source = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Optional. This value is passed directly to `QueryResult.webhook_payload`.
     * See the related `fulfillment_messages[i].payload field`, which may be used
     * as an alternative to this field.
     * This field can be used for Actions on Google responses.
     * It should have a structure similar to the JSON message shown here. For more
     * information, see
     * [Actions on Google Webhook
     * Format](https://developers.google.com/actions/dialogflow/webhook)
     * <pre>{
     *   "google": {
     *     "expectUserResponse": true,
     *     "richResponse": {
     *       "items": [
     *         {
     *           "simpleResponse": {
     *             "textToSpeech": "this is a simple response"
     *           }
     *         }
     *       ]
     *     }
     *   }
     * }</pre>
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 4;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Optional. This value is passed directly to `QueryResult.webhook_payload`.
     * See the related `fulfillment_messages[i].payload field`, which may be used
     * as an alternative to this field.
     * This field can be used for Actions on Google responses.
     * It should have a structure similar to the JSON message shown here. For more
     * information, see
     * [Actions on Google Webhook
     * Format](https://developers.google.com/actions/dialogflow/webhook)
     * <pre>{
     *   "google": {
     *     "expectUserResponse": true,
     *     "richResponse": {
     *       "items": [
     *         {
     *           "simpleResponse": {
     *             "textToSpeech": "this is a simple response"
     *           }
     *         }
     *       ]
     *     }
     *   }
     * }</pre>
     *
     * Generated from protobuf field <code>.google.protobuf.Struct payload = 4;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->payload = $var;

        return $this;
    }

    /**
     * Optional. The collection of output contexts. This value is passed directly
     * to `QueryResult.output_contexts`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context output_contexts = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputContexts()
    {
        return $this->output_contexts;
    }

    /**
     * Optional. The collection of output contexts. This value is passed directly
     * to `QueryResult.output_contexts`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Context output_contexts = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\Context[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputContexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Context::class);
        $this->output_contexts = $arr;

        return $this;
    }

    /**
     * Optional. Makes the platform immediately invoke another `DetectIntent` call
     * internally with the specified event as input.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EventInput followup_event_input = 6;</code>
     * @return \Google\Cloud\Dialogflow\V2\EventInput
     */
    public function getFollowupEventInput()
    {
        return $this->followup_event_input;
    }

    /**
     * Optional. Makes the platform immediately invoke another `DetectIntent` call
     * internally with the specified event as input.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EventInput followup_event_input = 6;</code>
     * @param \Google\Cloud\Dialogflow\V2\EventInput $var
     * @return $this
     */
    public function setFollowupEventInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\EventInput::class);
        $this->followup_event_input = $var;

        return $this;
    }

}

