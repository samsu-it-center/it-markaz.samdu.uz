<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NormativeDocumentFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'normative_document_id',
        'file',
        'description',
    ];

    public function normativeDocument()
    {
        return $this->belongsTo(NormativeDocument::class);
    }

}
