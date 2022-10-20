<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Shop;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ShopUpdateRequest implements Request
{
    protected $id;
    protected $name;
    protected $phrase;
    protected $description;
    protected $keywords;
    protected $slug;
    protected $email;
    protected $email_from;
    protected $industry;
    protected $knowledge;
    protected $sales_urgency;
    protected $domain;
    protected $temp_domain;
    protected $ssl;
    protected $redirect_temporary;
    protected $shipping_time_additional;
    protected $shipping_time_additional_kit;
    protected $shipping_restriction_message;
    protected $append_to_head;
    protected $append_to_body;
    protected $theme_id;
    protected $policy_footer;
    protected $company;
    protected $cgc;
    protected $zipcode;
    protected $city;
    protected $state;
    protected $street;
    protected $number;
    protected $detail;
    protected $district;
    protected $phone;
    protected $checkout_note_active;
    protected $checkout_note_label;
    protected $catalog;
    protected $customer_register_for;
    protected $customer_register_approves;
    protected $customer_register_company;
    protected $customer_register_individual;
    protected $facebook_connect;
    protected $google_connect;
    protected $schedule_delivery;
    protected $checkout_options;
    protected $suspended_at;
    protected $canceled_at;
    protected $active;
    protected $organization;
    protected $beta_checkout;
    protected $gift_wrapping_active;
    protected $gift_wrapping_price;
    protected $tracker_google_analytics;
    protected $tracker_google_conversion;
    protected $tracker_facebook_pixel;
    protected $platform_version;

    public function __construct(
        $id,
        $name,
        $phrase,
        $description,
        $keywords,
        $slug,
        $email,
        $email_from,
        $industry,
        $knowledge,
        $sales_urgency,
        $domain,
        $ssl,
        $redirect_temporary,
        $shipping_time_additional,
        $shipping_time_additional_kit,
        $shipping_restriction_message,
        $append_to_head,
        $append_to_body,
        $theme_id,
        $policy_footer,
        $company,
        $cgc,
        $zipcode,
        $city,
        $state,
        $street,
        $number,
        $detail,
        $district,
        $phone,
        $checkout_note_active,
        $checkout_note_label,
        $catalog,
        $customer_register_for,
        $customer_register_approves,
        $customer_register_company,
        $customer_register_individual,
        $facebook_connect,
        $google_connect,
        $schedule_delivery,
        $checkout_options,
        $suspended_at,
        $canceled_at,
        $active,
        $organization,
        $beta_checkout,
        $gift_wrapping_active,
        $gift_wrapping_price,
        $tracker_google_analytics,
        $tracker_google_conversion,
        $tracker_facebook_pixel,
        $platform_version,
        $temp_domain
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->phrase = $phrase;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->slug = $slug;
        $this->email = $email;
        $this->email_from = $email_from;
        $this->industry = $industry;
        $this->knowledge = $knowledge;
        $this->sales_urgency = $sales_urgency;
        $this->domain = $domain;
        $this->ssl = (bool) $ssl;
        $this->redirect_temporary = (bool) $redirect_temporary;
        $this->shipping_time_additional = $shipping_time_additional;
        $this->shipping_time_additional_kit = $shipping_time_additional_kit;
        $this->shipping_restriction_message = $shipping_restriction_message;
        $this->append_to_head = $append_to_head;
        $this->append_to_body = $append_to_body;
        $this->theme_id = $theme_id;
        $this->policy_footer = $policy_footer;
        $this->company = $company;
        $this->cgc = $cgc;
        $this->zipcode = $zipcode;
        $this->city = $city;
        $this->state = $state;
        $this->street = $street;
        $this->number = $number;
        $this->detail = $detail;
        $this->district = $district;
        $this->phone = $phone;
        $this->checkout_note_active = (bool) $checkout_note_active;
        $this->checkout_note_label = $checkout_note_label;
        $this->catalog = $catalog;
        $this->customer_register_for = $customer_register_for;
        $this->customer_register_approves = $customer_register_approves;
        $this->customer_register_company = $customer_register_company;
        $this->customer_register_individual = $customer_register_individual;
        $this->facebook_connect = (bool)$facebook_connect;
        $this->google_connect = (bool)$google_connect;
        $this->schedule_delivery = $schedule_delivery;
        $this->checkout_options = $checkout_options;
        $this->suspended_at = $suspended_at;
        $this->canceled_at = $canceled_at;
        $this->active = (bool) $active;
        $this->organization = $organization;
        $this->beta_checkout = (bool) $beta_checkout;
        $this->gift_wrapping_active = (bool) $gift_wrapping_active;
        $this->gift_wrapping_price = $gift_wrapping_price;
        $this->tracker_google_analytics = $tracker_google_analytics;
        $this->tracker_google_conversion = $tracker_google_conversion;
        $this->tracker_facebook_pixel = $tracker_facebook_pixel;
        $this->platform_version = $platform_version;
        $this->temp_domain = $temp_domain;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phrase' => $this->phrase,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'slug' => $this->slug,
            'email' => $this->email,
            'email_from' => $this->email_from,
            'industry' => $this->industry,
            'knowledge' => $this->knowledge,
            'sales_urgency' => $this->sales_urgency,
            'domain' => $this->domain,
            'ssl' => $this->ssl,
            'redirect_temporary' => $this->redirect_temporary,
            'shipping_time_additional' => $this->shipping_time_additional,
            'shipping_time_additional_kit' => $this->shipping_time_additional_kit,
            'shipping_restriction_message' => $this->shipping_restriction_message,
            'append_to_head' => $this->append_to_head,
            'append_to_body' => $this->append_to_body,
            'theme_id' => $this->theme_id,
            'policy_footer' => $this->policy_footer,
            'company' => $this->company,
            'cgc' => $this->cgc,
            'zipcode' => $this->zipcode,
            'city' => $this->city,
            'state' => $this->state,
            'street' => $this->street,
            'number' => $this->number,
            'detail' => $this->detail,
            'district' => $this->district,
            'phone' => $this->phone,
            'checkout_note_active' => $this->checkout_note_active,
            'checkout_note_label' => $this->checkout_note_label,
            'catalog' => $this->catalog,
            'customer_register_for' => $this->customer_register_for,
            'customer_register_approves' => $this->customer_register_approves,
            'customer_register_company' => $this->customer_register_company,
            'customer_register_individual' => $this->customer_register_individual,
            'facebook_connect' => $this->facebook_connect,
            'google_connect' => $this->google_connect,
            'schedule_delivery' => $this->schedule_delivery,
            'checkout_options' => $this->checkout_options,
            'suspended_at' => $this->suspended_at,
            'canceled_at' => $this->canceled_at,
            'active' => $this->active,
            'organization' => $this->organization,
            'beta_checkout' => $this->beta_checkout,
            'gift_wrapping_active' => $this->gift_wrapping_active,
            'gift_wrapping_price' => $this->gift_wrapping_price,
            'tracker_google_analytics' => $this->tracker_google_analytics,
            'tracker_google_conversion' => $this->tracker_google_conversion,
            'tracker_facebook_pixel' => $this->tracker_facebook_pixel,
            'platform_version' => $this->platform_version,
            'temp_domain' => $this->temp_domain,
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/shop';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
