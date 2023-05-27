<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function program()
    {
        $produks = [
            [
                'title' => 'Brand Boost: Meningkatkan Kepercayaan dan Kesadaran Merek Anda',
                'img' => 'assets/images/branding-1.jpg',
                'caption' => 'Memperkuat identitas merek melalui desain',
                'category' => 'branding-3'
            ],
            [
                'title' => 'Branding Mastery: Membangun Fondasi Merek yang Solid',
                'img' => 'assets/images/branding-2.jpg',
                'caption' => 'Brand yang mencuri perhatian konsumen.',
                'category' => 'branding-3'
            ],
            [
                'title' => 'Brand Evolution: Mengubah Bisnis Anda Melalui Strategi Branding',
                'img' => 'assets/images/branding-3.jpg',
                'caption' => 'Merek yang menginspirasi dan menghubungkan.',
                'category' => 'branding-3'
            ],
            [
                'title' => 'Market Domination Accelerator',
                'img' => 'assets/images/marketing-1.jpg',
                'caption' => 'Mengalahkan kompetisi dan mendominasi pasar dengan strategi pemasaran yang inovatif.',
                'category' => 'marketing-3'
            ],
            [
                'title' => 'Digital Marketing Masterclass',
                'img' => 'assets/images/marketing-2.jpg',
                'caption' => 'Menguasai dunia pemasaran digital dengan keterampilan dan strategi yang teruji.',
                'category' => 'marketing-3'
            ],
            [
                'title' => 'Growth Hacking Blueprint',
                'img' => 'assets/images/marketing-3.jpg',
                'caption' => 'Mengguncangkan pertumbuhan bisnis Anda melalui metode pemasaran yang cerdas dan efektif',
                'category' => 'marketing-3'
            ],
            [
                'title' => 'Marketing Mavericks: Unleashing Your Business Potential',
                'img' => 'assets/images/planning-1.jpg',
                'caption' => 'Menjadi jagoan pemasaran dan mengungkap potensi bisnis Anda yang luar biasa.',
                'category' => 'planning-3'
            ],
            [
                'title' => 'Strategic Marketing Secrets: Fueling Business Success',
                'img' => 'assets/images/planning-2.jpg',
                'caption' => 'Mengungkap rahasia pemasaran strategis untuk mendorong kesuksesan bisnis Anda',
                'category' => 'planning-3'
            ],
            [
                'title' => 'Research Insights: Unlocking Knowledge for Innovation',
                'img' => 'assets/images/research-1.jpg',
                'caption' => 'Menggali wawasan penelitian yang membuka jalan untuk inovasi yang mengubah dunia.',
                'category' => 'research-3'
            ],
            [
                'title' => 'Mastering the Art of Research: Empowering Evidence-Based Decision Making',
                'img' => 'assets/images/research-2.jpg',
                'caption' => 'Menguasai seni penelitian untuk memberdayakan pengambilan keputusan berbasis bukti.',
                'category' => 'research-3'
            ],
        ];
        // return view('admin.produk', compact('produks'));
    }

    public function user(){
        $users = [
            [
                'nama' => 'Irene',
                'role' => 'Admin'
            ],
            [
                'nama' => 'Wendy',
                'role' => 'Staff'
            ],
            [
                'nama' => 'Joy',
                'role' => 'Admin'
            ],
            [
                'nama' => 'Yeri',
                'role' => 'Staff'
            ]
        ];
        // return view('admin.user', compact('users'));
    }
}
