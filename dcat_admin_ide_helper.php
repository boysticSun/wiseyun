<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection user_type
     * @property Grid\Column|Collection user
     * @property Grid\Column|Collection news_category
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection purchase_count
     * @property Grid\Column|Collection supply_count
     * @property Grid\Column|Collection pid
     * @property Grid\Column|Collection body
     * @property Grid\Column|Collection excerpt
     * @property Grid\Column|Collection last_reply_user_id
     * @property Grid\Column|Collection news_category_id
     * @property Grid\Column|Collection reply_count
     * @property Grid\Column|Collection thumb
     * @property Grid\Column|Collection view_count
     * @property Grid\Column|Collection post_count
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection abilities
     * @property Grid\Column|Collection last_used_at
     * @property Grid\Column|Collection tokenable_id
     * @property Grid\Column|Collection tokenable_type
     * @property Grid\Column|Collection goods_type_id
     * @property Grid\Column|Collection is_indefinitely
     * @property Grid\Column|Collection validity
     * @property Grid\Column|Collection is_negotiable
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection price_unit
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection approval_date
     * @property Grid\Column|Collection brief
     * @property Grid\Column|Collection business_scope
     * @property Grid\Column|Collection company_name
     * @property Grid\Column|Collection credit_code
     * @property Grid\Column|Collection establish_date
     * @property Grid\Column|Collection examine_at
     * @property Grid\Column|Collection examine_status
     * @property Grid\Column|Collection industry
     * @property Grid\Column|Collection legal_representative
     * @property Grid\Column|Collection logo
     * @property Grid\Column|Collection qualifications
     * @property Grid\Column|Collection realname
     * @property Grid\Column|Collection registered_capital
     * @property Grid\Column|Collection registration_authority
     * @property Grid\Column|Collection reject_at
     * @property Grid\Column|Collection staff_size
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection user_count
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection introduction
     * @property Grid\Column|Collection mobile
     * @property Grid\Column|Collection mobile_verified_at
     * @property Grid\Column|Collection qq
     * @property Grid\Column|Collection user_authentication_id
     * @property Grid\Column|Collection user_type_id
     *
     * @method Grid\Column|Collection user_type(string $label = null)
     * @method Grid\Column|Collection user(string $label = null)
     * @method Grid\Column|Collection news_category(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection purchase_count(string $label = null)
     * @method Grid\Column|Collection supply_count(string $label = null)
     * @method Grid\Column|Collection pid(string $label = null)
     * @method Grid\Column|Collection body(string $label = null)
     * @method Grid\Column|Collection excerpt(string $label = null)
     * @method Grid\Column|Collection last_reply_user_id(string $label = null)
     * @method Grid\Column|Collection news_category_id(string $label = null)
     * @method Grid\Column|Collection reply_count(string $label = null)
     * @method Grid\Column|Collection thumb(string $label = null)
     * @method Grid\Column|Collection view_count(string $label = null)
     * @method Grid\Column|Collection post_count(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection abilities(string $label = null)
     * @method Grid\Column|Collection last_used_at(string $label = null)
     * @method Grid\Column|Collection tokenable_id(string $label = null)
     * @method Grid\Column|Collection tokenable_type(string $label = null)
     * @method Grid\Column|Collection goods_type_id(string $label = null)
     * @method Grid\Column|Collection is_indefinitely(string $label = null)
     * @method Grid\Column|Collection validity(string $label = null)
     * @method Grid\Column|Collection is_negotiable(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection price_unit(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection approval_date(string $label = null)
     * @method Grid\Column|Collection brief(string $label = null)
     * @method Grid\Column|Collection business_scope(string $label = null)
     * @method Grid\Column|Collection company_name(string $label = null)
     * @method Grid\Column|Collection credit_code(string $label = null)
     * @method Grid\Column|Collection establish_date(string $label = null)
     * @method Grid\Column|Collection examine_at(string $label = null)
     * @method Grid\Column|Collection examine_status(string $label = null)
     * @method Grid\Column|Collection industry(string $label = null)
     * @method Grid\Column|Collection legal_representative(string $label = null)
     * @method Grid\Column|Collection logo(string $label = null)
     * @method Grid\Column|Collection qualifications(string $label = null)
     * @method Grid\Column|Collection realname(string $label = null)
     * @method Grid\Column|Collection registered_capital(string $label = null)
     * @method Grid\Column|Collection registration_authority(string $label = null)
     * @method Grid\Column|Collection reject_at(string $label = null)
     * @method Grid\Column|Collection staff_size(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection user_count(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection introduction(string $label = null)
     * @method Grid\Column|Collection mobile(string $label = null)
     * @method Grid\Column|Collection mobile_verified_at(string $label = null)
     * @method Grid\Column|Collection qq(string $label = null)
     * @method Grid\Column|Collection user_authentication_id(string $label = null)
     * @method Grid\Column|Collection user_type_id(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection user_type
     * @property Show\Field|Collection user
     * @property Show\Field|Collection news_category
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection version
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection purchase_count
     * @property Show\Field|Collection supply_count
     * @property Show\Field|Collection pid
     * @property Show\Field|Collection body
     * @property Show\Field|Collection excerpt
     * @property Show\Field|Collection last_reply_user_id
     * @property Show\Field|Collection news_category_id
     * @property Show\Field|Collection reply_count
     * @property Show\Field|Collection thumb
     * @property Show\Field|Collection view_count
     * @property Show\Field|Collection post_count
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection abilities
     * @property Show\Field|Collection last_used_at
     * @property Show\Field|Collection tokenable_id
     * @property Show\Field|Collection tokenable_type
     * @property Show\Field|Collection goods_type_id
     * @property Show\Field|Collection is_indefinitely
     * @property Show\Field|Collection validity
     * @property Show\Field|Collection is_negotiable
     * @property Show\Field|Collection price
     * @property Show\Field|Collection price_unit
     * @property Show\Field|Collection address
     * @property Show\Field|Collection approval_date
     * @property Show\Field|Collection brief
     * @property Show\Field|Collection business_scope
     * @property Show\Field|Collection company_name
     * @property Show\Field|Collection credit_code
     * @property Show\Field|Collection establish_date
     * @property Show\Field|Collection examine_at
     * @property Show\Field|Collection examine_status
     * @property Show\Field|Collection industry
     * @property Show\Field|Collection legal_representative
     * @property Show\Field|Collection logo
     * @property Show\Field|Collection qualifications
     * @property Show\Field|Collection realname
     * @property Show\Field|Collection registered_capital
     * @property Show\Field|Collection registration_authority
     * @property Show\Field|Collection reject_at
     * @property Show\Field|Collection staff_size
     * @property Show\Field|Collection status
     * @property Show\Field|Collection user_count
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection introduction
     * @property Show\Field|Collection mobile
     * @property Show\Field|Collection mobile_verified_at
     * @property Show\Field|Collection qq
     * @property Show\Field|Collection user_authentication_id
     * @property Show\Field|Collection user_type_id
     *
     * @method Show\Field|Collection user_type(string $label = null)
     * @method Show\Field|Collection user(string $label = null)
     * @method Show\Field|Collection news_category(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection purchase_count(string $label = null)
     * @method Show\Field|Collection supply_count(string $label = null)
     * @method Show\Field|Collection pid(string $label = null)
     * @method Show\Field|Collection body(string $label = null)
     * @method Show\Field|Collection excerpt(string $label = null)
     * @method Show\Field|Collection last_reply_user_id(string $label = null)
     * @method Show\Field|Collection news_category_id(string $label = null)
     * @method Show\Field|Collection reply_count(string $label = null)
     * @method Show\Field|Collection thumb(string $label = null)
     * @method Show\Field|Collection view_count(string $label = null)
     * @method Show\Field|Collection post_count(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection abilities(string $label = null)
     * @method Show\Field|Collection last_used_at(string $label = null)
     * @method Show\Field|Collection tokenable_id(string $label = null)
     * @method Show\Field|Collection tokenable_type(string $label = null)
     * @method Show\Field|Collection goods_type_id(string $label = null)
     * @method Show\Field|Collection is_indefinitely(string $label = null)
     * @method Show\Field|Collection validity(string $label = null)
     * @method Show\Field|Collection is_negotiable(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection price_unit(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection approval_date(string $label = null)
     * @method Show\Field|Collection brief(string $label = null)
     * @method Show\Field|Collection business_scope(string $label = null)
     * @method Show\Field|Collection company_name(string $label = null)
     * @method Show\Field|Collection credit_code(string $label = null)
     * @method Show\Field|Collection establish_date(string $label = null)
     * @method Show\Field|Collection examine_at(string $label = null)
     * @method Show\Field|Collection examine_status(string $label = null)
     * @method Show\Field|Collection industry(string $label = null)
     * @method Show\Field|Collection legal_representative(string $label = null)
     * @method Show\Field|Collection logo(string $label = null)
     * @method Show\Field|Collection qualifications(string $label = null)
     * @method Show\Field|Collection realname(string $label = null)
     * @method Show\Field|Collection registered_capital(string $label = null)
     * @method Show\Field|Collection registration_authority(string $label = null)
     * @method Show\Field|Collection reject_at(string $label = null)
     * @method Show\Field|Collection staff_size(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection user_count(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection introduction(string $label = null)
     * @method Show\Field|Collection mobile(string $label = null)
     * @method Show\Field|Collection mobile_verified_at(string $label = null)
     * @method Show\Field|Collection qq(string $label = null)
     * @method Show\Field|Collection user_authentication_id(string $label = null)
     * @method Show\Field|Collection user_type_id(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
