<?php

namespace vildanbina\LaravelBlocker\App\Rules;

use Illuminate\Contracts\Validation\Rule;
use vildanbina\LaravelBlocker\App\Models\BlockedType;

class UniqueBlockerItemValueEmail implements Rule
{
    private $typeId;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($this->typeId) {
            $type = BlockedType::find($this->typeId);
            return $type->slug == 'email' || $type->slug == 'user';
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('laravelblocker::laravelblocker.validation.email');
    }
}
