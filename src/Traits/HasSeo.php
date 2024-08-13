<?php

namespace Dipesh79\LaravelSeoManager\Traits;

use Dipesh79\LaravelSeoManager\Models\Seo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * Trait HasSeo
 *
 * Provides functionality to manage SEO tags for models.
 */
trait HasSeo
{
    /**
     * Create or update the SEO tags for the model.
     *
     * @param array $data The data to create or update the SEO tags.
     * @return static The current instance of the model.
     */
    public function createOrUpdateSeo(array $data): static
    {
        $seoTags = $this->seo()->first();

        if ($seoTags) {
            $seoTags->update($data);
        } else {
            $this->seo()->create($data);
        }
        return $this;
    }

    /**
     * Get the SEO tags for the model for dynamic URLs.
     *
     * @return MorphOne The morph one relationship for the SEO tags.
     */
    public function seo(): MorphOne
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}
