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
                'title' => 'about_us_create',
            ],
            [
                'id'    => 23,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 24,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 25,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 26,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 27,
                'title' => 'about_us_feature_create',
            ],
            [
                'id'    => 28,
                'title' => 'about_us_feature_edit',
            ],
            [
                'id'    => 29,
                'title' => 'about_us_feature_show',
            ],
            [
                'id'    => 30,
                'title' => 'about_us_feature_delete',
            ],
            [
                'id'    => 31,
                'title' => 'about_us_feature_access',
            ],
            [
                'id'    => 32,
                'title' => 'faq_create',
            ],
            [
                'id'    => 33,
                'title' => 'faq_edit',
            ],
            [
                'id'    => 34,
                'title' => 'faq_show',
            ],
            [
                'id'    => 35,
                'title' => 'faq_delete',
            ],
            [
                'id'    => 36,
                'title' => 'faq_access',
            ],
            [
                'id'    => 37,
                'title' => 'what_makes_different_create',
            ],
            [
                'id'    => 38,
                'title' => 'what_makes_different_edit',
            ],
            [
                'id'    => 39,
                'title' => 'what_makes_different_show',
            ],
            [
                'id'    => 40,
                'title' => 'what_makes_different_delete',
            ],
            [
                'id'    => 41,
                'title' => 'what_makes_different_access',
            ],
            [
                'id'    => 42,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 43,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 44,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 45,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 46,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 47,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 48,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 49,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 50,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 51,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 52,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 53,
                'title' => 'product_create',
            ],
            [
                'id'    => 54,
                'title' => 'product_edit',
            ],
            [
                'id'    => 55,
                'title' => 'product_show',
            ],
            [
                'id'    => 56,
                'title' => 'product_delete',
            ],
            [
                'id'    => 57,
                'title' => 'product_access',
            ],
            [
                'id'    => 58,
                'title' => 'subscribe_create',
            ],
            [
                'id'    => 59,
                'title' => 'subscribe_edit',
            ],
            [
                'id'    => 60,
                'title' => 'subscribe_show',
            ],
            [
                'id'    => 61,
                'title' => 'subscribe_delete',
            ],
            [
                'id'    => 62,
                'title' => 'subscribe_access',
            ],
            [
                'id'    => 63,
                'title' => 'setting_create',
            ],
            [
                'id'    => 64,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 65,
                'title' => 'setting_show',
            ],
            [
                'id'    => 66,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 67,
                'title' => 'setting_access',
            ],
            [
                'id'    => 68,
                'title' => 'section_access',
            ],
            [
                'id'    => 69,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 70,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 71,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 72,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 73,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 74,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 75,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 76,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 77,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 78,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 79,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 80,
                'title' => 'expense_create',
            ],
            [
                'id'    => 81,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 82,
                'title' => 'expense_show',
            ],
            [
                'id'    => 83,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 84,
                'title' => 'expense_access',
            ],
            [
                'id'    => 85,
                'title' => 'income_create',
            ],
            [
                'id'    => 86,
                'title' => 'income_edit',
            ],
            [
                'id'    => 87,
                'title' => 'income_show',
            ],
            [
                'id'    => 88,
                'title' => 'income_delete',
            ],
            [
                'id'    => 89,
                'title' => 'income_access',
            ],
            [
                'id'    => 90,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 91,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 92,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 93,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 94,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 95,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 96,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 97,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 98,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 99,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 100,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 101,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 102,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 103,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 104,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 105,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 106,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}