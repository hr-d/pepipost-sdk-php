<?php
/*
 * PepipostAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostAPILib\Models;

use JsonSerializable;

/**
 *Mail Body which will be passed as json in apicall.
 */
class EmailBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var \PepipostAPILib\Models\Personalizations[]|null $personalizations public property
     */
    public $personalizations;

    /**
     * @todo Write general description for this property
     * @var string|null $tags public property
     */
    public $tags;

    /**
     * @todo Write general description for this property
     * @var \PepipostAPILib\Models\From|null $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @var string|null $subject public property
     */
    public $subject;

    /**
     * @todo Write general description for this property
     * @var string|null $content public property
     */
    public $content;

    /**
     * @todo Write general description for this property
     * @var string|null $ampcontent public property
     */
    public $ampcontent;

    /**
     * @todo Write general description for this property
     * @var \PepipostAPILib\Models\EmailBodyAttachments[]|null $attachments public property
     */
    public $attachments;

    /**
     * @todo Write general description for this property
     * @var \PepipostAPILib\Models\Settings|null $settings public property
     */
    public $settings;

    /**
     * @todo Write general description for this property
     * @var string|null $replyToId public property
     */
    public $replyToId;

    /**
     * @todo Write general description for this property
     * @var integer|null $templateId public property
     */
    public $templateId;

    /**
     * Constructor to set initial or default values of member properties
     * @param array    $personalizations Initialization value for $this->personalizations
     * @param string   $tags             Initialization value for $this->tags
     * @param From     $from             Initialization value for $this->from
     * @param string   $subject          Initialization value for $this->subject
     * @param string   $content          Initialization value for $this->content
     * @param string   $ampcontent       Initialization value for $this->ampcontent
     * @param array    $attachments      Initialization value for $this->attachments
     * @param Settings $settings         Initialization value for $this->settings
     * @param string   $replyToId        Initialization value for $this->replyToId
     * @param integer  $templateId       Initialization value for $this->templateId
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->personalizations = func_get_arg(0);
            $this->tags             = func_get_arg(1);
            $this->from             = func_get_arg(2);
            $this->subject          = func_get_arg(3);
            $this->content          = func_get_arg(4);
            $this->ampcontent       = func_get_arg(5);
            $this->attachments      = func_get_arg(6);
            $this->settings         = func_get_arg(7);
            $this->replyToId        = func_get_arg(8);
            $this->templateId       = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['personalizations'] = $this->personalizations;
        $json['tags']             = $this->tags;
        $json['from']             = $this->from;
        $json['subject']          = $this->subject;
        $json['content']          = $this->content;
        $json['ampcontent']       = $this->ampcontent;
        $json['attachments']      = $this->attachments;
        $json['settings']         = $this->settings;
        $json['replyToId']        = $this->replyToId;
        $json['templateId']       = $this->templateId;

        return $json;
    }
}
