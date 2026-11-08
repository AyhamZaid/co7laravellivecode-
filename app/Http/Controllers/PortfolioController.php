<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        $developer = [
            'name' => 'Ahmad',
            'job_title' => 'Full-Stack Developer',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap']
        ];
        return view('portfolio.home', compact('developer'));
    }

    public function projects()
    {
        // Mock data replacing a database query
        $projects = [
            ['title' => 'Task Management System', 'description' => 'A daily task tracker app', 'status' => 'Completed'],
            ['title' => 'E-Commerce Store', 'description' => 'Full online shopping platform', 'status' => 'In Progress'],
        ];
        return view('portfolio.projects', compact('projects'));
    }

   
}