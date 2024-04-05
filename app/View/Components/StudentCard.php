<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentCard extends Component
{
    private $student;

    /**
     * Create a new component instance.
     */
    public function __construct($student)
    {
        $this->student = $student;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $student = $this->student;
        return view('components.student-card', compact('student'));
    }
}
