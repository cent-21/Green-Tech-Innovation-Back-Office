<?php

namespace App\Service;

use App\Models\Notification;
use App\Models\Patner;
use App\Models\Project;
use App\Models\ProjectPatner;
use App\Models\ProjectStep;
use App\Models\Sector;
use App\Models\SectorPersonnal;
use Illuminate\Support\Facades\DB;

class Functions {
    public static function checkUsernameExist($memberUsername) {
        return (DB::table('members')->where("memberUsername", strtolower($memberUsername))->where("isApprove", 1)->get()->count() > 0) ? true : false;
    }

    public static function toInt($var) {
        return intval(str_replace("\"", "", $var));
    }

    public static function removeDotFromEmail($email) {
        $newEmail = str_replace(".", "", explode("@", $email)[0]);
        $newEmail = $newEmail.'@'.explode("@", $email)[1];
        $newEmail = str_replace("+", "", explode("@", $newEmail)[0]);
        return $newEmail.'@'.explode("@", $email)[1];
    }

    
    public function getDepartmentName($departmentId) {
        return DB::table('departments')->where('departmentId', $departmentId)->first()->departmentName;
    }

    public function getProjectByDepartmentSector($departmentId, $sectorId) {
        return Project::where('status', 1)->where('projectDepartmentId', $departmentId)->where('sectorId', $sectorId)->get();
    }

    public function getProjectByDepartmentPatner($departmentId, $patnerId) {
        return Project::where('status', 1)->where('projectDepartmentId', $departmentId)->whereIn('projectId', ProjectPatner::where('status', 1)->where('patnerId', $patnerId)->select('projectId'))->get();
    }

    public function getProjectByDepartment($departmentId, $sectorId) {
        return Project::where('status', 1)->where('projectDepartmentId', $departmentId)->where('sectorId', $sectorId)->get();
    }

    public function getSectorPersonnal($sectorId) {
        return SectorPersonnal::where('status', 1)->where('sectorId', $sectorId)->orderBy('created_at', 'desc')->first();
    }

    public function getPatner($patnerId) {
        return Patner::where('status', 1)->where('patnerId', $patnerId)->first();
    }

    public function getProject($projectId) {
        return Project::where('status', 1)->where('projectId', $projectId)->first();
    }

    public function projectExist($projectId) {
        return Project::where('status', 1)->where('projectId', $projectId)->first() != null ? true : false;
    }

    public function sectorExist($sectorId) {
        return Sector::where('status', 1)->where('sectorId', $sectorId)->first() != null ? true : false;
    }

    public function patnerExist($patnerId) {
        return Patner::where('status', 1)->where('patnerId', $patnerId)->first() != null ? true : false;
    }

    public function projectStepExist($project_stepId) {
        return ProjectStep::where('status', 1)->where('project_stepId', $project_stepId)->first() != null ? true : false;
    }

    public function cutString($string, $lenght) {
        return (strlen($string) > $lenght) ? substr($string, 0, $lenght)."..." : substr($string, 0, $lenght);
    }

    public function getPercentProject($projectId) {
        $item = ProjectStep::where('status', 1)->where('projectId', $projectId);
        $total = ($item->count() == 0) ? 1 : $item->count();
        return floor(($item->where('isFinish', 1)->count() / $total)*100);
    }

    public function getProjectAmountUse($projectId) {
        $amount = ProjectStep::where('status', 1)->where('projectId', $projectId)->where('isFinish', 1)->sum('stepCost');
        return $amount;
    }
}

