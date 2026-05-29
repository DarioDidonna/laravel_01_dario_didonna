<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $jobs = $this->jobs();

        $categories = [
            (object)['name' => 'Sviluppo Software', 'icon' => 'bi-code-slash', 'jobs_count' => 1420],
            (object)['name' => 'Design & Creatività', 'icon' => 'bi-palette', 'jobs_count' => 640],
            (object)['name' => 'Marketing & Digital', 'icon' => 'bi-graph-up-arrow', 'jobs_count' => 910],
            (object)['name' => 'Sistemisti & Cloud', 'icon' => 'bi-cloud-check', 'jobs_count' => 350],
            (object)['name' => 'Data Science & AI', 'icon' => 'bi-cpu', 'jobs_count' => 210],
            (object)['name' => 'Sales & Account', 'icon' => 'bi-person-badge', 'jobs_count' => 580],
            (object)['name' => 'Risorse Umane', 'icon' => 'bi-people', 'jobs_count' => 120],
            (object)['name' => 'Customer Care', 'icon' => 'bi-headset', 'jobs_count' => 430],
        ];

        return view('homepage', compact('jobs', 'categories'));
    }

    public function findJob()
    {
        $jobs = $this->jobs();

        return view('find-job', compact('jobs'));
    }

    public function companies()
    {
        $companies = [
            (object)[
                'name' => 'Tech Solutions S.r.l.',
                'industry' => 'Software & Cloud',
                'bio' => 'Leader nello sviluppo di piattaforme digitali per PMI e grandi imprese.',
                'headquarters' => 'Milano',
                'open_jobs_count' => 12,
            ],
            (object)[
                'name' => 'Creative Agency',
                'industry' => 'Marketing & Design',
                'bio' => 'Agenzia creativa specializzata in UX, branding e campagne digitali ad alto impatto.',
                'headquarters' => 'Roma',
                'open_jobs_count' => 5,
            ],
            (object)[
                'name' => 'WebFlow Italia',
                'industry' => 'Web Development',
                'bio' => 'Soluzioni web avanzate per e-commerce e piattaforme SaaS innovative.',
                'headquarters' => 'Bologna',
                'open_jobs_count' => 7,
            ],
            (object)[
                'name' => 'Fintech Analytics',
                'industry' => 'Fintech',
                'bio' => 'Startup internazionale che trasforma i dati finanziari in opportunità di crescita.',
                'headquarters' => 'Verona',
                'open_jobs_count' => 4,
            ],
        ];

        return view('companies', compact('companies'));
    }

    private function jobs()
    {
        return [
            (object)[
                'title' => 'Laravel Backend Developer',
                'company_name' => 'Tech Solutions S.r.l.',
                'contract_type' => 'Full-time',
                'location' => 'Milano',
                'salary' => '€35k - €42k',
                'is_remote' => true
            ],
            (object)[
                'title' => 'Frontend Specialist (Bootstrap/Vue)',
                'company_name' => 'Creative Agency',
                'contract_type' => 'Full-time',
                'location' => 'Roma',
                'salary' => '€30k - €35k',
                'is_remote' => false
            ],
            (object)[
                'title' => 'UI/UX Designer',
                'company_name' => 'Startup Hub',
                'contract_type' => 'Part-time',
                'location' => 'Torino',
                'salary' => null,
                'is_remote' => true
            ],
            (object)[
                'title' => 'Full Stack Engineer (PHP & Livewire)',
                'company_name' => 'WebFlow Italia',
                'contract_type' => 'Full-time',
                'location' => 'Bologna',
                'salary' => '€40k - €48k',
                'is_remote' => true
            ],
            (object)[
                'title' => 'Junior PHP Developer',
                'company_name' => 'NextGen Digital',
                'contract_type' => 'Stage / Intern',
                'location' => 'Firenze',
                'salary' => '€18k - €22k',
                'is_remote' => false
            ],
            (object)[
                'title' => 'DevOps & Cloud Engineer',
                'company_name' => 'Enterprise Cloud Scale',
                'contract_type' => 'Full-time',
                'location' => 'Milano',
                'salary' => '€50k - €60k',
                'is_remote' => true
            ],
            (object)[
                'title' => 'Mobile App Developer (Flutter)',
                'company_name' => 'AppForge Studio',
                'contract_type' => 'Full-time',
                'location' => 'Napoli',
                'salary' => '€32k - €38k',
                'is_remote' => true
            ],
            (object)[
                'title' => 'Data Analyst',
                'company_name' => 'Fintech Analytics',
                'contract_type' => 'Full-time',
                'location' => 'Verona',
                'salary' => '€38k - €44k',
                'is_remote' => false
            ],
            (object)[
                'title' => 'SEO & Digital Marketing Manager',
                'company_name' => 'Growth Media',
                'contract_type' => 'Part-time',
                'location' => 'Palermo',
                'salary' => null,
                'is_remote' => false
            ]
        ];
    }
}
