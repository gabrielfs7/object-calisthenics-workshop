<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule4\GoodExample;

use Gsoares\ObjectCalisthenics\Rule4\Grade;

class GradeCollection
{
    /** @var Grade[] */
    private $grades;

    public function __construct(Grade ...$grades)
    {
        $this->grades = $grades;
    }

    /**
     * @param int $fromGrade
     * @param int $toGrade
     *
     * @return Grade[]
     */
    public function getGradesBetween(int $fromGrade, int $toGrade): array
    {
        return array_filter(
            $this->grades,
            function (Grade $grade) use ($fromGrade, $toGrade) {
                return $grade->getGrade() >= $fromGrade && $grade->getGrade() <= $toGrade;
            }
        );
    }
}
