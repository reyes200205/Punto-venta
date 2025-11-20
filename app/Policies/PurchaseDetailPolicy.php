<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\PurchaseDetail;
use Illuminate\Auth\Access\HandlesAuthorization;

class PurchaseDetailPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:PurchaseDetail');
    }

    public function view(AuthUser $authUser, PurchaseDetail $purchaseDetail): bool
    {
        return $authUser->can('View:PurchaseDetail');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:PurchaseDetail');
    }

    public function update(AuthUser $authUser, PurchaseDetail $purchaseDetail): bool
    {
        return $authUser->can('Update:PurchaseDetail');
    }

    public function delete(AuthUser $authUser, PurchaseDetail $purchaseDetail): bool
    {
        return $authUser->can('Delete:PurchaseDetail');
    }

    public function restore(AuthUser $authUser, PurchaseDetail $purchaseDetail): bool
    {
        return $authUser->can('Restore:PurchaseDetail');
    }

    public function forceDelete(AuthUser $authUser, PurchaseDetail $purchaseDetail): bool
    {
        return $authUser->can('ForceDelete:PurchaseDetail');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:PurchaseDetail');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:PurchaseDetail');
    }

    public function replicate(AuthUser $authUser, PurchaseDetail $purchaseDetail): bool
    {
        return $authUser->can('Replicate:PurchaseDetail');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:PurchaseDetail');
    }

}