<?php

namespace Dipesh79\LaravelSeoManager\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class IndexRequest
 *
 * Handles the validation and authorization for accessing the SEO manager.
 */
class IndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool True if the user is authorized, false otherwise.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->canAccessSeoManager();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string> The validation rules.
     */
    public function rules(): array
    {
        return [
            // No validation rules are required for accessing the SEO manager.
        ];
    }
}
