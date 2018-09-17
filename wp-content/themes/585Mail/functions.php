<?php


if( ! function_exists( 'is_subpage' ) ) {
    /**
     * Функция проверяет текущий объект, является ли он подстраницей
     * @param integer $post_parent_id ИД родительской страницы, если необходимо
     *     boolean Или false, если данный атрибут необходимо пропустить
     * @param WP_Post $post Объект записи, если необходимо
     * null Или null, если необходимо опустить параметр
     * @return boolean Возвращает результат проверки
     * integer Или ИД родителя, если $post_parent_id = false
     */
    function is_subpage( $post_parent_id = false, $post = null ) {
        if( is_null( $post ) ) global $post;
        if( ! is_page() ) return false;

        if( $post->post_parent ) {
            if( $post_parent_id ) {
                if( $post->post_parent != $post_parent_id && $post->post_parent > 0 ) {
                    return is_subpage( $post_parent_id, get_post( $post->post_parent ) );
                } else return true;
            } else return $post->post_parent;
        } else {
            return false;
        }
    }
}


/*
 * Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
 */
function true_duplicate_post_as_draft(){
    global $wpdb;
    if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'true_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
        wp_die('Нечего дублировать!');
    }
 
    /*
     * получаем ID оригинального поста
     */
    $post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);
    /*
     * а затем и все его данные
     */
    $post = get_post( $post_id );
 
    /*
     * если вы не хотите, чтобы текущий автор был автором нового поста
     * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
     * при замене этих строк автор будет копироваться из оригинального поста
     */
    $current_user = wp_get_current_user();
    $new_post_author = $current_user->ID;
 
    /*
     * если пост существует, создаем его дубликат
     */
    if (isset( $post ) && $post != null) {
 
        /*
         * массив данных нового поста
         */
        $args = array(
            'comment_status' => $post->comment_status,
            'ping_status'    => $post->ping_status,
            'post_author'    => $new_post_author,
            'post_content'   => $post->post_content,
            'post_excerpt'   => $post->post_excerpt,
            'post_name'      => $post->post_name,
            'post_parent'    => $post->post_parent,
            'post_password'  => $post->post_password,
            'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
            'post_title'     => $post->post_title,
            'post_type'      => $post->post_type,
            'to_ping'        => $post->to_ping,
            'menu_order'     => $post->menu_order
        );
 
        /*
         * создаем пост при помощи функции wp_insert_post()
         */
        $new_post_id = wp_insert_post( $args );
 
        /*
         * присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
         */
        $taxonomies = get_object_taxonomies($post->post_type); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
        foreach ($taxonomies as $taxonomy) {
            $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
            wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
        }
 
        /*
         * дублируем все произвольные поля
         */
        $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
        if (count($post_meta_infos)!=0) {
            $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
            foreach ($post_meta_infos as $meta_info) {
                $meta_key = $meta_info->meta_key;
                $meta_value = addslashes($meta_info->meta_value);
                $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
            }
            $sql_query.= implode(" UNION ALL ", $sql_query_sel);
            $wpdb->query($sql_query);
        }
 
 
        /*
         * и наконец, перенаправляем пользователя на страницу редактирования нового поста
         */
        wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
        exit;
    } else {
        wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
    }
}
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
/*
 * Добавляем ссылку дублирования поста для post_row_actions
 */
function true_duplicate_post_link( $actions, $post ) {
    if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="admin.php?action=true_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Дублировать этот пост" rel="permalink">Дублировать</a>';
    }
    return $actions;
}
 
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );





function flex() {


//Определяет тип шапки
if( get_field('type-header') == 'new' ):
    get_template_part('tamplates/header-mail--new');
elseif ( get_field('type-header') == 'old'  ):
    get_template_part('tamplates/header-mail');
endif;




// check if the flexible content field has rows of data
if( have_rows('flex') ):

    // loop through the rows of data
    while ( have_rows('flex') ) : the_row();

        // check current row layout
        if( get_row_layout() == 'flex-banner' ):
            get_template_part('tamplates/banner-simple');
        elseif( get_row_layout() == 'flex-product' ):
            get_template_part('tamplates/product-cards');
        elseif( get_row_layout() == 'flex-offset' ):
            get_template_part('tamplates/offset');
        elseif( get_row_layout() == 'flex-banner-no-link' ):
            get_template_part('tamplates/banner-no-link');
        elseif( get_row_layout() == 'flex-banner-vertical' ):
            get_template_part('tamplates/banner-vertical');
        endif;

    endwhile;

else :

    // no layouts found

endif;

//Определяет тип подвала
get_template_part('tamplates/banner-club');
if( get_field('type-header') == 'new' ):
    get_template_part('tamplates/footer-mail--new');
elseif ( get_field('type-header') == 'old'  ):
    get_template_part('tamplates/footer-mail');
endif;

}










