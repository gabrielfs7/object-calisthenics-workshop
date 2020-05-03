<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule4\BadExample;

use Gsoares\ObjectCalisthenics\Rule4\Grade;

class ClassFacade
{
    private const MINIMAL_APPROVE_GRADE = 7;
    private const MINIMAL_RECOVERY_GRADE = 5;

    /** @var object */
    private $notificationService;

    /** @var object */
    private $examScheduler;

    /**
     * @param Grade[] $grades
     */
    public function processApprovedGrades(array $grades): void
    {
        $out = [];

        foreach ($grades as $grade) {
            if ($grade >= self::MINIMAL_APPROVE_GRADE) {
                $out[] = $grade;
            }
        }

        $this->notificationService->notifyStudents($grades);
    }

    /**
     * @param Grade[] $grades
     */
    public function processReprovedGrades(array $grades): void
    {
        $all = [];
        $reproved = [];
        $recoverable = [];

        foreach ($grades as $grade) {
            if ($grade < self::MINIMAL_RECOVERY_GRADE) {
                $reproved[] = $grade;
                $all[] = $grade;
            }

            if ($grade >= self::MINIMAL_RECOVERY_GRADE && $grade < self::MINIMAL_APPROVE_GRADE) {
                $recoverable[] = $grade;
                $all[] = $grade;
            }
        }

        $this->examScheduler->excheduleRecoveryExam($recoverable);
        $this->notificationService->notifyStudents($grades);
    }
}
