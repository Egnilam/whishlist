<?php

declare(strict_types=1);

namespace Domain\Wishlist\Repository\Command;

use Domain\Wishlist\Domain\Model\Wishlist;
use Domain\Wishlist\Domain\ValueObject\WishlistId;

interface WishlistCommandRepositoryInterface
{
    public function create(Wishlist $wishlist): WishlistId;
}
