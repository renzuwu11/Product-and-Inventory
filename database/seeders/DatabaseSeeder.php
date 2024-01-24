<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //seeding real data employees
        $employeesData = [
        [
            'EmpFirstName' => 'Julianne Dominique',
            'EmpLastName' => 'Torres',
            'EmpMiddleName' => 'Jose',
            'EmpEmail' => 'shanejain00@gmail.com',
            'password' => 'sitaw',
            'EmpContactNumber' => '09304538602',
            'EmpImage' => 'imageUrl("Torres.png")',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'EmpFirstName' => 'Kimberly Mae',
            'EmpLastName' => 'Kho',
            'EmpMiddleName' => 'Maglaque',
            'EmpEmail' => 'kimlykho27@gmail.com',
            'password' => 'kiwie', 
            'EmpContactNumber' => '09205119555',
            'EmpImage' => 'imageUrl("Kho.png")',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'EmpFirstName' => 'Renz Paul',
            'EmpLastName' => 'Fababeir',
            'EmpMiddleName' => 'Tolosa',
            'EmpEmail' => 'renzpaul.fababeir01@gmail.com',
            'password' => 'passuwu', 
            'EmpContactNumber' => '09686893132',
            'EmpImage' => 'imageUrl("Fababeir.png")',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'EmpFirstName' => 'John Loyd',
            'EmpLastName' => 'Cabral',
            'EmpMiddleName' => 'Caritativo',
            'EmpEmail' => 'jonhloydcabral@gmail.com',
            'password' => 'rockoto',
            'EmpContactNumber' => '09995131324',
            'EmpImage' => 'imageUrl("Cabral.png")',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];
        foreach ($employeesData as $employeeData)
        {
            \App\Models\Employee::create($employeeData);
        }

        //seeding real category data
        $categoriesData = [
            [
                'CategoryName' => 'Ring'
            ],
            [
                'CategoryName' => 'Necklace'
            ],
            [
                'CategoryName' => 'Bracelet'
            ],
            [
                'CategoryName' => 'Sets'
            ],
        ];
        foreach ($categoriesData as $categoryData){
            \App\Models\Category::create($categoryData);
        }

        //seeding real products data
        $productsData = [
            //rings 
            [
                'CategoryID' => 1,
                'ProdName' => 'Terra Annulus',
                'ProdDescription' => 'A testament to the union of earth\'s treasures and masterful craftsmanship. ' .
                'It is a celebration of the earth\'s beauty and the pinnacle of refined elegance. ' .
                'Whether worn as a symbol of love, a connection to nature, or as a statement of ' .
                'individual style, Terra Annulus is meticulously finished to perfection, with every ' .
                'detail attended to with the utmost care.',
                'ProdMaterial' => 'AAA+ Clarity Octagon Cut 5 carat Emerald with 14kt Solid Gold Ring Band',
                'ProdWeight' => '3.8 grams',
                'ProdSize' => '14 mm',
                'UnitPrice' => 100000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Terra_Annulus.jpg',
                'CreatedBy' => 1,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 1,
                'ProdName' => 'Caelum Annulus',
                'ProdDescription' => 'More than just a ring; it\'s a celestial adornment that transcends the ordinary, ' .
                'symbolizing the eternal beauty of the night sky. The sapphire is securely cradled within a meticulously ' . 
                'crafted square setting, showcasing the jeweler\'s commitment to precision and detail.',
                'ProdMaterial' => '14kt Solid Gold, AAA+ Clarity Royal Blue Square Cut Sapphire',
                'ProdWeight' => '2.8 grams',
                'ProdSize' => '14 mm',
                'UnitPrice' => 80000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Caelum_Annulus.jpg',
                'CreatedBy' => 1,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 1,
                'ProdName' => 'Luna Annulus',
                'ProdDescription' => 'Luna Annulus is meticulously crafted from the finest 14-karat solid white gold, ' .
                'providing a sleek and modern foundation for the celestial design. It is a celestial marvel that ' .
                'graces the hand with ethereal elegance. Luna Annulus captivates with its celestial inspiration, ' .
                'blending luxurious materials to create a ring that transcends traditional beauty. ',
                'ProdMaterial' => '14kt Solid White Gold, 5 karat Moon-Shaped Cut AAA+ Quality Blue Jade.',
                'ProdWeight' => '3.8 grams',
                'ProdSize' => '14 mm',
                'UnitPrice' => 89000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Luna_Annulus.jpg',
                'CreatedBy' => 1,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 1,
                'ProdName' => 'Sol Annulus',
                'ProdDescription' => 'Sol Annulus is a luminous masterpiece that celebrates the majesty of the sun. ' .
                'This high-end jewelry piece is an 18kt Solid Gold Ring adorned with an Intricate Sun Symbol Face. ' .
                'Sol Annulus captures the essence of celestial radiance, creating a luxurious and symbolic accessory ' .
                'that seamlessly fuses opulence with celestial inspiration. ',
                'ProdMaterial' => '18kt Solid Gold',
                'ProdWeight' => '3.6 grams',
                'ProdSize' => '14 mm',
                'UnitPrice' => 156000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Sol_Annulus.jpg',
                'CreatedBy' => 1,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 1,
                'ProdName' => 'Noctis Annulus',
                'ProdDescription' => 'Noctis Annulus, a celestial marvel that brings together the beauty of night ' .
                'with the sophistication of high-end jewelry. The foundation of Noctis Annulus is crafted from ' .
                'the finest 14-karat solid white gold, providing a sleek and modern backdrop for the captivating ' .
                'gemstones. The white gold complements the amethyst hues, creating a harmonious and ' .
                'sophisticated design. Noctis Annulus is more than a ring; it\'s a celestial expression of ' . 
                'refined taste and a connection to the cosmic wonders above. ',
                'ProdMaterial' => '14kt Solid White Gold, AAA+ Quality 1 carat Square-Cut Amethyst, AAA+ Quality 6 carat Round-Cut Amethyst.',
                'ProdWeight' => '4.2 grams',
                'ProdSize' => '14 mm',
                'UnitPrice' => 65000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Noctis_Annulus.jpg',
                'CreatedBy' => 1,
                'UpdatedBy' => null,
            ],

            //necklace - 2
            [
                'CategoryID' => 2,
                'ProdName' => 'Astra Monile',
                'ProdDescription' => 'A necklace with a beautifully cut Opal that takes center stage in a unique star-shaped setting, ' .
                'reflecting the celestial beauty it draws inspiration from. The opal\'s dynamic iridescence evokes a sense of mystery ' .
                'and elegance, making each necklace a one-of-a-kind masterpiece.',
                'ProdMaterial' => '14kt Solid White Gold, N8 AAA+ Clarity 20 carat Diamond Cut Opal',
                'ProdWeight' => '6.8 grams',
                'ProdSize' => '40 cm',
                'UnitPrice' => 1000000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Astra_Monile.jpg',
                'CreatedBy' => 2,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 2,
                'ProdName' => 'Caelum Monile',
                'ProdDescription' => 'A breathtaking masterpiece that transcends conventional beauty, combining geometric precision with ' .
                'celestial allure. This exquisite cut sapphire, combining geometric facets with a spherical silhouette, creates a ' .
                'unique play of light and shadow, capturing attention with its brilliance. The sapphire, carefully selected for its ' .
                'rich color and clarity, adds a celestial touch to the necklace.',
                'ProdMaterial' => '14kt Solid Gold, AAA+ Clarity Royal Blue Round Spherical Cut Sapphire',
                'ProdWeight' => '5 grams',
                'ProdSize' => '40 cm',
                'UnitPrice' => 1250000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Caelum_Monile.jpg',
                'CreatedBy' => 2,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 2,
                'ProdName' => 'Luna Monile',
                'ProdDescription' => 'Luna Monille, a luxurious embodiment of celestial grace and oceanic beauty. it boasts a pristine ' .
                '8.0-8.5mm White South Sea Pearl, renowned for its exceptional luster and radiant glow.',
                'ProdMaterial' => '8.0-8.5mm A+ Quality South Sea Pearl, 14kt Solid Gold Pendant Base, 5 karat AAA+ Quality Moon-Shaped Cut Blue Jade.',
                'ProdWeight' => '6 grams',
                'ProdSize' => '40 cm',
                'UnitPrice' => 1200000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Luna_Monile.jpg',
                'CreatedBy' => 2,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 2,
                'ProdName' => 'Sol Monile',
                'ProdDescription' => 'Sol Monile is more than a necklace; it\'s a radiant homage to the sun\'s brilliance and the artistry ' .
                'of fine jewelry. Sol Monile is designed to be versatile, making it suitable for various occasions. Whether worn as ' .
                'a standalone statement piece or layered with other fine jewelry, this necklace effortlessly transitions from daytime ' .
                'chic to evening sophistication, adding a touch of celestial allure to any ensemble, creating a luxurious and symbolic ' .
                'accessory that seamlessly merges opulence with celestial inspiration.',
                'ProdMaterial' => '18kt Solid Gold',
                'ProdWeight' => '3.6 grams',
                'ProdSize' => '40 cm',
                'UnitPrice' => 900000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Sol_Monile.jpg',
                'CreatedBy' => 2,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 2,
                'ProdName' => 'Noctis Monile',
                'ProdDescription' => 'Noctis Monile invites you to embrace the enchantment of the night sky with its timeless ' .
                'elegance and celestial grace. Whether chosen as a symbol of sophistication or worn as a cherished adornment, ' .
                'this necklace is a testament to the enduring allure of South Sea Pearls and the artistry of fine jewelry.',
                'ProdMaterial' => ': 7.0-7.5mm A+ Grade Quality South Sea Pearl, 14kt Solid White Gold',
                'ProdWeight' => '2.5 grams',
                'ProdSize' => '40 cm',
                'UnitPrice' => 850000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Noctis_Monile.jpg',
                'CreatedBy' => 2,
                'UpdatedBy' => null,
            ],

            //bracelet - 3
            [
                'CategoryID' => 3,
                'ProdName' => 'Astra Armilla',
                'ProdDescription' => 'It\'s an embodiment of celestial beauty, luxury, and timeless allure. A mesmerizing masterpiece ' .
                'that transcends the boundaries of elegance and sophistication. This high-end luxury jewelry piece is a radiant 14kt ' .
                'Solid gold bracelet encrusted with diamonds, meticulously crafted to grace your wrist with unparalleled opulence.',
                'ProdMaterial' => '14kt Solid Gold, 0.5 carat diamond (per chain)',
                'ProdWeight' => '3.5 grams',
                'ProdSize' => '5.5 cm',
                'UnitPrice' => 500000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Astra_Armilla.jpg',
                'CreatedBy' => 3,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 3,
                'ProdName' => 'Caelum Armilla',
                'ProdDescription' => 'Caelum Armilla is more than just a bracelet; it\'s a celestial adornment that elevates the ' .
                'wearer\'s style with grace and luxury. Whether worn as a standalone statement piece or layered with other fine ' .
                'jewelry, this 18 carat Solid Gold Dual Chain Bracelet is a symbol of refined taste, sophistication, and a ' .
                'timeless connection to the heavens.',
                'ProdMaterial' => '18kt Solid Gold',
                'ProdWeight' => '6 grams',
                'ProdSize' => '5.5 cm',
                'UnitPrice' => 180000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Caelum_Armilla.jpg',
                'CreatedBy' => 3,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 3,
                'ProdName' => 'Luna Armilla',
                'ProdDescription' => 'Luna Armilla is expertly fashioned from the finest 14-karat solid gold, forming a triple ' .
                'square chain that radiates warmth and luxury. It is a dazzling testament to lunar elegance and celestial allure ' .
                'with each square link of the triple chain is adorned with meticulously set sapphires, carefully chosen for their ' .
                'exceptional color and clarity.',
                'ProdMaterial' => '14kt Solid Gold, 1 carat AAA+ Clarity Octagon Cut Sapphire',
                'ProdWeight' => '3 grams',
                'ProdSize' => '5.5 cm',
                'UnitPrice' => 550000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Luna_Armilla.jpg',
                'CreatedBy' => 3,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 3,
                'ProdName' => 'Sol Armilla',
                'ProdDescription' => 'Sol Armilla, a radiant masterpiece that celebrates the union of celestial elements. Adorned ' .
                'with an ethereal Moon-Shaped Cut Blue Jade. Sol Armilla\'s pendant is an intricate representation of the sun symbol, ' .
                'meticulously etched and designed to evoke the warmth and brilliance of the celestial body. The sun symbol embodies ' .
                'vitality, energy, and life, and captures the harmonious dance between the sun and moon, blending opulence with ' .
                'celestial inspiration.',
                'ProdMaterial' => '14kt Solid White Gold, 18kt Solid Gold, 5 karat Moon-Shaped Cut AAA+ Quality Blue Jade.',
                'ProdWeight' => '6 grams',
                'ProdSize' => '5.5 cm',
                'UnitPrice' => 760000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Sol_Armilla.jpg',
                'CreatedBy' => 3,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 3,
                'ProdName' => 'Noctis Armilla',
                'ProdDescription' => 'Noctus Armilla is a nocturnal masterpiece that combines elegance and mystique in a high-end ' .
                'jewelry creation. The combination of the Square-Cut Amethyst, South Sea Pearls, and the Royal Blue Octagon ' .
                'Cut Sapphire creates a bracelet that seamlessly blends timeless elegance with a contemporary edge. Noctis Armilla ' .
                'effortlessly transitions from day to night, making it a versatile and captivating accessory for any occasion. ' .
                'Noctis Armilla is more than a bracelet; it\'s a wearable work of art that invites you to embrace the enchantment of the night.',
                'ProdMaterial' => '114kt Solid White Gold, AAA+ Quality 2 carat Square-Cut Amethyst, 5.0-5.5mm A+ Grade Quality South Sea Pearl, AAA+ Quality  6 carat Royal Blue Octagon Cut Sapphire',
                'ProdWeight' => '17 grams',
                'ProdSize' => '5.5 cm',
                'UnitPrice' => 2000000.00,
                'ProdDiscount' => null,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Noctis_Armilla.jpg',
                'CreatedBy' => 3,
                'UpdatedBy' => null,
            ],

            //sets - 4
            [
                'CategoryID' => 4,
                'ProdName' => 'Earth and Stars Package Set',
                'ProdDescription' => 'A complete accessory set with matching motifs for the earth and the stars that sparkle around it. ' .
                'Let the Iridescent jewels shimmer around your neck and hands like the beautiful night sky.',
                'ProdMaterial' => '14kt Solid Gold, 0.5 carat diamond (per chain), 14kt Solid White Gold, N8 AAA+ Clarity 20 carat Diamond Cut Opal, AAA+ Clarity Octagon Cut 5 carat Emerald with 14kt Solid Gold Ring Band',
                'ProdWeight' => '3.8 grams, 6.8 grams, 3.5 grams',
                'ProdSize' => '14 mm, 40 cm, 5.5 cm',
                'UnitPrice' => 1600000.00,
                'ProdDiscount' => 10,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Earth_and_Stars_Package_Set.jpg',
                'CreatedBy' => 4,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 4,
                'ProdName' => 'Sunkissed sky Package Set',
                'ProdDescription' => 'The "Midnight Sky" set creates a celestial symphony of sophistication and refined taste. ' .
                'Each piece harmonizes with the others, offering a complete ensemble that transcends ordinary accessories. ' .
                'Whether worn individually to make a subtle statement or together for a captivating celestial presence, the ' .
                '"Midnight Sky" set is a testament to the enduring allure of the night sky translated into wearable art. Indulge ' .
                'in the luxury of celestial elegance with this captivating jewelry set.',
                'ProdMaterial' => '18kt Solid Gold, 14kt Solid Gold, AAA+ Clarity Royal Blue Round Spherical Cut Sapphire, AAA+ Clarity Royal Blue Square Cut Sapphire',
                'ProdWeight' => '2.8 grams, 5 grams, 6 grams',
                'ProdSize' => '14 mm, 40 cm, 5.5 cm',
                'UnitPrice' => 1510000.00,
                'ProdDiscount' => 10,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Sunkissed_sky_Package_Set.jpg',
                'CreatedBy' => 4,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 4,
                'ProdName' => 'Iridescent Moon Package Sets',
                'ProdDescription' => 'Together, Luna Annulus, Luna Monile, and Luna Armilla create the Iridescent Moon Package Set – ' .
                'a celestial symphony of elegance, sophistication, and celestial allure. Whether worn individually to make a subtle ' .
                'statement or together for a captivating celestial presence, this high-end jewelry set is a testament to the enduring ' .
                'beauty found in the iridescence of the moon and the opulence of the night sky. Indulge in the luxury of celestial ' .
                'elegance with this captivating jewelry ensemble',
                'ProdMaterial' => '14kt Solid Gold, 1 carat AAA+ Clarity Octagon Cut Sapphire, 8.0-8.5mm A+ Quality South Sea Pearl, 5 karat AAA+ Quality Moon-Shaped Cut Blue Jade, 14kt Solid White Gold.',
                'ProdWeight' => '3.8 grams, 6 grams, 3 grams',
                'ProdSize' => '14 mm, 40 cm, 5.5 cm',
                'UnitPrice' => 1839000.00,
                'ProdDiscount' => 10,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Iridescent_Moon_Package_Sets.jpg',
                'CreatedBy' => 4,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 4,
                'ProdName' => 'Incandescent Sun Package Set',
                'ProdDescription' => 'Together, Sol Annulus, Sol Monile, and Sol Armilla form the Incandescent Sun Package Set – a ' .
                'dazzling ensemble that captures the brilliance of the sun in a luxurious symphony of high-end accessories and a ' .
                'luminous symphony of celestial elegance and opulence. Whether worn individually to make a subtle statement or ' .
                'together for a captivating celestial presence, this high-end jewelry set is a testament to the enduring beauty ' .
                'of the sun and the sophistication of fine craftsmanship. ',
                'ProdMaterial' => '18kt Solid Gold, 14kt Solid White Gold, 5 karat Moon-Shaped Cut AAA+ Quality Blue Jade.',
                'ProdWeight' => '3.6 grams, 3.6 grams, 6 grams',
                'ProdSize' => '14 mm, 40 cm, 5.5 cm',
                'UnitPrice' => 1816000.00,
                'ProdDiscount' => 10,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Incandescent_Sun_Package_Set.jpg',
                'CreatedBy' => 4,
                'UpdatedBy' => null,
            ],
            [
                'CategoryID' => 4,
                'ProdName' => 'Moonlit Night Package Set',
                'ProdDescription' => 'Together, Noctis Annulus, Noctis Monile, and Noctis Armilla form the Moonlit Night Package Set – ' .
                'a celestial symphony of elegance, sophistication, and opulence. Whether worn individually to make a subtle statement ' .
                'or together for a captivating celestial presence, an enchanting trio of high-end jewelry accessories that captures the ' .
                'mystique and elegance of a moonlit night. Indulge in the luxury of nocturnal elegance with this captivating jewelry ensemble.',
                'ProdMaterial' => '14kt Solid White Gold, AAA+ Quality 2 carat Square-Cut Amethyst, 5.0-5.5mm A+ Grade Quality South Sea Pearl, AAA+ Quality  6 carat Royal Blue Octagon Cut Sapphire, 7.0-7.5mm A+ Grade Quality South Sea Pearl, AAA+ Quality 1 carat Square-Cut Amethyst, AAA+ Quality 6 carat Round-Cut Amethyst.',
                'ProdWeight' => '4.2 grams, 2.5 grams, 17 grams',
                'ProdSize' => '14 mm, 40 cm, 5.5 cm',
                'UnitPrice' => 2915000.00,
                'ProdDiscount' => 10,
                'Stock' => 5,
                'ProdImage' => 'assets/img/products/Moonlit_Night_Package_Set.jpg',
                'CreatedBy' => 4,
                'UpdatedBy' => null,
            ],
            
        ];
        foreach ($productsData as $productData) {
            \App\Models\Product::create($productData);
        }
    }
}