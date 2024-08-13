<?php

namespace Dipesh79\LaravelSeoManager\Models\Contracts;

/**
 * Interface SeoUser
 *
 * Defines the contract for a user who can interact with the SEO manager.
 */
interface SeoUser
{
    /**
     * Determine if the user can access the SEO manager.
     *
     * @return bool True if the user can access the SEO manager, false otherwise.
     */
    public function canAccessSeoManager(): bool;

    /**
     * Determine if the user can create SEO tags.
     *
     * @return bool True if the user can create SEO tags, false otherwise.
     */
    public function canCreateSeo(): bool;

    /**
     * Determine if the user can update SEO tags.
     *
     * @return bool True if the user can update SEO tags, false otherwise.
     */
    public function canUpdateSeo(): bool;

    /**
     * Determine if the user can delete SEO tags.
     *
     * @return bool True if the user can delete SEO tags, false otherwise.
     */
    public function canDeleteSeo(): bool;

    /**
     * Determine if the user can view SEO tags.
     *
     * @return bool True if the user can view SEO tags, false otherwise.
     */
    public function canViewSeo(): bool;
}
