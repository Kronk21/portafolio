<?php

namespace App\Models;

class Project
{
    public static function all()
    {
        return [
            [
                "id" => "tapai-coworking",
                "name" => "Tapai Coworking",
                "description" => "Full website design and build for a concept team collaboration platform. This website also includes a beautiful blog. I have built the website and the blog in Webflow which has one of the best CMS for blog hosting.",
                "tags" => [
                    "Desarrollo Web",
                    "Diseño Web",
                ],
                "link" => "https://grupotapai.com/
",

            ],
            [
                "id" => "come-y-calla",
                "name" => "Come y Calla",
                "description" => "Full website design and build for a concept team collaboration platform. This website also includes a beautiful blog. I have built the website and the blog in Webflow which has one of the best CMS for blog hosting.",
                "tags" => [
                    "Diseño Web",
                    "Concepto",
                ],
                "link" => "https://www.figma.com/proto/uTjCOFJlVSyZjAm4GxXJFf/Come-y-Calla?page-id=3999%3A725&node-id=3999%3A726
",
            ],
            [
                "id" => "clasificador-distancia",
                "name" => "Clasificador de Distancia Minima",
                "description" => "Full website design and build for a concept team collaboration platform. This website also includes a beautiful blog. I have built the website and the blog in Webflow which has one of the best CMS for blog hosting.",
                "tags" => [
                    "Desarrollo Web",
                    "Diseño Web",
                    "Algoritmos",
                ],

                "link" => "https://nimble-dodol-58747f.netlify.app/
",
            ],
            [
                "id" => "upss-wireless",
                "name" => "UPSS Wireless",
                "description" => "Full website design and build for a concept team collaboration platform. This website also includes a beautiful blog. I have built the website and the blog in Webflow which has one of the best CMS for blog hosting.",
                "tags" => [
                    "Desarrollo Web",
                    "Diseño Web",
                    "E-Commerce",
                    "Bases de Datos",
                ],
                "link" => "https://github.com/Kronk21/UPSS-Wireless
",
            ],
        ];
    }

    public static function find($id)
    {
        $projects = self::all();

        foreach ($projects as $project) {
            if ($project["id"] == $id) {
                return $project;
            }
        }
    }
}
