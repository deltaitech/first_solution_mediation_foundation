<?php
return [
    "roles" => [
        "roles" => ["read", "create", "update", "delete"],
        "admins" => ["read", "create", "update", "delete", "updateProfile"],
        "sliders" => ["read", "create", "update", "delete"],
        "services" => ["read", "create", "update", "delete"],
//        "partners" => ["read", "create", "update", "delete"],
        "features" => ["read", "update", "delete"],
        "pages" => ["read", "update"],
        "contacts" => ["read", "create", "update", "delete"],
        "settings" => ["read", "update"],
        "contact_us" => ["read", "delete", "reply"],
        "contact_requests"   => ["read", "delete", "reply"],
        "consultation_requests" => ["read", "delete", "reply"],
    ],
];
