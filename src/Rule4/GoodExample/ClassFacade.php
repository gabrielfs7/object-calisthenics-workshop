<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule4\GoodExample;

class ClassFacade
{
    private const MINIMAL_APPROVE_GRADE = 7;
    private const MINIMAL_RECOVERY_GRADE = 5;

    /** @var object */
    private $notificationService;

    /** @var object */
    private $examScheduler;

    public function processApprovedGrades(GradeCollection $grades): void
    {
        $this->notificationService->notifyStudents($grades->getGradesBetween(self::MINIMAL_APPROVE_GRADE, 10));
    }

    public function processReprovedGrades(GradeCollection $grades): void
    {
        $reproveGrade = self::MINIMAL_APPROVE_GRADE - 1;

        $this->examScheduler->excheduleRecoveryExam($grades->getGradesBetween(self::MINIMAL_RECOVERY_GRADE, $reproveGrade));
        $this->notificationService->notifyStudents($grades->getGradesBetween(0, $reproveGrade));
    }
}
