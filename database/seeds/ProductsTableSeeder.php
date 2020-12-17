<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Tee shirt long sleeves',
            'slug' => 'teeslongsleeves',
            'description' => 'Un tee-shirt (aussi orthographié T-shirt ou, en orthographe rectifiée, teeshirt sans trait d\'union; parfois appelé gilet à manches courtes au Canada francophone et tricot en Afrique francophone ou gaminet, ce dernier terme étant d\'usage plus restreint), est un maillot de corps qui doit son nom à sa forme en « T », sans col et initialement à manches courtes mais éventuellement à manches longues, à capuche ou à col roulé.',
            'price' => 35,
            'image_url' => 'https://i.ibb.co/BK8nqt0/longsleeve3.jpg',
            'images_url' => json_encode(['https://i.ibb.co/Wz44DWM/loongsleeve2.jpg','https://i.ibb.co/qrTWgnr/longsleeve1.jpg'])
        ]);
        Product::create([
            'name' => 'Basic tee shirt',
            'slug' => 'basictees',
            'description' => 'Un tee-shirt (aussi orthographié T-shirt ou, en orthographe rectifiée, teeshirt sans trait d\'union; parfois appelé gilet à manches courtes au Canada francophone et tricot en Afrique francophone ou gaminet, ce dernier terme étant d\'usage plus restreint), est un maillot de corps qui doit son nom à sa forme en « T », sans col et initialement à manches courtes mais éventuellement à manches longues, à capuche ou à col roulé.',
            'price' => 30,
            'image_url' => 'https://i.ibb.co/nQ8C3x5/tees1.jpg',
            'images_url' => json_encode(['https://i.ibb.co/nQ8C3x5/tees1.jpg', 'https://i.ibb.co/ysNcxBm/tees2.jpg'])
        ]);
        Product::create([
            'name' => 'Hoodie',
            'slug' => 'hoodie',
            'description' => 'Un pull-over (de l\'anglais to pull over, tirer par-dessus [la tête]), un chandail ou encore un tricot, est un vêtement tricoté qui couvre les épaules, le dos, le torse et surtout les bras (sinon, il s\'agit d\'un débardeur). Il est généralement en laine, parfois en d\'autres fibres textiles. Les manches sont longues et il s\'enfile par la tête, d\'où son nom.  L\'encolure est l\'ouverture pratiquée pour passer la tête. Sa forme peut varier selon des règles à la fois esthétiques et pratiques. Différentes formes existent : col ras-du-cou, encolure ronde, encolure en V, col bateau, col cheminée, col roulé, col boule, col Claudine, col rabattu.',
            'price' => 45,
            'image_url' => 'https://i.ibb.co/KW8RQ17/hoodie1.jpg',
            'images_url' => json_encode(['https://i.ibb.co/D5Zf7Y2/hoodie2.jpg', 'https://i.ibb.co/QfGmxsM/hoodie3.jpg'])
        ]);
    }
}
