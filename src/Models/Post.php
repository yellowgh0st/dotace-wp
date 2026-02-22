<?php
namespace App\Models;

class Post
{
    protected int $id;
    protected \WP_Post $data;

    public function __construct(int $id)
    {
        $this->id = $id;
        $this->data = get_post($id);

        if (!$this->data) {
            throw new \Exception("Post with ID {$id} not found.");
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

    /** Static helpers **/

    /**
     * Get multiple posts
     * @param int $count
     * @param string $post_type
     * @return Post[]
     */
    public static function all(int $count = 10, string $post_type = 'post'): array
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

        return $posts;
    }

    /**
     * Get posts by category slug
     */
    public static function byCategory(string $slug, int $count = 10): array
    {
        $query = new \WP_Query([
            'category_name' => $slug,
            'posts_per_page' => $count,
            'post_status' => 'publish',
        ]);

        $posts = [];
        foreach ($query->posts as $p) {
            $posts[] = new self($p->ID);
        }

        return $posts;
    }
}
