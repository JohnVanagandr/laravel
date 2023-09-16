<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Image;
use App\Models\Item;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * Creamos 160 Usuarios
         */
        User::factory(160)->create()->each(function (User $user) {

            /**
             * Creamos 1 perfil por usuario
             */

            Profile::factory(1)->create(
                ['user_id' => $user->id]
            );

            /**
             * Creamos 60 productos por usuario
             */

            Product::factory(60)->create(
                ['user_id' => $user->id]
            )->each(function (Product $product) {

                /**
                 * Creamos 6 imagenes por producto
                 */

                Image::factory(6)->create(
                    ['product_id' => $product->id]
                );
            });

            /**
             * Creamos 25.000 ventas
             */

            Sale::factory(250)->create(
                ['user_id' => $user->id]
            )->each(function (Sale $sale) {

                /**
                 * Creamos 12 item por venta
                 */

                // Item::factory(12)->create(
                //     ['sale_id' => $sale->id]
                // );
                
            });
        });
    }
}
