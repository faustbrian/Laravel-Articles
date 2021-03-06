<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Articles.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Articles;

use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasArticles
{
    public function articles(): HasMany
    {
        return $this->hasMany(config('articles.article_model'));
    }
}
