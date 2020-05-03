<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule4;

class Grade
{
    /** @var int */
    private $grade;

    /** @var int */
    private $studentId;

    public function __construct(int $grade, int $studentId)
    {
        $this->grade = $grade;
        $this->studentId = $studentId;
    }

    public function getGrade(): int
    {
        return $this->grade;
    }

    public function getStudentId(): int
    {
        return $this->studentId;
    }
}
