<?php

namespace Dipesh79\LaravelSeoManager\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateRequest
 *
 * Handles the validation and authorization for updating SEO tags.
 */
class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool True if the user is authorized, false otherwise.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->canUpdateSeo();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string> The validation rules.
     */
    public function rules(): array
    {
        return [
            'uri' => ['required', 'unique:seo_tags,uri,' . request()->route()->parameter('id')],
            'title' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'keywords' => ['nullable', 'string'],
            'robots' => ['nullable', 'string'],
            'og_title' => ['nullable', 'string'],
            'og_description' => ['nullable', 'string'],
            'og_url' => ['nullable', 'url'],
            'og_image' => ['nullable', 'image'],
            'twitter_card' => ['nullable', 'string'],
            'twitter_title' => ['nullable', 'string'],
            'twitter_description' => ['nullable', 'string'],
            'twitter_image' => ['nullable', 'image'],
            'schema_type' => ['nullable', 'string'],
            'schema_name' => ['nullable', 'string'],
            'schema_description' => ['nullable', 'string'],
            'schema_url' => ['nullable', 'url'],
            'type' => ['required', 'string', 'in:static,dynamic'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string> The error messages.
     */
    public function messages(): array
    {
        return [
            'uri.required' => 'URI is required',
            'uri.unique' => 'URI is already taken',
            'type.required' => 'Type is required',
            'type.in' => 'Type must be static or dynamic',
        ];
    }
}
