<?php
namespace App\Models;

class PostModel
{
    protected int $id;
    protected \WP_Post $data;

    public function __construct(int|\WP_Post $post)
    {
        if ($post instanceof \WP_Post) {
            $this->data = $post;
            $this->id = $post->ID;
        } else {
            $this->data = get_post($post);
            $this->id = $post;
        }

        if (!$this->data) {
            throw new \Exception("Post not found.");
        }
    }

    /** Basic properties **/
    public function title(): string
    {
        return $this->data->post_title ?? '';
    }

    public function content(): string
    {
        return apply_filters('the_content', $this->data->post_content ?? '');
    }

    public function excerpt(): string
    {
        return apply_filters('the_excerpt', $this->data->post_excerpt ?? '');
    }

    public function url(): string
    {
        return get_permalink($this->id);
    }

    /** Featured image **/
    public function featuredImage(string $size = 'full'): ?string
    {
        $img = get_the_post_thumbnail_url($this->id, $size);
        return $img ?: null;
    }

    /** Categories **/
    public function categories(): array
    {
        return wp_get_post_terms($this->id, 'category');
    }

    /** Tags **/
    public function tags(): array
    {
        return wp_get_post_terms($this->id, 'post_tag');
    }

    /** Custom meta **/
    public function getMeta(string $key, bool $single = true)
    {
        return get_post_meta($this->id, $key, $single);
    }

    public function hasContent(): bool
    {
        $content = apply_filters('the_content', $this->data->post_content ?? '');
        return !empty(trim(wp_strip_all_tags($content)));
    }

    /** ACF field **/
    public function getAcfField(string $key)
    {
        if (!function_exists('get_field')) {
            return null; // ACF not active safeguard
        }

        return get_field($key, $this->id);
    }

    public function color(): ?string
    {
        return $this->getAcfField('color');
    }

    public function icon(): ?string
    {
        return $this->getAcfField('icon');
    }

    private const ALLOWED_COLORS = [
        'red' => 'bg-red-100',
        'orange' => 'bg-orange-100',
        'amber' => 'bg-amber-100',
        'yellow' => 'bg-yellow-100',
        'lime' => 'bg-lime-100',
        'green' => 'bg-green-100',
        'emerald' => 'bg-emerald-100',
        'teal' => 'bg-teal-100',
        'cyan' => 'bg-cyan-100',
        'sky' => 'bg-sky-100',
        'blue' => 'bg-blue-100',
        'indigo' => 'bg-indigo-100',
        'violet' => 'bg-violet-100',
        'purple' => 'bg-purple-100',
        'fuchsia' => 'bg-fuchsia-100',
        'pink' => 'bg-pink-100',
        'rose' => 'bg-rose-100',
        'slate' => 'bg-slate-100',
        'gray' => 'bg-gray-100',
        'zinc' => 'bg-zinc-100',
        'neutral' => 'bg-neutral-100',
        'stone' => 'bg-stone-100',
        'taupe' => 'bg-taupe-100',
        'mauve' => 'bg-mauve-100',
        'mist' => 'bg-mist-100',
        'olive' => 'bg-olive-100',
    ];

    public function backgroundColorClass(): string
    {
        $color = strtolower($this->color() ?? '');

        return self::ALLOWED_COLORS[$color] ?? 'bg-green-100';
    }

    /** Static helpers **/

    /**
     * Get multiple posts
     * @param int $count
     * @param string $post_type
     * @return Post[]
     */
    public static function getAllPosts(int $count = 10, string $post_type = 'post'): array
    {
        $query = new \WP_Query([
            'posts_per_page' => $count,
            'post_status' => 'publish',
            'post_type' => $post_type,
        ]);

        $posts = [];
        foreach ($query->posts as $p) {
            $posts[] = new self($p->ID);
        }

        wp_reset_postdata();

        return $posts;
    }

    /**
     * Get posts by category slug
     */
    public static function getPostsByCategory(string $slug, int $limit = 10): array
    {
        $query = new \WP_Query([
            'post_type' => 'post',
            'posts_per_page' => $limit,
            'category_name' => $slug,
            'post_status' => 'publish',
        ]);

        $posts = [];

        foreach ($query->posts as $wpPost) {
            $posts[] = new self($wpPost); // pass object, no extra query
        }

        wp_reset_postdata();

        return $posts;
    }

}
