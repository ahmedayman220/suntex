<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'slider_create',
            ],
            [
                'id'    => 18,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 19,
                'title' => 'slider_show',
            ],
            [
                'id'    => 20,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 21,
                'title' => 'slider_access',
            ],
            [
                'id'    => 22,
                'title' => 'about_us_feature_create',
            ],
            [
                'id'    => 23,
                'title' => 'about_us_feature_edit',
            ],
            [
                'id'    => 24,
                'title' => 'about_us_feature_show',
            ],
            [
                'id'    => 25,
                'title' => 'about_us_feature_delete',
            ],
            [
                'id'    => 26,
                'title' => 'about_us_feature_access',
            ],
            [
                'id'    => 27,
                'title' => 'faq_create',
            ],
            [
                'id'    => 28,
                'title' => 'faq_edit',
            ],
            [
                'id'    => 29,
                'title' => 'faq_show',
            ],
            [
                'id'    => 30,
                'title' => 'faq_delete',
            ],
            [
                'id'    => 31,
                'title' => 'faq_access',
            ],
            [
                'id'    => 32,
                'title' => 'what_makes_different_create',
            ],
            [
                'id'    => 33,
                'title' => 'what_makes_different_edit',
            ],
            [
                'id'    => 34,
                'title' => 'what_makes_different_show',
            ],
            [
                'id'    => 35,
                'title' => 'what_makes_different_delete',
            ],
            [
                'id'    => 36,
                'title' => 'what_makes_different_access',
            ],
            [
                'id'    => 37,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 40,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 41,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 42,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 43,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 44,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 45,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 46,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 47,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 48,
                'title' => 'product_create',
            ],
            [
                'id'    => 49,
                'title' => 'product_edit',
            ],
            [
                'id'    => 50,
                'title' => 'product_show',
            ],
            [
                'id'    => 51,
                'title' => 'product_delete',
            ],
            [
                'id'    => 52,
                'title' => 'product_access',
            ],
            [
                'id'    => 53,
                'title' => 'subscribe_create',
            ],
            [
                'id'    => 54,
                'title' => 'subscribe_edit',
            ],
            [
                'id'    => 55,
                'title' => 'subscribe_show',
            ],
            [
                'id'    => 56,
                'title' => 'subscribe_delete',
            ],
            [
                'id'    => 57,
                'title' => 'subscribe_access',
            ],
            [
                'id'    => 58,
                'title' => 'setting_create',
            ],
            [
                'id'    => 59,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 60,
                'title' => 'setting_show',
            ],
            [
                'id'    => 61,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 62,
                'title' => 'setting_access',
            ],
            [
                'id'    => 63,
                'title' => 'section_access',
            ],
            [
                'id'    => 64,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 65,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 66,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 67,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 68,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 69,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 70,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 71,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 72,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 73,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 74,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 75,
                'title' => 'expense_create',
            ],
            [
                'id'    => 76,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 77,
                'title' => 'expense_show',
            ],
            [
                'id'    => 78,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 79,
                'title' => 'expense_access',
            ],
            [
                'id'    => 80,
                'title' => 'income_create',
            ],
            [
                'id'    => 81,
                'title' => 'income_edit',
            ],
            [
                'id'    => 82,
                'title' => 'income_show',
            ],
            [
                'id'    => 83,
                'title' => 'income_delete',
            ],
            [
                'id'    => 84,
                'title' => 'income_access',
            ],
            [
                'id'    => 85,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 86,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 87,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 88,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 89,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 90,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 91,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 92,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 93,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 94,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 95,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 96,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 97,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 98,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 99,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 100,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 101,
                'title' => 'about_us_section_create',
            ],
            [
                'id'    => 102,
                'title' => 'about_us_section_edit',
            ],
            [
                'id'    => 103,
                'title' => 'about_us_section_show',
            ],
            [
                'id'    => 104,
                'title' => 'about_us_section_delete',
            ],
            [
                'id'    => 105,
                'title' => 'about_us_section_access',
            ],
            [
                'id'    => 106,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 107,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 108,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
