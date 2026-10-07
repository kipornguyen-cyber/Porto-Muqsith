<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Portofolio',
                'password' => bcrypt('password123'),
            ]
        );

        // Seed Skills
        $skills = [
            ['name' => 'Laravel / PHP', 'category' => 'Web Dev', 'proficiency' => 92, 'icon' => 'devicon-laravel-plain colored'],
            ['name' => 'Tailwind CSS', 'category' => 'Web Dev', 'proficiency' => 90, 'icon' => 'devicon-tailwindcss-plain colored'],
            ['name' => 'Vue.js / React', 'category' => 'Web Dev', 'proficiency' => 85, 'icon' => 'devicon-vuejs-plain colored'],
            ['name' => 'MySQL / PostgreSQL', 'category' => 'Web Dev', 'proficiency' => 88, 'icon' => 'devicon-mysql-plain colored'],
            ['name' => 'Figma Design', 'category' => 'UI/UX', 'proficiency' => 88, 'icon' => 'devicon-figma-plain colored'],
            ['name' => 'Design System & Wireframing', 'category' => 'UI/UX', 'proficiency' => 84, 'icon' => 'fas fa-drafting-compass'],
            ['name' => 'User Research & Prototyping', 'category' => 'UI/UX', 'proficiency' => 80, 'icon' => 'fas fa-users-viewfinder'],
            ['name' => 'Python / PyTorch', 'category' => 'Machine Learning', 'proficiency' => 82, 'icon' => 'devicon-python-plain colored'],
            ['name' => 'Scikit-Learn & Computer Vision', 'category' => 'Machine Learning', 'proficiency' => 78, 'icon' => 'fas fa-brain'],
            ['name' => 'NLP & Data Analysis', 'category' => 'Machine Learning', 'proficiency' => 80, 'icon' => 'fas fa-chart-line'],
            ['name' => 'Docker & CI/CD', 'category' => 'Cloud/DevOps', 'proficiency' => 75, 'icon' => 'devicon-docker-plain colored'],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(
                ['name' => $skill['name']],
                $skill
            );
        }

        // Seed Projects
        $projects = [
            [
                'title' => 'Sistem Informasi Manajemen Portofolio & CMS',
                'slug' => 'sistem-informasi-manajemen-portofolio-cms',
                'category' => 'Web Dev',
                'description' => 'Aplikasi web portofolio personal interaktif dilengkapi dashboard manajemen konten (CMS) berbasis Laravel 11 dan Tailwind CSS.',
                'full_description' => 'Proyek ini dibangun untuk menyajikan profil profesional secara elegan dan responsif. Dilengkapi fitur manajemen proyek, keahlian, serta pengelolaan pesan masuk dari pengunjung website.',
                'technologies' => ['Laravel 11', 'Tailwind CSS', 'Alpine.js', 'MySQL'],
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
                'github_url' => 'https://github.com/example/laravel-portfolio',
                'demo_url' => 'https://demo-portfolio.example.com',
                'is_featured' => true,
            ],
            [
                'title' => 'E-Commerce Platform & Payment Gateway Integration',
                'slug' => 'e-commerce-platform-payment-gateway-integration',
                'category' => 'Web Dev',
                'description' => 'Platform toko online modern dengan integrasi Midtrans Payment Gateway, keranjang belanja real-time, dan manajemen stok produk.',
                'full_description' => 'Platform e-commerce lengkap yang mendukung transaksi pembayaran otomatis, kalkulasi ongkos kirim RajaOngkir, serta pengiriman notifikasi email transaksi.',
                'technologies' => ['Laravel', 'Vue.js', 'Midtrans API', 'Tailwind CSS'],
                'image' => 'https://images.unsplash.com/photo-1556742049-0a67daf64f42?auto=format&fit=crop&w=800&q=80',
                'github_url' => 'https://github.com/example/laravel-ecommerce',
                'demo_url' => 'https://demo-shop.example.com',
                'is_featured' => true,
            ],
            [
                'title' => 'Redesign Mobile Banking App UI/UX',
                'slug' => 'redesign-mobile-banking-app-ui-ux',
                'category' => 'UI/UX',
                'description' => 'Studi kasus perancangan ulang antarmuka aplikasi perbankan seluler untuk meningkatkan kepuasan pengguna dan aksesibilitas.',
                'full_description' => 'Proses riset pengguna, wireframing, pembentukan design system, hingga pembuatan mikro-interaksi prototipe interaktif menggunakan Figma.',
                'technologies' => ['Figma', 'Prototyping', 'User Research', 'Design System'],
                'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=800&q=80',
                'github_url' => null,
                'demo_url' => 'https://figma.com/file/example-ui-ux',
                'is_featured' => true,
            ],
            [
                'title' => 'Klasifikasi Penyakit Tanaman dengan Convolutional Neural Network',
                'slug' => 'klasifikasi-penyakit-tanaman-cnn',
                'category' => 'Machine Learning',
                'description' => 'Model Visi Komputer (Computer Vision) berbasis CNN untuk mendeteksi penyakit daun tanaman secara otomatis dengan akurasi 96.4%.',
                'full_description' => 'Model Machine Learning yang dilatih menggunakan TensorFlow/PyTorch dan disajikan dalam bentuk REST API Flask/FastAPI untuk dikonsumsi oleh aplikasi web dan mobile.',
                'technologies' => ['Python', 'TensorFlow', 'PyTorch', 'FastAPI', 'OpenCV'],
                'image' => 'https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?auto=format&fit=crop&w=800&q=80',
                'github_url' => 'https://github.com/example/plant-disease-cnn',
                'demo_url' => 'https://huggingface.co/spaces/example/plant-disease',
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $proj) {
            Project::updateOrCreate(
                ['slug' => $proj['slug']],
                $proj
            );
        }
    }
}
