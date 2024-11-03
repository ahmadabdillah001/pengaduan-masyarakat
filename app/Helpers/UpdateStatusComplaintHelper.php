<?php

namespace App\Helpers;

use App\Models\Complaint;

class UpdateStatusComplaintHelper
{
    public static function updateStatus($complaint_id, $status = 'proses')
    {
        $complaint = Complaint::find($complaint_id);

        if($complaint) {
            $complaint->update([
                'status'=>$status
            ]);
        }
    }
}