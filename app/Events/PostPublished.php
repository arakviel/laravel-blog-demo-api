<?php

namespace App\Events;

use App\Models\Post;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PostPublished
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public readonly Post $post,
        public readonly string $email,
    ) {
        //
    }
}
