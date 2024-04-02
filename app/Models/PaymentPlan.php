<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentPlan extends Model
{
    protected $fillable = ['ticket_id', 'plan_name', 'initial_payment', 'installments', 'installment_amount'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
