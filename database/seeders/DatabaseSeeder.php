<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Desactivar restricciones de clave foránea para limpiar tablas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product::truncate();
        Category::truncate();
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Admin
        User::create([
            'name'     => 'Administrador',
            'email'    => 'admin@paladinsucre.com',
            'password' => Hash::make('password123'),
            'role'     => 'admin',
            'phone'    => '+591 70000000',
            'address'  => 'Calle Bolívar #456, Sucre, Bolivia',
        ]);

        // Cliente de prueba
        User::create([
            'name'     => 'Cliente Prueba',
            'email'    => 'cliente@test.com',
            'password' => Hash::make('password123'),
            'role'     => 'client',
            'phone'    => '+591 71111111',
            'address'  => 'Av. Hernando Siles #123, Sucre',
        ]);

        // Categorías basadas en el catálogo oficial
        $jamones = Category::create([
            'name' => 'Jamones',
            'description' => 'Tradición y arte culinario combinados en jamones tiernos y deliciosos.',
            'is_active' => true
        ]);

        $ahumados = Category::create([
            'name' => 'Ahumados',
            'description' => 'Embutidos ahumados minuciosamente con procesos tradicionales que resaltan sabor y aroma.',
            'is_active' => true
        ]);

        $mortadelas = Category::create([
            'name' => 'Mortadelas',
            'description' => 'Elaboradas con carnes de primera, ideales para sándwiches y picadas con texturas suaves.',
            'is_active' => true
        ]);

        $salchichas = Category::create([
            'name' => 'Salchichas',
            'description' => 'Una explosión de sabores auténticos con ingredientes seleccionados minuciosamente.',
            'is_active' => true
        ]);

        $chorizos = Category::create([
            'name' => 'Chorizos',
            'description' => 'Elaborados con carnes picadas de cerdo y res seleccionadas y una mezcla secreta de condimentos.',
            'is_active' => true
        ]);

        $pates = Category::create([
            'name' => 'Pates',
            'description' => 'Pasta de hígado cremosa y suave, cocida a fuego lento con la receta tradicional.',
            'is_active' => true
        ]);

        $megusta = Category::create([
            'name' => 'Línea Me Gusta',
            'description' => 'Productos seleccionados manteniendo la deliciosa esencia artesanal a un precio conveniente.',
            'is_active' => true
        ]);

        // --- PRODUCTOS ---

        // Jamones
        Product::create([
            'category_id' => $jamones->id,
            'name'        => 'Jamón Cocido (Empaque)',
            'description' => 'Elaborado con carne seleccionada de pierna de cerdo, sal y aditivos autorizados. Destinado para consumo directo. Sellado al vacío.',
            'price'       => 30.00,
            'weight'      => '500g',
            'stock'       => 50,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $jamones->id,
            'name'        => 'Enrollado de Cerdo',
            'description' => 'Tradicional enrollado elaborado con carne seleccionada de pierna de cerdo y sal. Empaque sellado al vacío.',
            'price'       => 35.00,
            'weight'      => '500g',
            'stock'       => 45,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $jamones->id,
            'name'        => 'Jamón de Pollo (Empaque)',
            'description' => 'Elaborado con pechuga de pollo seleccionada. Un jamón ligero, suave y de excelente sabor. Sellado al vacío.',
            'price'       => 32.00,
            'weight'      => '500g',
            'stock'       => 40,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        // Ahumados
        Product::create([
            'category_id' => $ahumados->id,
            'name'        => 'Lomo Ahumado (Empaque)',
            'description' => 'Elaborado con carne seleccionada de lomo de cerdo. Atado a mano tipo artesanal con ahumado natural.',
            'price'       => 45.00,
            'weight'      => '500g',
            'stock'       => 35,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $ahumados->id,
            'name'        => 'Salame tipo Milano',
            'description' => 'Salame elaborado con carnes seleccionadas de cerdo y res. Ahumado natural premium, listo para servir.',
            'price'       => 30.00,
            'weight'      => '250g',
            'stock'       => 60,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $ahumados->id,
            'name'        => 'Costilla Ahumada (Porción)',
            'description' => 'Carne de cerdo seleccionada de costilla con un proceso de ahumado natural. Deliciosa para guisos o a la parrilla.',
            'price'       => 58.00,
            'weight'      => '1kg',
            'stock'       => 30,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $ahumados->id,
            'name'        => 'Tocino Ahumado (Empaque)',
            'description' => 'Panceta de cerdo seleccionada con un proceso de ahumado natural. Ideal para sazonar tus comidas favoritas.',
            'price'       => 38.00,
            'weight'      => '500g',
            'stock'       => 50,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        // Mortadelas
        Product::create([
            'category_id' => $mortadelas->id,
            'name'        => 'Mortadela Jamonada',
            'description' => 'Deliciosa mortadela elaborada con carne de cerdo y res seleccionadas, con trozos de jamón añadidos.',
            'price'       => 24.00,
            'weight'      => '500g',
            'stock'       => 40,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $mortadelas->id,
            'name'        => 'Mortadela Fiambre Criollo',
            'description' => 'Mortadela seleccionada de cerdo y res con adición de trozos de locoto para un toque criollo especial.',
            'price'       => 26.00,
            'weight'      => '500g',
            'stock'       => 35,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $mortadelas->id,
            'name'        => 'Queso de Cerdo (Empaque)',
            'description' => 'Tradicional queso de cerdo elaborado con carne y cuerillo de cerdo seleccionados y aditivos autorizados.',
            'price'       => 25.00,
            'weight'      => '500g',
            'stock'       => 40,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        // Salchichas
        Product::create([
            'category_id' => $salchichas->id,
            'name'        => 'Salchicha Viena',
            'description' => 'Salchicha clásica elaborada con carne de cerdo y res, envasada en tripa natural seleccionada.',
            'price'       => 25.00,
            'weight'      => '500g',
            'stock'       => 70,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $salchichas->id,
            'name'        => 'Salchicha Super Viena',
            'description' => 'Salchichas más grandes elaboradas con carnes seleccionadas de cerdo y res en tripa natural.',
            'price'       => 28.00,
            'weight'      => '500g',
            'stock'       => 50,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $salchichas->id,
            'name'        => 'Salchicha Peperone',
            'description' => 'Exquisita salchicha condimentada con trozos de locoto, ideal para los amantes del sabor picante y parrillero.',
            'price'       => 28.00,
            'weight'      => '500g',
            'stock'       => 45,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $salchichas->id,
            'name'        => 'Salchicha Coctelera',
            'description' => 'Mini salchichas envasadas al vacío, ideales para cócteles y piqueos familiares (disponible con y sin picante).',
            'price'       => 26.00,
            'weight'      => '500g',
            'stock'       => 55,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        // Chorizos
        Product::create([
            'category_id' => $chorizos->id,
            'name'        => 'Chorizo Español',
            'description' => 'Elaborado con carne de cerdo, res, ají colorado y tripa natural. Un clásico de sabor intenso para tu mesa.',
            'price'       => 35.00,
            'weight'      => '500g',
            'stock'       => 60,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $chorizos->id,
            'name'        => 'Chorizo Precocido',
            'description' => 'Chorizo de cerdo pre-cocinado al vapor, listo para un dorado rápido en paila, horno o sartén.',
            'price'       => 32.00,
            'weight'      => '500g',
            'stock'       => 50,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $chorizos->id,
            'name'        => 'Chorizo Chuquisaqueño',
            'description' => 'El tradicional sabor chuquisaqueño en base a carne de cerdo, ají colorado y especias de la región. Ideal para freír.',
            'price'       => 35.00,
            'weight'      => '500g',
            'stock'       => 70,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $chorizos->id,
            'name'        => 'Chorizo Parrillero',
            'description' => 'Elaborado con carne de cerdo y res, ají colorado y especias selectas. Ideal para asar a la parrilla o a la plancha.',
            'price'       => 38.00,
            'weight'      => '500g',
            'stock'       => 65,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $chorizos->id,
            'name'        => 'Chorizo Churrasquero',
            'description' => 'Elaborado con carne de cerdo y res seleccionadas y un toque sutil de condimento. Textura firme y jugosa.',
            'price'       => 36.00,
            'weight'      => '500g',
            'stock'       => 55,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $chorizos->id,
            'name'        => 'Morcilla (Empaque)',
            'description' => 'Tradicional morcilla elaborada con sangre de cerdo, carne de cerdo cocida y condimentos naturales seleccionados.',
            'price'       => 25.00,
            'weight'      => '500g',
            'stock'       => 40,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        // Pates
        Product::create([
            'category_id' => $pates->id,
            'name'        => 'Pate de Hígado de Cerdo Pequeño',
            'description' => 'Suave y cremosa pasta de hígado elaborada con carne de cerdo e hígado de pollo. Ideal para untar en galletas o panes.',
            'price'       => 15.00,
            'weight'      => '250g',
            'stock'       => 80,
            'is_active'   => true,
            'is_featured' => true,
        ]);

        Product::create([
            'category_id' => $pates->id,
            'name'        => 'Pate de Hígado de Cerdo Grande',
            'description' => 'Presentación familiar de nuestra deliciosa pasta untable de hígado. Receta tradicional de Chuquisaca.',
            'price'       => 28.00,
            'weight'      => '500g',
            'stock'       => 60,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        // Línea Me Gusta
        Product::create([
            'category_id' => $megusta->id,
            'name'        => 'Jamón Sanguchero (Me Gusta)',
            'description' => 'Jamón económico especial para sándwiches diarios. Elaborado con carne de cerdo seleccionada.',
            'price'       => 25.00,
            'weight'      => '500g',
            'stock'       => 60,
            'is_active'   => true,
            'is_featured' => false,
        ]);

        Product::create([
            'category_id' => $megusta->id,
            'name'        => 'Salchicha Viena (Me Gusta)',
            'description' => 'Salchicha económica de excelente rendimiento y sabor, elaborada con carne de cerdo y res con colorante natural.',
            'price'       => 20.00,
            'weight'      => '500g',
            'stock'       => 80,
            'is_active'   => true,
            'is_featured' => false,
        ]);
    }
}
