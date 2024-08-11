<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $products = [
            [
                "name" => "Omnia Amethyste",
                "image" => "https://cdn.shopify.com/s/files/1/0910/0818/products/Bvlgari-Omnia-Amethyste-Women-Eau-de-Toilette-Spray-2.2-Best-Price-Fragrance-Parfume-FragranceOutlet.com-Main_1024x1024.jpg?v=1595431233",
                "description" => "Omnia Amethyste by Bvlgari is a women's fragrance that blends floral and woody notes, creating a scent profile inspired by the delicate and luminous qualities of the amethyst gemstone.",
            ],
            [
                "name" => "Omnia Amethyste",
                "image" => "https://cdn.shopify.com/s/files/1/0910/0818/products/Bvlgari-Omnia-Amethyste-Women-Eau-de-Toilette-Spray-2.2-Best-Price-Fragrance-Parfume-FragranceOutlet.com-Main_1024x1024.jpg?v=1595431233",
                "description" => "Omnia Amethyste by Bvlgari is a women's fragrance that blends floral and woody notes, creating a scent profile inspired by the delicate and luminous qualities of the amethyst gemstone.",
            ],
            [
                "name" => "Omnia Amethyste",
                "image" => "https://cdn.shopify.com/s/files/1/0910/0818/products/Bvlgari-Omnia-Amethyste-Women-Eau-de-Toilette-Spray-2.2-Best-Price-Fragrance-Parfume-FragranceOutlet.com-Main_1024x1024.jpg?v=1595431233",
                "description" => "Omnia Amethyste by Bvlgari is a women's fragrance that blends floral and woody notes, creating a scent profile inspired by the delicate and luminous qualities of the amethyst gemstone.",
            ],
            [
                "name" => "Omnia Amethyste",
                "image" => "https://cdn.shopify.com/s/files/1/0910/0818/products/Bvlgari-Omnia-Amethyste-Women-Eau-de-Toilette-Spray-2.2-Best-Price-Fragrance-Parfume-FragranceOutlet.com-Main_1024x1024.jpg?v=1595431233",
                "description" => "Omnia Amethyste by Bvlgari is a women's fragrance that blends floral and woody notes, creating a scent profile inspired by the delicate and luminous qualities of the amethyst gemstone.",
            ],
            ];
        return view('/dashboard')->with("products", json_encode($products));
    }
}
