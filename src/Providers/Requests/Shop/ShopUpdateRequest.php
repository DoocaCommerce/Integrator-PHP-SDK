<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Shop;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ShopUpdateRequest implements Request
{
    protected int $id;
    protected ?int $partner_id = null;
    protected ?int $superlogica_id = null;
    protected ?string $name = null;
    protected ?string $phrase = null;
    protected ?string $description = null;
    protected ?string $keywords = null;
    protected string $slug;
    protected ?string $email = null;
    protected ?string $email_from = null;
    protected ?string $industry = null;
    protected ?string $ecomerce_knowledge = null;
    protected ?string $domain = null;
    protected ?string $domain_installed_at = null;
    protected ?int $azion_domain_id = null;
    protected ?int $azion_certificate_id = null;
    protected ?bool $ssl = null;
    protected ?bool $redirect_temporary = false;
    protected ?int $shipping_time_additional = null;
    protected ?int $shipping_time_additional_kit = null;
    protected ?string $shipping_restriction_message = null;
    protected ?string $append_to_head = null;
    protected ?string $append_to_body = null;
    protected ?int $theme_id = null;
    protected ?string $policy_footer = null;
    protected ?string $company = null;
    protected ?string $cgc = null;
    protected ?string $zipcode = null;
    protected ?string $city = null;
    protected ?string $state = null;
    protected ?string $street = null;
    protected ?string $number = null;
    protected ?string $detail = null;
    protected ?string $district = null;
    protected ?string $phone = null;
    protected ?bool $checkout_note_active = false;
    protected ?string $checkout_note_label = null;
    protected ?bool $catalog = false;
    protected ?string $customer_register_for = null;
    protected ?string $customer_register_approves = null;
    protected ?bool $customer_register_company = true;
    protected ?bool $customer_register_individual = true;
    protected ?bool $facebook_connect = false;
    protected ?bool $google_connect = false;
    protected ?int $terms_user_id = null;
    protected ?string $terms_accepted_at = null;
    protected ?int $users_count = null;
    protected ?int $products_count = null;
    protected ?int $phone_service_code = null;
    protected ?string $suspended_at = null;
    protected ?bool $active = true;
    protected ?string $trial_ends_at = null;
    protected ?bool $gift_wrapping_active = false;
    protected ?float $gift_wrapping_price = null;
    protected ?array $notifications = null;
    protected ?array $shop_marketplace = null;
    protected ?array $tracker_google_analytics = null;
    protected ?array $tracker_google_conversion = null;
    protected ?array $tracker_facebook_pixel = null;

    public function __construct(
        int $id,
        ?int $partner_id = null,
        ?int $superlogica_id = null,
        ?string $name = null,
        ?string $phrase = null,
        ?string $description = null,
        ?string $keywords = null,
        string $slug,
        ?string $email = null,
        ?string $email_from = null,
        ?string $industry = null,
        ?string $ecomerce_knowledge = null,
        ?string $domain = null,
        ?string $domain_installed_at = null,
        ?int $azion_domain_id = null,
        ?int $azion_certificate_id = null,
        ?bool $ssl = null,
        ?bool $redirect_temporary = false,
        ?int $shipping_time_additional = null,
        ?int $shipping_time_additional_kit = null,
        ?string $shipping_restriction_message = null,
        ?string $append_to_head = null,
        ?string $append_to_body = null,
        ?int $theme_id = null,
        ?string $policy_footer = null,
        ?string $company = null,
        ?string $cgc = null,
        ?string $zipcode = null,
        ?string $city = null,
        ?string $state = null,
        ?string $street = null,
        ?string $number = null,
        ?string $detail = null,
        ?string $district = null,
        ?string $phone = null,
        ?bool $checkout_note_active = false,
        ?string $checkout_note_label = null,
        ?bool $catalog = false,
        ?string $customer_register_for = null,
        ?string $customer_register_approves = null,
        ?bool $customer_register_company = true,
        ?bool $customer_register_individual = true,
        ?bool $facebook_connect = false,
        ?bool $google_connect = false,
        ?int $terms_user_id = null,
        ?string $terms_accepted_at = null,
        ?int $users_count = null,
        ?int $products_count = null,
        ?int $phone_service_code = null,
        ?string $suspended_at = null,
        ?bool $active = true,
        ?string $trial_ends_at = null,
        ?bool $gift_wrapping_active = false,
        ?float $gift_wrapping_price = null,
        ?array $notifications = null,
        ?array $shop_marketplace = null,
        ?array $tracker_google_analytics = null,
        ?array $tracker_google_conversion = null,
        ?array $tracker_facebook_pixel = null
    ) {
        $this->id = $id;
        $this->partner_id = $partner_id;
        $this->superlogica_id = $superlogica_id;
        $this->name = $name;
        $this->phrase = $phrase;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->slug = $slug;
        $this->email = $email;
        $this->email_from = $email_from;
        $this->industry = $industry;
        $this->ecomerce_knowledge = $ecomerce_knowledge;
        $this->domain = $domain;
        $this->domain_installed_at = $domain_installed_at;
        $this->azion_domain_id = $azion_domain_id;
        $this->azion_certificate_id = $azion_certificate_id;
        $this->ssl = $ssl;
        $this->redirect_temporary = $redirect_temporary;
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
        $this->checkout_note_active = $checkout_note_active;
        $this->checkout_note_label = $checkout_note_label;
        $this->catalog = $catalog;
        $this->customer_register_for = $customer_register_for;
        $this->customer_register_approves = $customer_register_approves;
        $this->customer_register_company = $customer_register_company;
        $this->customer_register_individual = $customer_register_individual;
        $this->facebook_connect = $facebook_connect;
        $this->google_connect = $google_connect;
        $this->terms_user_id = $terms_user_id;
        $this->terms_accepted_at = $terms_accepted_at;
        $this->users_count = $users_count;
        $this->products_count = $products_count;
        $this->phone_service_code = $phone_service_code;
        $this->suspended_at = $suspended_at;
        $this->active = $active;
        $this->trial_ends_at = $trial_ends_at;
        $this->gift_wrapping_active = $gift_wrapping_active;
        $this->gift_wrapping_price = $gift_wrapping_price;
        $this->notifications = $notifications;
        $this->shop_marketplace = $shop_marketplace;
        $this->tracker_google_analytics = $tracker_google_analytics;
        $this->tracker_google_conversion = $tracker_google_conversion;
        $this->tracker_facebook_pixel = $tracker_facebook_pixel;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "partner_id" => $this->partner_id,
            "superlogica_id" => $this->superlogica_id,
            "name" => $this->name,
            "phrase" => $this->phrase,
            "description" => $this->description,
            "keywords" => $this->keywords,
            "slug" => $this->slug,
            "email" => $this->email,
            "email_from" => $this->email_from,
            "industry" => $this->industry,
            "ecomerce_knowledge" => $this->ecomerce_knowledge,
            "domain" => $this->domain,
            "domain_installed_at" => $this->domain_installed_at,
            "azion_domain_id" => $this->azion_domain_id,
            "azion_certificate_id" => $this->azion_certificate_id,
            "ssl" => $this->ssl,
            "redirect_temporary" => $this->redirect_temporary,
            "shipping_time_additional" => $this->shipping_time_additional,
            "shipping_time_additional_kit" => $this->shipping_time_additional_kit,
            "shipping_restriction_message" => $this->shipping_restriction_message,
            "append_to_head" => $this->append_to_head,
            "append_to_body" => $this->append_to_body,
            "theme_id" => $this->theme_id,
            "policy_footer" => $this->policy_footer,
            "company" => $this->company,
            "cgc" => $this->cgc,
            "zipcode" => $this->zipcode,
            "city" => $this->city,
            "state" => $this->state,
            "street" => $this->street,
            "number" => $this->number,
            "detail" => $this->detail,
            "district" => $this->district,
            "phone" => $this->phone,
            "checkout_note_active" => $this->checkout_note_active,
            "checkout_note_label" => $this->checkout_note_label,
            "catalog" => $this->catalog,
            "customer_register_for" => $this->customer_register_for,
            "customer_register_approves" => $this->customer_register_approves,
            "customer_register_company" => $this->customer_register_company,
            "customer_register_individual" => $this->customer_register_individual,
            "facebook_connect" => $this->facebook_connect,
            "google_connect" => $this->google_connect,
            "terms_user_id" => $this->terms_user_id,
            "terms_accepted_at" => $this->terms_accepted_at,
            "users_count" => $this->users_count,
            "products_count" => $this->products_count,
            "phone_service_code" => $this->phone_service_code,
            "suspended_at" => $this->suspended_at,
            "active" => $this->active,
            "trial_ends_at" => $this->trial_ends_at,
            "gift_wrapping_active" => $this->gift_wrapping_active,
            "gift_wrapping_price" => $this->gift_wrapping_price,
            "notifications" => $this->notifications,
            "shop_marketplace" => $this->shop_marketplace,
            "tracker_google_analytics" => $this->tracker_google_analytics,
            "tracker_google_conversion" => $this->tracker_google_conversion,
            "tracker_facebook_pixel" => $this->tracker_facebook_pixel
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