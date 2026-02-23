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
